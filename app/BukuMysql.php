<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuMysql extends Model
{
    protected $connection = 'mysql';
    protected $table = 'buku_mysql';

    protected $fillable = ['judul','penulis','tahun'];
}
