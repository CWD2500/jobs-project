<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\ListJob;
use Illuminate\Pagination\Paginator;

class JobController extends Controller
{

    public  function index()
    {
        $show_jobs = Job::paginate(3);
        return view('job.index')->with('show_jobs' ,$show_jobs);
    }



    public  function listJob($slug)
    {
        
        $list_job = Job::where('slug', $slug)->first();
    
        // $job   = $list_job->listJob;
        $joblist  = Job::paginate(1);
        $job      = $list_job->listJob;
        return view('job.listJob'  , compact('job'));
    }

    public    function  detailJob($slug)
    {
        $jobDetail =  ListJob::where('slug' , $slug)->first();
        return view('job.job_details' , compact('jobDetail'));
    }
}
