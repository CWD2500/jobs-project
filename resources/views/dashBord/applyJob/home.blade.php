@extends('blog.admin')

@section('dashBord')


<?php  $i = 1  ?>

<div class="container mt-5">
    <div class="row">
        
        <table class="table table-light">
            <thead class="table-dark">
                <tr>
                    <th>Count</th>
     
                    <th>Name Job </th>
                    <th>User Name</th>
                    <th>Eemail</th>
                    <th>Show</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($apply as $items)
                <tr>
                    <td>
                        <?php  echo $i++;  ?></td>
                    <td> {{$items->jobList->title}}</td>
                    <td>  {{$items->name}}</td>
                    <td> {{$items->email}}</td>
                    <td>
                        <a href="{{ route('admin.dashbord.list.proFile' , ['id'=>$items->id] ) }}" class="btn btn-info">Show</a>
                    </td>
                    <td>
                        <a href="{{route('admin.dashbord.list.deleteApplyJob' , ['id'=>$items->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>


@endsection