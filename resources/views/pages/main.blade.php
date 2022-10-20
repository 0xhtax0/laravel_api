@extends('layout')

@section('content')

@include('pages.banner')
{{-- <!--about-starts--> --}}
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">

                <div class="about-tre">
                    <div class="a-1">
                        @foreach ($all_post as $key => $post)

                        <div class="row" style="margin: 5px">
                            <a href="{{ route('danh-muc.show',['id'=>$post->category->id, 'slug'=>Str::slug($post->category->title)]) }}"><h6 style="font-size: 20px; color: rgb(192, 120, 120)">{{ $post->category->title }}</h6></a>

                            <a href="{{ route('bai-viet.show', ['id'=>$post->id]) }}">
                                <div class="col-md-6 abt-left">
                                    <img width="100%" src="{{ asset('public/uploads/'.$post->image) }}" alt="{{ Str::slug($post->title) }}" />
                                </div>

                                <div class="col-md-6 abt-left">

                                    <h3 style="font-size: 30px; color: black">{{ $post->title }}</h3>
                                    <p>{!! $post->short_desc !!}</p>
                                    {{--  <p>{!! substr($post->short_desc,50,100) !!}...</p>  --}}
                                    <label style="font-size: 20px; color: rgb(192, 120, 120)">{{ $post->post_date }}</label>

                                    <a style="font-size: 20px;" href="{{ route('bai-viet.show', ['id'=>$post->id]) }}">Đọc tiếp...</a>
                                </div>
                            </a>
                        </div>

                        @endforeach
                    </div>
                </div>

                {{ $all_post->links() }}
            </div>
            <div class="col-md-4 about-right heading">

                <div class="abt-2">
                    <h3 style="font-size: 25px">Bài viết mới nhất</h3>

                    @foreach ($newest_post as $key => $new)

                        <div class="might-grid">

                            {{--  <a href="{{ route('danh-muc.show',['id'=>$new->category->id, 'slug'=>Str::slug($new->category->title)]) }}"><h6>{{ $new->category->title }}</h6></a>  --}}

                            <a href="{{ route('bai-viet.show', ['id'=>$new->id]) }}">

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
                            </a>
                        </div>

                    @endforeach

                </div>

                <div class="abt-2">
                    <h3 style="font-size: 25px">Bài viết xem nhiều</h3>
                    <ul>
                        @foreach ($viewest_post as $key => $view)
                        <li><a style="font-size: 20px; color: black" href="{{ route('bai-viet.show', ['id'=>$view->id]) }}">{{ $view->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                {{--  <div class="abt-2">
                    <h3>NEWS LETTER</h3>
                    <div class="news">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Email';}" />
                            <input type="submit" value="Đăng ký">
                        </form>
                    </div>
                </div>  --}}
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
{{-- <!--about-end--> --}}

@endsection
