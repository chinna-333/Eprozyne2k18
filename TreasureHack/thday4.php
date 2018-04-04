<?php
$user_id=$this->session->userdata('user_id');
$payment_id=$this->session->userdata('payment_id');
$roundcount = $this->session->userdata('th_data');

if(!$user_id && !$payment_id && !$roundcount){

  redirect('portal/login_view');
}
else {  if($roundcount == 1) { redirect('portal/treasure_hack_2');}
	elseif ($roundcount ==2) { redirect('portal/treasure_hack_3');}
	elseif ($roundcount ==3) { redirect('portal/treasure_hack_4');}
	elseif ($roundcount ==4) { redirect('portal/treasure_hack_5');}
	

	}
 


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>EPROZYNE 2K18 | Treasure Hack | Question 4</title>
	<style type="text/css">
		body{
			display: flex;
			align-items: center;
			justify-content: center;
			background-image: url("<?php echo base_url(); ?>/th/backimg.jpeg");
		}
		#container{
			margin-top: 80px;
			width: 90%;
		}
		#ques{
			margin-bottom: 30px;
			color: white;
			border:dashed #333;
			padding:7px;
			background-color: rgba(0,0,0,0.2);
			font-size: 25px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		#question{
			font-size: 50px;
			color: white;
		}
		#tab{
			margin-left: 40px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/th/navbar.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-xl">
	  <div class="container-fluid">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="https://eprozyne2k18.in/"><div class="brandlogo"><div class='navbar-brand' id='brandtext'>Eprozyne</div></div></a>
	    </div>
	    <div>
	      <div class="collapse navbar-collapse" id="myNavbar">
	        <ul class="nav navbar-nav navbar-right center">
	          <li><a href="https://eprozyne2k18.in">Home</a></li>
	          <li><a href="https://eprozyne2k18.in#section2">Events</a></li>
	          <li><a href="https://eprozyne2k18.in#section3">About</a></li>
	          <li><a href="https://eprozyne2k18.in#section4">Contact</a></li>
	          <li><a href="https://eprozyne2k18.in/eprozyne/portal">Register</a></li>
          	  <li><a href="https://eprozyne2k18.in/eprozyne/portal/login_view">Login</a></li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</nav>
	<div id="container">
	 <?php
              $err_msg= $this->session->flashdata('err_msg'); 
                  
                  if($err_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $err_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
	<table class="table table-bordered table-striped" style="background-color: white">
			 <tr>
            
         <td><a href="<?php echo base_url('portal/home');?>" >  <button type="button" class="btn-primary">Home</button></a></td><td>Hello <?php echo $this->session->userdata('user_name'); ?></td>
            <td> You have logged in with <strong> <?php echo $this->session->userdata('user_email');  ?></strong></td><td> <a href="<?php echo base_url('portal/password'); ?>">Change Password</a></td> 
			
			<td><a href="<?php echo base_url('portal/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a></td></tr>
			<?php $ca = $this->session->userdata('user_ca'); if ( $ca == 1) { echo " <tr><td colspan='3'> You have opted for Campus Ambassador for "; echo $this->session->userdata('user_college'); echo "<td colspan='2'><a href ='".base_url()."portal/ca_teamlist/'>Check your Team </a></td></tr>"; } ?></td>
          <?php $ei = $this->session->userdata('user_ei'); $cast = $this->session->userdata('user_cast');
		  if ( $cast == 0 ){
		  if ( $ei == 1) { echo " <tr><td colspan='4'> Please select you  <a href=".base_url()."portal/ca_select/>Campus Ambassador</a>  <td></tr>"; }} else { echo " <tr><td colspan='4'> <a href=".base_url()."portal/ca_info/>Your Campus Ambassador Info </a>  <td></tr>";   } ?>	
			</table>
		<center><img src="<?php echo base_url(); ?>/th/trh33k.png" class="img-responsive"></center>
		<center id="question">Question 4</center>
		<div id="ques">
				<div>a &rarr; c</div>
				<div>b &rarr; d</div>
				<div>c &rarr; e</div>
				<div style="display: flex;flex-direction: column;line-height: 8px;">
					<span>.</span>
					<span>.</span>
					<span>.</span>
					<span>.</span>
					<span>.</span>
				</div>
				<div>y &rarr; a</div>
				<div>z &rarr; b</div>
				<div>Find the answer in the sentence below:</div>
				<div>rfc ylqucp gq kyfcqfrcbbw</div>
		</div>
		<form class="form-horizontal" action="<?php echo base_url('portal/treasure_hack_check'); ?>" method="POST">
		  <div class="form-group">
		    <label class="control-label col-sm-2" style="color: white;">Enter Answer</label>
		    <div class="col-sm-8">
			<input type="hidden" name="qid" value="1" /> 
		      <input type="textarea" class="form-control" id="ans" name ="rewsna" placeholder="Enter Answer" />
			  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
		    </div>
		  </div>
		  <center>
		  <div class="form-group"> 
		    <div class="col-sm-12">
		      <button type="submit" class="btn btn-default">Submit</button>
		    </div>
		  </div>
		  </center>
		</form>
	</div>
</body>
</html>