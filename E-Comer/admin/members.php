<?php
session_start();

$pageTitle= 'Members';  
if (isset($_SESSION['Username'])) {
    
   

   include'init.php';

   $do= isset($_GET['do']) ? $_GET['do'] : 'Manage';

   if($do=='Manage'){
    //Manage page

   }elseif ($do=='Edit'){ ?>


    <h1 class="text-center">Edit Member </h1>
    <div class="container">
					<form class="form-horizontal" action="?do=Update" method="POST">
						<input type="hidden" name="userid" value="<?php echo $userid ?>" />
						<!-- Start Username Field -->
						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10 col-md-4">
								<input type="text" name="username" class="form-control"  autocomplete="off"/>
							</div>
						</div>
						<!-- End Username Field -->
						<!-- Start Password Field -->
						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10 col-md-4">
								<input type="hidden" name="oldpassword" value="<?php echo $row['Password'] ?>" />
								<input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="Leave Blank If You Dont Want To Change" />
							</div>
						</div>
						<!-- End Password Field -->
						<!-- Start Email Field -->
						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10 col-md-4">
								<input type="email" name="email"  class="form-control"/>
							</div>
						</div>
						<!-- End Email Field -->
						<!-- Start Full Name Field -->
						<div class="form-group form-group-lg">
							<label class="col-sm-2 control-label">Full Name</label>
							<div class="col-sm-10 col-md-4">
								<input type="text" name="full" class="form-control" />
							</div>
						</div>
						<!-- End Full Name Field -->
						<!-- Start Submit Field -->
						<div class="form-group form-group-lg">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" value="Save" class="btn btn-primary btn-lg" />
							</div>
						</div>

   </form>
   </div>



   <?php
   }


   
   
   include  $tpl . "footer.php";

}else{

    header('Location: index.php');
    exit();
}