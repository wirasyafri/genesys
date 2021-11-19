<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="<?=base_url()?>assets/css1/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?=base_url()?>assets/css1/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?=base_url()?>assets/css1/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?=base_url()?>assets/css1/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css1/owl.carousel.css" type="text/css">
	<link href="<?=base_url()?>assets/css1/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css1/fullcalendar.css">
	<link href="<?=base_url()?>assets/css1/widgets.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css1/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css1/style-responsive.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css1/xcharts.min.css" rel=" stylesheet">	
	<link href="<?=base_url()?>assets/css1/jquery-ui-1.10.4.min.css" rel="stylesheet">

	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" >
	<!-- custom styles for this template-->
	<!-- <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" >		 -->

	<link href="<?=base_url()?>assets/datatables.min.css" rel="stylesheet">	
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start--><a ><?php $session_data =$this->session->userdata('logged_in');
						$data['username']=$session_data['username']; 
						// echo 		$data['username'];				?></a>
            <a href="index.html" class="logo"><span class="lite">Admin</span></a>
            <!--logo end-->

           <!-- <div class="nav search-row" id="top_menu">
                  search form start 
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                              <!--  <img alt="" src="img/avatar1_small.jpg">-->
                            </span>
                            <span class="username"><?php echo 		$data['username'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                            <li>
                                <a href="<?php echo site_url();?>/login/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <?php $this->load->view('b/pinggir');?>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Beranda</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Beranda</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="container">
    	<?php $this->load->view('admin/game'); ?>
	</div>
                  
                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                    <div id="calendar"></div>
                  
                </div>
              </div> 
               
            </div>
			
				 
                        
          </div> 
              <!-- project team & activity end -->

          </section>
          <div class="text-right">
          <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?=base_url()?>assets/js1/jquery.js"></script>
	<script src="<?=base_url()?>assets/js1/jquery-ui-1.10.4.min.js"></script>
    <script src="<?=base_url()?>assets/js1/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js1/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=base_url()?>assets/js1/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url()?>assets/js1/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url()?>assets/js1/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?=base_url()?>assets/js1/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?=base_url()?>assets/js1/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?=base_url()?>assets/js1/calendar-custom.js"></script>
	<script src="<?=base_url()?>assets/js1/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?=base_url()?>assets/js1/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?=base_url()?>assets/js1/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?=base_url()?>assets/js1/sparkline-chart.js"></script>
    <script src="<?=base_url()?>assets/js1/easy-pie-chart.js"></script>
	<script src="<?=base_url()?>assets/js1/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?=base_url()?>assets/js1/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url()?>assets/js1/xcharts.min.js"></script>
	<script src="<?=base_url()?>assets/js1/jquery.autosize.min.js"></script>
	<script src="<?=base_url()?>assets/js1/jquery.placeholder.min.js"></script>
	<script src="<?=base_url()?>assets/js1/gdp-data.js"></script>	
	<script src="<?=base_url()?>assets/js1/morris.min.js"></script>
	<script src="<?=base_url()?>assets/js1/sparklines.js"></script>	
	<script src="<?=base_url()?>assets/js1/charts.js"></script>
	<script src="<?=base_url()?>assets/js1/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
