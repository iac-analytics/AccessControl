<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AccessModel;
use Gate;
use Auth;

class AccessController extends Controller
{
    public static function control($function_name, $class_name){
        $user_id = Auth::user()->id;
        $user_group_id = Auth::user()->group_id;
        $group_access_param = AccessModel::getGroupParam($user_group_id, $class_name);
        $binary_access_param = str_pad(base_convert($group_access_param, 10, 2), 2, '0', STR_PAD_LEFT);
        $function_position = AccessModel::getFunctionPosition($class_name, $function_name);
        if(Gate::denies('access-control', [$function_position, $binary_access_param])){
            abort(403);
        }
    }

}
