@extends('layout/layout')
@section('content')
<div class="container  mx-auto mt-4">
    <div class=" w-50 mx-auto p-4 border rounded">
        <h4>ADD DESIGNATION</h4>
        <form class="" action="{{ url('new_designation') }}">
            <div class="form-group">
                <label for="name">Designation name</label>
                <input type="text" name="name" class="form-control" id="" required aria-describedby="emailHelp" placeholder="Enter designation">
            </div>
            <input type="submit" class="btn border mt-3" name="" value="Submit" id="">
            <input type="reset" class="btn border mt-3" name="" value="Cancel" id="">
        </form>
    </div>
</div>
@endsection