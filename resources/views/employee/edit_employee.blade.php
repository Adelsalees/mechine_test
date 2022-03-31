@extends('layout/layout')
@section('content')
<div class="container  mx-auto mt-4">
    <div class=" w-50 mx-auto p-4 border rounded">
        <h4>ADD EMPLOYEE</h4>
        <form class="" action="{{ url('new_employee') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">first name</label>
                <input type="text" name="fname" class="form-control" id="" required aria-describedby="emailHelp" >
            </div>
            <div class="form-group  mt-2">
                <label for="name">last name</label>
                <input type="text" name="lname" class="form-control" id="" required aria-describedby="emailHelp" >
            </div>
            <div class="form-group  mt-2">
                <label for="name">joining date</label>
                <input type="date" name="joining_date" class="form-control" id="" required aria-describedby="emailHelp" >
            </div>
            <div class="form-group  mt-2">
                <label for="name">Date of birth</label>
                <input type="date" name="dob" class="form-control" id="" required aria-describedby="emailHelp" >
            </div>
            <label for="" class="mt-2">Designation</label>
            <select class="form-select" name="designation_id" aria-label="Default select example">
                <option selected>select designation</option>
                @foreach ($designation as $item)
                 <option value="{{ $item->id }}">{{ $item->name }}</option> 
                @endforeach
              </select>
              <div class="form-group  mt-2">
                <label for="name">Gender</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
                    <label class="form-check-label" for="inlineRadio1">male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
                    <label class="form-check-label" for="inlineRadio2">female</label>
                  </div>
             </div>
             <div class="form-group  mt-2">
                <label for="name">mobile</label>
                <input type="text" name="mobile_no" class="form-control" id="" required aria-describedby="emailHelp" >
            </div>
            <div class="form-group  mt-2">
                <label for="name">landline</label>
                <input type="text" name="landline" class="form-control" id="" required aria-describedby="emailHelp" >
            </div>
            <div class="form-group  mt-2">
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" id="" required aria-describedby="emailHelp" >
            </div>
            <div class="form-group  mt-2">
                <label for="name">precent address</label>
                <textarea class="form-control" name="precent_addrress" id="p_address" cols="10" rows="2"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  same as present addrress
                </label>
              </div>
              <div class="form-group  mt-2">
                <label for="name">premenet address</label>
                <textarea class="form-control" name="premenet_address" id="c_address" cols="10" rows="2"></textarea>
            </div>
            <label for="" class="mt-2">Status</label>
            <select class="form-select" name="status" aria-label="Default select example">
                <option selected>select status</option>
                 <option value="single">single</option> 
                 <option value="married">married</option> 
              </select>
              <div class="form-group mt-2">
                <label for="name">profile picture</label>
                <input type="file" class="form-control" name="profile" id="">
              </div>
              <div class="form-group mt-2">
                <label for="name">resume</label>
                <input type="file" class="form-control" name="resume" id="">
              </div>
            <input type="submit" class="btn border mt-3" name="" value="Submit" id="">
            <input type="reset" class="btn border mt-3" name="" value="Cancel" id="">
        </form>
    </div>
</div>
<script>
    document.querySelector("#flexCheckChecked").addEventListener("click",function(){
        document.querySelector('#c_address').value=document.querySelector('#p_address').value;
        console.log('kk');
    });
</script>
@endsection