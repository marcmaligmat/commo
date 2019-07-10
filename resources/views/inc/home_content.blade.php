<section id="content">

	<div class="content-wrap">

		<a href="#" class="button button-full button-purple center tright header-stick bottommargin-lg">
			<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin col-md-4 offset-md-4">
				<div class="input-group divcenter">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="icon-line-search"></i></div>
					</div>
					<input type="" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="What are you looking for?">
					<div class="input-group-append">
						<button class="btn btn-success" type="submit">Search</button>
					</div>
				</div>
			</form>
		</a>

		<div class="container clearfix">

			<div class="heading-block center">
				<h1>Recent Articles</h1>
				<span>We almost blog regularly about this &amp; that.</span>
			</div>

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin clearfix">

				<!-- Posts
				============================================= -->
				<div id="posts" class="small-thumbs">
					@foreach($blogs as $blog)
					<div class="entry clearfix">
						<div class="entry-image">
							<a href="images/portfolio/full/17.jpg" data-lightbox="image"><img class="image_fade" src="{{asset('/storage/blogs/'.str_replace(' ','-',$blog->title).'/main_pic.jpg')}}" alt="Standard Post with Image"></a>
						</div>
						<div class="entry-c">
							<div class="entry-title">
								<h2><a href="/blog/posts/{{strtolower(str_replace(' ','-',$blog->title))}}">{{$blog->title}}</a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i> {{date_format($blog->created_at,"d F Y")}}</li>
								<li><a href="#"><i class="icon-user"></i> {{ucfirst($blog->user->name)}}</a></li>
								<li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
								<li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
								<li><a href="#"><i class="icon-camera-retro"></i></a></li>
							</ul>
							<div class="entry-content">
								{!! str_limit($blog->body,300) !!}
								<br>
								<a href="/blog/posts/{{strtolower(str_replace(' ','-',$blog->title))}}" class="more-link">Read More</a>
							</div>
						</div>
					</div>
					@endforeach

				</div>



				<!-- Pagination
				============================================= -->
				<div class="row mb-3">
					<div class="col-12">
						<a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
						<a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
					</div>
				</div>
				<!-- .pager end -->

			</div><!-- .postcontent end -->
					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget-twitter-feed clearfix">

								<h4>Twitter Feed</h4>
								<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
									<li></li>
								</ul>

								<a href="#" class="btn btn-secondary btn-sm fright">Follow Us on Twitter</a>

							</div>

							<div class="widget clearfix">

								<h4>Flickr Photostream</h4>
								<div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

							</div>

							<div class="widget clearfix">

								<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1">Popular</a></li>
										<li><a href="#tabs-2">Recent</a></li>
										<li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<div id="popular-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 35 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 24 Comments</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li><i class="icon-comments-alt"></i> 19 Comments</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-2">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<ul class="entry-meta">
															<li>10th July 2014</li>
														</ul>
													</div>
												</div>

											</div>
										</div>
										<div class="tab-content clearfix" id="tabs-3">
											<div id="recent-post-list-sidebar">

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
													</div>
												</div>

												<div class="spost clearfix">
													<div class="entry-image">
														<a href="#" class="nobg"><img class="rounded-circle" src="images/icons/avatar.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
													</div>
												</div>

											</div>
										</div>

									</div>

								</div>

							</div>

							<div class="widget clearfix">

								<h4>Carousel</h4>
								<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="#">
													<img src="{{asset('images/portfolio/4/3.jpg')}}" alt="Mac Sunglasses">
												</a>
												<div class="portfolio-overlay">
													<a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
												<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="portfolio-single.html">
													<img src="{{asset('images/portfolio/4/1.jpg')}}" alt="Open Imagination">
												</a>
												<div class="portfolio-overlay">
													<a href="{{asset('images/blog/full/1.jpg')}}" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single.html">Open Imagination</a></h3>
												<span><a href="#">Media</a>, <a href="#">Icons</a></span>
											</div>
										</div>
									</div>

								</div>


							</div>

							<div class="widget clearfix">

								<h4>Tag Cloud</h4>
								<div class="tagcloud">
									<a href="#">general</a>
									<a href="#">videos</a>
									<a href="#">music</a>
									<a href="#">media</a>
									<a href="#">photography</a>
									<a href="#">parallax</a>
									<a href="#">ecommerce</a>
									<a href="#">terms</a>
									<a href="#">coupons</a>
									<a href="#">modern</a>
								</div>

							</div>

						</div>

					</div><!-- .sidebar end -->

		</div>

	</div>

</section>