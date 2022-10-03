@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Update service</h5>
    </div>
    <div class="card-block">
       <form action="{{route('ayurveda.update',$ayurveda->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
         
       @method('PUT')
         <div class="form-group">
            <label for="title" class="form-control-label">Long Description</label>
            <textarea name="l_desc" id="" class="form-control summernote" cols="30" rows="10">{{$ayurveda->description}}</textarea>
         </div>
     
          <button type="submit" class="btn btn-primary">Update</button>
       </form>
    </div>
 </div>
 @endsection