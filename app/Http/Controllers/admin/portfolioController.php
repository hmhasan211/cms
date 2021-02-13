<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;

class portfolioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'title'=>'required',
            'description'=>'required',
            'about'=>'required',
            'client'=>'required',
            'image'=>'required|image|mimes:jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $image_ext =strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$image_ext;
        $up_location = 'assets/backend/uploads/portfolio/';
        $last_img = $up_location.$img_name;
        $image->move($up_location,$img_name);

        Portfolio::insert([
            'title'=> $request->title,
            'description'=> $request->description,
            'client'=> $request->client,
            'skill'=> $request->skill,
            'project_link'=> $request->project_link,
            'facebook'=> $request->facebook,
            'linkedin'=> $request->linkedin,
            'twitter'=> $request->twitter,
            'image'=>$last_img,

        ]);
        return redirect()->route('portfolio.index')->with('successMsg','Portfolio Added Suceesfully!!');
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
        $portfolio = Portfolio::find($id);
        return view('admin.portfolio.edit',compact('portfolio'));
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
            $up_location = 'assets/backend/uploads/portfolio/';
            $last_img = $up_location.$img_name;
            $image->move($up_location,$img_name);

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Portfolio::find($id)->update([
                'image'=>$last_img,
                'name'=> $request->name,
                'designition'=> $request->designition,
                'about'=> $request->about,
                'facebook'=> $request->facebook,
                'twitter'=> $request->twitter,
                'linkedin'=> $request->linkedin,

            ]);
            return redirect()->route('portfolio.index')->with('successMsg','Portfolio Added Suceesfully!!');
        }else{
            Portfolio::find($id)->update([

                'name'=> $request->name,
                'designition'=> $request->designition,
                'about'=> $request->about,
                'facebook'=> $request->facebook,
                'twitter'=> $request->twitter,
                'linkedin'=> $request->linkedin,

            ]);

            return redirect()->route('portfolio.index')->with('successMsg','Portfolio Added Suceesfully!!');
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
        $dlt =  Portfolio::find($id)->delete();
        return redirect()->back()->with('successMsg','Portfolio Deleted Successfully!!');
    }
}
