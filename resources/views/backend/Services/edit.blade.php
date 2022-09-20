@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text">Gallery Add</h5>
    </div>
    <div class="card-block">
       <form action="{{route('service.update',$service->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title" class="form-control-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{$service->title}}">
         </div>
        <div class="form-group">
         <label for="title" class="form-control-label">Short Description</label>
         <textarea name="s_desc" id="" class="form-control" cols="30" rows="3">{{$service->short_description}}</textarea>
         {{-- <input type="text" name="s_desc" class="form-control" id="title" placeholder="Enter short description"> --}}
      </div>
      <div class="form-group">
         <label for="title" class="form-control-label">Long Description</label>
         <textarea name="l_desc" id="" class="form-control summernote" cols="30" rows="10">{{$service->description}}</textarea>
         {{-- <input type="text" name="s_desc" class="form-control" id="title" placeholder="Enter short description"> --}}
      </div>
        {{-- <div class="form-group">
           <label for="title" class="form-control-label">Tags</label>
           <input type="text" name="tag" class="form-control" id="title" value="{{$service->Tags}}">
        </div> --}}
          <div class="form-group">
             <label for="image" class="form-control-label">Image</label>
             <input type="file" name="image" class="form-control" id="image" >
             <img src="{{ asset('images/'. $service->images) }}" height="150" width="150" alt="">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select name="status" class="form-control">
                <option value="1" @if ($service->status==1) selected   @endif>Active</option>
                <option value="0" @if ($service->status==0) selected   @endif>In Active</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection