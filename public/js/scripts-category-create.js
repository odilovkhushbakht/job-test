function saveCategory() {
    category_name = $('#category_name').val();
    $.ajax({
        url: 'http://job-test/public/api/blog/category',
        type: 'POST',
        data: { category: category_name },
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
        saveCategory();
    });
});