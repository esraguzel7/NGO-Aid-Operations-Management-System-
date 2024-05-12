<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    
    /**
     * user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->hasMany(User::class, 'region_tb_support');
    }

    /**
     * operation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function operation()
    {
        return $this->hasMany(Operation::class);
    }
    
    /**
     * indigent_people
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indigent_people()
    {
        return $this->hasMany(IndigentPeoples::class);
    }
}
