@extends('blog.admin')


@section('dashBord')
<?php
    $i = 0;
    $i+=1;
?>


<div class="container mt-5">
    <h2 class="text-center"> Information  Jobs   </h2>
    <div class="row">
      
      <table class="table table-light mt-2">
        <thead class="thead-light">
            <tr>
                <th>Count </th>
                <th>Name Job  </th>
                <th> Tag Job </th>
                <th>Count Jobs </th>
                <th>Edit </th>
                <th>Delete </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobsList as $items)
                
            <tr>
                <td><?php  echo $i; ?></td>
                <td>{{$items->title}} </td>
                <td>{{$items->tag}} </td>
                <td>{{$items->countJob}} </td>
                <td> <a href="{{ route('admin.dashbord.edit' , ['id' => $items->id ])}}" class="btn btn-outline-primary" > Edit</a>  </td>
                <td> <a href="{{ route('admin.dashbord.delete' , ['id' => $items->id ])}}" class="btn btn-outline-primary"> Delete</a>  </td>
         
            </tr>
            @endforeach
        
        </tbody>
        <tfoot>
            <tr style="color: blue">
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
                <th>#</th>
            </tr>
        </tfoot>
      </table>
        
    </div>
</div>


@endsection