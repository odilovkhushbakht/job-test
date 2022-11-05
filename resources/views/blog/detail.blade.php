@extends('blog.base')

@section('script')
    <script src="{{ asset('js/scripts-detail.js') }}"></script>
@endsection



@section('content')
    <section class="header_wrapper">
        <header>
            <h1></h1>
        </header>
    </section>

    <section class="blog_detail_wrapper">
        <div class="blog_detail_created"></div>
        <div class="blog_detal_text"></div>
        <div class="blog_detail_author"></div>
    </section>

    <section class="comment"></section>
@endsection
