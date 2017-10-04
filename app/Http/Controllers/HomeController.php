<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DB = DB::select(DB::raw('
            SELECT
              table_schema                                     "nama", 
              Round(Sum(data_length + index_length) / 1024, 1) "ukuran" 
            FROM   information_schema.tables
            WHERE table_schema = "jtif" 
            GROUP  BY table_schema; 
            '));
        //dd($DB);
        return view('admin.home', [
            'db' => $DB
        ]);
    }
}
