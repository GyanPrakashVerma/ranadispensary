@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Our Services</h5>
            <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('service.create') }}"
                    class="text-dark">Add Service</a></button>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                {{-- <th>Tags</th> --}}
                                <th>Images</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($service as $services)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $services->title }}</td>
                                    <td>{{ $services->short_description }}</td>
                                    {{-- <td>{{ $services->Tags }}</td> --}}
                                    <td><img src="{{ asset('images/' . $services->images) }}" height="150px" width="150px"
                                            alt=""></td>
                                    <td>
                                        @if ($services->status == 1)
                                            <span class="right badge badge-warning "> Active</span>
                                        @else
                                            <span class="right badge badge-info ">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('service.destroy', $services->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('service.edit', $services->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <button type="submit" class="btn btn-dark"><i
                                                    class="fa-solid fa-trash-can"></i></button>
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
