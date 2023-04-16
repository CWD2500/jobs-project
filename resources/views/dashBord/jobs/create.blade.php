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
    <h2> Create Job</h2>

    
</div>
<div class="container mt-5">

        <form action="{{ route('admin.dashbord.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="#title"> Title*</label>
                <input type="text" class="form-control" id="#title" name="title"  placeholder="Enter Title Job " >
            </div>
            <div class="form-group">
                <label for="#tag"> Tag*</label>
                <input type="text" class="form-control"  id="#tag" name="tag"  placeholder="Enter Tag  Job " >
            </div>
            <div class="form-group">
                <label for="#number">Number*</label>
                <input type="number"  id="#number" class="form-control"  name="countJob"    placeholder="Enter Number  Jobs ">
            </div>

   
            <button type="submit" class="btn btn-outline-primary w-100 mt-2"> Create </button>
            <a href="{{ url('admin/dashBord/home/')  }}" class="btn btn-outline-primary w-100 mt-2"> Back </a>
        </form>

</div>
<br>


@endsection