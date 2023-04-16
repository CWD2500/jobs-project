@extends('blog.main')

@section('content')
    

<div class="container m-5">



       <!-- job_listing_area_start  -->
       <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3 class="text-center ">Job Listing</h3>
                    </div>
                </div>
                {{-- <div class="col-lg-6">
                    <div class="brouse_job text-right">
                        <a href="jobs.html" class="boxed-btn4">Browse More Job</a>
                    </div>
                </div> --}}
            </div>
            <div class="job_lists">
                <div class="row">
                    @foreach ($job as $items)
                        
           
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="{{ url($items->image)}}" alt="" width="50px" height="50px">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="{{ route('list.details.job' , ['slug'=>$items->slug]) }}"><h4>{{ $items->title}}</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p> <i class="fa fa-map-marker"></i>{{$items->location}}</p>
                                        </div>
                                        <div class="location">
                                            <p> <i class="fa fa-clock-o"></i> {{$items->time_job}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="{{ route('list.details.job' , ['slug'=>$items->slug]) }}"> <i class="ti-heart"></i> </a>
                                    <a href="{{ route('list.details.job' , ['slug'=>$items->slug]) }}" class="boxed-btn3">Apply Now</a>
                                </div>
                                <div class="date">
                                    <p>Date line:{{$items->date_time}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->


    {{-- {{$job->links()}} --}}

 <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
@endsection