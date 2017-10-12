<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitRumah extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'unit_rumahs';
    protected $fillable = array(
        'kavling',
        'blok',
        'no_rumah',
        'harga_rumah',
        'luas_tanah',
        'luas_bangunan',
    );
}
