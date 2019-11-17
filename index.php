<?php 
	include 'php/includes/header.php'; 
?>
	<div class="container" id="wrapper">
		<div id="header">
			<div class="mainLogo">
           			 <div class="logo"><img src="images/lg.jpg" width="60px" height="50px"/>भारत सरकार |<span>| GOVERNMENT OF INDIA</span></div>
            </div>
			<div id="login">
				<?php if(isset($_SESSION['email'])){?>
					You are logged in as: <b><?php echo $_SESSION['email']; ?></b>
				<?php } else { ?>
				<a href="login.php">Login</a> | <a href="register.php">Register</a>
				<?php } ?>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div id="nav">
			<?php include 'php/includes/navigation.php'?>
		</div>
		<div id="main">
			<div class="row" id="slider-background">
				<div class="col-sm-3">
		<div class="leftSidebar">
        	<div class="titleBlock">
        	  <p>What we investigate</p>
       	    </div>
            <div class="blockList">
            	<ul>
                	<li><a href="alerts.php">Terrorism</a></li>
                	<li><a href="alerts.php">Cyber Crime</a></li>
                	<li><a href="alerts.php">Public Curruption</a></li>
					<li><a href="alerts.php">Civil Rights</a></li>
					<li><a href="alerts.php">Drug Dealers</a></li>
           	  </ul>
          </div>
		  
		  <div class="titleBlock">
        	  <p>Most Wanted</p>
       	    </div>
            <div class="blockList">
            	<ul>
                	<li><a href="alerts.php">Ten most wanted</a></li>
                	<li><a href="alerts.php">Most wanted</a></li>
                	<li><a href="alerts.php">Other Criminals</a></li>
           	  </ul>
          </div>
		  <div class="titleBlock">
        	  <p>Alerts</p>
       	    </div>
            <div class="blockList">
            	<ul>
                	<li><a href="alerts.php">Road accidents</a></li>
                	<li><a href="alerts.php">Traffic alerts</a></li>
					<li><a href="alerts.php">Terrorist alerts</a></li>
           	  </ul>
          </div>
            
            
        </div>
				</div>
				<div class="col-sm-9">
				 <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,
                $AutoPlaySteps: 1,
                $AutoPlayInterval: 4000,
                $PauseOnHover: 1,
                $Loop: 0,
                $ArrowKeyNavigation: true, 
                $SlideDuration: 500, 
                $MinDragOffsetToSlide: 20,
                $SlideSpacing: 5,
                $DisplayPieces: 1, 
                $ParkingPosition: 0,
                $UISearchMode: 1,
                $PlayOrientation: 1,
                $DragOrientation: 3, 
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $ChanceToShow: 2,
                    $Loop: 1,   
                    $AutoCenter: 3,
                    $Lanes: 1,  
                    $SpacingX: 4, 
                    $SpacingY: 4,
                    $DisplayPieces: 4,
                    $ParkingPosition: 0, 
                    $Orientation: 2,
                    $DisableDrag: false }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    var sliderWidth = parentWidth;
                    sliderWidth = Math.min(sliderWidth, 810);

                    jssor_slider1.$ScaleWidth(sliderWidth);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
        });
    </script>
    <div id="slider1_container" style="position:relative;top: 0px; left: 0px; width: 810px; height: 420px; background: #000; overflow: hidden; ">
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 390px;
            overflow: hidden;">
           
            <div>
                <img u="image" src="images/slider1.jpg" />
                <div u="thumb">
                    <img class="i" src="images/slider1-thumb001.jpg" /><div class="t">Police Training</div>
                    <div class="c">Anti-riot police during training</div>
                </div>
            </div>
            <div>
                <img u="image" src="images/slider2.jpg" />
                <div u="thumb">
                    <img class="i" src="images/slider2-thumb002.jpg" /><div class="t">Guard of Honour</div>
                    <div class="c">Police during an official function</div>
                </div>
            </div>
            <div>
                <img u="image" src="images/slider4.jpg" />
                <div u="thumb">
                    <img class="i" src="images/slider4-thumb004.jpg" /><div class="t">Anti-Riot Police</div>
                    <div class="c">Responding to Hostile situation</div>
                </div>
            </div>
            <div>
                <img u="image" src="images/slider3.jpg" />
                <div u="thumb">
                    <img class="i" src="images/slider3-thumb003.jpg" /><div class="t">Police Car</div>
                    <div class="c">State of the art police car</div>
                </div>
            </div>
			<div>
                <img u="image" src="images/chopper.jpg" />
                <div u="thumb">
                    <img class="i" src="images\chopper1.jpg"><div class="t">Police Chopper</div>
                    <div class="c">The flying squad chopper</div>
                </div>
            </div>
        </div>
        <div u="thumbnavigator" class="jssort11" style="position: absolute; width: 200px; min-height: 300px; left:605px; top:0px;">
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 200px; height: 69px; top: 0; left: 0;">
                    <div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div>
                </div>
            </div>
        </div>

        <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
  </div> 
			</div>
			
		</div>
		
	</div>
	
