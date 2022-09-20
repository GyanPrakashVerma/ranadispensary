@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Our CEO</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('ceo.create') }}" class="text-dark">Add Member</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Designation</th>
                                <th>Address</th>
                                <th>Images</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($ceo as $ceos)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $ceos->Name }}</td>
                                    <td>{{ $ceos->email }}</td>
                                    <td>{{ $ceos->contact }}</td>
                                    <td>{{ $ceos->designation }}</td>
                                    <td>{{ $ceos->address }}</td>
                                    <td><img src="{{ asset('images/'. $ceos->images) }}" height="150px" width="150px"
                                            alt=""></td>
                                            <td>@if($ceos->status==1)
          <span class="right badge badge-warning "> Active</span>
            @else <span class="right badge badge-info ">In Active</span>  @endif</td>
          <td>
          <form action="{{route('ceo.destroy',$ceos->id)}}" method="POST">
                @csrf
                @method('Delete')
                <a href="{{route('ceo.edit',$ceos->id)}}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                <button type="submit" class="btn btn-dark"><i class="fa-solid fa-trash-can"></i></button>
            </form>
            
          </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
