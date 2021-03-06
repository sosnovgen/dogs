$(document).ready(function () {
//alert('Подключён, начинаю работу!')

    //-------- Удаление группы ---------------
    $('td > .group_link').click(function (event) {
        event.preventDefault();

        var id = $(this).attr("href"); //Получить текст ссылки из таб. "article"
        var href = 'group/' + id; //Сформировать ссылку для AJAX
        var _parent = $(this).parent().parent();
        var token = $('#token-keeper3').data("token"); //Строка таблицы <TR>

        confirm_var = confirm('Удалить группу?'); //запрашиваем подтверждение на удаление
        if (!confirm_var) {
            return false;
        }

        $.ajax({
            url: href, //url куда мы передаем delete запрос
            method: "POST",
            data: {'_token': token, '_method': "DELETE"}, //не забываем передавать токен, или будет ошибка.

            success: function () {
                _parent.remove(); // удаляем строчку tr из таблицы
                console.log('Успешно! (delete)');
            },
            error: function () {
                console.log('Не то!');
            }
        });
    })


})