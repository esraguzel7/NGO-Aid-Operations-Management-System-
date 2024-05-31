<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationVolunteer extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'detail' => 'json',
        ];
    }

    /**
     * operation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function operation()
    {
        return $this->hasOne(Operation::class, 'id', 'operation');
    }
    
    /**
     * volunteer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function volunteer()
    {
        return $this->hasOne(User::class, 'id', 'volunteer');
    }
}
