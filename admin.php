<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link href="css/style.css" rel="stylesheet" type="text/css" />

  <body>
<script type="text/javascript">
(function($){
  $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
      if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass('show');

      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
         $('.dropdown-submenu .show').removeClass("show");
      });

      return false;
  });
})(jQuery)

</script>
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-light navbar-expand-lg mainmenu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars" aria-hidden="true"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="active">  <a href="#">A D Y S <span class="sr-only">(current)</span></a>  </li>

														<li >  <a href="makaleonayla.php">Gelen Makaleler<span class="sr-only">(current)</span></a>  </li>
                            <li><a href="adminmakaledurum.php">Makale Durumları</a></li>

                            <li><a href="adminbilgiguncelle.php">Bilgi Güncelle</a></li>
                            <li><a href="index.php">Çıkış</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

  </body>
</html>
