<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tmhasilan extends Model
{
    //
    public function Tmgejala()
    {
        return $this->hasMany(Tmgejala::class);
    }
}
