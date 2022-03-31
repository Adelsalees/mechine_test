@extends('layout/layout')
@section('employee','active')
@section('content')
<div class="container  mx-auto mt-4">
    <div class="d-flex justify-content-between w-100">
        <h3>Employee list</h3>
        <a href="{{ url('/add_employee') }}" class="btn border">Add new record</a>
    </div>
    <div class="form-group d-flex justify-content-end mt-2">
        <input type="text" name="search" class="form-control w-25" id="" required aria-describedby="emailHelp" placeholder="Search..">
    </div>
    <table class="table table-striped mt-3">
        <thead>
          <tr>
            <th>Sl no</th>
            <th >First name</th>
            <th >Joining date</th>
            <th >Date of birth</th>
            <th >Gender</th>
            <th >Designation</th>
            <th >E-mail</th>
            <th>Profile picture</th>
            <th>Resume</th>
            <th class="text-right" >Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($employee as $item)
        <tr>
          <th >{{ $item->id }}</th>
          <td>{{ $item->fname }}</td>
          <td>{{ $item->joining_date }}</td>
          <td>{{ $item->dob }}</td>
          <td>{{ $item->gender }}</td>
          <td>{{ $item->designation }}</td>
          <td>{{ $item->email }}</td>
          <td><img src="{{ assset('/public/media/profile'.$item->profile) }}" alt=""></td>
          <td><a href="{{  assset('/public/media/profile'.$item->resume) }}">open</a></td>
           <div class="">
                <a href="{{ url("employee/update/".$item->id) }}" class="btn bg-secondary text-white"><i class="fa-solid fa-pen-to-square mx-3"></i></a>
                <a href="{{ url("employee/delete/".$item->id) }}" class="btn bg-secondary text-white"><i class="fa-solid fa-trash-can mx-3"></i></a>
           </div>
          </td>
        </tr>   
        @endforeach
        </tbody>
      </table>
</div>
@endsection