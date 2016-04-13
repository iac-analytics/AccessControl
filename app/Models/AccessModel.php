<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Auth;

class AccessModel extends Model
{
    public static function getGroupParam($user_group_id, $class_name){
        $group_access_param = DB::table('group_name')->select($class_name)->where('id', $user_group_id)->first();
        return $group_access_param->$class_name;
    }

    public static function getFunctionPosition($class_name, $function_name){
        $function_position = DB::table('function_number')->select('position')
            ->where('class_name', $class_name)
            ->where('function_name', $function_name)
            ->first();
        return $function_position->position;
    }


}