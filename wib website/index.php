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

    <!-- Le javascript -->
    <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/s3Slider.min.js"></script>
    <?= $nav_head?>
  </head>
  <body>
    <!-- Nav Bar -->
    <?= $nav_body?>
    <!-- Masthead
    =====================================-->
    
    <!-- Library for slideshow, needs some more additions and work -->

    <script type="text/javascript">

  	effectsDemo2 = 'fade';
  	var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 700, height: 450, effects: effectsDemo2,
    display: {
      autoplay: 3000,
      loading: {background: '#000000', opacity: 0.5, image: 'WIB2015/demo_2/img/loading.gif'},
      buttons: {
        hide: true,
        opacity: 1,
        prev: {className: 'SliderNamePrev_2', label: ''},
        next: {className: 'SliderNameNext_2', label: ''}
      		},
      navigation: {container: 'SliderNameNavigation_2', label: '<img src="img/clear.gif" />'}
    	}
  	});

	</script>
    
    <header class="jumbotron subhead" id="overview">
      <div class="inner">
	<div class="container">
	  <h1>About</h1>
	  <p class="lead">
	    Our Mission: HUWIB seeks to empower future female leaders by uniting them through business education and experience.</p>
		<a href='../programs/harvard-programs' class='btn'>More about our organization &raquo;</a>
	</div>
      </div>
    </header>


  <!-- About Us Section
  ========================================-->
  <div class='container'>
    <div class="page-header">
       <h1>Who We Are</h1>
    </div>
    <div class="row section-divider">
      <div class="span3">
        <h4>Our History</h4>
      </div>
      <div class="span13">
        <p>In fall 2005, HUWIB held its first annual Intercollegiate Business Convention, attracting over 400 students from 30 universities. 
	In its third year, 2007, the annual IBC had more than 700 registrants and is continuing to grow. Each year, HUWIB members also venture
	 on outreach trips to New York and other cities, most recently Los Angeles, Chicago, San Francisco, and Las Vegas, to explore opportunities 
	in the business world. Past visits have included discussions with CEOs of Fortune 500 companies, panels with representatives from prominent 
	firms, and meetings with associates in a variety of industries. The trips are designed to give students a well-rounded sense of the different 
	opportunities that await them in the business world. Along with these large-scale events, HUWIB also holds many business development workshops 
	and smaller meetings during the year. Such events, along with HUWIB socials, allow members to meet and learn from each other in an informal setting.</p>
	<p>
	In the past, HUWIB has visited prominent firms such as Goldman Sachs, Time Inc., Estee Lauder, Lehman Brothers, Merrill Lynch, and Disney.
	 HUWIB members have also had the opportunity to interact with many successful professionals in the business world, including Ann Moore 
	(CEO of Time Inc.), Marilyn Crawford (CEO of Primetime Omnimedia), Janet Hanson (CEO of Milestone Capital and 85 Broads), Christine Beauchamp (former 
	CEO of Victoria's Secret Beauty), Jeff Zucker (Chairman of NBC Universal), Chuck Williams (Founder of Williams Sonoma), to name a few.</p>
      </div>
    </div>
    <div class="row">
      <div class="span3">
        <h4>The Organization</h4>
      </div>
      <div class='span13'>
        <p>HUWIB consists of 7 different committees that are responsible for all of the organizations
	events, programs and fundraising. </p>
	<p>In addition, we have an Operations Chair, who oversees the management and logistics of the organization as well as engaging with our Alumni and Advisory Board, and a Treasurer, who manages the budget and all finance efforts. Our organization works with our Alumni and Advisory board, as well as with outside organizations, at Harvard and beyond to form meaningful and lasting partnerships. <a href='http://huwib.org/alum' class='btn small'>About our alumni &raquo;</a></p>
	<p></p>
	<p>HUWIB events are planned throughout the year to educate and support
	the professional development of our members and are funded through sponsorships and grants. Our largest event, the Intercollegiate Business Convention, occurs every fall and draws over 1200 dynamic young female leaders from around the world. The development of our membership extends 
	beyond Boston and Harvard's campus through our exploratory trips to NYC, and recently, Chicago, as well as
	internal and external publications. 
	To join HUWIB, new members must complete the WIBternship, after which they have access to our programs and internal
	network, and the opportunity to become a part of our organization's leadership.
	 <a href='../leadership/executive-board' class='btn small'>About our leadership &raquo;</a>
	</p>
    </div>
    </div>
   </div>

  <!-- Le footer -->
    <div class='container'>
	<?= $footer?>
    </div>

  </body>
</html>