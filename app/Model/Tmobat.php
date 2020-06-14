<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tmobat extends Model
{
    protected $table = 'tmobat';

    public function Tgejala(){
        return $this->belongsTo(Trsatuan::class);
    }

     public function Trsatuan(){
         return $this->hasMany(Trsatuan::class);
     }
}
