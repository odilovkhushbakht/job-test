
function buildListCategory(data) {
    categoryList = [];
    $('.filter_category').empty();
    data.forEach(function (item, i, data) {
        tag = `<div><input type="checkbox" id="${item.id}" value="${item.name}" /><label for="${item.id}"> ${item.name}</label></div>`;
        categoryList.push(tag);
    });
    $('.filter_category').append(categoryList);
}

function buildBlockItem(data) {
    blogList = [];
    $('.blog').empty();
    data.forEach(function (item, i, blogs) {
        html_tag = `<div class="blog_item"><div class="blog_title"><a target="_blank" href="http://job-test/public/blog/${item.id}">${item.title}</a></div><div class="blog_date">${item.created}</div></div>`;
        blogList.push(html_tag);
    });
    $('.blog').append(blogList);
}

function buildNavigateButton(data) {
    navigate = '<div class="navigate"><button class="first" type="button">Первая</button>';
    if (data.next_page_url) {
        navigate = `${navigate}<button class="next" type="button">Следуюшая</button>`;
    }
    navigate = `${navigate}<button class="last" type="button">Последная</button></div>`;
    $('.blog').append(navigate);

    $('.navigate button').on('click', function (event) {
        url = '';
        if ($(event.target).attr('class') == 'first') {
            url = data.first_page_url
        } else if ($(event.target).attr('class') == 'next') {
            url = data.next_page_url
        } else if ($(event.target).attr('class') == 'last') {
            url = data.last_page_url
        }
        getBlog(url);
    });
}

function getBlog(urlPage) {
    $.ajax({
        url: urlPage,
        type: 'GET',
        success: function (data) {
            blogs = data.data;
            navigateData = {
                first_page_url: data.first_page_url,
                next_page_url: data.next_page_url,
                last_page_url: data.last_page_url,
            };
            buildBlockItem(blogs);
            buildNavigateButton(navigateData);
        },
    });
}

function filterCategory() {
    filter = [];
    inputTags = $(".filter_category input[type='checkbox']").each(function () {
        if ($(this).is(":checked")) {
            filter.push($(this).attr('id'));
        }
    });

    inputDateVal = $('#date_blog').val();

    if (inputDateVal) {
        dateVal = inputDateVal;
    } else {
        dateVal = '';
    }

    $.ajax({
        url: 'http://job-test/public/api/blog',
        type: 'GET',
        data: { 'category': filter, 'date': dateVal },
        success: function (data) {
            buildBlockItem(data.data);
            navigateData = {
                first_page_url: data.first_page_url,
                next_page_url: data.next_page_url,
                last_page_url: data.last_page_url,
            };
            buildNavigateButton(navigateData);
        },
    });
    filter = [];
}

function getCategory() {
    $.ajax({
        url: 'http://job-test/public/api/blog/category',
        type: 'GET',
        success: function (data) {
            buildListCategory(data);
            $("input[type='checkbox']").change(function () {
                filterCategory();
            });
        },
    });
}

$(document).ready(function () {
    getBlog('http://job-test/public/api/blog');
    getCategory();

    $('.search_button button').on('click', function () {
        $.ajax({
            url: 'http://job-test/public/api/blog/search',
            type: 'GET',
            data: { title: $('.search_field input').val() },
            success: function (data) {
                buildBlockItem(data.data);
                navigateData = {
                    first_page_url: data.first_page_url,
                    next_page_url: data.next_page_url,
                    last_page_url: data.last_page_url,
                };
                buildNavigateButton(navigateData);
            },
        });
    });

    $('.filter_button_clear').on('click', function () {
        location.reload();
    });

    $('#date_blog').change(function () {
        filterCategory();
    });

});