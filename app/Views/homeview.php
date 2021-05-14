<?= $this->extend("layouts/main"); ?>

<?= $this->section("content"); ?>

	<!--baner section-->
	<section class="baner banner">
		<div class="baner-slider">
			<div class="flexslider left">
				<ul class="slides">
					<li>
						<img src="<?= base_url(); ?>/public/assets/images/baner1.jpg" alt="baner">
						<div class="meta">
							<h1>Al Roumi</h1>
							<h2>Serving the industry since year 1990</h2>
						</div>
					</li>
					<li>
						<img src="<?= base_url(); ?>/public/assets/images/baner2.jpg" alt="baner">
						<div class="meta">
							<h1>Al Roumi</h1>
							<h2>One of the biggest oil & gas field supply & services company</h2>
						</div>
					</li>
					<li>
						<img src="<?= base_url(); ?>/public/assets/images/baner3.jpg" alt="baner">
						<div class="meta">
							<h1>Al Roumi</h1>
							<h2>Representing global brands in the Emirates of Abu Dhabi</h2>
						</div>
					</li>
					<li>
						<img src="<?= base_url(); ?>/public/assets/images/baner4.jpg" alt="baner">
						<div class="meta">
							<h1>Al Roumi</h1>
							<h2>ADNOC ICV certified</h2>
							<div class="icv">
								<img src="<?= base_url(); ?>/public/assets/images/icv.jpg" alt="">
							</div>
						</div>
					</li>
					<li>
						<img src="<?= base_url(); ?>/public/assets/images/baner5.jpg" alt="baner">
						<div class="meta">
							<h1>Al Roumi</h1>
							<h2>ISO certified Company</h2>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!--baner section ends-->
	<!--welcome section-->
	<section class="welcome">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-5 welcome-left animatedParent" data-sequence='500'>
					<div class="ab-left-cont animated fadeInUpShort" data-id='1'>
						<div class="ab-lines animated fadeInUpShort" data-id='2'></div>
						<div class="ab-lines1 animated fadeInUpShort" data-id='3'></div>
						<img src="<?= base_url(); ?>/public/assets/images/about-left.jpg" alt="about">
						<div class="ab-small">
							<img src="<?= base_url(); ?>/public/assets/images/about-left-small.jpg" alt="about">
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-7 welcome-right">
					<div class="ab-right-cont animatedParent" data-sequence='500'>
						<h1 class="animated fadeInUpShort" data-id='1'>Who <span>We Are</span></h1>
						<p class="animated fadeInUpShort" data-id='2'>Al Roumi General Trading, is exclusively an oilfield supply and services company.</p>
						<p class="animated fadeInUpShort" data-id='3'><span>Al Roumi has been found in the market since year 1990, 100% owned local
                                company serving
                                the oil & gas industry with the support of around thirty (30) international principle
                                companies; we
                                represent exclusively.</span>
						</p>
						<p class="animated fadeInUpShort" data-id='4'><span>Al Roumi is an ADNOC ICV certified company.</span>
						</p>
						<br> <a href="about.html" class="r-more animated fadeInUpShort" data-id='5'>Read More <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon.png"
                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow.png"
                                 alt="right-arrow"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="shape-anim">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
				<linearGradient id="PSgrad_0" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
					<stop offset="0%" stop-color="#afd3e8" stop-opacity="1" />
					<stop offset="100%" stop-color="#eaf7fe)" stop-opacity="1" />
				</linearGradient>
				<path fill="url(#PSgrad_0)" d="">
					<animate repeatCount="indefinite" attributeName="d" dur="5s" values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z	" />
				</path>
			</svg>
		</div>
	</section>
	<!--welcome section ends-->
	<!--principle section-->
	<section class="principle">
		<div class="main-box-1 equal-height">
			<div class="col-lg-3 col-sm-6 col-md-3 col-xs-12 pri-comp principle-out">
				<div class="pri-cont animatedParent" data-sequence='500'>
					<h1 class="animated fadeInUpShort" data-id='1'><span>Wireline</span> COMPANY</h1>
					<p class="animated fadeInUpShort" data-id='2'>Al Roumi Wireline Company, started operations in March 1992 primarily to offer its services for its principle company Gyrodata International LLC.</p> <a href="wireline-company.html" class="r-more animated fadeInUpShort" data-id='5'>Read More <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon.png"
                                 alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow.png"
                             alt="right-arrow"></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  principle-out prin2 animatedParent">
				<div class="princi-mid animated fadeInDownShort">
					<div class="bottom-line"></div>
					<img src="<?= base_url(); ?>/public/assets/images/princi-mid.jpg" alt="priciple">
				</div>
			</div>
		</div>
		<div class="main-box-2 equal-height">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12  pri-comp principle-out">
				<div class="pri-cont animatedParent" data-sequence='500'>
					<h1 class="animated fadeInUpShort" data-id='1'><span>Airloop</span> Systems</h1>
					<p class="animated fadeInUpShort" data-id='2'>Al Roumi General Trading is providing Airloop & Wireless Gas Detection System Services for the onshore & offshore fields since year 1999.</p>
					<p class="animated fadeInUpShort" data-id='3'>We have Onshore packages as well as Offshore packages plus qualified Airloop engineers ready to mobilize when it is required.</p> <a href="airloop-system-services.html" class="r-more animated fadeInUpShort" data-id='5'>Read More <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon.png"
                                 alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow.png"
                             alt="right-arrow"></a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 principle-out prin2 animatedParent">
				<div class="princi-mid animated fadeInDownShort">
					<div class="bottom-line"></div>
					<img src="<?= base_url(); ?>/public/assets/images/princi-mid2.jpg" alt="priciple">
				</div>
			</div>
		</div>
	</section>
	<!--principle section ends-->
	<!--why al roumi section-->
	<section class="why-al fleet">
		<div class="container">
			<div class="row animatedParent">
				<div class="col-sm-8 col-md-8 col-sm-12 fleet-left animatedParent">
					<div class="owl-princi owl-carousel">
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/client7.jpg" alt="client">
								<div class="fleet-text">
									<h3>3C Metal Middle East</h3>
									<div class="pri-cont"> <a href="https://www.3cmetal.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<img src="<?= base_url(); ?>/public/assets/images/client15.jpg" alt="client">
								<div class="fleet-text">
									<h3>ACSM Agencia Martima SL</h3>
									<div class="pri-cont"> <a href="http://acsmships.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='6'>
								<img src="<?= base_url(); ?>/public/assets/images/client6.jpg" alt="client">
								<div class="fleet-text">
									<h3>Aegide Vision</h3>
									<div class="pri-cont"> <a href="https://www.aegide-international.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<img src="<?= base_url(); ?>/public/assets/images/client11.jpg" alt="client">
								<div class="fleet-text">
									<h3>Baker Engineering</h3>
									<div class="pri-cont"> <a href="https://www.bakerengineering.com.sg/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='2'>
								<img src="<?= base_url(); ?>/public/assets/images/client2.jpg" alt="client">
								<div class="fleet-text">
									<h3>BYHO Valve Co., Ltd.</h3>
									<div class="pri-cont"> <a href="http://www.byhovalve.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<img src="<?= base_url(); ?>/public/assets/images/client17.jpg" alt="client">
								<div class="fleet-text">
									<h3>Derrick Solutions International</h3>
									<div class="pri-cont"> <a href="http://derricksolutions.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='5'>
								<img src="<?= base_url(); ?>/public/assets/images/client5.jpg" alt="client">
								<div class="fleet-text">
									<h3>Dietswell</h3>
									<div class="pri-cont"> <a href="https://www.dietswell.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/client20.jpg" alt="client">
								<div class="fleet-text">
									<h3>Gastronics Inc</h3>
									<div class="pri-cont"> <a href="https://www.gastronics.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/client18.jpg" alt="client">
								<div class="fleet-text">
									<h3>Gyrodata</h3>
									<div class="pri-cont"> <a href="https://www.gyrodata.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='3'>
								<img src="<?= base_url(); ?>/public/assets/images/client3.jpg" alt="client">
								<div class="fleet-text">
									<h3>Hebei Longway Petroleum Equipment Co., Ltd.</h3>
									<div class="pri-cont"> <a href="http://en.lwdrill.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<img src="<?= base_url(); ?>/public/assets/images/client19.jpg" alt="client">
								<div class="fleet-text">
									<h3>Kingston Systems</h3>
									<div class="pri-cont"> <a href="https://kingston-systems.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/client16.jpg" alt="client">
								<div class="fleet-text">
									<h3>Navtec Marine Services</h3>
									<div class="pri-cont"> <a href="http://navtechmarineservices.com/about.html" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<img src="<?= base_url(); ?>/public/assets/images/client13.jpg" alt="client">
								<div class="fleet-text">
									<h3>Rhodek Quality Materials.</h3>
									<div class="pri-cont"> <a href="http://www.rhodekpumps.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<img src="<?= base_url(); ?>/public/assets/images/client22.jpg" alt="client">
								<div class="fleet-text">
									<h3>Scotgrip (UK) Limited</h3>
									<div class="pri-cont"> <a href="https://www.scotgrip.com/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/11-1.jpg" alt="client">
								<div class="fleet-text">
									<h3>Sea Deep Shipyard Pte Ltd.</h3>
									<div class="pri-cont"> <a href="https://seadeep.com.sg/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/11.jpg" alt="client">
								<div class="fleet-text">
									<h3>Sea Hercules Cranes Pte. Ltd.</h3>
									<div class="pri-cont"> <a href="https://seadeep.com.sg/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/client12.jpg" alt="client">
								<div class="fleet-text">
									<h3>Uniclimb</h3>
									<div class="pri-cont"> <a href="https://uniclimb.com/about-us/" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<img src="<?= base_url(); ?>/public/assets/images/client8.jpg" alt="client">
								<div class="fleet-text">
									<h3>Young Heung Iron &amp; Steel Co.</h3>
									<div class="pri-cont"> <a href="http://www.youngwire.com/eng/main/main.asp" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="fleet-box animated fadeInUpShort" data-id='7'>
								<img src="<?= base_url(); ?>/public/assets/images/client23.jpg" alt="client">
								<div class="fleet-text">
									<h3>Union Cement Norcem Company (W.L.L.)</h3>
									<div class="pri-cont"> <a href="http://www.ucnrak.com/home.html" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>
									</div>
								</div>
							</div>
							<div class="fleet-box animated fadeInUpShort" data-id='8'>
								<!-- <img src="<?= base_url(); ?>/public/assets/images/client8.jpg" alt="client">

                                <div class="fleet-text">

                                    <h3>Young Heung Iron &amp; Steel Co.</h3>



                                    <div class="pri-cont"> <a href="http://www.youngwire.com/eng/main/main.asp" target="_blank" class="r-more animated fadeInUpShort" data-id='5'>View Website <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon-pop.png"
                                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow-pop.png"
                                                 alt="right-arrow"></a>

                                    </div>

                                </div> -->
							</div>
						</div>
						<!-- //newwwwww  -->
					</div>
				</div>
				<div class="col-lg-4 col-md-12 fleet-right animated fadeInUpShort" data-id='1'>
					<h4>Our </h4>
					<h1>Principle <br> Companies</h1>
					<p>We are representing various principle with whom we have made an exclusive Agency Agreements.</p>
					<div class="pri-cont"> <a href="principle-companies.html" class="r-more animated fadeInUpShort" data-id='5'>Read More <span class="hex"><img src="<?= base_url(); ?>/public/assets/images/hexagon.png"
                                     alt="button"></span> <img src="<?= base_url(); ?>/public/assets/images/ab-right-arrow.png"
                                 alt="right-arrow"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--why al roumi section ends-->
	<!--clients section-->
	<section class="clients">
		<div class="container animatedParent" data-sequence='500'>
			<div class="quesions animated fadeInUpShort" data-id='1'>
				<h3>Do you hav any queries or Questions ?</h3>
				<a href="contact.html">Send a Message</a>
			</div>
		</div>
	</section>
	<!--clients section ends-->

<?= $this->endsection(); ?>

