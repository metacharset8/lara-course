<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name'];

    public function scopeNamesOnLetterP ($query){
        return $query->where('first_name', 'like', 'П%')->orWhere('last_name', 'like', 'П%');
    }

    public function scopeNamesOnLetter ($query, $letter){
        return $query
        ->where('first_name', 'like', $letter . '%')
        ->orWhere('last_name', 'like', $letter . '%');
    }
}
