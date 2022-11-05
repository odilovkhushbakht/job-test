function buildBlogDetail(data) {
    $('title').text(data.title);
    $('h1').text(data.title);
    $('.blog_detal_text').text(data.text);
    $('.blog_detail_created').text(data.created);
    $('.blog_detail_author').text(data.author.first_name + ' ' + data.author.last_name);
}

function buildCommen(data) {
    $('.comment').empty();
    listComment = [];
    listComment.push('<h2>Коментарии</h2>');
    comment.forEach(function (item, i, comment) {
        tag = `<div class="comment_item">
        <div class="comment_created">${item.created}</div>
        <div class="comment_author">${item.fullname}</div>
        <div class="comment_text">${item.text}</div>
        </div>`;
        listComment.push(tag);
    });
    $('.comment').append(listComment);
}

$(document).ready(function () {
    id = document.location.pathname.split('/').pop();
    url = `http://job-test/public/api/blog/${id}`;
    $.ajax({
        url: url,
        type: 'GET',
        success: function (data) {
            buildBlogDetail(data);
            comment = data.comment;
            buildCommen(comment);
        },
    });
});
