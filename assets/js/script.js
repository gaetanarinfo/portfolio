// Button To Top

window.onscroll = function() { scrollFunction() };

const btn_top = document.querySelector(".btn_top");

var nav_top_1 = document.getElementById("navbar_1");
var nav_top_2 = document.getElementById("navbar_2");

function scrollFunction() {
    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        btn_top.style.display = "block";
    } else {
        btn_top.style.display = "none";
    }

    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        nav_top_1.classList.add("fixed-bottom");
        nav_top_2.style.margin = "0 auto";
        nav_top_2.style.top = "0%";
    } else {
        nav_top_1.classList.remove("fixed-bottom");
        nav_top_2.style.margin = "-70px auto -21px 0";
        nav_top_2.style.top = "-76%";
        nav_top_2.querySelector('a').style.margin = "0 auto";
    }

}

function topFunction() {
    document.body.scrollTop = 0; // Pour Safari
    document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE and Opera
}

// Galerie
function switchStyle() {
    if ($('#styleSwitch ').checked) {
        $('#gallery ').classList.add("custom");
        $('#galerieModal ').classList.add("custom");
    } else {
        $('#gallery ').classList.remove("custom");
        $('#galerieModal ').classList.remove("custom");
    }
}

$(document).ready(function() {
    $(".zoom").hover(function() {
        $(this).addClass('transition ');
    }, function() {
        $(this).removeClass('transition ');
    });
});
// Galerie

// Modal Inscription Connexion Mot de passe perdu
$('#recover').click(function() {
    $('#ModalLabelLogin').text('Mot de passe oublier');
    $('#login-modal').addClass("fade");
    setTimeout(function() {
        $('#login-modal').hide(1000);
    }, 500);

    setTimeout(function() {
        $('#password-modal').addClass("fade show");
        $('#password-modal').show(1000);
        $('#password-modal').removeClass('d-none');
    }, 550);
});

$('#connexion').click(function() {

    $('#ModalLabelLogin').text('Connexion');
    setTimeout(function() {
        $('#password-modal').hide(1000);
    }, 500);

    setTimeout(function() {
        $('#login-modal').addClass("fade show");
        $('#login-modal').show(1000);
    }, 550);
});

$('#inscription').click(function() {

    $('#ModalLabelLogin').text('Inscription');
    setTimeout(function() {
        $('#login-modal').hide(1000);
        $('#password-modal').hide(1000);
    }, 500);

    setTimeout(function() {
        $('#inscription-modal').addClass("fade show");
        $('#inscription-modal').show(1000);
        $('#inscription-modal').removeClass('d-none');
    }, 550);
});

$('#inscription2').click(function() {

    $('#ModalLabelLogin').text('Inscription');
    setTimeout(function() {
        $('#login-modal').hide(1000);
        $('#password-modal').hide(1000);
    }, 500);

    setTimeout(function() {
        $('#inscription-modal').addClass("fade show");
        $('#inscription-modal').show(1000);
        $('#inscription-modal').removeClass('d-none');
    }, 550);
});

// Modal Inscription Connexion Mot de passe perdu

// Toast Bootstrap
//setTimeout(function() {
//    console.log("open toast");
//    $('#message_valide').toast('show')
//}, 1500);

//setTimeout(function() {
//    console.log("open toast");
//    $('#message_erreur').toast('show')
//}, 3000);
// Toast Bootstrap