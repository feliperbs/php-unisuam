<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    use HasFactory;

    public function setDescriptionAttribute($value){
        $this->attributes['description']  = strtoupper($value);
    }
}
