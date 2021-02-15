<?php session_start(); include('app/api.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="text/image" href="assets/img/logo.jpg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Mylamworld</title>
	<link rel="stylesheet" href="assets/css/plugin.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</head>
<body>
	<?php include('assets/inc/head.php') ?>

	<section class="homebg">
        <div class="one">
            <div class="over">
                <h3>Welcome to Love Ambassadors Ministries</h3>
                <p>where friends become family!</p>
                <div class="thim">
                    <a href="#join" class="scroll">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                </div>
            </div>
        </div>
	</section>

	<section class="welcome">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Welcome to the LAM Experience</h1>
					<p>God has given us a mandate to raise great leaders, who disciple the nations through th life of the Spirit, excellence and Prosperity. It is top priority for us that you partake of wholesome worship, edifying teachings that build you up and also engaged in positive interactions within the godly environmentof the Church. We invite you to peruse our website and get to know us a bit better - our service times and locations. We look forward to having the pleasure of hosting you and your family soon, either in person at one of our branch churches or virtually. </p>
					<span>Pastor David &amp; Joan Ifechukwu</span>
				</div>
			</div>
		</div>	
	</section>

	<section class="service">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-7 col-md-9">
	                <div class="love">
	                    <h3>We Love You, We Treasure You, You Are Royalty!</h3>
	                </div>
	            </div>
	            <div class="col-sm-5 col-md-3">
	                <a href="churches" class="btn"><i class="fa fa-angle-double-right"></i> SEE CHURCHES </a><br>
	            </div>
	        </div>
	    </div>
	</section>

	<section class="three">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<a href="./" class="three_one mb-4">
						<img src="assets/img/1.jpg" class="img-fluid" alt="three_one">
						<div class="three_white">
							<p>Experience the Word and the Miraculous</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="./" class="three_one">
						<img src="assets/img/3.jpg" class="img-fluid" alt="three_one">
						<div class="three_white">
							<p>Be Transformed by the Truth of God's Word</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="./" class="three_one">
						<img src="assets/img/2.jpg" class="img-fluid" alt="three_one">
						<div class="three_white">
							<p>Be Changed By The Power of Pure Undiluted Worship</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="./" class="three_one">
						<img src="assets/img/4.jpg" class="img-fluid" alt="three_one">
						<div class="three_white">
							<p>Experience the Warmth of True Friendship</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="./" class="three_one">
						<img src="assets/img/5.jpg" class="img-fluid" alt="three_one">
						<div class="three_white">
							<p>Find a place to manifest God's Light to your World</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-6">
					<a href="./" class="three_one">
						<img src="assets/img/6.jpg" class="img-fluid" alt="three_one">
						<div class="three_white">
							<p>Find a godly environment for your gifts to blossom</p>
						</div>
					</a>
				</div>
			</div>
		</div>	
	</section>

 	<section class="teachings">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Get the Latest Teachings</h1>
					<p>Faith Capsules, Prophetic Voice of Victory and more from Pastors David &amp; Joan Ifechukwu. Also features worship sessions by seasoned Ministers in the Ministry.</p>
				</div>
				<div class="col-12">
					<div class="ecoms">
						<?php $call2 = $app->allmyaudios();if($call2 !=""){if($call2){while($fetch2 = mysqli_fetch_object($call2)){ ?>
	                    <div class="ecom" title="How The Grace and Power of God Works">
	                    	<div class="ecom_img">
	                    		<img src="assets/img/moneytalk.jpg" class="img-fluid" alt="image" />
	                    	</div>
	                    	<div class="ecom_body">
	                    		<h4><?php echo $fetch2->audio_title ?></h4>
	                    		<p><?php echo $fetch2->audio_descr ?></p>
	                    		<p><?php echo $fetch2->audio_author ?></p>
	                    		<p>₦ <?php echo $fetch2->audio_price ?></p>
	                    		<form method="post">
	                    			<input type="hidden" name="id" value="<?php echo $fetch2->audio_id ?>">
                            		<input type="hidden" name="name" value="<?php echo $fetch2->audio_title ?>">
		                            <input type="hidden" name="price" value="<?php echo $fetch2->audio_price ?>">
		                            <input type="hidden" name="image" value="<?php echo $fetch2->audio_img ?>">
		                            <input type="hidden" name="author" value="<?php echo $fetch2->audio_author ?>">
		                            <input type="hidden" name="category" value="<?php echo $fetch2->audio_category ?>">
		                            <input type="hidden" name="descr" value="<?php echo $fetch2->audio_descr ?>">
	                    			<input type="hidden" name="item" value="<?php echo $fetch2->audio_id ?>">
	                    			<button name="create_cart" class="btn">Add To Cart</button>
	                    		</form>
	                    	</div>
	                    </div>
	                    <?php }}} ?>
	                </div>
				</div>
				<div class="col-12">
					<a href="#" class="btn">Shop For More</a>
				</div>
			</div>
		</div>
	</section>

	<section class="churches" id="join">
	    <div class="overlay">
	        <div class="col-xs-12 col-sm-12 col-md-12"><div class="join"></div></div>
	        <div class="container">
	            <div class="row text-center">
	                <div class="col-md-4 col-sm-4 col-xs-4">
	                    <a href="churches" title="LAM AWKA"><div class="church awka"></div></a>
	                </div>
	                <div class="col-md-4 col-sm-4 col-xs-4">
	                    <a href="churches#lagos" title="LAM LAGOS"><div class="church lagos"></div></a>
	                </div>
	                <div class="col-md-4 col-sm-4 col-xs-4">
	                    <a href="churches.#abj" title="LAM ABUJA"><div class="church abuja"></div></a>
	                </div>
	            </div>
	        </div>
	        <div class="container">
	            <div class="row text-center">
	                <div class="col-md-4 col-sm-4 col-xs-4">
	                    <a href="churches#enugu" title="LAM ENUGU"><div class="church enugu"></div></a>
	                </div>
	                <div class="col-md-4 col-sm-4 col-xs-4">
	                    <a href="churches#phc" title="LAM PORT HARCOURT"><div class="church phc"></div></a>
	                </div>
	                <div class="col-md-4 col-sm-4 col-xs-4">
	                    <a href="churches#uyo" title="'LAM AWKA 2"><div class="church uyo"></div></a>
	                </div>
	            </div>
	        </div>
	        <div class="col-12">
				<a href="#" class="btn">LOCATE US</a>
			</div>    
	    </div>
	</section>

	<?php include('assets/inc/foot.php'); ?>

	<script src="assets/js/plugin.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>