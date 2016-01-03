    <div class="clearfix"></div>

    <!-- Footer -->
    <div class="box">
      <footer>

        <div class="copyright">
          <div class="row">
          
            <p> Design by Creation Media</p>

            <nav>
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="portfolio-3col.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
              </ul>
            </nav>

          </div>
        </div>

      </footer>
    </div>

  </div>


  <!-- Included JS Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.orbit-1.4.0.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/jquery.fancybox-1.3.4.pack.js"></script>
  <script src="js/jquery.pretty.js"></script>
  <script src="js/jquery.masonry.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.refineslide.js"></script>
  <script src="js/touch-scroll.js"></script>
  <script src="js/script.js"></script>

  <!-- Customization -->
  <div id="customization">
    <h3><a href="#"><i class="icon-cogs"></i> <span>Customize</span></a></h3>
    <div class="options">
      <h4>Pick color:</h4>
      <div class="colors">
        <a href="#" data-color="003399" class="selected"></a>
        <a href="#" data-color="339966"></a>
        <a href="#" data-color="333333"></a>
        <a href="#" data-color="CA4D49"></a>
        <a href="#" data-color="787363"></a>
        <a href="#" data-color="E36422"></a>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#customization h3 a').click(function () {
      $('#customization .options').slideToggle();
    });
    $('#customization .colors a').each(function () {
      $(this).css('background', '#' + $(this).attr('data-color'));
    });
    $('#customization .colors a').click(function () {
      $('#customization a').removeClass('selected');
      $(this).addClass('selected');
      $('link[data-color=custom]').remove();
      if (document.createStyleSheet) {
        document.createStyleSheet(url);
      } else {
        $('<link rel="stylesheet" href="css/colors/' + $(this).attr('data-color') + '.css" data-color="custom">').appendTo('head'); 
      }
    });
  </script>

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>
