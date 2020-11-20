<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}
