@extends('blog.admin')

@section('dashBord')


<div class="container" style="padding: 2%">
    <h1 class="text-center" style="font-family: 'Times New Roman', Times, serif;"> ProFile  </h1>
        <figure>
         <center> 
              <img src="{{ url($apply->image) }}" class="imgProFile mt-5" alt="no Image"  >
              <p style="color: cadetblue;  font-family: 'Times New Roman', Times, serif;"><i>{{$apply->name}} </i></p>
           
              <p style="margin-top: -20px;color:cadetblue;  font-family: 'Times New Roman', Times, serif;"><i> {{ $apply->email }} </i></p>
        </center>
    </figure>


    <center> 
        <form action="" method="POST" enctype="multipart/form-data">
    <div class="row  ">
 
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="" class="textProFile">Name </label>
                <p class="text-lable"><b><i> {{$apply->name}}</i></b></p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <label for="" class="textProFile">Email  </label>
                <p class="text-lable"><b><i> {{ $apply->email }}</i></b></p>
            </div>
       
 
            <div class="col-sm-12 col-md-12 col-lg-12">
                <label for="" class="textProFile">Description   </label>
                <p class="text-lable"><b><i> {{$apply->description}}.</i></b></p>
            </div>

            <a href="" class="btnEdPr w-100 mt-4">Send Email</a>
            <a href="" class="btnEdPr w-100 mt-4">Back</a>

    </div>
</form>
    </center>

    </div>





@endsection