<?php

namespace App\Http\Controllers;


use  Auth;
use App\Models\job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobController extends Controller
{

    // public function __construct()
    // {
    
    
    //         $this->middleware('auth');
   
    // }

    public function dashBord(){
        $job =  job::all();
        return view('dashBord.jobs.dashBord' , compact('job'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobsList = Job::all();
        return view('dashBord.jobs.home' ,compact('jobsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashBord.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'title'=>'required',
            'tag' =>'required',
            'countJob'=>'required',
            // 'image'=>'required|Image',
        ]);

        
        // $image = $request->image;
        // $newImage = time().$image->getClientOriginalName();
        // $image->move('uloade/image/'.$newImage);

        $job = new job();
        $job->title = $request->title;
        $job->tag = $request->tag;
        $job->countJob = $request->countJob;
        $job->slug = Str::slug($request->title , Str::random());
        // $job->image = 'uloade/image/'.$newImage;
        // dd($request->all());
    
        $job->save();

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('dashBord.jobs.edit' ,compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job = Job::find($id);

        $this->validate($request , [
            'title'=>'required',
            'tag' =>'required',
            'countJob'=>'required',
  
        ]);

        $job->title = $request->title;
        $job->tag = $request->tag;
        $job->countJob = $request->countJob;
        $job->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $job = Job::find($id);
            $listJob = $job->listJob();
            $listJob->delete();
            $job->delete();
            return redirect()->back();
    }



    // Trashed  Jobs

    public function trashed(){
        $job = Job::onlyTrashed()->get();
        return view('dashBord.jobs.trashed' ,compact('job'));
    }

    public function trashedRestore($id)
    {
        $job = Job::withTrashed()->where('id' , $id)->first();
        $listJob = $job->listJob();
        $job->restore();
        $listJob->restore();
        return  redirect()->back();
    }


    public function deleted($id)
    {
        $job = Job::withTrashed()->where('id' , $id)->first();
        $listJob = $job->listJob();
        $job->forceDelete();
        $listJob->forceDelete();
        return  redirect()->back();
    }


    

}

