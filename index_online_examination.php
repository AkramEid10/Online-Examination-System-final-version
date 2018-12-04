<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Online Examination</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css"/>
	<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
	<link rel="stylesheet" href="css/main2.css">
	<link  rel="stylesheet" href="css/font.css">
	<link rel="shortcut icon" href="image/favicon.png" type="image/png" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
</head>
<body>
    <div class="container">
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">Online Examination</span>
			</div>
			<div class="control-group">
				<div class="controls">	
                    <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" area-hidden="true"></span>&nbsp;<span class="title1"><b>Admin</b></span></a>
					<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" area-hidden="true"></span>&nbsp;<span class="title1"><b>Login</b></span></a>
					<a href="signup.php" class="pull-right btn sub1"><span class="glyphicon glyphicon-plus-sign" area-hidden="true"></span>&nbsp;<span class="title1"><b>Signup</b></span></a>
				</div>
			</div>
	
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content title1">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" area-label="Close"><span area-hidden="true">&times;</span></button>
                        <h3 class="modal-title title1"><span style="color:black">Log In</span></h3>
                    </div>
                        <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="login.php?q=index_online_examination.php">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email"></label>
                                        <div class="col-md-8">
                                            <input id="email" name="email" placeholder="Enter your E-mail" class="form-control input-md" type="email">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="password"></label>
                                        <div class="col-md-8">
                                            <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" >Login</button>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="modal fade title1" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span are-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title"><span style="color:black">Admin Login</span></h4>
				</div>
				<div class="modal-body title1">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<form action="admin.php?q=index_online_examination.php" method="POST">
								<div class="form-group">
									<input id="uname" name="uname" type="email" placeholder="Admin UserID" class="form-control input-md">
								</div>
								<div class="form-group">
									<input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
								</div>
								<div class="form-group" align="center">
									<button type="submit" name="login" value="Login" class="btn btn-primary">Login</button>
								</div>
							</form>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
           
			
		</div>
	</div>
	
	<div class="bg1">
		<div class="row">
			
		</div>
	</div>
        
   
    <div class="row footer">
		<a href="#" data-toggle="modal" data-target="#developers">Developer</a>
		<br/>
		<br/>
		<br/>
		<br/>
		</div>

        <div class="modal fade title1" id="developers">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" style="font-famile:'typo'"><span style="color:#343638">Developer</span></h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <div class="row">
                            <h4 style="color:#343638" align="center"><b><u>Technical Developer</u></b></h4>
                                <div class="col-md-8">
                                    <h4>ِAkram Ahmed Eid</h4>
                                    <h4>Student at the faculty of computers and information</h4>
                                    <h4>Assuit univirsity</h4>
                                    <h4 style="color:#202020  ; font-size:16px" class="title1">+20-01067522650</h4>
                                     <a href="https://www.facebook.com/profile.php?id=100006874595769" style="color:#202020; font-size: 18px" title="Akram on Facebook" target="_blank">Facebook</a><br/>
                                    <a href="https://twitter.com/AkramEi95795239" style="color:#202020; font-size: 18px" title="Akram on Facebook" target="_blank">twitter</a><br/>
                                </div><br/><br/>
                            </div>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            
	</div>
	
    </div>
</body>
</html>	