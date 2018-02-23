<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Site;

class SitesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $sites = Site::all();

        return view('sites.index', [
            'sites' => $sites
        ]);
    }

    public function add(){
        return view('sites.add');
    }

    public function save(Request $request){
        // dd($request->all());

        Site::create($request->all());
        // $site = new Site();
        // $site->title = $request->input('title');
        // $site->description = $request->input('description');
        // $site->save();
    }
}
