<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    public function index(){
        return view('register');

    }
    public function store(Request $request ){

        $information= new Information();
        $information->fname=$request->fname;
        $information->lname=$request->lname;
        $information->mobile=$request->contact;
        $information->country=$request->country;

        $information->save();
        return view('register');
    }
    public function remove(Request $request){

        db::table('information')->delete($request->id);
        return view('dashboard',['info'=>Information::all()]);;

    }
    public function edit(Request $request){

        db::table('information')->where($request->id);
        return view('register',['info'=>Information::all()]);;

    }
}
