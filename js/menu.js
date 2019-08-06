/**
 * Fichier Jquery qui gère le menu mobile
 *
 */

//Création du bouton du menu hamburger
let bouton =
    '<button class="btnMenu hamburger hamburger--spin" type="button">' +
    '  <span class="hamburger-box">' +
    '    <span class="hamburger-inner"></span>' +
    '  </span>' +
    '</button>';

//On insère le code HTML du bouton dans le HTML
$(".header__nav").after(bouton);

//On affecte le bouton à une variable
let btnMenu = $(".btnMenu");

//Écouteur d'évènement pour cacher/afficher le menu mobile
btnMenu.on( "click", function() {
    btnMenu.toggleClass("is-active");
    btnMenu.next().toggleClass("header__nav__mobile--ferme").toggleClass("header__nav__mobile--ouvert");
});
