@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Update Details</h5>
    </div>
    <div class="card-block">
       <form action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title" class="form-control-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$about->title}}">
         </div>
        <div class="form-group">
         <label for="title" class="form-control-label">Short Description</label>
         <textarea name="s_desc" id="" class="form-control summernote" cols="30" rows="3">{{$about->short_desc}}</textarea>
      </div>
      <div class="form-group">
         <label for="title" class="form-control-label">Long Description</label>
         <textarea name="l_desc" id="" class="form-control summernote" cols="30" rows="10">{{$about->long_desc}}</textarea>
      </div>
     
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="image" >
             <img src="{{ asset('images/'. $about->image) }}" height="150" width="150" alt="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control">
                <option value="1" @if ($about->status==1) selected   @endif>Active</option>
                <option value="0" @if ($about->status==0) selected   @endif>In Active</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection