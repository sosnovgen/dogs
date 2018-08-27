$(document).ready(function () {
//alert('Подключён, начинаю работу!')

    //-------- Удаление группы ---------------
    $('td > .group_link').click(function (event) {
        event.preventDefault();

        var id = $(this).attr("href"); //Получить текст ссылки из таб. "группа"
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

    //-------- Удаление категории ---------------
    $('td > .category_link').click(function (event) {
        event.preventDefault();

        var id = $(this).attr("href"); //Получить текст ссылки из таб. "категория"
        var href = 'cat/' + id; //Сформировать ссылку для AJAX
        var _parent = $(this).parent().parent();
        var token = $('#token-keeper4').data("token"); //Строка таблицы <TR>

        confirm_var = confirm('Удалить категорию?'); //запрашиваем подтверждение на удаление
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


    //-------- Удаление товара ---------------
    $('td > .article_link').click(function (event) {
        event.preventDefault();

        var id = $(this).attr("href"); //Получить id товара из таб. "article"
        var href = 'article/' + id; //Сформировать ссылку для AJAX
        var _parent = $(this).parent().parent();
        var token = $('#token-keeper2').data("token"); //Строка таблицы <TR>

        confirm_var = confirm('Удалить товар?'); //запрашиваем подтверждение на удаление
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

    /* activate the carousel */
    $("#modal-carousel").carousel({interval:false});

    /* change modal title when slide changes */
    $("#modal-carousel").on("slid.bs.carousel",       function () {
        $(".modal-title")
            .html($(this)
                .find(".active img")
                .attr("title"));
    });

    /* when clicking a thumbnail */
    $(".row .thumbnail").click(function(){
        var content = $(".carousel-inner");
        var title = $(".modal-title");

        content.empty();
        title.empty();

        var id = this.id;
        var repo = $("#img-repo .item");
        var repoCopy = repo.filter("#" + id).clone();
        var active = repoCopy.first();

        active.addClass("active");
        title.html(active.find("img").attr("title"));
        content.append(repoCopy);

        // show the modal
        $("#modal-gallery").modal("show");
    });


})