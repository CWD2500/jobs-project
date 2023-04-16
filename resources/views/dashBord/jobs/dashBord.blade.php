@extends('blog.admin')

@section('dashBord')


<div class="container mt-5">
    <h1 class="mt-3"> DashBord</h1>
    <div class="row mt-5">
    
        <div class="col-sm-12 col-md-6 col-lg-6 ">
            <div class="alert alert-primary" role="alert" style="width: 200px;height: 100px;"> 
                <a href="{{route ('admin.dashbord.home')}}">
                    <h4 class="alert-heading">Jobs</h4>
                    Count :{{$job->count()}}
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 ">
            <div class="alert alert-primary" role="alert" style="width: 200px;height: 100px;">
                <a href="{{ route('admin.dashbord.list.job.home')}}">
                <h4 class="alert-heading">List Job</h4>
                Count :{{$job->count()}}
            </a>
            </div>
        </div>
    </div>
</div>









@endsection