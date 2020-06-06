<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provinsi extends Model
{   
    use SoftDeletes;
    protected $guarded = [];

    public function pasiens()
    {
       return $this->hasMany(Pasien::class,'provinsi_id');
    }
}