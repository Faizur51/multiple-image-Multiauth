<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {
        $image=DB::table('imageupload')->get();

     

        return view('image-index',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {


     

      $res=array();

      $file=$request->file('image');


      if($request->hasfile('image')){
            
       

           foreach($file as $row){

              $filename=rand(99,999).time().'.'.$row->getClientOriginalExtension();

             $row->move('faiz',$filename);


              $data[]=$filename;

            
             
          }


         
      }

       
     $res['image']=implode(',',$data);
   
   
     DB::table('imageupload')->insert($res);

     return redirect()->back()->with('success','image upload successfully');

       

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
        
      $file=DB::table('imageupload')->where('id',$id)->first();
       
      
    
     $res=explode(',',$file->image);

     foreach($res as $data){

      $imagepath=public_path().'/faiz/'.$data;

      unlink($imagepath);
     }
   
       DB::table('imageupload')->where('id',$id)->delete();

       return redirect()->back()->with('success','image deleted successfully');

    }
}
