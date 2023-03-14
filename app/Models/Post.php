<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setDescriptionAttribute($value)  
    {
        $id = self::max('id');
        $this->attributes['description'] = $value . ++$id;
    }
}
