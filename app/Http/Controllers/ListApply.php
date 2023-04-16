<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplyJob;
use App\Models\ProFile;
use Auth;
class ListApply extends Controller
{
    
    public function home()
    {
        $apply = ApplyJob::all();
        return view('dashBord.applyJob.home' ,compact('apply'));
    }


    public function deleteApplyJob($id)
    {
        $apply = ApplyJob::find($id);
        $apply->delete();
        return redirect()->back();
    }

    public function listApply($id)
    {
        $apply = ApplyJob::find($id);
        return view('dashBord.applyJob.proFile' ,compact('apply'));
    }


}
