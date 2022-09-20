@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add member</h5>
    </div>
    <div class="card-block">
       <form action="{{route('ourteam.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Name</label>
             <input type="text" name="fname" class="form-control" id="title" placeholder="Enter name">
          </div>
          {{-- <div class="form-group">
            <label for="title" class="form-control-label">Email</label>
            <input type="email" name="email" class="form-control" id="title" placeholder="Enter email">
         </div> --}}
         <div class="form-group">
            <label for="title" class="form-control-label">Contact</label>
            <input type="text" name="phone" class="form-control" id="title" placeholder="Enter contact number">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Designation</label>
            <input type="text" name="designation" class="form-control" id="title" placeholder="Enter designation">
         </div>
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="image" placeholder="Gallery Photos">
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Facebook Link</label>
                    <input type="url" name="facebook_link" class="form-control" id="" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Twitter Link</label>
                    <input type="url" name="twitter_link" class="form-control" id="" placeholder="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Instagram Link</label>
                    <input type="url" name="insta_link" class="form-control" id="" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Linkedin Link</label>
                    <input type="url" name="linkedin_link" class="form-control" id="" placeholder="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Google Link</label>
                    <input type="url" name="google_link" class="form-control" id="" placeholder="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Pinterest Link</label>
                    <input type="url" name="pinterest_link" class="form-control" id="" placeholder="">
                </div>
            </div>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection