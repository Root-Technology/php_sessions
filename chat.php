<?php

require_once __DIR__ . '/partials/_validations.php';


if (isset($_GET['id'])) {

	$id = $_GET['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Your Account - Chat Messages</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Theme Font -->
	<link rel="preload" type="text/css" href="css/theme-font.min.css" as="style">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.min.css">

	<!-- Main RTL CSS -->
	<!--<link rel="stylesheet" type="text/css" href="css/rtl.min.css">-->

	<!-- WebP Safari Support -->
	<script src="https://unpkg.com/webp-hero@0.0.0-dev.27/dist-cjs/polyfills.js"></script>
	<script src="https://unpkg.com/webp-hero@0.0.0-dev.27/dist-cjs/webp-hero.bundle.js"></script>

</head>

<body class="page-has-left-panels page-has-right-panels">


	<!-- Preloader -->

	<div id="hellopreloader">
		<div class="preloader">
			<svg width="45" height="45" stroke="#fff">
				<g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
						<animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="6" stroke="none">
						<animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="6;22" />
						<animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="1;0" />
						<animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite" values="2;0" />
					</circle>
					<circle cx="22" cy="22" r="8">
						<animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite" values="6;1;2;3;4;5;6" />
					</circle>
				</g>
			</svg>

			<div class="text">Loading ...</div>
		</div>
	</div>

	<!-- ... end Preloader -->
	<!-- Profile Settings Responsive -->

	<!-- ... end Preloader -->

	<!-- Fixed Sidebar Left -->
	<?php

	require_once __DIR__ . '/partials/_sidebar.php';

	?>
	<!-- ... end Fixed Sidebar Right-Responsive -->


	<!-- Header-BP -->

	<?php

	require_once __DIR__ . '/partials/_header.php';

	?>
	<!-- Top Header-Profile -->

	<!-- ... end Main Header Account -->


	<!-- Your Account Personal Information -->

	<div class="container">
		<div class="row">
			<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Chat / Messages</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
					</div>

					<div class="row">
						<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">


							<!-- Notification List Chat Messages -->

							<!-- <ul class="notification-list chat-message">
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar8-sm.webp" alt="author" width="36" height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Diana Jameson</a>
										<span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>

								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar9-sm.webp" alt="author" width="36" height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Jake Parker</a>
										<span class="chat-message-item">Great, I’ll see you tomorrow!.</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>

									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
								<li>
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
										<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>

								<li class="chat-group">
									<div class="author-thumb">
										<img loading="lazy" src="img/avatar11-sm.webp" alt="author" width="16" height="16">
										<img loading="lazy" src="img/avatar12-sm.webp" alt="author" width="16" height="16">
										<img loading="lazy" src="img/avatar13-sm.webp" alt="author" width="16" height="16">
										<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
									</div>
									<div class="notification-event">
										<a href="#" class="h6 notification-friend">You, Faye, Ed & Jet +3</a>
										<span class="last-message-author">Ed:</span>
										<span class="chat-message-item">Yeah! Seems fine by me!</span>
										<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
									</div>
									<span class="notification-icon">
										<svg class="olymp-chat---messages-icon">
											<use xlink:href="#olymp-chat---messages-icon"></use>
										</svg>
									</span>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
									</div>
								</li>
							</ul> -->

							<!-- ... end Notification List Chat Messages -->


							<!-- Popup Chat -->

							<!-- <div class="ui-block popup-chat">
								<div class="ui-block-title">
									<span class="icon-status online"></span>
									<h6 class="title">Mathilda Brinker</h6>
									<div class="more">
										<svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg>
										<svg class="olymp-little-delete">
											<use xlink:href="#olymp-little-delete"></use>
										</svg>
									</div>
								</div>
								<div class="mCustomScrollbar" data-mcs-theme="dark">
									<ul class="notification-list chat-message chat-message-field">
										<li>
											<div class="author-thumb">
												<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author">
											</div>
											<div class="notification-event">
												<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
												<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
											</div>
										</li>

										<li>
											<div class="author-thumb">
												<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
											</div>
											<div class="notification-event">
												<span class="chat-message-item">Don’t worry Mathilda!</span>
												<span class="chat-message-item">I already bought everything</span>
												<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
											</div>
										</li>

										<li>
											<div class="author-thumb">
												<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author">
											</div>
											<div class="notification-event">
												<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
												<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
											</div>
										</li>
									</ul>
								</div>

								<form>

									<div class="form-group label-floating is-empty">
										<textarea class="form-control" placeholder="Press enter to post..."></textarea>
										<div class="add-options-message">
											<a href="#" class="options-message">
												<svg class="olymp-computer-icon">
													<use xlink:href="#olymp-computer-icon"></use>
												</svg>
											</a>
											<div class="options-message smile-block">

												<svg class="olymp-happy-sticker-icon">
													<use xlink:href="#olymp-happy-sticker-icon"></use>
												</svg>

												<ul class="more-dropdown more-with-triangle triangle-bottom-right">
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>

								</form>


							</div> -->

							<!-- ... end Popup Chat -->


						</div>

						<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


							<!-- Chat Field -->

							<div class="chat-field">
								<div class="ui-block-title">
									<?php
									$sql = "SELECT * FROM users where id_user =  $id";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										while ($row =  $result->fetch_assoc()) {
											$profilephoto = $row['profile_image'];
											$genderprofile = $row['gender'];

									?>
											<h6 class="title"><?php echo $row['name']; ?> <?php echo $row['last_name']; ?></h6>

									<?php }
									} ?>
									<a href="#" class="more"><svg class="olymp-three-dots-icon">
											<use xlink:href="#olymp-three-dots-icon"></use>
										</svg></a>
								</div>
								<div class="mCustomScrollbar" data-mcs-theme="dark">
									<ul class="notification-list chat-message chat-message-field">
										<li>
											<div class="author-thumb">
												<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
											</div>
											<div class="notification-event">
												<div class="event-info-wrap">
													<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
													<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
												</div>
												<span class="chat-message-item">Hi James, How are your doing? Please remember that next week we are going to Gotham Bar to celebrate Marina’s Birthday.</span>
											</div>
										</li>

										<li>
											<div class="author-thumb">
												<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
											</div>
											<div class="notification-event">
												<div class="event-info-wrap">
													<a href="#" class="h6 notification-friend">James Spiegel</a>
													<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:30pm</time></span>
												</div>
												<span class="chat-message-item">Hi Elaine! I have a question, do you think that tomorrow we could talk to
													the client to iron out some details before the presentation? I already finished the first screen but
													I need to ask him something before moving on. Anyway, here’s a preview!
												</span>
												<div class="added-photos">
													<img loading="lazy" src="img/photo-message1.webp" alt="photo" width="75" height="61">
													<img loading="lazy" src="img/photo-message2.webp" alt="photo" width="71" height="62">
													<span class="photos-name">icons.jpeg; bunny.jpeg</span>
												</div>
											</div>
										</li>

										<li>
											<div class="author-thumb">
												<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
											</div>
											<div class="notification-event">
												<div class="event-info-wrap">
													<a href="#" class="h6 notification-friend">Elaine Dreyfuss</a>
													<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time></span>
												</div>
												<span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with it. I think That looks really good!</span>
											</div>
										</li>
									</ul>
								</div>

								<form>

									<div class="form-group">
										<textarea class="form-control" placeholder="Write your reply here..."></textarea>
									</div>

									<div class="add-options-message">
										<a href="#" class="options-message">
											<svg class="olymp-computer-icon">
												<use xlink:href="#olymp-computer-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message">
											<svg class="olymp-computer-icon">
												<use xlink:href="#olymp-computer-icon"></use>
											</svg>
										</a>
										<div class="options-message smile-block">
											<svg class="olymp-happy-sticker-icon">
												<use xlink:href="#olymp-happy-sticker-icon"></use>
											</svg>

											<ul class="more-dropdown more-with-triangle triangle-bottom-right">
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
													</a>
												</li>
												<li>
													<a href="#">
														<img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
													</a>
												</li>
											</ul>
										</div>

										<button class="btn btn-primary btn-sm">Post Reply</button>
									</div>

								</form>

							</div>

							<!-- ... end Chat Field -->

						</div>
					</div>

				</div>


				<!-- Pagination -->

				<nav aria-label="Page navigation">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container">
									<div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div>
								</div></a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">...</a></li>
						<li class="page-item"><a class="page-link" href="#">12</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>

				<!-- ... end Pagination -->

			</div>

			<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
				<div class="ui-block">

					<!-- Your Profile  -->

					<div class="your-profile">
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">Your PROFILE</h6>
						</div>

						<div class="accordion" id="accordionExample">
							<div class="accordion-item">
								<h6 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Profile Settings
										<svg class="olymp-dropdown-arrow-icon">
											<use xlink:href="#olymp-dropdown-arrow-icon"></use>
										</svg>
									</button>
								</h6>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<ul class="your-profile-menu">
											<li>
												<a href="28-YourAccount-PersonalInformation.html">Personal Information</a>
											</li>
											<li>
												<a href="29-YourAccount-AccountSettings.html">Account Settings</a>
											</li>
											<li>
												<a href="30-YourAccount-ChangePassword.html">Change Password</a>
											</li>
											<li>
												<a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
											</li>
											<li>
												<a href="32-YourAccount-EducationAndEmployement.html">Education and Employement</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="ui-block-title">
							<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
							<a href="#" class="items-round-little bg-primary">8</a>
						</div>
						<div class="ui-block-title">
							<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
						</div>
						<div class="ui-block-title">
							<a href="35-YourAccount-FriendsRequests.html" class="h6 title">Friend Requests</a>
							<a href="#" class="items-round-little bg-blue">4</a>
						</div>
						<div class="ui-block-title ui-block-title-small">
							<h6 class="title">FAVOURITE PAGE</h6>
						</div>
						<div class="ui-block-title">
							<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Create Fav Page</a>
						</div>
						<div class="ui-block-title">
							<a href="36-FavPage-SettingsAndCreatePopup.html" class="h6 title">Fav Page Settings</a>
						</div>
					</div>

					<!-- ... end Your Profile  -->

				</div>
			</div>
		</div>
	</div>

	<!-- ... end Your Account Personal Information -->




	<!-- Window-popup-CHAT for responsive min-width: 768px -->

	<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="popup-chat-responsive" aria-hidden="true">

		<div class="modal-content">
			<div class="modal-header">
				<span class="icon-status online"></span>
				<h6 class="title">Chat</h6>
				<div class="more">
					<svg class="olymp-three-dots-icon">
						<use xlink:href="#olymp-three-dots-icon"></use>
					</svg>
					<svg class="olymp-little-delete js-chat-open">
						<use xlink:href="#olymp-little-delete"></use>
					</svg>
				</div>
			</div>
			<div class="modal-body">
				<div class="mCustomScrollbar">
					<ul class="notification-list chat-message chat-message-field">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Don’t worry Mathilda!</span>
								<span class="chat-message-item">I already bought everything</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author" class="mCS_img_loaded">
							</div>
							<div class="notification-event">
								<span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
							</div>
						</li>
					</ul>
				</div>

				<form class="need-validation">

					<div class="form-group">
						<textarea class="form-control" placeholder="Press enter to post..."></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message">
								<svg class="olymp-computer-icon">
									<use xlink:href="#olymp-computer-icon"></use>
								</svg>
							</a>
							<div class="options-message smile-block">

								<svg class="olymp-happy-sticker-icon">
									<use xlink:href="#olymp-happy-sticker-icon"></use>
								</svg>

								<ul class="more-dropdown more-with-triangle triangle-bottom-right">
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20" height="20">
										</a>
									</li>
									<li>
										<a href="#">
											<img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20" height="20">
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>

	</div>

	<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->



	<a class="back-to-top" href="#">
		<svg class="back-icon" width="14" height="18">
			<use xlink:href="#olymp-back-to-top"></use>
		</svg>
	</a>


	<!-- JS Scripts -->

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var webpMachine = new webpHero.WebpMachine()
			webpMachine.polyfillDocument()
		});
	</script>
	<script src="js/jQuery/jquery-3.5.1.min.js"></script>

	<script src="js/libs/jquery.mousewheel.min.js"></script>
	<script src="js/libs/perfect-scrollbar.min.js"></script>
	<script src="js/libs/imagesloaded.pkgd.min.js"></script>
	<script src="js/libs/material.min.js"></script>
	<script src="js/libs/selectize.min.js"></script>
	<script src="js/libs/isotope.pkgd.min.js"></script>
	<script src="js/libs/ajax-pagination.min.js"></script>
	<script src="js/libs/jquery.magnific-popup.min.js"></script>

	<!-- <script src="js/main.js"></script> -->
	<script src="js/libs-init/libs-init.js"></script>

	<script src="Bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- SVG icons loader -->
	<script src="js/svg-loader.js"></script>
	<!-- /SVG icons loader -->

</body>

<!-- Mirrored from html.crumina.net/html-olympus/34-YourAccount-ChatMessages.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 17:49:37 GMT -->

</html>