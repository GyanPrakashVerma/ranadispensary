@extends('layouts.new_app')
@section('new_content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-header-text">Update Banner</h5>
        </div>
        <div class="card-block">
            <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <div class="form-group">
             <label for="title" class="form-control-label">Title</label>
             <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
          </div> --}}
                <div class="form-group">
                    <label for="image" class="form-control-label">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <img src="{{ asset('Banner/' . $banner->banner) }}" height="150px" width="350px" alt="">

                <div class="form-group">
                    <label  class="form-control-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="1" @if ($banner->status==1) selected   @endif>Active</option>
                        <option value="0" @if ($banner->status==0) selected   @endif>In Active</option>
                    </select>
                  </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
