@extends('blog.main')


@section('content')
    


    <div class="container" style="padding: 2%">
    <h1 class="text-center"> ProFile  </h1>
        <figure>
         <center> 
              <img src="{{ url('../img/aaa.jpg') }}" class="imgProFile mt-5" alt="no Image"  >
            <p style="color: cadetblue;  font-family: 'Times New Roman', Times, serif;"><i> Christiane Soliman </i></p>
            <p style="margin-top: -20px;color:cadetblue;  font-family: 'Times New Roman', Times, serif;"><i> ChristianeSoliman@gmail.com </i></p>
        </center>
    </figure>
    <center> 
        <form action="{{ route('proFile.update' , ['slug'=>$proFile->slug]) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
                <label for="" class="textProFile">Name </label>
                {{-- <p class="text-lable"><b><i> Chrstiane</i></b></p> --}}
                <input type="text" name="full_name" class="form-control text-center"  value="{{$proFile->user->name}}" placeholder="Enter Full Name ">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
                <label for="" class="textProFile">Email  </label>
                {{-- <p class="text-lable"><b><i> Chrstiane@gmail.com</i></b></p> --}}
                <input type="text" name="email" class="form-control text-center"  value="{{$proFile->user->email}}" placeholder="Enter Full Name ">

            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
                <label for="" class="textProFile">Phone Number  </label>
                {{-- <p class="text-lable"><b><i> 0963544584</i></b></p> --}}
                <input type="text" name="phone" class="form-control text-center"  value="{{$proFile->phone}}" placeholder="Enter Phone Number ">

            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 mt-4">
                <label for="" class="textProFile">Country </label>
                {{-- <p class="text-lable"><b><i> Sytia .</i></b></p> --}}
                <input type="text" name="country" class="form-control text-center"  value="{{$proFile->country}}" placeholder="Enter Country ">

            </div>
 
            <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                <label for="" class="textProFile">Description  </label>
                
                <textarea name="address"  class="form-control" rows="8">{!! $proFile->address !!}</textarea>
            </div>    
                <button type="submit" class="btnEdPr w-100 mt-4">   Save ProFile</button>
            </div>
        </form>
    </center>

    </div>



@endsection