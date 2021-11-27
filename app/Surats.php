<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Support\Facades\DB;

class Surats extends Model
{
    public function alldata(){
        return DB::table('surats')->get();
    }
}
