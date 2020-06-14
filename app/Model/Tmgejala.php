<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tmgejala extends Model
{

    public function Tmobat()
    {
        $this->HasMany(Tmobat::class);
    }
}
