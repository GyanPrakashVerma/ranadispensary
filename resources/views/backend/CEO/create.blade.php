@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add CEO</h5>
    </div>
    <div class="card-block">
       <form action="{{route('ceo.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Name</label>
             <input type="text" name="fname" class="form-control" id="title" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Email</label>
            <input type="email" name="email" class="form-control" id="title" placeholder="Enter email">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Contact</label>
            <input type="text" name="phone" class="form-control" id="title" placeholder="Enter contact number">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Designation</label>
            <input type="text" name="designation" class="form-control" id="title" placeholder="Enter designation">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Address</label>
            <input type="text" name="address" class="form-control" id="title" placeholder="Enter designation">
         </div>
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="image" placeholder="Gallery Photos">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection