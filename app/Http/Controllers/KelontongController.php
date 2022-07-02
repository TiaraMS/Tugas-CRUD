<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelontong;

class KelontongController extends Controller
{
    public function index(){
        $kelontong = Kelontong::all();
        return view ('kelontong.index', compact(['kelontong']));
    }
    public function create()
    {
        return view('kelontong.create');
    }
    public function store(Request $request)
    {
        Kelontong::create($request->except(['_token','submit']));
        return redirect('/kelontong');
    }
    public function edit($id)
    {
        return view('kelontong.edit');
}
