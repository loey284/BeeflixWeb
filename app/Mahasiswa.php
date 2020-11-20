<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function mata_kuliahs()
    {
        return $this->belongsToMany(MataKuliah::class);
    }
}
