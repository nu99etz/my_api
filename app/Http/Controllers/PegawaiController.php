<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    //

    public static function getAllPegawai($id = null) {

      if(empty($id)) {
        $all = Pegawai::all();
      } else if(!empty($id)) {
        $all = Pegawai::where('id',$id)->first();
      }

      return response()->json([
        'messages' => 'success',
        'data' => $all
      ]);

    }

    public static function addPegawai(Request $request) {

      $insert = Pegawai::create([
        'pegawai_nip' => $request->pegawai_nip,
        'pegawai_nama' => $request->pegawai_nama,
        'pegawai_gaji' => $request->pegawai_gaji,
        'pegawai_umur' => $request->pegawai_umur,
        'pegawai_profile' => $request->pegawai_profile
      ]);

      if($insert) {
        return response()->json([
          'messages' => 'success'
        ]);
      } else if(!$insert) {
        return response()->json([
          'messages' => 'failed'
        ]);
      }
    }

    public static function deletePegawai($id) {

      $pegawai_id = Pegawai::where('id',$id)->first();
      $delete = $pegawai_id->delete();

      if($delete) {
        return response()->json([
          'messages' => 'success'
        ]);
      } else if(!$delete) {
        return response()->json([
          'messages' => 'failed'
        ]);
      }
    }


}
