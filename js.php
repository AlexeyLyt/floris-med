<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Подключение скрипта Меню -->
  <script src="js/menu.js"></script>
<!-- Конец подключения скрипта Меню -->

<!-- Подключение скрипта Слайдера -->
  <script src="js/responsiveslides.js"></script>
  <script>
    $(function () {
      $(".rslides").responsiveSlides({
        pager: true,
        pagination: true,
        nav: true,
        pause: true,
        namespace: "callbacks",
      });
    });
  </script>
<!-- Конец подключения скрипта Слайдера -->

<!--wow js-->
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
<!-- Конец подключения wow.js -->

<!-- Подключение скрипта FAQ -->
  <script>
    $(".faq-item").click(function() {
      $(this).children(".arrow-down").children("div").toggleClass("arrow-up");
      $(this).children("div:first-of-type").slideToggle(300);
    })
  </script>
<!-- Конец подключения скрипта FAQ -->

<!-- Подключение скрипта для страницы Наши сиделки -->
<script>
    $(".sidelka-item").click(function() {
      $(this).children(".sidelka-main-info").children(".sidelka-more-info-btn").children(".arrow-down").children("div").toggleClass("arrow-up");
      $(this).children(".sidelka-info").slideToggle(300);
      $(this).children(".sidelka-item-img").toggleClass("add-border");
    })
</script>
<!-- Конец подключения скрипта для страницы Наши сиделки -->

<!-- Подключение скрипта фиксации меню при прокрутке страницы -->
  <script>
    $(document).ready(function(){
          $(window).scroll(function(){
            var heightblock = $(".header").height();
            if($(window).scrollTop()>heightblock){
              $('.main-menu__menu').addClass('menu-fixed');
              $('.main-menu__logo-small-menu').addClass('show-logo-small');
              $('.main-menu__menu a').addClass('menu-a-small');
              $('.main-menu__open-close-mobile-menu').addClass('fixed-main-menu__open-close-mobile-menu');
              $('.main-menu__ul li').addClass('li-fixed');
            }else{
              $('.main-menu__menu').removeClass('menu-fixed');
              $('.main-menu__logo-small-menu').removeClass('show-logo-small');
              $('.main-menu__menu a').removeClass('menu-a-small');
              $('.main-menu__open-close-mobile-menu').removeClass('fixed-main-menu__open-close-mobile-menu');
              $('.main-menu__ul li').removeClass('li-fixed');
            }
          });
      });
  </script>
<!-- Конец Подключение скрипта фиксации меню при прокрутке страницы -->


<!-- Подключение скрипта Мы вам перезвоним -->
  <script src="//perezvonok.ru/s.php?u=5012&s=5376" charset="UTF-8"  async="async"></script>

<!-- Подключение скрипта POP UP окна для ОБРАТНОЙ СВЯЗИ -->

<script src="js/jquery.reveal.js"></script>

<!-- Скрипт плавной прокрутки к якорю -->
<script>
  $(document).ready(function(){
    var $page = $('html, body');
    var $heightNav = $(".main-menu__menu").height() - 3;
    $('a[href*="#"]').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top - $heightNav
        }, 400);
        return false;
    });
  });
</script>