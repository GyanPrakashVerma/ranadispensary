@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add Details</h5>
    </div>
    <div class="card-block">
       <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
             <label for="title" class="form-control-label">Title</label>
             <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Short Description</label>
            <textarea name="s_desc" id="" class="form-control summernote" cols="30" rows="3"></textarea>
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Description</label>
            <textarea name="l_desc" id="" class="form-control summernote" cols="30" rows="10"></textarea>
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