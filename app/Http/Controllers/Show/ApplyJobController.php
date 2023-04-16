<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\applyJob;
use App\Models\ListJob;

class ApplyJobController extends Controller 
{

// view All Apply Job

    public  function applyJob($slug){
        $jobApply = applyJob::where('slug' , $slug)->first();
        $listJob = ListJob::first();
        return view('job.ApplyJob' , compact('jobApply' , 'listJob'));
    }

    public  function storeApply(Request $request ){

        $this->validate($request , [
            
            'name' => 'required',
            // 'apply_id'=>'required',
            'email' => 'required|email',
            'web_site'=>'required',
            'image'  =>'required|Image',
            'description' =>'required',
        ]);

        $file      = $request->image;
        $file_cs   = time().$file->getClientOriginalName();
        $file->move('uploade/cv/',$file_cs);



        $apply = new applyJob();
        $listJob =   ListJob::first();

        $apply->apply_id = $listJob->id;
     
        


        $apply->name = $request->name;
        $apply->email = $request->email;
        $apply->web_site = $request->web_site;
        $apply->image = 'uploade/cv/'.$file_cs;
        $apply->description = $request->description;
        $apply->slug = $listJob->slug;
        //  dd($request->all());
        $apply->save();
        return redirect()->back();
    }    
}
