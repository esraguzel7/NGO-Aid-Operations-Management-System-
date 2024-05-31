<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForHelp extends Model
{
    use HasFactory;
    
    /**
     * indigent_people
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function get_family()
    {
        return $this->hasOne(IndigentPeoples::class, 'id', 'family');
    }

    /**
     * operation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation()
    {
        return $this->belongsTo(OperationRequest::class, 'id', 'operation', 'operation_requests');
    }
    
    /**
     * support_type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function support_type()
    {
        return $this->hasOne(SupportTypes::class, 'id', 'type_of_support');
    }
}
