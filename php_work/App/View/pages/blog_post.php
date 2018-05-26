<div class="blog_content">
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-8">
					<div class="blog_main_content">
						
						<!-- Blog Post -->
						<article class="blog_post">
							<div class="blog_post_image">
								<div class="blog_post_image_background" style="background-image:url(images/blog_1.jpg)"></div>
							</div>
							<div class="date_box d-flex flex-column align-items-center justify-content-center">
								<span>06 NOV 2017</span>
							</div>
							<h3 class="blog_post_title"><?php echo $this->postContent->title ?></h3>
							<div class="blog_post_meta">
								<span class="blog_post_author">by lore papp</span>
								<span class="blog_post_category">economy</span>
								<span class="blog_post_comments">2 comments</span>
							</div>
							<div class="blog_post_text">
								<?php echo $this->postContent->content; ?>
							</div>

							<!-- Blog Post Comments -->

							<div class="blog_post_comments">
								<div class="blog_post_subtitle comments_subtitle">comments</div>
								
								<!-- Comments -->
								<div class="blog_post_comments_container">

									<!-- Comment -->
									<div class="blog_post_comment d-flex flex-row">
										<div class="blog_post_comment_image"><img src="images/blog_post_comment_1.jpg" alt=""></div>
										<div class="blog_post_comment_content">
											<div class="blog_post_comment_meta">
												<div class="blog_post_comment_name"><a href="#">Michael Smith</a></div>
												<div class="blog_post_comment_date">06 nov. 2017</div>
											</div>
											<div class="blog_post_comment_text">
												<p>Aliquam ipsum nibh, imperdiet in euismod et, lobortis id elit. Mauris ornare metus a orci tristique, quis semper turpis sollicitudin. Phasellus porta enim risus, sit amet vestibulum leo feugiat quis. Proin ac euismod augue.</p>
											</div>
											<a href="blog_post.html" class="blog_post_link">reply
												<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
												<polygon id="arrow_poly_1" class="arrow_poly" fill="#FF4200" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "></polygon>
												</svg>
											</a>
										</div>
									</div>

									<!-- Comment -->
									<div class="blog_post_comment d-flex flex-row">
										<div class="blog_post_comment_image"><img src="images/blog_post_comment_2.jpg" alt=""></div>
										<div class="blog_post_comment_content">
											<div class="blog_post_comment_meta">
												<div class="blog_post_comment_name"><a href="#">Michael Smith</a></div>
												<div class="blog_post_comment_date">06 nov. 2017</div>
											</div>
											<div class="blog_post_comment_text">
												<p>Aliquam ipsum nibh, imperdiet in euismod et, lobortis id elit. Mauris ornare metus a orci tristique, quis semper turpis sollicitudin. Phasellus porta enim risus, sit amet vestibulum leo feugiat quis. Proin ac euismod augue.</p>
											</div>
											<a href="blog_post.html" class="blog_post_link">reply
												<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="7px" viewBox="0 0 13 7" enable-background="new 0 0 13 7" xml:space="preserve">
												<polygon id="arrow_poly_2" class="arrow_poly" fill="#FF4200" points="13,3.5 9,0 9,3 0,3 0,4 9,4 9,7 "></polygon>
												</svg>
											</a>
										</div>
									</div>

								</div>
							</div>
							
							<!-- Reply -->
							<div class="blog_post_reply">
								<form id="reply_form" action="<?php echo '/blog/post/'.$this->postContent->id ?>" 
                                method="POST">
									<div>
                                        <input type="hidden" name="post_id" value="<?php echo  $this->postContent->id?>" />
										<input id="reply_form_name" class="input_field reply_form_name" type="text" placeholder="Name" name="full_name" required="required" data-error="Name is required.">
										<input id="reply_form_email" class="input_field reply_form_email" type="email" placeholder="E-mail" name="email" required="required" data-error="Valid email is required.">
										<input id="reply_form_subject" class="input_field reply_form_subject" type="text" placeholder="Subject" name="subject" required="required" data-error="Subject is required.">
										<textarea id="reply_form_message" class="text_field reply_form_message"  placeholder="Message" rows="4" name="comment" required data-error="Please, write us a message."></textarea>
									</div>
									<div>
										<button id="reply_form_submit" type="submit" class="reply_submit_btn trans_300" value="Submit">
											send<img src="images/arrow_right.svg" alt="">
										</button>
									</div>

								</form>
							</div>
							
						</article>

					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="blog_sidebar">
						
						<!-- Search -->
						<div class="sidebar_section">
							<div class="sidebar_search">
								<form action="post">
									<div id="search_form" class="search_form">
										<input id="blog_search" type="search" placeholder="enter keywords" required="required" data-error="Valid keywords required.">
										<button id="search_submit" type="submit" class="search_submit_btn trans_300" value="Submit">
											<img src="images/search.png" alt="">
										</button>
									</div>
								</form>
							</div>
						</div>
						
						<!-- Recent Posts -->
						<div class="sidebar_section">
							<div class="sidebar_recent">
								<div class="sidebar_title">recent posts</div>

								<!-- Recent Post -->
								<div class="recent_post d-flex flex-row justify-content-start">
									<div class="recent_post_image">
										<a href="blog_post.html"><img src="images/recent_1.jpg" alt=""></a>
									</div>
									<div class="recent_post_content">
										<h4 class="recent_post_title"><a href="blog_post.html">best in photography</a></h4>
										<span class="recent_post_date">december 05, 2017</span>
									</div>
								</div>

								<!-- Recent Post -->
								<div class="recent_post d-flex flex-row justify-content-start">
									<div class="recent_post_image">
										<a href="blog_post.html"><img src="images/recent_2.jpg" alt=""></a>
									</div>
									<div class="recent_post_content">
										<h4 class="recent_post_title"><a href="blog_post.html">case study- design</a></h4>
										<span class="recent_post_date">december 05, 2017</span>
									</div>
								</div>

								<!-- Recent Post -->
								<div class="recent_post d-flex flex-row justify-content-start">
									<div class="recent_post_image">
										<a href="blog_post.html"><img src="images/recent_3.jpg" alt=""></a>
									</div>
									<div class="recent_post_content">
										<h4 class="recent_post_title"><a href="blog_post.html">how to take a photo</a></h4>
										<span class="recent_post_date">december 05, 2017</span>
									</div>
								</div>

								<!-- Recent Post -->
								<div class="recent_post d-flex flex-row justify-content-start">
									<div class="recent_post_image">
										<a href="blog_post.html"><img src="images/recent_4.jpg" alt=""></a>
									</div>
									<div class="recent_post_content">
										<h4 class="recent_post_title"><a href="blog_post.html">work hard</a></h4>
										<span class="recent_post_date">december 05, 2017</span>
									</div>
								</div>
							</div>
						</div>

						<!-- Categories -->
						<div class="sidebar_section">
							<div class="sidebar_categories">
								<div class="sidebar_title">categories</div>
								<ul>
									<li><a href="#">photography</a></li>
									<li><a href="#">business</a></li>
									<li><a href="#">graphic design</a></li>
									<li><a href="#">entertainment</a></li>
									<li><a href="#">living & travel</a></li>
									<li><a href="#">uncategorized</a></li>
								</ul>

							</div>
						</div>

						<!-- Tabs -->
						<div class="sidebar_section">
							<div class="sidebar_tabs">

								<!-- Tabs Nav -->
								<div class="tabs_container">
									<ul class="tabs">
										<li class="tab active" data-active-tab="tab_1"><span>popular</span></li>
										<li class="tab" data-active-tab="tab_2"><span>comments</span></li>
									</ul>
								</div>
								
								<!-- Tab Containers -->
								<div id="tab_1" class="tab_container active">

									<!-- Popular -->
									<div class="sidebar_popular">

										<!-- Popular Post -->
										<div class="popular_post d-flex flex-row justify-content-start">
											<div class="popular_post_image">
												<a href="blog_post.html"><img src="images/popular_1.jpg" alt="https://unsplash.com/@cbarbalis"></a>
											</div>
											<div class="popular_post_content">
												<h4 class="popular_post_title"><a href="blog_post.html">best in photography</a></h4>
												<span class="popular_post_date">december 05, 2017</span>
											</div>
										</div>

										<!-- Popular Post -->
										<div class="popular_post d-flex flex-row justify-content-start">
											<div class="popular_post_image">
												<a href="blog_post.html"><img src="images/popular_2.jpg" alt="https://unsplash.com/@alexagorn"></a>
											</div>
											<div class="popular_post_content">
												<h4 class="popular_post_title"><a href="blog_post.html">best in photography</a></h4>
												<span class="popular_post_date">december 05, 2017</span>
											</div>
										</div>

										<!-- Popular Post -->
										<div class="popular_post d-flex flex-row justify-content-start">
											<div class="popular_post_image">
												<a href="blog_post.html"><img src="images/popular_3.jpg" alt="https://unsplash.com/@thonbarroro"></a>
											</div>
											<div class="popular_post_content">
												<h4 class="popular_post_title"><a href="blog_post.html">best in photography</a></h4>
												<span class="popular_post_date">december 05, 2017</span>
											</div>
										</div>

									</div>
								</div>

								<div id="tab_2" class="tab_container">
									
									<!-- Comments -->
									<div class="sidebar_comments">
										
										<!-- Comment -->
										<div class="comment d-flex flex-row justify-content-start">
											<div class="comment_icon">
												<i class="far fa-comment"></i>
											</div>
											<div class="comment_content">
												<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
												<div class="comment_meta">
													<span>by lore papp</span>
													<span>december 06 2017</span>
												</div>
											</div>
										</div>

										<!-- Comment -->
										<div class="comment d-flex flex-row justify-content-start">
											<div class="comment_icon">
												<i class="far fa-comment"></i>
											</div>
											<div class="comment_content">
												<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
												<div class="comment_meta">
													<span>by lore papp</span>
													<span>december 06 2017</span>
												</div>
											</div>
										</div>

										<!-- Comment -->
										<div class="comment d-flex flex-row justify-content-start">
											<div class="comment_icon">
												<i class="far fa-comment"></i>
											</div>
											<div class="comment_content">
												<p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum.</p>
												<div class="comment_meta">
													<span>by lore papp</span>
													<span>december 06 2017</span>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Flickr -->

						<div class="sidebar_section">
							<div class="sidebar_flickr">
								<div class="sidebar_title">flickr</div>

								<!-- 
								Possible values: http://petejank.github.io/js-flickr-gallery/#documentation
								Get tags for data-tags from https://www.flickr.com/photos/tags 
								-->
								<div class="flickr_gallery" data-toggle="jsfg" data-per-page="6" data-user-id="coolmcflash"></div>

							</div>
						</div>

						<!-- Gallery -->

						<div class="sidebar_section">
							<div class="sidebar_gallery">
								<div class="sidebar_title">gallery</div>

								<ul class="gallery_items">

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="images/gallery_1_large.jpg">
											<img src="images/gallery_1.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="images/gallery_2_large.jpg">
											<img src="images/gallery_2.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="images/gallery_3_large.jpg">
											<img src="images/gallery_3.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="images/gallery_4_large.jpg">
											<img src="images/gallery_4.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="images/gallery_5_large.jpg">
											<img src="images/gallery_5.jpg" alt="">
										</a>
									</li>

									<!-- Gallery Item -->
									<li class="gallery_item">
										<a href="images/gallery_6_large.jpg">
											<img src="images/gallery_6.jpg" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Quote -->

						<div class="sidebar_section">
							<div class="sidebar_quote">
								<div class="sidebar_title">quote of the day</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venen. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur neque non.</p>
							</div>
						</div>

						<!-- Slider -->

						<div class="sidebar_section">
							<div class="sidebar_slider_container">
								<div class="sidebar_title">slider</div>
								<div class="owl-carousel owl-theme sidebar_slider">

									<!-- Slider Item -->
									<div class="owl-item sidebar_slider_item">
										<div class="sidebar_slider_item_background" style="background-image:url(images/sidebar_slider_1.jpg)"></div>
									</div>

									<!-- Slider Item -->
									<div class="owl-item sidebar_slider_item">
										<div class="sidebar_slider_item_background" style="background-image:url(images/sidebar_slider_2.jpg)"></div>
									</div>

									<!-- Slider Item -->
									<div class="owl-item sidebar_slider_item">
										<div class="sidebar_slider_item_background" style="background-image:url(images/sidebar_slider_3.jpg)"></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>