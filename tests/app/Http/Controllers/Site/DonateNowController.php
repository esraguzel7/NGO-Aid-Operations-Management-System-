<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\DonateNowRequest;
use Illuminate\Http\Request;

class DonateNowController extends Controller
{
    public function show(string $id)
    {
        $operation = \App\Models\Operation::find($id);

        if (!$operation)
            abort(404);

        return view('site.donatenow', [
            'operation' => $operation
        ]);
    }

    function post(string $id, DonateNowRequest $request): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    {
        $validated = $request->validated();

        $donate_amount = $request->get('donate_amount');
        $transportation = $request->get('transportation', false);

        $operation = \App\Models\Operation::find($id);
        if (!$operation)
            abort(404);

        $volunteer = new \App\Models\OperationVolunteer();
        $volunteer->operation = $operation->id;
        $volunteer->volunteer = \Auth::user()->id;
        $volunteer->detail = [
            'donate_amount' => $donate_amount,
            'transportation' => $transportation,
        ];
        $volunteer->save();

        if($operation->operation_type != 'cash'){
            $operation->incoming_stock += $donate_amount;
        }else{
            $operation->balance_used += $donate_amount;
        }
        $operation->update();

        return redirect()->route('site.donatenow.show', [
            'id' => $id
        ])->withErrors("Thank you for your donation", "donate_success");
    }
}
