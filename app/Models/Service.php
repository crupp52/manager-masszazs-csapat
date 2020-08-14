<?php

namespace App\Models;

use App\ServicePhoto;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function photos()
    {
        return $this->hasMany(ServicePhoto::class);
    }
}
