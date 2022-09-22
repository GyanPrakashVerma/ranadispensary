@extends('layouts.new_app')
@section('new_content')
<div class="card">
    <div class="card-header">
       <h5 class="card-header-text"> Add FAQ</h5>
    </div>
    <div class="card-block">
       <form action="{{route('faq.update',$faq->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group">
             <label for="title" class="form-control-label">Title</label>
             <input type="text" name="title" class="form-control" id="title" value="{{$faq->question}}" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label for="title" class="form-control-label">Short Description</label>
            <textarea name="s_desc" id="" class="form-control" cols="30" rows="3">{{$faq->short_ans}}</textarea>
         </div>
         <div class="form-group">
            <label for="title" class="form-control-label">Long Description</label>
            <textarea name="l_desc" id="" class="form-control summernote" cols="30" rows="10">{{$faq->long_ans}}</textarea>
         </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
       </form>
    </div>
 </div>
 @endsection