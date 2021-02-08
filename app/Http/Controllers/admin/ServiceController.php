<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    public function index(){
        $services = Service::latest()->get();
        return view('admin.service.index',compact('services'));
    }

    public function create(){
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=> 'required|max:50',
            'sub_title'=> 'required|max:250',
            'description'=> 'required|max:500',
        ]);
        $service = new Service();
        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('service.index')->with('successMsg','Service Added Suceesfully!!');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit',compact('service'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required|max:50',
            'sub_title'=> 'required|max:250',
            'description'=> 'required|max:500',
        ]);
        $service  = Service::find($id);
        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->update();
        return redirect()->route('service.index')->with('successMsg','service Updated Suceesfully!');
    }

    public function onlineStatus($id)
    {
        $online = Service::find($id);
        $online->status = 1;
        $online->save();
        return redirect()->route('service.index')->with('successMsg','Status has been  Changed!!');
    }

    public function offlineStatus($id)
    {
        $online = Service::find($id);
        $online->status = 0;
        $online->save();
        return redirect()->route('service.index')->with('successMsg','Status has been  Changed!!');
    }

    public function destroy($id)
    {
        $dlt =  Service::find($id)->delete();
        return redirect()->back()->with('successMsg','service Deleted Successfully!!');
    }
}
