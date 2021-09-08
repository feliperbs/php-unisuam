<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recommendation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'cpf', 'phone', 'email'];

    public function status(){
        return $this->belongsTo(Status::class, "status_id");
    }
}
