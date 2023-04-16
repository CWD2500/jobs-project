@extends('blog.main')

@section('content')

<div class="container">
    

    @include('job.catagorySearch')


         <!-- popular_catagory_area_start  -->
    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <h3>Popolar Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
       
                @foreach ($show_jobs as $item)
                    
            
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="{{route ('list.job' , ['slug'=>$item->slug])}}"><h4>{{$item->title}}</h4></a>
                        <p> <span>{{ $item->countJob }}</span> {{$item->tag}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- popular_catagory_area_end  -->


</div>



{{$show_jobs->links()}}
@endsection