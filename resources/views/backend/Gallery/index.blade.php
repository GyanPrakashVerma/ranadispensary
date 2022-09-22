@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Our Gallery</h5>
            <a href="{{ route('gallery.create') }}" class="text-dark"><button class="btn btn-outline-warning" style="float:right">Add Images</button></a>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Images</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($image as $images)
                                <tr class="justify-content-center text-align-center align-items">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $images->title }}</td>
                                    <td><img src="{{ asset('galleries/' . $images->images) }}" height="150px" width="150px"
                                            alt=""></td>
                                    <td ><video src="{{ asset('galleries/' . $images->video) }}" height="150px"
                                            width="150px" alt=""></video></td>

                                    <td>
                                        @if ($images->status == 1)
                                            <span class="right badge badge-warning "> Active</span>
                                        @else
                                            <span class="right badge badge-info ">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('gallery.destroy', $images->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('gallery.edit', $images->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>

                                            <button type="submit" class="btn btn-dark"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <div class="paginate">
                                {{ $image->links() }}
                            </div>
                        </tfoot>
                    </table>
                    <tfoot>
                        <div class="paginate">
                            {{ $image->links() }}
                        </div>
                    </tfoot>
                </div>
            </div>
        </div>
    </div>
@endsection

