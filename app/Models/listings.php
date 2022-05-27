<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listings extends Model
{
    use HasFactory;

    public static function scopeFilter($query ,array $filter){

        if($filter ?? false){

            return $query->where('car' , 'like' , '%' . request('car') . '%');
        }

    }
}
