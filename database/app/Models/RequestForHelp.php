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
    public function indigent_people()
    {
        return $this->hasOne(IndigentPeoples::class);
    }

    /**
     * operation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operation()
    {
        return $this->belongsTo(Operation::class, 'operation_requests', 'request', 'operation');
    }
    
    /**
     * support_type
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function support_type()
    {
        return $this->hasOne(SupportTypes::class);
    }
}
