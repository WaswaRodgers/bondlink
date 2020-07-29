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
	.outer {
		min-height: 500px;
		margin-top: 3px;
	}

	.pricingTable {
		background: linear-gradient(-30deg, #690657,#baefb3);
		text-align: center;
		padding: 30px 12px 12px;
		margin: 0 15px;
		border-radius: 20px;
		box-shadow: 0 0 20px -5px rgba(0,0,0,0.2);
		overflow: hidden;
		position: relative;
		z-index: 1;
	}

	.pricingTable:before {
		content: '';
		background: linear-gradient(30deg, #baefb3, #690657);
		height: 100%;
		width: 100%;
		position: absolute;
		left: 0;
		top: 0;
		z-index: -1;
		clip-path: polygon(0 0, 0% 100%, 100% 0);
	}

	.pricingTable .pricingTable-header {
		color: #fff;
		margin: 0 0 20px 0;
	}

	.pricingTable .price-value .amount {
		font-size: 30px;
		font-weight: 600;
		vertical-align: top;
		display: inline-block;
	}

	.pricingTable .price-value .duration {
		font-size: 18px;
		font-weight: 600;
		font-style: italic;
		letter-spacing: 1px;
		text-transform: capitalize;
		display: block;
	}

	.pricingTable .pricing-content {
		padding: 35px 10px 30px;
		border-radius: 0 0 20px 20px;
		overflow: hidden;
		position: relative;
	}

	.pricingTable .pricing-content:before {
		content: '';
		border-color: #fff;
		height: 100px;
		width: 150px;
		border-radius: 100% 100% 0 0;
		transform: translateX(-50%);
		position: absolute;
		left: 50%;
		top: 0;
		z-index: -1;
	}

	.pricingTable .title {
		color: #690657;
		font-size: 35px;
		font-weight: 700;
		letter-spacing: 1px;
		text-transform: uppercase;
		margin: 0 0 20px;
	}

	.pricingTable .pricing-content ul {
		text-align: left;
		padding: 0;
		margin: 0;
		list-style: none;
		display: inline-block;
	}

	.pricingTable .pricing-content ul li{
		color: #555;
		font-size: 16px;
		font-weight: 600;
		line-height: 25px;
		text-transform: uppercase;
		padding: 0 0 0 22px;
		margin: 0 0 15px;
		position: relative;
	}

	.pricingTable .pricing-content ul li:last-child{
		margin: 0;
	}

	.pricingTable .pricing-content ul li:before{
		content: "\f005";
		color: #690657;
		font-size: 13px;
		font-weight: 900;
		line-height: 22px;
		position: absolute;
		left: 0;
		top: 0;
	}

	.pricingTable .pricingTable-signup a{
		color: #fff;
		background: rgba(255,255,255,0.15);
		font-size: 20px;
		font-weight: 600;
		text-transform: uppercase;
		letter-spacing: 1px;
		padding: 12px 23px;
		border-radius: 0 0 20px 20px;
		display: inline-block;
		transition: all 0.3s;
	}

	.pricingTable .pricingTable-signup i{
		margin-left: 7px;
	}

	.pricingTable .pricingTable-signup a:hover{
		background: transparent;
		text-shadow: 0 0 3px rgba(0,0,0,0.2);
		box-shadow: 0 -3px 5px rgba(0,0,0,0.2) inset;
	}

	.pricingTable.blue {
		background: linear-gradient(-30deg, #1888e1, #73daef);
	}

	.pricingTable.blue:before {
		background: linear-gradient(30deg, #73daef, #1888e1);
	}

	.pricingTable.blue .title,
	.pricingTable.blue .pricing-content ul li:before {
		color: #1888e1;
	}

	.pricingTable.orange {
		background: linear-gradient(-30deg, #f47004, #f7a562);
	}

	.pricingTable.orange:before {
		background: linear-gradient(30deg, #f7a562, #f47004);
	}

	.pricingTable.orange .title,
	.pricingTable.orange .pricing-content ul li:before {
		color: #f47004;
	}

	@media only screen and (max-height: 990px) {
		.pricingTable{
			margin: 0 0 40px;
		}
	}






</style>

<div class="container">
	<div class="outer">
		<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="pricingTable blue">
				<div class="pricingTable-header">
					<div class="price-value">
						<span class="amount">Ksh. 5000.00</span>
						<span class="duration">Max. 180 days.</span>
					</div>
				</div>
				<div class="pricing-content">
					<h5 class="title">Bid</h5>
					<ul>
						<li>This is fine.</li>
						<li>This is fine.</li>
						<li>This is fine.</li>
						<li>This is fine.</li>
					</ul>
				</div>
				<div class="pricingTable-signup">
					<a href="#">Signup<i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="pricingTable orange">
				<div class="pricingTable-header">
					<div class="price-value">
						<span class="amount">Ksh. 5000.00</span>
						<span class="duration">Max. 180 days.</span>
					</div>
				</div>
				<div class="pricing-content">
					<h5 class="title">Performance</h5>
					<ul>
						<li>This is fine.</li>
						<li>This is fine.</li>
						<li>This is fine.</li>
						<li>This is fine.</li>
					</ul>
				</div>
				<div class="pricingTable-signup">
					<a href="#">Signup<i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="pricingTable green">
				<div class="pricingTable-header">
					<div class="price-value">
						<span class="amount">Ksh. 5000.00</span>
						<span class="duration">Max. 180 days.</span>
					</div>
				</div>
				<div class="pricing-content">
					<h5 class="title">APGs</h5>
					<ul>
						<li>This is fine.</li>
						<li>This is fine.</li>
						<li>This is fine.</li>
						<li>This is fine.</li>
					</ul>
				</div>
				<div class="pricingTable-signup">
					<a href="#">Signup<i class="fa fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<?php include_once('includes/footer.php'); ?>