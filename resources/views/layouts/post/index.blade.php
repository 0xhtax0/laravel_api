@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Session::has('success'))
            <div class="alert alert-success">
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif

        @if (Session::has('failure'))
            <div class="alert alert-success">
                <p>{{ Session::get('failure') }}</p>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-header">Bài viết
                        <a style="float: right; text-decoration: none;" href="{{ url('/home') }}">Back</a>
                    </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-responsive">
                            <thead>
                                <tr style="text-align: center;color: blue; font-weight: bold">
                                    <th scope="col" style="text-align: center;color: blue; font-weight: bold">STT</th>
                                    <th scope="col" style="text-align: center;color: blue; font-weight: bold">Tiêu đề</th>
                                    <th scope="col" style="text-align: center;color: blue; font-weight: bold">Lượt xem</th>
                                    <th scope="col" style="text-align: center;color: blue; font-weight: bold">Hình ảnh</th>
                                    <th scope="col" style="text-align: center; color: blue; font-weight: bold">Mô tả ngắn</th>
                                    <th scope="col" style="text-align: center;color: blue; font-weight: bold">Thuộc danh mục</th>
                                    <th scope="col" style="text-align: center;color: blue; font-weight: bold">Quản lý</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($post as $p)
                                    @php
                                        $i++;
                                    @endphp

                                    <tr>
                                        <th scope="row">{{ $i }}</th>

                                        <th scope="row">{{ $p->title }}</th>

                                        <th scope="row">{{ $p->views }}</th>

                                        <th scope="row"><img width="200px"
                                                src="{{ asset('public/uploads/' . $p->image) }}"></th>

                                        <th scope="row">{!! substr($p->short_desc, 0, 2000) !!}</th>
                                        {{--  <th scope="row">{{ ($p->short_desc) }}</th>  --}}

                                        <th scope="row">{{ $p->category->title }}</th>

                                        <th scope="row">{{ $p->post_date }}</th>


                                        <td>
                                            <form action="{{ route('post.destroy', [$p->id]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete">
                                            </form>

                                            <a class="btn btn-warning btn-sm"
                                                href="{{ route('post.show', [$p->id]) }}">Edit</a>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
                <div style="margin: 5px">
                    {{ $post->links() }}
                </div>
                {{--  <nav style="margin: 5px" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>  --}}
            </div>
        </div>
    </div>
@endsection
