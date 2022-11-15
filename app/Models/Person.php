<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $guarded = ['uuid'];

    public function scopeFilter($query)
    {
        if(request('search')){
            return $query->where('nama', 'like', '%'. request('search') . '%');
        }
    }
}
