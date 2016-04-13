<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Auth;

class TestModel extends Model
{
    public static function test(){
        DB::table('SERVICEREQUEST')->where('ID', '84540')
            ->update(['HOTLINEREGNUM' => '3333']);

    }
}