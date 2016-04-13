<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TestModel;
use Auth;
use Hash;
use DB;

class TestControllers extends Controller
{
    public function test()
    {
        return TestModel::test();
    }
}