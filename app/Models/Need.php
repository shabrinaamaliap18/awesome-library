<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','gambar','judul','penulis','penerbit','tahun', 'sinopsis'];


public function user()
{
      return $this->belongsTo('App\Models\User','user_id', 'id');
}

}