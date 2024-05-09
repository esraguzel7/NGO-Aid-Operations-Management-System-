<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $casts = [
        'request_date' => 'datetime:Y-m-d',
    ];
    
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
    public function region()
    {
        return $this->hasOne(Region::class);
    }
}
