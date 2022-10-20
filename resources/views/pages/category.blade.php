@extends('layout')

@section('content')

<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">

                <div class="about-one">
                    <h3 style="font-size: 30px; font-weight: bold;color: black">{{ $title_category->title }}</h3>
                </div>
                <div class="about-two">
                    <p style="font-size: 20px; color: black">{{ $title_category->short_desc }}</p>

                    <ul>
                        <li><p style="font-size: 20px; color: rgb(192, 120, 120)">Share : </p></li>
                        <li><a onclick="fb()" href="#"><span class="fb"> </span></a></li>
                        <li><a onclick="twit()" href="#"><span class="twit"> </span></a></li>
                        <script>
                            function fb(){
                                alert("Chắc năng chưa hoàn thiện")
                            }
                            function twit(){
                                alert("Chắc năng chưa hoàn thiện")
                            }
                        </script>
                    </ul>
                </div>
                <div class="about-tre">
                    <div class="a-1">
                        @foreach ($category_post as $key => $post)

                        {{--  <a href="{{ route('danh-muc.show',['id'=>$post->category->id, 'slug'=>Str::slug($post->category->title)]) }}"><h6>{{ $post->category->title }}</h6></a>  --}}

                        <div class="row" style="margin: 5px">
                            <a href="{{ route('bai-viet.show', ['id'=>$post->id]) }}">
                                <div class="col-md-6 abt-left">
                                    <img width="100%" src="{{ asset('public/uploads/'.$post->image) }}" alt="{{ Str::slug($post->title) }}" />
                                </div>

                                <div class="col-md-6 abt-left">
                                    <h6 style="font-size: 20px; color: rgb(192, 120, 120)">{{ $post->category->title }}</h6>
                                    <h3 style="font-size: 30px; color: black">{{ $post->title }}</h3>
                                    <p>{!! $post->short_desc !!}</p>
                                    <label style="font-size: 20px; color: rgb(192, 120, 120)">{{ $post->post_date }}</label>

                                    <a style="font-size: 20px;" href="{{ route('bai-viet.show', ['id'=>$post->id]) }}">Đọc tiếp...</a>
                                </div>
                            </a>
                        </div>

                        @endforeach
                        {{ $category_post->links() }}

                    </div>

                </div>
            </div>

            <div class="col-md-4 about-right heading">

                <div class="abt-2">
                    <h3 style="font-size: 25px">Danh mục gợi ý</h3>
                    <ul>
                        @foreach ($category_recomment as $key => $cate_recom)
                        <li><a style="font-size: 20px;color: black" href="{{ route('danh-muc.show',['id'=>$cate_recom->id, 'slug'=>Str::slug($cate_recom->title)]) }}">{{ $cate_recom->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="abt-2">
                    <h3 style="font-size: 25px">Bài viết xem nhiều</h3>
                    @foreach ($viewest_post as $key => $new)

                    <a  href="{{ route('bai-viet.show', ['id'=>$new->id]) }}">

                        <div class="might-grid">
                            <div class="grid-might">
                                <img src="{{ asset('public/uploads/'.$new->image) }}" class="img-responsive" alt="">
                            </div>

                            <div>
                                <div class="might-top">
                                    <h4><a style="font-size: 20px;" href="{{ route('bai-viet.show', ['id'=>$new->id]) }}">{{ $new->title }}</a></h4>
                                    {{--  substr: cắt ký tự lấy 100 ký tự thôi --}}
                                    <p>{!! substr($new->short_desc,0,350) !!}...</p>
                                    {{--  <p>{!! $new->short_desc !!}</p>  --}}
                                    <a style="font-size: 20px;" href="{{ route('bai-viet.show', ['id'=>$new->id]) }}">Đọc tiếp...</a>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </a>

                    @endforeach
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection
