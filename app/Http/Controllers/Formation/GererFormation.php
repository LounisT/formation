<?php

namespace App\Http\Controllers\Formation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GererFormation extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('formation.index');
    }
}
