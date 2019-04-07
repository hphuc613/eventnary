<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget clearfix">

								<h4>Upcoming Events</h4>
								<div id="post-list-footer">

									@foreach($data as $key => $val)
									@php
									    $start_date=$val->start_date;
									    $end_date=$val->end_date;
									@endphp
									<div class="spost clearfix">
										<div class="entry-image">
											<a href="{{ route('home.detail.event',$val->id) }}" class="nobg"><img src="{{ asset('upload/image/event/'.$val->current_image) }}" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="{{ route('home.detail.event',$val->id) }}">{{ $val->title }}</a></h4>
											</div>
											<ul class="entry-meta">
												<li>{{ date_format(new DateTime($start_date),'d-m-Y H:i') }} - {{ date_format(new DateTime($end_date),'d-m-Y H:i') }}</li>
											</ul>
										</div>
									</div>
									@if($key < 3)
										@break
									@endif
									@endforeach
									

								</div>

							</div>

							<div class="widget clearfix">

								<h4>Events</h4>
								<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">
									
								@for($i=0; $i<=3; $i++)
									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="#">
													<img src="frontend/images/events/thumbs/3.jpg" alt="Mac Sunglasses">
												</a>
												<div class="portfolio-overlay">
													<a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single-video.html">Inventore voluptates velit totam ipsa tenetur</a></h3>
												<span><a href="#">Melbourne, Australia</a></span>
											</div>
										</div>
									</div>
								@endfor

								</div>


							</div>

							<div class="widget clearfix">

								<h4>Recent Event in Video</h4>
								<iframe src="//player.vimeo.com/video/103927232" width="500" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

							</div>

							<div class="widget quick-contact-widget clearfix">

								<h4>Quick Contact</h4>
								<div class="quick-contact-form-result"></div>
								<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
									<div class="form-process"></div>

									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
									<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
									<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
									<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
								</form>


							</div>

						</div>
					</div>