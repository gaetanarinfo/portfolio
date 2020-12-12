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