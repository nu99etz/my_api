<?php

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pegawai::create([
          'pegawai_nip' => '000999',
          'pegawai_nama' => 'Denis Aogo',
          'pegawai_gaji' => 900000,
          'pegawai_umur' => 57,
          'pegawai_profile' => 'TEST2'
        ]);
    }
}
