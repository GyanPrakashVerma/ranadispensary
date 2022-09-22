@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Slider</h5>
            <a href="{{ route('slider.create') }}"
            class="text-dark"> <button class="btn btn-outline-warning" style="float:right">Add Slider Image</button></a>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Images</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($slider as $images)
                                <tr class="justify-content-center text-align-center align-items">
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{ asset('slider/' . $images->slider) }}" height="150px" width="350px"
                                            alt=""></td>
                                   

                                    <td>
                                        {{-- @if ($images->status == 1)
                                            <span class="right badge badge-warning "> Active</span>
                                        @else
                                            <span class="right badge badge-info ">In Active</span>
                                        @endif --}}
                                        <input type="checkbox" data-id="{{ $images->id }}" name="status" class="js-switch" {{ $images->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <form action="{{ route('slider.destroy', $images->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            

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
