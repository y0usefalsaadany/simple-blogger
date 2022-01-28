$(document).ready(function () {
    $("form").on("change", ".file-upload-field", function() {
        let attru = $(this).parent(".file-upload-wrapper").attr("data-text", $(this).val().replace(/.*(\/|\\)/,''))
        console.log(attru)
    });

    // Open Ask Form
    $("#OpenAsk").on("click", () => {
        if ($(".PopupAsk").hasClass("open")) {
            $(".PopupAsk").removeClass("open");
        } else {
            $(".PopupAsk").toggleClass("open");
        }
        
    });

    
    /* ----------- Login & Signup Forms Toggle ------------- */

    $("#opLogin").on("click", () => {
        if ($(".formBx").hasClass("active")) {
            $(".formBx").removeClass("active");
        }
        $(".PopupAsk").removeClass("open");
        $(".popup-form, .bluBg, .formBx").addClass("open");
        $(".close").click( ()=> {
            $(".popup-form, .bluBg, .formBx, .PopupAsk").removeClass("open");
        });
    });

    $("#opSign").on("click", () => {
        $(".PopupAsk").removeClass("open");
        $(".formBx").addClass("active");
        $(".popup-form, .bluBg, .formBx").addClass("open");
        $(".close").click( ()=> {
            $(".popup-form, .bluBg, .formBx, .PopupAsk").removeClass("open");
        });
    });

    $(".signupBtn").on("click", () => {
        $(".formBx").addClass("active");
    });

    $(".signinBtn").on("click", () => {
        $(".formBx").removeClass("active");
    });

});