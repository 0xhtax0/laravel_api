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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Danh mục bài viết
                        <a style="float: right; text-decoration: none;" href="{{ url('/home') }}">Back</a>
                    </div>

                    <div class="card-body">

                        {{--  @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif  --}}

                        <table class="table">
                            <thead>
                              <tr style="text-align: center;color: blue; font-weight: bold">
                                <th scope="col">STT</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Quản lý</th>

                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($category as $categories)
                                @php
                                    $i++;
                                @endphp

                              <tr>
                                <th scope="row">{{ $i }}</th>
                                <td>{{ $categories->title }}</td>
                                <td>{{ $categories->short_desc }}</td>

                                <td>
                                    <form action="{{ route('category.destroy',[$categories->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger mb-2 btn-sm" type="submit" value="Delete">
                                    </form>

                                    <a class="btn btn-warning btn-sm" href="{{ route('category.show',[$categories->id]) }}">Edit</a>

                              </tr>
                              @endforeach

                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
