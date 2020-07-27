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

    .card h1 {
    	font-size: 2.5rem;
    	color: #333;
    	margin: 1.5rem 0;
    }

    .job-title {
    	color: #777;
    	font-size: 1.5rem;
    	font-weight: 300;
    }

    .about {
    	font-size: 1.5rem;
    	margin: 1.5rem 0;
    	font-style: italic;
    	text-align: center;
    	color: #333;
    }

    .card .btn {
    	padding: 1rem 2.5rem;
    	border-color: #445ae3;
    	border-radius: 2rem;
    	margin: 1rem 0;
    	text-transform: uppercase;
    	color: #eee;
    	font-size: 1.4rem;
    	transition: all .5s;
    }

    .card .btn:hover {
    	transform: translateY(-2px);
    	box-shadow: .5rem .5rem 2rem rgb(0,0,0,.2);
    }

    .card .btn:active {
    	transform: translateY(0);
    	box-shadow: none;
    }

    .social-media {
    	width: 100%;
    	list-style: none;
    	display: flex;
    	justify-content: space-evenly;
    	padding: 2rem 0;
    	margin-top: 1.5rem;
    	border-top: 1px solid rgb(0,0,0,.1);
    }

    .social-media i {
    	font-size: 3rem;

    }

    .fa-facebook-square {
    	color: #3b5999;
    }

    .fa-twitter-square {
    	color: #55acee;
    }

    .fa-instagram {
    	color: #e6683c;
    }

    .fa-google-plus-square {
    	color: #dd4b39;
    }

    .fa-facebook-square:hover,
    .fa-twitter-square:hover,
    .fa-instagram:hover,
    .fa-google-plus-square:hover {
    	color: #45e19f;
    }

    @media screen and (min-width: 700px) {
    	.card-wrapper {
    		flex-direction: row;
    		flex-wrap: wrap;
    		justify-content: center;
    		align-items: center;
    	}

    	.card {
    		margin: 2rem;
    	}

    	@keyframes fadeIn {
    		from {
    			opacity: 0;
    		}

    		to {
    			opacity: 1;
    		}
    	}

    	.card:nth-child(1) {
    		animation: fadeIn .5s .5s backwards;
    	}

    	.card:nth-child(2) {
    		animation: fadeIn .5s 1s backwards;
    	}

    	.card:nth-child(3) {
    		animation: fadeIn .5s 1.5s backwards;
    	}

    	.card:nth-child(4) {
    		animation: fadeIn .5s 2s backwards;
    	}
    }


</style>

<section>
	<div class="container">
		<h1>Meet The Team</h1>
		<div class="card-wrapper">
			<div class="card">
				<img src="images/service_img1.png" alt="Card-background" class="card-img">
				<img src="images/testimonial_img2.jpg" alt="Profile-image" class="profile-img">
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
				<img src="images/testimonial_img2.jpg" alt="Profile-image" class="profile-img">
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
				<img src="images/testimonial_img2.jpg" alt="Profile-image" class="profile-img">
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