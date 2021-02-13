<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Team;
use File;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation 
        $request->validate([
            'name'=>'required',
            'designition'=>'required',
             'about'=>'required',
             'image'=>'mimes:jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $image_ext =strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$image_ext;
        $up_location = 'assets/backend/uploads/team/';
        $last_img = $up_location.$img_name;
        $image->move($up_location,$img_name);

        Team::insert([
            'name'=> $request->name,
            'designition'=> $request->designition,
            'about'=> $request->about,
            'facebook'=> $request->facebook,
            'linkedin'=> $request->linkedin,
            'twitter'=> $request->twitter,
            'image'=>$last_img,
            
        ]);
        return redirect()->route('team.index')->with('successMsg','Team Added Suceesfully!!');
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
        $team = Team::find($id);
        return view('admin.team.edit',compact('team'));
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
         //validation 
        $request->validate([
        'name'=>'required',
        'designition'=>'required',
         'about'=>'required',
         'image'=>'mimes:jpg,jpeg,png'
    ]);

    $image = $request->file('image');
    $old_img = $request->old_image;
    
    if($image){
        $name_gen = hexdec(uniqid());
        $image_ext =strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$image_ext;
        $up_location = 'assets/backend/uploads/team/';
        $last_img = $up_location.$img_name;
        $image->move($up_location,$img_name);
    
        if (file_exists($old_img)) {
            unlink($old_img);
        }
       
        Team::find($id)->update([
                'image'=>$last_img,
                'name'=> $request->name,
                'designition'=> $request->designition,
                'about'=> $request->about,
                'facebook'=> $request->facebook,
                'twitter'=> $request->twitter,
                'linkedin'=> $request->linkedin, 
               
                ]);
             return redirect()->route('team.index')->with('successMsg','Team Added Suceesfully!!');
            }else{
                Team::find($id)->update([

                    'name'=> $request->name,
                    'designition'=> $request->designition,
                    'about'=> $request->about,
                    'facebook'=> $request->facebook,
                    'twitter'=> $request->twitter,
                    'linkedin'=> $request->linkedin, 

                   ]);
                   
            return redirect()->route('team.index')->with('successMsg','Team Added Suceesfully!!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlt =  Team::find($id)->delete();
        return redirect()->back()->with('successMsg','Team Deleted Successfully!!');
    }
}
