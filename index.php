<?php
header("Expires: Tue, 01 Jan 1000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GHOST-ONE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css">
    
    

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <?php /*
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    */
    ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for Ghost One -->
    <link href="css/ghost_one.css" rel="stylesheet">

  </head>
<?php /* <!-- NAVBAR
 ================================================== --> */?>
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="231" height="87"></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Evidence</a></li>
                <li><a href="#about">Calendar</a></li>
                <li><a href="#contact">ABOUT</a></li>
                <li><a href="#contact">HIRE US?</a></li>
                <li><a href="#contact">STORE</a></li>
                <li><a href="#">Fundraising </a></li>
                <li><a href="#">Reach Out</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

<?php /*    <!-- Main Content
    ================================================== --> */?>
    <div class="container marketing">
      <div class="row featurette" id="homeslide">
        <div class="col-md-12">
          <div class="col-md-8">  
          <h2 class="featurette-heading">SEARCHING THE UNKNOWN.<br>
          <span class="text-muted">TRUTH, THE ULTIMATE GOAL.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-4"></div>
        </div>    
      </div>
   
      <div class="row">
        <div class="col-md-7 col-md-offset-1" id="inthenow">
          <h1 class="headline">In The Now.</h1>
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-3 " id="events">
         <h1 class="headline">Events.</h1>
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>
       
       <div class="clear"></div>
      </div>


    </div><!-- /.container -->

<footer id="footer">
  <div class="container">
        <div id="left" class="col-md-5">
          <span class="copyright">&copy; 2014 Ghost One </span>
        </div>
        <div id="right" class="col-md-7 visible-md visible-lg">
<div class="footerblockquote">
"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae ligula non risus fringilla gravida."
</div> 
        </div>
  </div>
</footer>
<?php /*   <!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> */ ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ghostone.js"></script>
  
</body>
</html>