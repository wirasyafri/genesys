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
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Tambah Game</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Game</a></li>
						<li><i class="fa fa-laptop"></i>Tambah Game</li>						  	
					</ol>
				</div>
			</div>
              
         
                  
                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                    <div id="calendar"></div>
                  
                </div>
              </div> 
               
            </div>
			
				 <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Quick Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                
                <div class="panel-body">
                  <div class="padd">
                <?php echo form_open_multipart('admin/Create');?>     
                      <div class="form quick-post">
                      
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                        <div class="form-group">
    <label for="">Nama GAME</label>
    <input type="text" name="NAMA" class="form-control" id="nama"  placeholder="Nama GAME">
    <?php //echo validation_errors();  ?>           
  </div>
                                          <!-- Content -->
                                         <div class="form-group">
    <label for="">GAMBAR</label>
    <input type="file" name="userfile" size="20">
    <?php //echo validation_errors();  ?>           
  </div>                      
                                          <!-- Cateogry -->            
                                          <!-- Tags -->
                                         <div class="form-group">
    <label for="">HARGA</label>
    <input type="text" name="HARGA" class="form-control" id="Nip" placeholder="HARGA">
    <?php //echo validation_errors();  ?>           
  </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
											 <div class="col-lg-offset-2 col-lg-9">
												<button type="submit" class="btn btn-primary">Publish</button>
												<button type="reset" class="btn btn-default">Reset</button>
											 </div>
                                          </div>
                                      </form>
                                      
                                    </div>
                                    <?php echo form_close(); ?>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
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
