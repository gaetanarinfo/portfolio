// Les conditions d'écrans


// Lancement de la function
window.onscroll = function() { scrollFunction() };

// Déclaration des constantes
var btn_top = document.querySelector(".btn_top");
var nav_top_1 = document.getElementById("navbar_1");
var nav_top_2 = document.getElementById("navbar_2");
var close = document.getElementById("close_nav");
var nav = localStorage.getItem('nav');

// Function Scrollable
function scrollFunction() {
    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        btn_top.style.display = "block";
    } else {
        btn_top.style.display = "none";
    }

    if (nav != "oui") {

        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
            nav_top_1.classList.add("fixed-bottom");
            nav_top_2.style.margin = "0 auto";
            nav_top_2.style.top = "0%";
            close.style.display = 'inline-block';
        } else {
            nav_top_1.classList.remove("fixed-bottom");
            nav_top_2.style.margin = "-70px auto -21px 0";
            nav_top_2.style.top = "-76%";
            nav_top_2.querySelector('a').style.margin = "0 auto";
            close.style.display = 'none';
        }

    }

}

function topFunction() {
    document.body.scrollTop = 0; // Pour Safari
    document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE and Opera
}

//Boutton pour fermer la bar de nav en bas
close.addEventListener('click', function(event) {
    localStorage.setItem('nav', 'oui');
    setTimeout(function() { document.location.reload(); }, 1000);
})

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

// Télécharger CV

const btn_cv = document.getElementById('dev-cv');

btn_cv.addEventListener('click', function(e) {

    e.preventDefault();

    const progress_bar = document.querySelector('.progress_bar');
    const done = document.querySelector('#done');
    const progressBar = document.querySelector('.progress-bar');

    progress_bar.style.display = 'block';
    progress_bar.style.margin = '0 auto -14px auto';
    btn_cv.style.display = 'none';

    let p = 0

    function timeout(ms) {
        return new Promise(resolve => setTimeout(resolve, ms))
    }

    async function progress() {

        await timeout(Math.floor(Math.random() * 200) + 200)

        p += Math.ceil(Math.random() * 7) + 5

        if (p < 100) {
            progressBar.value = p
            progress()
            done.innerHTML = `${p}%`
        } else {
            progressBar.value = 100
            done.innerHTML = 'Fichier télécharger 🎒 !'
            await timeout(100)
            progressBar.classList.remove('progress-bar')

            done.style.margin = "0px auto 0 auto";

            windowObjectReference = window.open(
                "http://gaetan.store/documents/Seigneur_Gaetan_CV.pdf",
                "CV",
                "resizable,scrollbars,status"
            );
        }

    }

    progress()
})