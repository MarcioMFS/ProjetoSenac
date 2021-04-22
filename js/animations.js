
        
$('.banner').slick({
infinite: true,
slidesToShow: 1,
slidesToScroll: 1,
autoplay: true,
autoplaySpeed: 5000,
});


document.querySelector(".menu-mobile").onclick = () => {
    document.documentElement.classList.add("menu-ativo");
  }
  
  document.querySelector(".fechar-menu").onclick = () => {
    document.documentElement.classList.remove("menu-ativo");
  }


  $("#sobre-button").click(function() {
    $('html, body').animate({
        scrollTop: $("#sobre").offset().top
    }, 2000);
});