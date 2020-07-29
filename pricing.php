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


</style>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="pricingTable">
				<div class="pricingTable-header">
					<div class="price-value">
						<span class="amount">Ksh. 5000.00</span>
						<span class="duration">Max. 180 days.</span>
					</div>
				</div>
				<div class="pricing-content">
					<h5 class="title">Bid Bonds</h5>
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
			<div class="pricingTable">
				<div class="pricingTable-header">
					<div class="price-value">
						<span class="amount">Ksh. 5000.00</span>
						<span class="duration">Max. 180 days.</span>
					</div>
				</div>
				<div class="pricing-content">
					<h5 class="title">Performance Bonds</h5>
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
			<div class="pricingTable">
				<div class="pricingTable-header">
					<div class="price-value">
						<span class="amount">Ksh. 5000.00</span>
						<span class="duration">Max. 180 days.</span>
					</div>
				</div>
				<div class="pricing-content">
					<h5 class="title">Advanced Payment Guarantees</h5>
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
<?php include_once('includes/footer.php'); ?>