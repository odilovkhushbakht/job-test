@extends('blog.base')

@section('script')
    <script src="{{ asset('js/scripts-update.js') }}"></script>
@endsection

@section('content')
    <section class="header_wrapper">
        <header>
            <h1>Добавить, удалить, редактировать блог.</h1>
        </header>
    </section>

    <section class="blog_detail_wrapper">
        <div class="blog_detail_created"></div>
        <div class="blog_detal_text"></div>
        <div class="blog_detail_author"></div>
    </section>
    <section class="blog_add">
        <div>
            <label for="title">Заголовок:</label>
            <textarea id="title" maxlength="200" rows="3"></textarea>
        </div>
        <div>
            <label for="title">Текст:</label>
            <textarea id="text" rows="15"></textarea>
        </div>
        <div class="full_name">
            <label for="first_name">Имя:</label>
            <input id="first_name" />
            <label for="last_name">Фам:</label>
            <input id="last_name" />
        </div>
        <div class="category">
            <label for="category_list">Категории:</label>
            <select id="category_list">
                <option value="0">Новая</option>
                <option value="">dawd1</option>
                <option value="">dawd2</option>
            </select>
            <label for="category_new">Новая категория:</label>
            <input id="category_new" />
            <button>Сохрнить</button>
        </div>

    </section>
@endsection
