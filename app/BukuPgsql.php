<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuPgsql extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'buku_postgre';

    protected $fillable = ['judul','penulis','tahun','penerbit'];
}
