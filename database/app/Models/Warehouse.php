<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    
    /**
     * storage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function storage()
    {
        return $this->hasMany(Storage::class);
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
}
