<!DOCTYPE html>
<script type="text/javascript" src="\assets\js\retrieveQns.php"></script>
<?php   
session_start();

define('DB_HOST', 'mysql1.000webhost.com'); 
define('DB_NAME', 'a2047226_dip'); 
define('DB_USER','a2047226_myuser');
define('DB_PASSWORD','5xxxxx'); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); $db=mysql_select_db(DB_NAME,$con) 
or die("Failed to connect to MySQL: " . mysql_error()); 

//echo "'$_POST[txtFld]'";

$name = $_SESSION["userName"];

		   $sql = "INSERT INTO studentinfo ".
			   "(Name, Nric, Marks, Time, TimeStamp, TypeOfQns, QuizResult) ".
			   "VALUES('$name','S1232323J','$_POST[txtMark]','$_POST[txtFld]', NOW()+ INTERVAL 1 HOUR, 'Quiz', '$_POST[txtCorrectWrong]')";
		  $retval = mysql_query( $sql, $con );
		  
?>

<html lang="en">
  <head>
  
<script>

function getHiddenProp(){
    var prefixes = ['webkit','moz','ms','o'];
    
    // if 'hidden' is natively supported just return it
    if ('hidden' in document) return 'hidden';
    
    // otherwise loop over all the known prefixes until we find one
    for (var i = 0; i < prefixes.length; i++){
        if ((prefixes[i] + 'Hidden') in document) 
            return prefixes[i] + 'Hidden';
    }
    // otherwise it's not supported
    return null;
}

function isHidden() {
    var prop = getHiddenProp();
    if (!prop) return false;
    
    return document[prop];
}

var visProp = getHiddenProp();
if (visProp) {
  var evtname = visProp.replace(/[H|h]idden/,'') + 'visibilitychange';
  document.addEventListener(evtname, visChange);
}

function visChange() {
  var timestamp;

// Date() prototype does not provide native number padding - let's add a method:
Date.prototype.pad = function(integer) {
    var result;
    // Can't decide between ternary and slicing
    // result = ("0" + integer).slice(-2); 
    result = integer < 10
                ? "0" + integer
                : integer;
    return result;
};

// Create a new Date() instance and add day, time and now properties
timestamp = new Date();

// Reorder the array entries to your own needs
timestamp.day = [
    timestamp.pad(timestamp.getDate()),
    timestamp.pad(timestamp.getMonth() + 1), // getMonth() returns 0 to 11
    timestamp.getFullYear()
];

timestamp.time = [
    timestamp.pad(timestamp.getHours()),
    timestamp.pad(timestamp.getMinutes()),
    timestamp.pad(timestamp.getSeconds())
];

timestamp.now = timestamp.time.join("");

   var txtFld = document.getElementById('visChangeText');

   if (txtFld) {
      if (isHidden()){
         txtFld.value += "TimeOut: "+ timestamp.now+"\n";
		 console.log("timeOff: "+timestamp.now);
		 }
      else{
		txtFld.value += "TimeIn: "+timestamp.now+"\n";
		console.log("timeIn: "+timestamp.now);
		}
      }
}

function myFun()
  {
  var timestamp;

// Date() prototype does not provide native number padding - let's add a method:
Date.prototype.pad = function(integer) {
    var result;
    // Can't decide between ternary and slicing
    // result = ("0" + integer).slice(-2); 
    result = integer < 10
                ? "0" + integer
                : integer;

    return result;
};

// Create a new Date() instance and add day, time and now properties
timestamp = new Date();

// Reorder the array entries to your own needs
timestamp.day = [
    timestamp.pad(timestamp.getDate()),
    timestamp.pad(timestamp.getMonth() + 1), // getMonth() returns 0 to 11
    timestamp.getFullYear()
];

timestamp.time = [
    timestamp.pad(timestamp.getHours()),
    timestamp.pad(timestamp.getMinutes()),
    timestamp.pad(timestamp.getSeconds())
];

timestamp.now = timestamp.time.join("");
//timestamp.now = timestamp.day.join("") + timestamp.time.join(""); //can have date too

console.log("Time Start: "+timestamp.now);
}
</script>
  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>SEEP; Palm View Pri Online Portal</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="assets/css/buttons.css" type="text/css" rel="stylesheet">
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

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
            <a href="DIPdashboard.php" class="logo"><b>SEEP</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="DIPdashboard.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="DIPteaching.php#">
                                    <div class="task-info">
                                        <div class="desc">Video Guide</div>
                                        <div class="percent">85%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="DIPpractice.php#">
                                    <div class="task-info">
                                        <div class="desc">Practice Questions</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="DIPquiz.php#">
                                    <div class="task-info">
                                        <div class="desc">Quiz Questions</div>
                                        <div class="percent">20%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="DIPdashboard.php#">
                                    <div class="task-info">
                                        <div class="desc">Review Model Drawing</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="DIPtodo_list.php#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="DIPdashboard.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">3</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 3 new messages</p>
                            </li>
                            <li>
                                <a href="DIPdashboard.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/friends/fr-02.jpg"></span>
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
                                <a href="DIPdashboard.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ny.jpg"></span>
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
                                <a href="DIPdashboard.php#">
                                    <span class="photo"><img alt="avatar" src="assets/img/friends/fr-11.jpg"></span>
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
                                <a href="DIPdashboard.php#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="DIPlogin.php">Logout</a></li>
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
              
              	  <p class="centered"><a href="DIPprofile.php"><img src="assets/img/friends/man.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION["userName"] ?></h5>
              	  	
                  <li class="mt">
                      <a href="DIPdashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>My Student Guide</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="DIPcalendar.php">Calendar</a></li>
                          <li><a  href="DIPtodo_list.php">Todo List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-pencil"></i>
                          <span>Model Drawing</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="DIPteaching.php">Video Guide</a></li>
                          <li><a  href="DIPpractice.php">Practice Questions</a></li>
                          <li class="active"><a  href="DIPquiz.php">Quiz Questions</a></li>
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
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Quiz Questions</h3>
			<div style="position: relative;">
            <div style="position: absolute; top: 0; right: 10px;" >
			<a href="DIPlock_screen.php" class="btn btn-warning">Pause whatever I am doing</a></div>
            </div><br><br>
          	<div class="row mt">
          		<div class="col-lg-12">
				<br><br>
				<!-- DISMISSABLE ALERT -->
				<div class="alert alert-warning alert-dismissable">
			    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Note:</strong> Please make sure you have done the practice questions before attempting the quiz.
				</div>      				
          		<p>
				We are able to get a much better understanding of tackling various modelling questions.<br>
				It time to get get a good grasp of your understanding regarding model drawing.<br>
				This quiz consists of <b>10 questions</b>.<br>
				Click on the button below to start, all the best!<br><br><br>
				</p>
          		</div>
          	</div>
	  <div id="button">
			<button type="button" class="btn btn-success" id="startbutton">Start Quiz</button> <a href="DIPpractice.php" class="btn btn-default">Back</a>
	  </div>
<div class="row mt" id="drawing1" style="display: none">
<div class="col-lg-12" >

<style>
			#container { position: relative; }
			#imageView { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> During a recycling competition, Hafiz collected 70 used water bottles.<br>
	Shi Wei collected 16 fewer used water bottles than Hafiz.<br>
	How many used water bottles did Shi Wei collect?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool1">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">Shi Wei collected<input type="text" id="ans1" >used water bottles.</font>
			<button type="button" class="btn btn-default" id="nextbutton" style="display: block">Next</button>
	
		
</div>
</div>
<div class="row mt" id="drawing2"  style="display: none">
<div class="col-lg-12" >
<style>
			#container { position: relative; }
			#imageView2 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> Shop A sold 212 toy cars.<br>
	Shop B sold 88 more toy cars than Shop A.<br>
	How many toy cars did Shop B sell?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool2">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView2" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">Shop B sold<input type="text" name="txtJob" id="ans2">toy cars.</font>
			<button type="button" class="btn btn-default" id="nextbutton2" style="display: block" >Next</button>
	
</div>
</div>

<div class="row mt" id="drawing3" style="display: none">
<div class="col-lg-12" >
<style>
		#container { position: relative; }
		#imageView3 { border: 1px solid #000; }
		#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> There are 195 children at a museum.<br>
	85 of them are girls.<br>
	How many boys are there?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool3">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView3" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">There are<input type="text" name="txtJob" id="ans3">boys.</font>
			<button type="button" class="btn btn-default" id="nextbutton3" style="display: block" >Next</button>
	
</div>
</div>

<div class="row mt" id="drawing4" style="display: none">
<div class="col-lg-12">
<style>
			#container { position: relative; }
			#imageView4 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> There are 34 guppies in a fish tank.<br>
	5 of them died.<br>
	How many guppies are alive?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool4">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView4" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black"><input type="text" name="txtJob" id="ans4">guppies are alive.</font>
			<button type="button" class="btn btn-default" id="nextbutton4" style="display: block" >Next</button>
	
</div>
</div>	
<div class="row mt" id="drawing5" style="display: none">
<div class="col-lg-12">
<style>
			#container { position: relative; }
			#imageView5 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> There are 5 plates of food.<br>
	Each plate has 3 pies.<br>
	How many pies are ther altogether?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool5">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView5" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">There are<input type="text" name="txtJob" id="ans5">pies altogether.</font>
			<button type="button" class="btn btn-default" id="nextbutton5" style="display: block" >Next</button>
	
</div>
</div>	

<div class="row mt" id="drawing6" style="display: none">
<div class="col-lg-12">
<style>
			#container { position: relative; }
			#imageView6 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> Judy saves $10 in 5 days.<br>
	She saves an equal amount of money every day.<br>
	How much does she save each day?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool6">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView6" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">She saves $<input type="text" name="txtJob" id="ans6">each day.</font>
			<button type="button" class="btn btn-default" id="nextbutton6" style="display: block" >Next</button>
	
</div>
</div>	

<div class="row mt" id="drawing7" style="display: none">
<div class="col-lg-12">
<style>
			#container { position: relative; }
			#imageView7 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> Sam saves $3 each day.<br>
	How many days does he need to save to have $18?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool7">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView7" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">He needs to save for<input type="text" name="txtJob" id="ans7">days to have $18.</font>
			<button type="button" class="btn btn-default" id="nextbutton7" style="display: block" >Next</button>
	
</div>
</div>	

<div class="row mt" id="drawing8" style="display: none">
<div class="col-lg-12">
<style>
			#container { position: relative; }
			#imageView8 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> A cake costs $2.<br>
	How much does 3 cakes cost?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool8">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView8" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">3 cakes cost $<input type="text" name="txtJob" id="ans8">.</font>
			<button type="button" class="btn btn-default" id="nextbutton8" style="display: block" >Next</button>
	
</div>
</div>		

<div class="row mt" id="drawing9" style="display: none">
<div class="col-lg-12">
<style>
			#container { position: relative; }
			#imageView9 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	
	<font face="varela round" size="4" color="black"> There are 18 pupils in a class.<br>
	They are grouped into 3 groups.
	How many pupils are there in each group?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool9">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView9" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black">There are<input type="text" name="txtJob" id="ans9">pupils in each group.</font>
			<button type="button" class="btn btn-default" id="nextbutton9" style="display: block" >Next</button>
	
</div>
</div>
<div class="row mt" id="drawing10" style="display: none">
<div class="col-lg-12">
<style>
			#container { position: relative; }
			#imageView10 { border: 1px solid #000; }
			#imageTemp { position: absolute; top: 1px; left: 1px; }
</style>
	<body>
	<font face="varela round" size="4" color="black"> John has 12 pencils.<br>
	He has 5 fewer pens than pencils.<br>
	4 pens are out of ink.<br>
	How many pens are not out of ink?</font>
    <p><label><font face="varela round" size="4" color="green"> Drawing tool: <select id="dtool10">
        <option value="rect">Rectangle</option>
		<option value="pencil">Pencil</option>
		<option value="eraser">Eraser</option>
    </select></label></p>
		<div id="container">
			<canvas id="imageView10" width="800" height="700">
			</canvas>
		</div>
		<br>
			<font face="varela round" size="4" color="black"><input type="text" name="txtJob" id="ans10">pens are not out of ink.</font><br>
			<button type="button" class="btn btn-danger" id="finishbutton" style="display: block" >Finish</button>
					<script>function suba(){
					}
					</script>
		
			<form method="POST" action="http://dip.net63.net/dip/theme/DIPquiz.php">
			<a href="DIPteaching.php" class="btn btn-default">Back</a>
			<!--forward to next page (quiz)-->
			<a href="DIPquiz.php" class="btn btn-default">Next</a><br><br>
		     	<input type ="hidden" textarea id="visChangeText" name="txtFld" style="width:300px;height:100px"></textarea>
				<input type ="hidden" textarea id="correctwrong" name="txtCorrectWrong" style="width:300px;height:100px"></textarea>
				<input type ="hidden" textarea id="timeStop" name="txtTimeStop" style="width:300px;height:100px"></textarea>
		        <input type ="hidden" textarea id="score" name="txtMark" style="width:300px;height:100px"></textarea>
			<button style="visibility: hidden;" id="submitt" onclick="suba()">Submit Question</button>
			</form>

	</body>
</div>
</div>				


			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Palm View Primary School 
              <a href="DIPquiz.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
	
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
<script src="assets/js/example4.js"></script>
<input  textarea id="draw1" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw2" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw3" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw4" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw5" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw6" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw7" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw8" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw9" name="savedraw" ></textarea>
<input type ="hidden" textarea id="draw10" name="savedraw" ></textarea>
  </body>
</html>