@extends('blog.base')

@section('script')
    <script src="{{ asset('js/scripts-create.js') }}"></script>
@endsection



@section('content')
    <section class="header_wrapper">
        <header>
            <h1>Создать статью.</h1>
        </header>
    </section>

    <section class="blog_detail_wrapper">
        <div class="blog_detail_title"></div>
        <div class="blog_detail_created"></div>
        <div class="blog_detail_text"></div>
    </section>
    <section class="blog_add">
        <div>
            <label for="title">Заголовок:</label>
            <textarea id="title" maxlength="200" rows="3"></textarea>
        </div>
        <div>
            <label for="text">Текст:</label>
            <textarea id="text" rows="15"></textarea>
        </div>
        <div class="full_name">
            <label for="author_list">Авторы:</label>
            <select id="author_list"></select>
        </div>
        <div class="category">
            <label for="category_list">Категории:</label>
            <select id="category_list"></select>
            <button>Сохрнить</button>
        </div>

    </section>
@endsection
