<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','nama','testimoni'];


public function user()
{
      return $this->belongsTo('App\Models\User','user_id', 'id');
}

}