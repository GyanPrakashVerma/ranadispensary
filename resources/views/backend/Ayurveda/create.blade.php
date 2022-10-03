@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add service</h5>
    </div>
    <div class="card-block">
       <form action="{{route('ayurveda.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
         
       
         <div class="form-group">
            <label for="title" class="form-control-label">Long Description</label>
            <textarea name="l_desc" id="" class="form-control summernote" cols="30" rows="10"></textarea>
         </div>
     
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection