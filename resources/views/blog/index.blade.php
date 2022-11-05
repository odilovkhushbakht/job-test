@extends('blog.base')

@section('script')
    <script src="{{ asset('js/scripts.js') }}"></script>
@endsection


@section('content')
    <section class="header_wrapper">
        <header>
            <h1>Blog header</h1>
        </header>
    </section>

    <section class="blog_wrapper">

        <div class="blog_actions">

            <div class="search_blog">
                <div class="search_field">
                    <input type="text" name="title_blog" />
                </div>
                <div class="search_button">
                    <button>ok</button>
                </div>
            </div>
            <hr />
            <div class="filter_blog">

                <div class="filter_date_start">
                    <label for="date_start">Дата:</label>
                    <input type="date" id="date_blog" />
                </div>

                <div class="filter_category"></div>
                <!--<div class="filter_button_clear"><button>очистить</button></div>-->

            </div>
            <hr />
            <div class="action">
                <button onclick="window.open(location.href+'/add')">Создать блог</button>
                <button onclick="window.open(location.href+'/category')">Создать категорию</button>
                <button onclick="window.open(location.href+'/author')">Добавить автора</button>
            </div>

        </div>

        <div class="blog"></div>

    </section>
@endsection
