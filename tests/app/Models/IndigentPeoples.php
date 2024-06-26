<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndigentPeoples extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'childrens_educational_status' => 'json',
            'employment_status' => 'json',
        ];
    }
    
    /**
     * requestsForHelp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requestsForHelp()
    {
        return $this->hasMany(RequestForHelp::class);
    }
    
    /**
     * region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function region()
    {
        return $this->hasMany(Region::class);
    }
}
