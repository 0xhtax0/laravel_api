@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cập nhật bài viết
                        <a style="float: right; text-decoration: none;" href="{{ url('/home') }}">Back</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form autocomplete="off" method="POST" action="{{ route('post.update',[$post->id]) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                {{--  CSDL laravel_api, table posts  --}}
                                {{--  Thuộc tính title:  --}}
                                <label for="title">Tiêu đề</label>
                                <input type="text" value="{{ $post->title }}" class="form-control" name="title">

                                {{--  views  --}}
                                <label for="title">Lượt views</label>
                                <input type="text" value="{{ $post->views }}" class="form-control" name="views">

                                {{--  image:  --}}
                                <label for="title">Hình ảnh</label>
                                <input type="file" class="form-control" name="image">
                                <p><img width="200px" src="{{ asset('public/uploads/'.$post->image) }}"></p>

                                {{--  short_desc:  --}}
                                <label for="title">Mô tả ngắn</label>
                                <textarea name="short_desc" id="ckeditor_shortdesc" rows="5" class="form-control" style="resize: none">{{ $post->short_desc }}</textarea>

                                {{--  desc:  --}}
                                <label for="title">Nội dung</label>
                                <textarea name="desc" id="ckeditor_desc" rows="5" class="form-control" style="resize: none">{{ $post->desc }}</textarea>

                                {{--  post_category_id:  --}}
                                <label for="title">Danh mục bài viết</label>

                                <select name="post_category_id" class="form-control">
                                    @foreach ($category as $key => $cate)
                                    <option {{ $cate->id == $post->post_category_id ? 'selected' : '' }} value="{{ $cate->id }}">{{ $cate->title }}</option>
                                    @endforeach
                                </select>

                                <input type="submit" class="btn btn-primary mt-2" name="capnhatdanhmuc" value="Cập nhật bài viết">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
