<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationRequest extends Model
{
    use HasFactory;
    
    /**
     * operation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function operation()
    {
        return $this->hasOne(Operation::class);
    }
    
    /**
     * request
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function request()
    {
        return $this->hasOne(RequestForHelp::class);
    }
}
