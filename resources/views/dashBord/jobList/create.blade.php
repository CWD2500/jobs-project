@extends('blog.admin')

@section('dashBord')

<?php  
   $job_time = ["full-time" , "part-time"];
   ?>

<div class="container mt-3">
    

@if ($errors->count()>0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-primary alert-primary fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong> {{$error}} </strong> 
      </div>   
    @endforeach
    
@endif
</div> 

<div class="container mt-3">
    <h2> Create List Job</h2>

    
</div>



<div class="container  mt-5">
        <form action="{{ route('admin.dashbord.list.job.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="row">

            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group">
                    <label for=""> Select  Catagroy Job </label>
                    <select class="form-select"   name="job_id"  aria-label="Default select example">
                        <option  >Selected Category Job</option>
                        @foreach($jobs as $item)
            
                        <option value="{{$item->id}}" >{{$item->title}}</option>
                        
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group ">
                    <label for="#title">  Job  Name *</label>
                    <input type="text" class="form-control" id="#title" name="title"  placeholder="Enter  Job  Name " >
                </div>
            </div>

            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group ">
                    <label for="">  Job Tiem *</label>
                    <select class="form-select" name="time_job" id="">
               
                    <option value="<?php  echo $job_time[0] ?>">Full Time </option>
                    <option value="<?php  echo $job_time[1] ?>">Part Time </option>

                </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group">
                    <label for="#Published">Published  *</label>
                    <input type="text"  id="#Published" class="form-control"  name="published"    placeholder="Enter   Published  ">
                </div>
            </div>

            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group">
                    <label for="#location">Location  *</label>
                    <input type="text"  id="#location" class="form-control"  name="location"    placeholder="Enter   location  ">
                </div>
            </div>
            
            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group">
                    <label for="#vacancy">Vacancy  *</label>
                    <input type="text"  id="#Vacancy" class="form-control"  name="vacancy"    placeholder="Enter  Vacancy ">
                </div>
            </div>

            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group">
                    <label for="#Salary">Salary  *</label>
                    <input type="number"  id="#Salary" class="form-control"  name="salary"    placeholder="Enter Salary ">
                </div>
            </div>

            <div class="col-sm-12 col-md-6  col-lg-6">
                <div class="form-group">
                    <label for="#image">Image  *</label>
                    <input type="file"  id="#image" class="form-control"  name="image"   >
                </div>
            </div>

            <div class="col-sm-12 col-md-12  col-lg-12">
                <div class="form-group">
                    <label for="#description">Description *</label>
         
                    <textarea id="my-textarea" class="form-control" name="description" rows="6"></textarea>
                  </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-outline-primary w-100 mt-2"> Create </button>
            <a href="{{ route('admin.dashbord.list.job.home') }}" class="btn btn-outline-primary w-100 mt-2"> Back </a>
        </div>
    </form>
</div>



 


@endsection