$(document).ready(function () {                              // После загрузки страницы
    $("select.select").on("change", function () {            // Дожидаемся изменения значения выпадающего списка
        var value = $("select.select option:selected").attr("data-name");   // Сохраняем полученное значение value
        $("select.select").attr("name", value);              // Сохраняем его в имени select
        $(".post-filter__btn").click(function () {
            $(".p-blog-list__filter").submit();
        });                                                  // Отправляем форму
    });
});