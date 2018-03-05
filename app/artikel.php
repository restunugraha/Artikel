<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $fillable=['judul_artikel','slug','nama_kategori','kutipan','foto','isi'];
    protected $table= 'artikel';
}
