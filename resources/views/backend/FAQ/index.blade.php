@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">Banner</h5>
            <a href="{{ route('banner.create') }}"
                    class="text-dark"><button class="btn btn-outline-warning" style="float:right">Add Banner Image</button></a>
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
                            @foreach ($banner as $images)
                                <tr class="justify-content-center text-align-center align-items">
                                    <td>{{ $i++ }}</td>
                                    <td><img src="{{ asset('Banner/' . $images->banner) }}" height="150px" width="350px"
                                            alt=""></td>
                                   

                                    <td>
                                        @if ($images->status == 1)
                                            <span class="right badge badge-warning "> Active</span>
                                        @else
                                            <span class="right badge badge-info ">In Active</span>
                                        @endif
                                    </td>
                                    <td>
                                      
                                            <a href="{{ route('banner.edit', $images->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>

                                            

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <div class="paginate">
                                {{ $banner->links() }}
                            </div>
                        </tfoot>
                    </table>
                    <tfoot>
                        <div class="paginate">
                            {{ $banner->links() }}
                        </div>
                    </tfoot>
                </div>
            </div>
        </div>
    </div>
@endsection

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   