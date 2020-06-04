/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// register globally
if(window.CoolLightBox){
  Vue.component('vue-cool-lightbox', window.CoolLightBox.default)
}
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


$(document).ready(function(){
  const navbar  = $('.custom-navbar'),
        sidenav = document.querySelector('#sidenav'),
        sidenavTogglers = document.querySelectorAll('.sidenavToggler')
  for (var i = 0; i < 2; i++) {
    sidenavTogglers[i].addEventListener('click', function(){
      sidenav.classList.toggle('active');
    });
  }
  
  $('.sidenav').mouseleave(function(){
    $(this).removeClass('active');
  });
  
  $('.down-scroller').click(function(event){
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
    }, 1500);
    event.preventDefault();
  });
  
  $(window).scroll(function(){
    console.log("Scrolled down");
    if ($(window).scrollTop() > 100){
      navbar.addClass( "bg-dark");
    }
    else {
      navbar.removeClass("bg-dark");
    }
    
    if ($(window).scrollTop() > 768){
      navbar.addClass( "with-btn");
    }
    else {
      navbar.removeClass("with-btn");
    }
  })
  
});