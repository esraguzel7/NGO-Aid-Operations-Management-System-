<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $casts = [
        'planned_date' => 'datetime:Y-m-d',
    ];

    public function op_manager() {
        return $this->hasOne(\App\Models\User::class, 'id', 'manager');
    }
    
    /**
     * volunteers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function volunteers()
    {
        return $this->belongsToMany(User::class, 'operation_volunteers', 'operation', 'volunteer');
    }
    
    /**
     * requests
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function requests()
    {
        return $this->belongsToMany(RequestForHelp::class, 'operation_requests', 'operation', 'request');
    }
    
    /**
     * warehouse
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function warehouse()
    {
        return $this->hasOne(Warehouse::class);
    }
    
    /**
     * region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function op_region()
    {
        return $this->hasOne(Region::class, 'id', 'region');
    }
}
