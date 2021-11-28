<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Hash;


use Redirect;
use Mail;

use Carbon\Carbon;
use File;
//use LRedis;

use SSH;
use ZipArchive;

use Illuminate\Support\Facades\Storage;

class ContactformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
         if ($request->ajax()) {     
               //dd($request->all());
          
          $data = Customer::query();
          
            return Datatables::of($data)
                  ->addColumn('action', function ($user) {
                   
                 return  "<a class='download1'  href='customers/$user->id/download' >$user->attached_sheet </a>";
              
              })               
         
            ->escapeColumns([])
             ->rawColumns(['action'])
                    ->make(true);      
        }

       
         
         return view('contactform.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $todaydate =   Carbon::now('Asia/Kolkata')->format('d/m/Y');

        $hr = array();

         for ($i=1; $i < 13; $i++) { 
             array_push($hr, $i);
         }

         $minute = array();

         for ($i=1; $i < 61; $i++) { 
             array_push($minute, $i);
         }
        return view('contactform.create'  ,  compact('todaydate', 'hr' , 'minute'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
