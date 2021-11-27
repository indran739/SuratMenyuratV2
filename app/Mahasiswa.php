<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    public $timestamps = [ "created_at" ];

    public function alldata() {
        return DB::table('surats')->get();
    }

    public function detileData($idSurat) {
        return DB::table('surats')->where('id_surat', $idSurat)->first();
    }

    public function addData($data){
        DB::table('surats')->insert($data);
    }

}
