@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Update Member</h5>
    </div>
    <div class="card-block">
       <form action="{{route('ourteam.update',$ourteam->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
             <label for="title" class="form-control-label">Name</label>
             <input type="text" name="fname" class="form-control" id="title" value="{{$ourteam->Name}}">
          </div>
          {{-- <div class="form-group">
            <label for="title" class="form-control-label">Email</label>
            <input type="email" name="email" class="form-control" id="title" value="{{$ourteam->email}}">
         </div> --}}
         <div class="form-group">
            <label for="title" class="form-control-label">Contact</label>
            <input type="text" name="phone" class="form-control" id="title" value="{{$ourteam->contact}}">
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Designation</label>
            <input type="text" name="designation" class="form-control" id="title" value="{{$ourteam->designation}}">
         </div>
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control"  onchange="handle(event.target.value)">
            
             {{-- <img  id="image" height="150" width="150" alt=""> --}}
           
             <img src="{{ asset('images/'. $ourteam->images) }}" height="150" width="150" alt="">
         
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Facebook Link</label>
                    <input type="url" name="facebook_link" class="form-control" id="" value="{{$ourteam->facebook_link}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Twitter Link</label>
                    <input type="url" name="twitter_link" class="form-control" id="" value="{{$ourteam->twitter_link}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Instagram Link</label>
                    <input type="url" name="insta_link" class="form-control" id="" value="{{$ourteam->insta_link}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Linkedin Link</label>
                    <input type="url" name="linkedin_link" class="form-control" id="" value="{{$ourteam->linkedin_link}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Google Link</label>
                    <input type="url" name="google_link" class="form-control" id="" value="{{$ourteam->google_link}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="form-control-label">Pinterest Link</label>
                    <input type="url" name="pinterest_link" class="form-control" id="" value="{{$ourteam->pinterest_link}}">
                </div>
            </div>
        </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control">
                <option value="1" @if ($ourteam->status==1) selected   @endif>Active</option>
                <option value="0" @if ($ourteam->status==0) selected   @endif>In Active</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
       </form>
    </div>
 </div>
 @endsection
 {{-- <script>
    function handle(e){
        // console.log(e);
        var  image= e;
 document.getElementById('image').src =image;
    }
 </script> --}}