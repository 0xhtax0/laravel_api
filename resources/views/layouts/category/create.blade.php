@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Thêm danh mục bài viết
                        <a style="float: right; text-decoration: none;" href="{{ url('/home') }}">Back</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form autocomplete="off" method="POST" action="{{ route('category.store') }}">
                            @csrf
                            <div class="form-group">

                                <label for="title">Tiêu đề</label>

                                <input type="text" placeholder="Tiêu đề..." class="form-control" name="title">

                                <label for="title">Mô tả danh mục</label>
                                <textarea placeholder="Mô tả danh mục..." class="form-control" name="short_desc" rows="7" style="resize: none"></textarea>

                                <input type="submit" class="btn btn-primary mt-2" name="themdanhmuc" value="Thêm">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
