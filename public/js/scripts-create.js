function getBlog() {
    blog = {
        title: $('#title').val(),
        text: $('#text').val(),
    };

    authorSelected = $('#author_list option:selected').val();
    categorySelected = $('#category_list option:selected').val();

    if (authorSelected > 0) {
        blog.author_id = authorSelected;
    }
    if (categorySelected > 0) {
        blog.category_id = categorySelected;
    }
    return blog;
}

function buildAuthorList() {
    options_author = [];
    $.ajax({
        url: 'http://job-test/public/api/blog/author',
        type: 'GET',
        success: function (author) {
            $('#author_list').empty();
            options_author.push(`<option value="0">Выберите автора</option>`);
            author.forEach(function (item, i, author) {
                tag_option = `<option value="${item.id}">${item.first_name} ${item.last_name}</option>`;
                options_author.push(tag_option);
            });
            $('#author_list').append(options_author);
        },
    });
}

function buildCategoryList() {
    options_category = [];
    $.ajax({
        url: 'http://job-test/public/api/blog/category',
        type: 'GET',
        success: function (category) {
            $('#category_list').empty();
            options_category.push(`<option value="0">Выберите категорию</option>`);
            category.forEach(function (item, i, category) {
                tag_option = `<option value="${item.id}">${item.name}</option>`;
                options_category.push(tag_option);
            });
            $('#category_list').append(options_category);
        },
    });
}

function checkAuthor() {
    a = -1;
    authorFirstNameTag = $('#first_name').is('#first_name');
    authorLastNameTag = $('#last_name').is('#last_name');
    author = {
        first_name: $('#first_name').val(),
        last_name: $('#last_name').val(),
    };

    if (authorFirstNameTag && authorLastNameTag) {
        $.ajax({
            url: 'http://job-test/public/api/blog/author',
            type: 'POST',
            data: author,
            success: function (authorData) {
                console.log(typeof (authorData.id.toString()));
                a = authorData.id.toString();
            },
        });
    } else {
        authorSelected = $('#author_list option:selected').val();
        if (authorSelected > 0) {
            console.log(typeof (authorSelected));
            a = authorSelected;
        }
    }
    return a;
}

function saveBlog(blogdata) {
    $.ajax({
        url: 'http://job-test/public/api/blog',
        dataType: 'json',
        type: 'POST',
        data: {
            title: blogdata.title,
            text: blogdata.text,
            author_id: blogdata.author_id,
            category_id: blogdata.category_id,
        },
        success: function (data) {
            console.log(data);
            $('.blog_detail_title').text(data.title);
            $('.blog_detail_text').text(data.text);
            $('.blog_detail_created').text(data.created);
        },
        error: function (data) {
            console.log(data);
        },
    });
}

$(document).ready(function () {
    buildAuthorList();
    buildCategoryList();

    $('button').on('click', function () {
        blog = getBlog();
        saveBlog(blog);
    });

});