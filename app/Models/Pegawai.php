<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //

    protected $table = 'master.ms_pegawai';

    protected $fillable = [
      'pegawai_nip',
      'pegawai_nama',
      'pegawai_gaji',
      'pegawai_umur',
      'pegawai_profile'
    ];
}
