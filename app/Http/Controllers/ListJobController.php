<?php

namespace App\Http\Controllers;

use App\Models\ListJob;
use App\Models\job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ListJobController extends Controller
{

    public function index()
    {
       $jobList =  ListJob::all();
       return view('dashBord.jobList.home' , compact('jobList'));
    }


    public function create()
    {  
        // if  void 
        $jobs =  job::all();
        if($jobs->count() > 0)
            return view('dashBord.jobList.create' ,compact('jobs')); 
        else
            return redirect()->route('admin.dashbord.create')->with('List Jobs Empty ....!');
            
        
     
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'job_id'    =>  'required',
            'title'     =>  'required',
            'image'     =>  'required|Image',
            'time_job'  =>  'required',
            // 'date_time' =>'required',
            'published' => 'required',
            'location'  => 'required',
            'vacancy'   => 'required',
            'salary'    => 'required',
            'description' =>'required',
        ]);

         $image = $request->image;
         $newImage = time().$image->getClientOriginalName();
         $image->move('uploade/image/',$newImage);


      
        

        $jobList = new ListJob();

        
        $jobList->job_id    = $request->job_id;
        $jobList->title     = $request->title;
        $jobList->image     = 'uploade/image/'.$newImage ;
        $jobList->time_job  = $request->time_job;
        $jobList->published = $request->published;
        $jobList->location  = $request->location;
        $jobList->vacancy   = $request->vacancy;
        $jobList->salary    = $request->salary;
        $jobList->description = $request->description;
        $jobList->slug = Str::slug($request->title , Str::random());
 
      
        $jobList->save();
        return redirect()->back();
    }


    public function show(ListJob $listJob)
    {
        //
    }

    public function edit($id)
    {
        $jobList = ListJob::find($id);
        return view('dashBord.jobList.edit' ,compact('jobList'));
    }


    public function update(Request $request, $id)
    {
        $jobList =  ListJob::find($id);

        $this->validate($request, [
            'job_id'    =>  'required',
            'title'     =>  'required',
            'image'     =>  'required|Image',
            'time_job'  =>  'required',
            // 'date_time' =>'required',
            'published' => 'required',
            'location'  => 'required',
            'vacancy'   => 'required',
            'salary'    => 'required',
            'description' =>'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $newImage = time().$image->getClientOriginalName();
            $image->move('/uploade/image/', $newImage);
            $jobList->image = '/uploade/image/'.$newImage;
        }
     


        $jobList->job_id    = $request->job_id;
        $jobList->title     = $request->title;
        $jobList->image     = 'uploade/image/'.$new ;
        $jobList->time_job  = $request->time_job;
        $jobList->published = $request->published;
        $jobList->location  = $request->location;
        $jobList->vacancy   = $request->vacancy;
        $jobList->salary    = $request->salary;
        $jobList->description = $request->description;
        $jobList->save();
        return redirect()->back();
    }


    public function destroy($id)
    {
        $listJob = ListJob::find($id);
        $listJob->delete();
        return redirect()->back();
    }


// Trashed  LIst Job 

    public function trashed ()
    {
        $jobList  = ListJob::onlyTrashed()->get();
        return view('dashBord.jobList.trashed' ,compact('jobList'));
    }


    public function restore($id){
        
        $jobList = ListJob::withTrashed()->where('id' ,$id)->first();
        $jobList->restore();
        return redirect()->back();


    }


    public function deleteEnd($id){

        $jobList = ListJob::withTrashed()->where('id' ,$id)->first();
        $jobList->forceDelete();
        return redirect()->back();

    }


}
