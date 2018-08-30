jQuery(document).ready(function () {

    // Show password Button
    $("#showpassword").on('click', function () {

        var pass = $("#password");
        var fieldtype = pass.attr('type');
        if (fieldtype == 'password') {
            pass.attr('type', 'text');
            $(this).text("Hide Password");
        } else {
            pass.attr('type', 'password');
            $(this).text("Show Password");
        }

    });

});

var p = document.createElement("div");
p.innerHTML = "<div style='z-index:100000' id='owlreporter-preloader'><div id='loader'></div><div class='loader-section section-left'></div><div class='loader-section section-right'></div></div>";
document.body.insertBefore(p, document.body.firstChild);