@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">All Consultings </h5>
            {{-- <button class="btn btn-outline-warning" style="float:right"><a href="{{ route('ourteam.create') }}" class="text-dark">Add Member</a></button> --}}
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Activity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($list as $lists)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $lists->name }}</td>
                                    <td>{{ $lists->email }}</td>
                                    <td>{{ $lists->phone }}</td>
          <td>
          <form action="{{route('cnst_delete',$lists->id)}}" method="POST">
                @csrf
                <a href="{{ route('cnst_show',$lists->id) }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i></a>
                <button type="submit" class="btn btn-dark"><i class="fa-solid fa-trash-can"></i></button>
            </form>
            
          </td>
                                </tr>
                            @endforeach 
                        </tbody>
                        <tfoot>
                            <div class="paginate">
                                {{ $list->links() }}
                            </div>
                        </tfoot>
                    </table>
                    <tfoot>
                        <div class="paginate">
                            {{ $list->links() }}
                        </div>
                    </tfoot>
                </div>
            </div>
        </div>
    </div>
@endsection
