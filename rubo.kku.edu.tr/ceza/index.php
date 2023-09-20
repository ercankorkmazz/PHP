<?php 
	ob_start(); 
	session_start(); 
	setcookie("bilgi","");
	
	if(isset($_SESSION["$_SERVER[SERVER_NAME]kullaniciID"]))
	{
		if($_SESSION["$_SERVER[SERVER_NAME]ceza"] == "1")
		{
			if(count($_GET)>0 && $_GET["ktrl"] == "a8728562werwer145wq4578578dff578s578wer785s278272782erwer7272wer78")
			{
				@include("../inc/inc_baglan.php");
				$sql_ceza="update kullanici set ceza = '0' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
				@mysql_query($sql_ceza,$baglan);
				
				$_SESSION["$_SERVER[SERVER_NAME]ceza"] = "0";
				header("Location:../index.php");
			}
		}
		else
			header("Location:../index.php");	
	}
	else
		header("Location:../index.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="iso-8859-9">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Arimo:700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/sayac.css">
  </head>

  <body>
	  	<div class="container">
	  	
	  		<div id="showtime">
            	<div class="timer">
                   <div class="timer--clock">
                      <div class="minutes-group clock-display-grp">
                      
                         <div class="first number-grp">
                            <div class="number-grp-wrp">
                               <div class="num num-0"><p>0</p></div>
                               <div class="num num-1"><p>1</p></div>
                               <div class="num num-2"><p>2</p></div>
                               <div class="num num-3"><p>3</p></div>
                               <div class="num num-4"><p>4</p></div>
                               <div class="num num-5"><p>5</p></div>
                               <div class="num num-6"><p>6</p></div>
                               <div class="num num-7"><p>7</p></div>
                               <div class="num num-8"><p>8</p></div>
                               <div class="num num-9"><p>9</p></div>
                            </div>
                         </div>
                         <div class="second number-grp">
                            <div class="number-grp-wrp">
                               <div class="num num-0"><p>0</p></div>
                               <div class="num num-1"><p>1</p></div>
                               <div class="num num-2"><p>2</p></div>
                               <div class="num num-3"><p>3</p></div>
                               <div class="num num-4"><p>4</p></div>
                               <div class="num num-5"><p>5</p></div>
                               <div class="num num-6"><p>6</p></div>
                               <div class="num num-7"><p>7</p></div>
                               <div class="num num-8"><p>8</p></div>
                               <div class="num num-9"><p>9</p></div>
                            </div>
                         </div>
                      </div>
                      <div class="clock-separator"><p>:</p></div>
                      <div class="seconds-group clock-display-grp">
                         <div class="first number-grp">
                            <div class="number-grp-wrp">
                               <div class="num num-0"><p>0</p></div>
                               <div class="num num-1"><p>1</p></div>
                               <div class="num num-2"><p>2</p></div>
                               <div class="num num-3"><p>3</p></div>
                               <div class="num num-4"><p>4</p></div>
                               <div class="num num-5"><p>5</p></div>
                               <div class="num num-6"><p>6</p></div>
                               <div class="num num-7"><p>7</p></div>
                               <div class="num num-8"><p>8</p></div>
                               <div class="num num-9"><p>9</p></div>
                            </div>
                         </div>
                         <div class="second number-grp">
                            <div class="number-grp-wrp">
                               <div class="num num-0"><p>0</p></div>
                               <div class="num num-1"><p>1</p></div>
                               <div class="num num-2"><p>2</p></div>
                               <div class="num num-3"><p>3</p></div>
                               <div class="num num-4"><p>4</p></div>
                               <div class="num num-5"><p>5</p></div>
                               <div class="num num-6"><p>6</p></div>
                               <div class="num num-7"><p>7</p></div>
                               <div class="num num-8"><p>8</p></div>
                               <div class="num num-9"><p>9</p></div>
                            </div>
                         </div>
                      </div>
                   </div>
	  			<h2 class="lock-screen kilitBTN"><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
                </div>
                <script src='js/TweenMax.min.js'></script>
                <script src='js/sayac.js'></script>
            	</div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
				          <!-- Modal -->
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">Cezalısınız. Lütfen bekleyiniz.</h4>
				                      </div>
				                      <div class="modal-body">
				                          <p class="centered"><img class="img-circle" width="80" src="img/ui-sam.jpg"></p>				
				                      </div>
				                      <div class="modal-footer centered">
				                          <button data-dismiss="modal" class="btn btn-theme04" type="button">Tamam</button>
				                      </div>
				                  </div>
				              </div>
				          </div>
				          <!-- modal -->
		  				
		  				
	  				</div><! --/lock-screen -->
	  			</div><!-- /col-lg-4 -->
	  	
	  	</div><!-- /container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/login-bg.jpg", {speed: 500});
    </script>
  </body>
</html>
<?php ob_end_flush(); ?>