@extends('blog.admin')


@section('dashBord')
<?php
    $i = 0;
    $i+=1;
?>


<div class="container mt-5">
    <h2 class="text-center"> Information List  Jobs   </h2>
    <div class="row">
      
      <table class="table table-light mt-2">
        <thead class="thead-light">
            <tr>
                <th>Count </th>
                <th>Categories </th>
                <th>Name Job  </th>
                <th> Time  Job</th>
                <th>  Salary  </th>
                <th>Edit </th>
                <th>Delete </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobList as $items)
                
            <tr>
                <td><?php  echo $i; ?></td>
                <td>{{$items->job->title}} </td>
                <td>{{$items->title}} </td>
                <td>{{$items->time_job}} </td>
                <td>{{$items->salary}}$ </td>
                <td> <a href="{{ route('admin.dashbord.list.job.edit' , ['id' => $items->id ])}}" class="btn btn-outline-primary" > Edit</a>  </td>
                <td> <a href="{{ route('admin.dashbord.list.job.destroy' , ['id' => $items->id ])}}" class="btn btn-outline-primary"> Delete</a>  </td>
         
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