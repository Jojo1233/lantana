<div id="hid">
  <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse">
          <div class="col-md-3 col-sm-12 xa-logo">
            <a href="/">
              <img src="img/xa-logo.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-sm-12 xa-menu">
            <ul class="nav navbar-nav">
              <li class=""><a href="#">Наши услуги</a></li>
              <li class=""><a href="#">Почему мы</a></li>
              <li class=""><a href="#">Акции</a></li>
              <li class=""><a href="#">Отзывы</a></li>
              <li class=""><a href="#">Контакты</a></li>
              
            </ul>
          </div>
          <div class="col-md-3 col-sm-12">
            <span class="xa-phone">
              <a href="tel:+7 (499) 502-93-30 ">+7 (499) 502-93-30 </a>
            </span>
          </div>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {
        var element = $("#hid"), display;
        $(window).scroll(function () {
          display = $(this).scrollTop() >= 100;
          display != element.css('opacity') && element.stop().animate({ 'opacity': display }, 1);
        });
      });
  </script>