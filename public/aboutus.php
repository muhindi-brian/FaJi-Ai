<?php
// Include the header and menu files
include('header.php');
include('menu.php');
?>
<!DOCTYPE html>
<html>

<body>
	<?php include 'navbar.php'; //Include the navbar.php file for consistent navigation ?>
	<div class="container-fluid" style="margin-top: 30px;">
		<div class="row">
			<div class="col-md-12">
				<h2>About BrianeCode Consulting Services</h2>
				<p>BrianeCode Consulting Services is an ICT and travel services company with years of experience in both industries. We offer a range of services that can benefit individuals, businesses, and organizations. As a dedicated and reliable professional, we are committed to delivering high-quality services that meet your needs and exceed your expectations.</p>
				<p>Our team of experts has the technical and soft skills necessary to provide innovative solutions that help our clients achieve their goals and stay ahead of the competition. We have years of experience in both the ICT and travel industries, which has given us the expertise and knowledge to provide high-quality services to our clients. We maintain the highest standards of professionalism in all our interactions with clients and ensure that we exceed their expectations.</p>
				<p>At BrianeCode Consulting Services, we offer a wide range of services:</p>
				<form action="/public/services/" method="get">
					<select name="service" id="service">
						<option value="" disabled selected>Select a service</option>
						<option value="ict-consulting.php">ICT Consulting Services</option>
						<option value="software-development">Software Development</option>
						<option value="web-development">Web Development</option>
						<option value="mobile-app-development">Mobile App Development</option>
						<option value="e-commerce-solutions">E-commerce Solutions</option>
						<option value="project-management">Project Management</option>
						<option value="business-process-optimization">Business Process Optimization</option>
						<option value="travel-services">Travel Services</option>
					</select>
					<button type="submit">Go</button>
				</form>
				<p>Our pricing for each service varies depending on the scope of the project. We provide a detailed quote after assessing your requirements. Contact us today to learn more about how we can assist you in your ICT or travel needs.</p>
				<p>Thank you for considering BrianeCode Consulting Services. We look forward to working with you!</p>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; //Include the footer.php file for consistent footer ?>
</body>
</html>
