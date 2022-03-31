@extends('layout/layout')
@section('designation','active')
@section('content')
<div class="container  mx-auto mt-4">
    <div class="d-flex justify-content-between w-100">
        <h3>Designation list</h3>
        <a href="{{ url('/add_designation') }}" class="btn border">Add new record</a>
    </div>
    <div class="form-group d-flex justify-content-end mt-2">
        <input type="text" name="search" class="form-control w-25" id="" required aria-describedby="emailHelp" placeholder="Search..">
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th  >Sl no</th>
            <th >Name</th>
            <th class="text-right" >Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($designation as $item)
        <tr>
          <th >{{ $item->id }}</th>
          <td>{{ $item->name }}</td>
          <td>
           <div class="">
                <a href="{{ url("designation/update/".$item->id) }}" class="btn bg-secondary text-white"><i class="fa-solid fa-pen-to-square mx-3"></i></a>
                <a href="{{ url("designation/delete/".$item->id) }}" class="btn bg-secondary text-white"><i class="fa-solid fa-trash-can mx-3"></i></a>
           </div>
          </td>
        </tr>   
        @endforeach
        </tbody>
      </table>
</div>
@endsection