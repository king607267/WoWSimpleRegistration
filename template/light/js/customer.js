$(function () {
    setInterval(function () {
        let href = $(".nav-item.nav-link.active.show").attr("href");
        if (href == "#nav-serverstatus") {
            window.location.reload();
        }
    }, 60000);
})