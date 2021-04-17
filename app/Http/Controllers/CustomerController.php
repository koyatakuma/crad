<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pref;
use App\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        $prefs = Pref::all();
        return view('index', ['customers' => $customers], ['prefs' => $prefs]);
    }

    //検索処理
    public function search(Request $request){
        return view('index');
    }

    public function create(){
        $prefs = Pref::all();
        return view('create',['prefs' => $prefs]);
    }

    public function detail(Request $request){
        return view('detail');
    }

    public function edit(Request $request){
        return view('edit');
    }

//登録処理
    public function store(Request $request) {
        return redirect()->route('index');
    }

//更新処理
    public function update(Request $request){
        return redirect()->route('index');
    }

//削除処理
    public function delete(Request $request){
        return redirect()->route('index');
    }
}
