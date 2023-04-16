@extends('blog.main')


@section('content')
    
{{-- 
<div class="container mt-5">
    <h1 class="text-center"> ProFile </h1>
    <figure  >
        <img src="{{ url('../img/aaa.jpg') }}" class="imgProFile" alt="no Image" >
        <div class="myTextProFile">
            <h5><i> ChristianeSoliman@gmail.com </i></h5>   
            <address > Syria : Aleppo</address>
        </div>


        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                col
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                col
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                col
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                col
            </div>
        </div>

    </figure>
</div> --}}


    <div class="container" style="padding: 2%">
    <h1 class="text-center" style="font-family: 'Times New Roman', Times, serif;"> ProFile  </h1>
        <figure>
         <center> 
              <img src="{{ url('../img/aaa.jpg') }}" class="imgProFile mt-5" alt="no Image"  >
              <p style="color: cadetblue;  font-family: 'Times New Roman', Times, serif;"><i> Christiane Soliman </i></p>
           
              <p style="margin-top: -20px;color:cadetblue;  font-family: 'Times New Roman', Times, serif;"><i> ChristianeSoliman@gmail.com </i></p>
        </center>
    </figure>


    <center> 
        <form action="" method="POST" enctype="multipart/form-data">
    <div class="row  ">
 
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="" class="textProFile">Name </label>
                <p class="text-lable"><b><i> {{$proFile->user->name}}</i></b></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="" class="textProFile">Email  </label>
                <p class="text-lable"><b><i> {{ $proFile->user->email }}</i></b></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="" class="textProFile">Phone Number  </label>
                <p class="text-lable"><b><i>
                    @if ($proFile->phone== Null)
                    Empty
                        @else
                        {{$proFile->phone}}
                    @endif 
                   
                
                </i></b></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="" class="textProFile">Country </label>
                <p class="text-lable"><b><i> 
                    @if ($proFile->Country== Null)
                    Empty
                    @else
                    {{$proFile->Country}}
                @endif  </i></b></p>
            </div>
 
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="" class="textProFile">Address  </label>
                <p class="text-lable"><b><i> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta voluptatum eligendi nostrum ipsam alias autem nihil adipisci fugit facere. Itaque,
                     quae officiis dolor deleniti praesentium voluptates et consequuntur in rem.</i></b></p>
            </div>

            <a href="{{ route ('proFile.edit' , ['slug'=>$proFile->slug])}}" class="btnEdPr w-100 mt-4"> Save ProFile</a>

    </div>
</form>
    </center>

    </div>



@endsection