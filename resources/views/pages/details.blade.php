@extends('layout')

@section('content')
    {{-- <!--start-single--> --}}
    <div class="single">
        <div class="container">

            <div class="col-md-8">

                <style>
                    .single-top.single-post img {
                        width: 100% !important;
                    }
                </style>

                <div class="single-top single-post">
                    {{--  <a href="#"><img class="img-responsive" src="{{ asset('public/uploads/'.$post->image) }}" alt=" "></a>  --}}
                    <div class=" single-grid">
                        <h4 style="text-align: center; font-weight: bold;font-size: 30px; font-family: sans-serif">
                            {{ $post->title }}</h4>
                        <ul class="blog-ic">
                            <li><a href="#"><span style="font-size: 20px; color: rgb(192, 120, 120)"><i
                                            class="glyphicon glyphicon-user"> </i>Admin</span> </a> </li>
                            <li><span style="font-size: 20px; color: rgb(192, 120, 120)"><i
                                        class="glyphicon glyphicon-time"> </i>{{ $post->post_date }}</span></li>
                            <li><span style="font-size: 20px; color: rgb(192, 120, 120)"><i
                                        class="glyphicon glyphicon-eye-open"> </i>Views:{{ $post->views }}</span></li>
                        </ul>
                        <div>
                            <p>{!! $post->desc !!}</p>
                        </div>
                    </div>

                    <div class="comments heading">
                        <h3>Bình luận về bài viết</h3>
                    </div>
                    <hr style="border: 1px solid rgb(58, 50, 50)">
                    <div class="comment-bottom heading">
                        {{--  <h3>Bình luận</h3>  --}}
                        <form>
                            <input type="text" value="Name" onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value ='Name';}">
                            <input type="text" value="Email" onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value ='Email';}">
                            <input type="text" value="Subject" onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value ='Subject';}">
                            <textarea cols="77" rows="6" value=" " onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                            <input onclick="myFunction()" type="submit" value="Gửi bình luận">
                            <script>
                                function myFunction() {
                                    alert("Chắc năng chưa hoàn thiện")
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="abt-2 about-right heading">
                    <h3 style="font-size: 25px;">Bài viết liên quan</h3>

                    @foreach ($post_related as $key => $new)
                        <a href="{{ route('bai-viet.show', ['id' => $new->id]) }}">

                            <div class="might-grid">
                                <div class="grid-might">
                                    <img src="{{ asset('public/uploads/' . $new->image) }}" class="img-responsive"
                                        alt="">
                                </div>

                                <div>
                                    <div class="might-top">
                                        <h4><a style="font-size: 20px;"
                                                href="{{ route('bai-viet.show', ['id' => $new->id]) }}">{{ $new->title }}</a>
                                        </h4>
                                        {{--  substr: cắt ký tự lấy 100 ký tự thôi --}}
                                        <p>{!! substr($new->short_desc, 0, 350) !!}...</p>
                                        {{--  <p>{!! $new->short_desc !!}</p>  --}}
                                        <a style="font-size: 20px;"
                                            href="{{ route('bai-viet.show', ['id' => $new->id]) }}">Đọc tiếp...</a>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
    {{-- <!--end-single--> --}}
@endsection
