<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pref;

class CreateController extends Controller
{
    public function create(){
        $prefs = prefs::all();
        var_dump($prefs);
        //return View('create');
        }
}
