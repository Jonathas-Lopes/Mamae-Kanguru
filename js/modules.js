const getPage = function (pageName, localDestino) {
    $.post("/PHP/" + pageName + ".php", "campo1=Home", function (data) {
        $(localDestino).empty();
        $(localDestino).append(data);

        console.log(data);
    });
}

const openNewTab = function () {
    var menu = $('.abas');
    menu.children().each(function () {
        var pageName = $(this).text();

        $(this).click(function () {
            menu.children().removeClass('actived')
            $(this).toggleClass("actived");
            getPage(pageName, ".main");
        });
    });
}