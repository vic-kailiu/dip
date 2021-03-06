<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SEEP; Palm View Pri Online Portal (Teacher's Edition)</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="js/fancybox/jquery.fancybox.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
   

<!--header start-->
      <header class="header black-bg">











              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="Teacherdashboard.php" class="logo"><b>SEEP (Teacher's Edition)</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="Teacherdashboard.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">3</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 3 new messages</p>
                            </li>
                           <li>
                                <a href="Teacherdashboard.php#">
                                    <span class="photo"><img alt="avatar" src="img/friends/fr-02.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Andy Khong</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Please do your homework.
                                    </span>
                                </a>
                            </li>
							                            <li>
                                <a href="Teacherdashboard.php#">
                                    <span class="photo"><img alt="avatar" src="img/ny.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Cheryl</span>
                                    <span class="time">25 mins.</span>
                                    </span>
                                    <span class="message">
                                        Hi, how is everything?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="Teacherdashboard.php#">
                                    <span class="photo"><img alt="avatar" src="img/friends/fr-11.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Palm View Admin</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     You are allowed to cheat in exams.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="Teacherdashboard.php#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="Teacherprofile.php"><img src="img/friends/fr-02.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Andy Khong</h5>
              	  	
                  <li class="mt">
                      <a href="Teacherdashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>My Guide</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Teachercalendar.php">Calendar</a></li>
                          <li><a  href="Teachertodo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-folder"></i>
                          <span>Students' Data</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="Teacherstudentsprogress.php">Students' Progress</a></li>
                      </ul>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-asterisk"></i>
                          <span>Create New Content </span>
                      </a>
                      <ul class="sub">
                          <li><a  href="Teacherteachingguide.php">Teaching Guide</a></li>
						  <li><a  href="Teacherpracticequestions.php">Practice Questions</a></li>
						  <li><a  href="Teacherquiz.php">Quiz</a></li>
						  </ul>
                  </li>
	
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">














          <h3><i class="fa fa-angle-right"></i> <b>Keywords Highlighted Summary</b> </h3>
              <!-- page start-->
              <div class="tab-pane" id="chartjs">
               

<?php
function studentProgress(){
    $dbhost = 'mysql1.000webhost.com';
	$dbuser = 'a2047226_myuser';
	$dbpass = '5xxxxx';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}

      mysql_select_db('a2047226_dip');//selectdatabase
 
      $sql = "Select * FROM Keyword";
      $result = mysql_query($sql, $conn);


echo "<html>";
echo "<body>";
echo "  <table class='table table-bordered table-striped table-condensed'>";
echo "<tr><th>KEYID</th><th>NAME</th><th>KEYWORDS</th><th>TIMESTAMP</th></tr>";

$count = 1;
        while($row = mysql_fetch_array($result)) 
        { 
           $random = rand (0, 100);
                $KeyID = $row[0];
                $name = $row[1];
                $keywords = $row[2];
                $timestamp = $row[3];



if($keywords!=null){

                echo "<tr><td>";
                echo strip_tags($KeyID);
    
                 echo "</td>";
        echo "<td>";

                echo strip_tags($name);
echo "</td>";
                echo "<td>";

echo "'";
echo strip_tags($keywords);
              echo "'";




echo "</td>";
           
echo "<td>";
             echo strip_tags($timestamp);
echo "</td></tr>";
              
        $count = $count+1;
 
   
}
            }       
echo "</table>";

  echo "</body>";
   echo "</html>";
    
}
studentProgress();
					
?>	

<a href='Teacherstudentsprogress.php'><b><u>Progress Report >>></u></b></a>
<!--Ends here -->



                  
                  <div class="row mt">
                      <div class="col-lg-6">
                          <div class="content-panel">
							  <h4><i class="fa fa-angle-right"></i> Results</h4>
                              <div class="panel-body text-center">
                                  <canvas id="bar" height="300" width="400"></canvas>
                              </div>
                          </div>
                      </div>
					  <div class="col-lg-6">
                          <div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Progress- Model working</h4>
						<div class="task-info">
                                <div class="desc">Overall Progress</div>
								
                        </div>
						<div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
						    <div class="percent">55%</div>
						  </div>
						</div>
						<div class="task-info">
                                <div class="desc">Video Guide</div>
                        </div>
						<div class="progress progress-striped active ">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						    <div class="percent">85%</div>
						  </div>
						</div>
						<div class="task-info">
                                <div class="desc">Practice Questions</div>
                        </div>
						<div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						    <div class="percent">60%</div>
						  </div>
						</div>
						<div class="task-info">
                                <div class="desc">Quiz Questions</div>
                        </div>
						<div class="progress progress-striped active">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
						    <div class="percent">20%</div>
						  </div>
						</div>      				
					</div>
                      </div>
					  
					  
                  </div>
				  
				  <div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
     
                          <section id="unseen">
                          
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
				  
				  
			<!-- Pictures of his workings will be reflected here -->
			<div class="row mt">
	  		<div class="col-lg-12">
			<div class="content-panel">
			<h4><i class="fa fa-angle-right"></i> Submitted Workings</h4>  
          	<hr>
				<div class="row mt">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
				</div><!-- /row -->

				<div class="row mt">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
				</div><!-- /row -->

				<div class="row mt mb">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
					
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
						<div class="project-wrapper">
		                    <div class="project">
		                        <div class="photo-wrapper">
		                            <div class="photo">
		                            	<a class="fancybox" href="img/portfolio/modelworking.jpg"><img class="img-responsive" src="img/portfolio/modelworking.jpg" alt=""></a>
		                            </div>
		                            <div class="overlay"></div>
		                        </div>
		                    </div>
		                </div>
					</div><!-- col-lg-4 -->
				</div><!-- /row -->
			</div>


				  
				  
				  
				  <div class="row mt">
                      <div class="col-lg-6">
                          <div class="">
							  <h4><i class=""></i> </h4>
                              <div class="panel-body text-center">
                                  <canvas id="" height="300" width="400"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="">
							  <h4><i class=""></i> </h4>
                              <div class="panel-body text-center">
                                  <canvas id="" height="300" width="400"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- page end-->
          </section>          
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Palm View Primary School 
              <a href="Studentalextan.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts1.js"></script>

    <!--script for this page-->
    <script src="js/chart-master/Chart.js"></script>
    <script src="js/chartjs-conf.js"></script>
	<script src="js/fancybox/jquery.fancybox.js"></script>   
    
  
  <script type="text/javascript">
      $(function() {
        //    fancybox
          jQuery(".fancybox").fancybox();
      });

  </script>

  </body>
</html>
