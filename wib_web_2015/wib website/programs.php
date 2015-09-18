<?php
    require_once("../includes/nav.php");
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="../lib/bootstrap.less" rel="stylesheet/less">
    <script src="../lib/less-1.1.5.min.js"></script>

    <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
    <script type="text/javascript" src="javascript/jquery.collapsible.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    //collapsible management
        $('.collapsible').collapsible({
            defaultOpen: 'section1,section3'
        });
    });
</script>

  </head>

  <body>
    <!-- Nav Bar -->
        <h2 class="offscreen">W3C Web Resources</h2> 
        <div id="hmenu"> 
        <ul> 
            <li><a href="link">About</a></li> 
            <li><a href="link">Leadership</a></li> 
            <li><a href="link">Programs</a></li> 
            <li><a href="link">Calendar</a></li> 
            <li><a href="link">Alumni Website</a></li> 
            <li><a href="link">Media</a></li> 
            <li><a href="link">Get Involved</a></li> 
            <li><a href="link">IBC</a></li> 
            <li><a href="link">Innovation Competition</a></li> 
            <li><a href="link">YWIB</a></li> 
        </ul>   
        </div>
    
    <?= $nav_body?>


    <!-- Collapsible Pictures -->
    <!-- from http://www.snyderplace.com/demos/collapsible.html -->
    <p> At HUWIB, we.... (must finish this) </p>

    <div class="Innovation Competition" id="section1">Heading<span></span><div>
    <div class="container">
        <div class="content">
            <div>Sample Content</div>
            <p>Content here....</p>
        </div>
    </div>
    </div>

    <div class="IBC" id="section2">Heading<span></span><div>
    <div class="container">
     <div class="content">
         <div>Sample Content</div>
         <p>Content here....</p>
        </div>
    </div>
    </div>

    <div class="NYC Trip" id="section3">Heading<span></span><div>
    <div class="container">
        <div class="content">
            <div>Sample Content</div>
            <p>Content here....</p>
        </div>
    </div>
    </div>

    <div class="Career Exploratory Trip" id="section3">Heading<span></span><div>
    <div class="container">
        <div class="content">
            <div>Sample Content</div>
            <p>Content here....</p>
        </div>
    </div>
    </div>

    <div class="IWIB" id="section3">Heading<span></span><div>
    <div class="container">
        <div class="content">
            <div>Sample Content</div>
            <p>Content here....</p>
        </div>
    </div>
    </div>

  </body>
</html>