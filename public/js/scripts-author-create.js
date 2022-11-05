function saveAuthor() {
    first_name = $('#author_first_name').val();
    last_name = $('#author_last_name').val();
    $.ajax({
        url: 'http://job-test/public/api/blog/author',
        type: 'POST',
        data: { first_name: first_name, last_name: last_name },
        success: function (data) {
            alert("Успешно создано.");
        },
        error: function (data) {
            alert("Ошибка не создано.");
        },
    });
}

$(document).ready(function () {
    $('button').on('click', function () {
        saveAuthor();
    });
});