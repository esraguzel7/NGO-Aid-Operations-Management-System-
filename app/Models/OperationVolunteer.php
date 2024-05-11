<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationVolunteer extends Model
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
     * volunteer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function volunteer()
    {
        return $this->hasOne(User::class);
    }
}
