@extends('blog.main')


@section('content')


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


<div class="container mt-5">
    <h1 class="text-center">Apply job</h1>
    <h4 > Name Job : {{ $listJob->title}} </h4>
    <form action="{{ route ('list.details.job.applyJob.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="row mt-4">
        <div class="col-sm-12 col-md-6  col-lg-6">
            <div class="form-group">
                <label for="name"> Name  </label>
                <input type="text" class="form-control" name="name"  placeholder="Enter Your Name "> 
            </div>
        </div>
        <div class="col-sm-12 col-md-6  col-lg-6">
            <div class="form=group">
                <label id="email"> Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email ">
            </div>
        </div>

        <div class="col-sm-12 col-md-6  col-lg-6">
            <div class="form-group">
                <label for="web_site"> Web Site   </label>
                <input type="text" name="web_site" class="form-control" id="web_site" placeholder="Enter Web Site ">
            </div>
        </div>


        <div class="col-sm-12 col-md-6  col-lg-6">
            <div class="form-group">
                <label for="image" > Uploade Image </label>
                <input type="file" class="form-control" id="image" name="image" >
            </div>
        </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label for="description" >Description </label>
                <textarea name="description" id="description" class="form-control" rows="6"></textarea>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <button  type="submit" class="btn btn-outline-primary w-100"> Apply</button>
        </div>
        </div>
    </div>
</form>
</div>




@endsection