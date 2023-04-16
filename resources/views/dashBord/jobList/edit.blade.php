@extends('blog.admin')

@section('dashBord')



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
    <h2> Edit List Job</h2>

    
</div>
<div class="container mt-5">
    <h4 class="mt-3"> Edit List  Job :  {{$jobList->title}} </h4>
        <form action="{{ route('admin.dashbord.list.job.update' , [$jobList->id]) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="#title"> Title*</label>
                <input type="text" class="form-control" id="#title" name="title"  placeholder="Enter Title Job " value="{{$jobList->title}}" >
            </div>
            <div class="form-group">
                <label for="#nowTime"> Now Time Job  *</label>
                <input type="time" class="form-control"  id="#nowTime" name="time_job"  placeholder="Enter Time" value="{{$jobList->time_job}}">
            </div>
            <div class="form-group">
                <label for="#datetime">Date Time *</label>
                <input type="date"  id="#datetime" class="form-control"  name="date_time"    placeholder="Enter   Date Time " value="{{$jobList->date_time}}" >
            </div>

            <div class="form-group">
                <label for="#image">Job Image *</label>
                <input type="file"  id="#image" class="form-control"  name="image"    placeholder="Enter Number  Jobs "   value="{{$jobList->image}}" >
            </div>

   
            <button type="submit" class="btn btn-outline-primary w-100 mt-2"> Edit </button>
            <a href="{{ route('admin.dashbord.list.job.home') }}" class="btn btn-outline-primary w-100 mt-2"> Back </a>
        </form>

</div>
<br>


@endsection