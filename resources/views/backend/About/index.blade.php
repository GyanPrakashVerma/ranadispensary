@extends('layouts.new_app')
@section('new_content')
<style>
    p{
        hyphens: auto;
    }
</style>
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">About Us</h5>
            <a href="{{ route('about.create') }}"
                    class="text-dark"><button class="btn btn-outline-warning" style="float:right">Add Details</button></a>
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
                            @foreach ($about as $abouts)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $abouts->title }}</td>
                                    <td>{!! $abouts->short_desc !!}</td>
                                    {{-- <td>{{ $abouts->Tags }}</td> --}}
                                    <td><img src="{{ asset('images/' . $abouts->image) }}" height="150px" width="150px"
                                            alt=""></td>
                                    <td>
                                        @if ($abouts->status == 1)
                                            <span class="right badge badge-warning "> Active</span>
                                        @else
                                            <span class="right badge badge-info ">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('about.destroy', $abouts->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('about.edit', $abouts->id) }}" class="btn btn-success"><i
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
