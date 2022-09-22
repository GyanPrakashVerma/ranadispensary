@extends('layouts.new_app')
@section('new_content')
    <div class="card" style="overflow:scroll">
        <div class="card-header">
            <h5 class="card-header-text">FAQs</h5>
            <a href="{{ route('faq.create') }}"
                    class="text-dark"><button class="btn btn-outline-warning" style="float:right">Add FAQ</button></a>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Short Answer</th>
                                {{-- <th>Short Answer</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($faq as $faqs)
                                <tr class="justify-content-center text-align-center align-items">
                                    <td>{{ $i++ }}</td>
                                    <td>{{$faqs->question}}</td>
                                   

                                    <td>{{$faqs->short_ans}}  </td>
                                    <td>
                                        <form action="{{ route('faq.destroy', $faqs->id) }}" method="POST">
                                            @csrf
                                            @method('Delete')
                                            <a href="{{ route('faq.edit', $faqs->id) }}" class="btn btn-success"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>

                                            <button type="submit" class="btn btn-dark"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
                    <tfoot>
                        <div class="paginate">
                            {{ $faq->links() }}
                        </div>
                    </tfoot>
                </div>
            </div>
        </div>
    </div>
@endsection

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   