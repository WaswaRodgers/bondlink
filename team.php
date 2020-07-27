<?php 
///////////////////////////////////////////////////////////////////////////////////
//       **Designed by: Waswa Rodgers**                                          //
//       **Date launched: 30/07/2020**                                          //
//       **Client: Bondlink Experts Co. Ltd.**                                   //
//                                                                               //
//                                                                                //
////////////////////////////////////////////////////////////////////////////////////

    include_once('includes/header.php'); 
    
?>

<style type="text/css">
	a{
		text-decoration: none;
		color: #fff;
	}

	section{
		padding: 10rem 0;
		background-color: #fff;
	}

	.heading {
		text-transform: uppercase;
		font-size: 3.5em;
		letter-spacing: 3px;
		margin-right: -3px;
		margin-bottom: 5rem;
		text-align: center;
		color: #333;
		position: relative;
	}

	.heading::after {
		content: '';
		width: 10rem;
		height: .8rem;
		background-color: #45e19f;
		position: absolute;
		bottom: -2rem;
		left: 50%;
		transform: translateX(-50%);
		border-radius: 2rem;
	}

	.card-wrapper {
		display: flex;
		align-items: center;
		align-content: center;
		flex-direction: column;
	}

	.card {
		width: 32rem;
		background-color: #ebeef8;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		margin: 2rem 0;
		box-shadow: .5rem .5rem 3rem rgb(0,0,0,0.2);
	}

    .card .card-img {
        width: 100%;
        height: 26rem;
        object-fit: cover;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 78%, 0% 100%);
        clip-path: polygon(0 0, 100% 0, 100% 78%, 0% 100%);
    }

    .profile-img {
    	width: 15rem;
    	height: 15rem;
    	object-fit: cover;
    	border-radius: 50%;
    	margin-top: -11rem;
    	z-index: 999;
    	border: 1rem solid #ebeef8;
    }

</style>

<section>
	<div class="container">
		<h1>Meet The Team</h1>
		<div class="card-wrapper">
			<div class="card">
				<img src="images/service_img1.png" alt="Card-background" class="card-img">
				<img src="images/service_img1.png" alt="Profile-image" class="profile-img">
				<h2>Waswa Rodgers</h2>
				<p class="job-title">Web Designer</p>
				<p class="about">The guy is cool. The guy is cool. The guy is cool. The guy is cool. The guy is cool.</p>
				<a href="#" class="btn">Contact</a>
				<ul class="social-media">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				</ul>
			</div>

			<div class="card">
				<img src="images/service_img1.png" alt="Card-background" class="card-img">
				<img src="images/service_img1.png" alt="Profile-image" class="profile-img">
				<h2>Nasimiyu Damarys</h2>
				<p class="job-title">Typist</p>
				<p class="about">The girl is cool. The girl is cool. The girl is cool. The girl is cool. The girl is cool.</p>
				<a href="#" class="btn">Contact</a>
				<ul class="social-media">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				</ul>
			</div>

			<div class="card">
				<img src="images/service_img1.png" alt="Card-background" class="card-img">
				<img src="images/service_img1.png" alt="Profile-image" class="profile-img">
				<h2>Nakhisa Julius</h2>
				<p class="job-title">Financial Advisor</p>
				<p class="about">The guy is cool. The guy is cool. The guy is cool. The guy is cool. The guy is cool.</p>
				<a href="#" class="btn">Contact</a>
				<ul class="social-media">
					<li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<?php include_once('includes/footer.php'); ?>
<script type="text/javascript" src="js/all.js"></script>