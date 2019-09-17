<?php 
include 'admin/config/connection.php';
if(isset($_POST['send'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query=$con->query("INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");
}
 ?> 






<section class="services white-background " id="eight" style="color: white;box-shadow: 0px 0px 10px 3px pink;">
	<form method="POST" action="?page=contact" >
<div class="container contact-form" style="	color: white;padding: 15px;">
	<h1>Contact form</h1>
	<hr>
	<div class="row">
		<div class="col-md-6">
			<address>Kathmandu, Nepal</address>
			<p>Email:- rainbow.airlines@gmail.com</p>
			<p>Phone:061-533245</p>
		</div>

		<div class="col-md-6" >
			<div class="form-group" >				
			<label>Name</label>
			<input type="text" class="form-control" name="name" style="background: white;" >
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="text" name="email" class="form-control" style="background: white;" required>
			</div>
			<div class="form-group">
				<label>Message</label>
				<input type="text" name="message" textarea class="form-control" style="background: white;" rows="5" required="">
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-primary btn-custom" name="send" style="">Send</button>
			</div>
		</div>
		
	</div>
	
</div> 
</form>       
</section>
 