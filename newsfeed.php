<?php

require_once __DIR__ . '/partials/_validations.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Newsfeed</title>

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


	<div class="container">
		<div class="row">

			<!-- Main Content -->

			<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

				<div class="ui-block">

					<!-- News Feed Form  -->

					<div class="news-feed-form">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active inline-items" data-bs-toggle="tab" href="#home-1" role="tab" aria-expanded="true">

									<svg class="olymp-status-icon">
										<use xlink:href="#olymp-status-icon"></use>
									</svg>

									<span>Status</span>
								</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane fade active show" id="home-1" role="tabpanel" aria-expanded="true">
								<form action="create-post.php" method="post" enctype="multipart/form-data">
									<div class="author-thumb">
										<img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">
									</div>
									<div class="form-group with-icon label-floating is-empty">
										<label class="control-label">Share what you are thinking here...</label>
										<textarea class="form-control" placeholder="" name="post_description"></textarea>
									</div>
									<div class="add-options-message">
										<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD PHOTOS">
											<svg class="olymp-camera-icon" data-bs-toggle="modal" data-bs-target="#update-header-photo">
												<use xlink:href="#olymp-camera-icon"></use>
											</svg>
										</a>
										<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="TAG YOUR FRIENDS">
											<svg class="olymp-computer-icon">
												<use xlink:href="#olymp-computer-icon"></use>
											</svg>
										</a>

										<a href="#" class="options-message" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD LOCATION">
											<svg class="olymp-small-pin-icon">
												<use xlink:href="#olymp-small-pin-icon"></use>
											</svg>
										</a>

										<!-- Window-popup Update Header Photo -->

										<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
											<div class="modal-dialog window-popup update-header-photo" role="document">
												<div class="modal-content">
													<a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
														<svg class="olymp-close-icon">
															<use xlink:href="#olymp-close-icon"></use>
														</svg>
													</a>

													<div class="modal-header">
														<h6 class="title">Mdeias</h6>
													</div>

													<div class="modal-body">
														<a href="#" class="upload-photo-item">
															<input type="file" name="image" accept=".png, .jpg, .jpeg" />
															<br />
															<h6>Upload Photo</h6>
															<span>Browse your computer.</span>
														</a>


														<a href="#" class="upload-photo-item">

															<input type="file" name="video" accept=".mp4" />
															<br />
															<h6>Upload Video</h6>
															<span>Browse your computer.</span>
														</a>
													</div>


												</div>
											</div>
										</div>

										<!-- ... end Window-popup Update Header Photo -->

										<button class="btn btn-primary btn-md-2" type="submit">Post Status</button>
										<button class="btn btn-md-2 btn-border-think btn-transparent c-grey" type="button">Preview</button>

									</div>

								</form>
							</div>
						</div>
					</div>

					<!-- ... end News Feed Form  -->
				</div>

				<div id="newsfeed-items-grid">
					<?php
					$sql = "SELECT * FROM post ORDER BY createdAT DESC";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while ($row =  $result->fetch_assoc()) {
							$post_id_user = $row['post_id_user'];
							$id_post = $row['id_post'];
							$repost_user_id = $row['repost_user_id'];
					?>
							<div class="ui-block">

								<article class="hentry post has-post-thumbnail shared-photo">


									<?php
									$sql1 = "SELECT * FROM users WHERE id_user = $post_id_user";
									$result1 = $conn->query($sql1);

									if ($result1->num_rows > 0) {
										while ($row1 =  $result1->fetch_assoc()) {
											$profilephoto = $row1['profile_image'];
											$genderprofile = $row1['gender'];
									?>

											<?php if ($repost_user_id != NULL) { ?>
												<div class="d-flex align-items-center gap-1">

													<?php
													$sql11 = "SELECT * FROM users WHERE id_user = $repost_user_id";
													$result11 = $conn->query($sql11);

													if ($result11->num_rows > 0) {
														while ($row11 =  $result11->fetch_assoc()) {

													?>
															<div> <?php echo $row11['name']; ?> <?php echo $row11['last_name']; ?> Reposted</div>

													<?php }
													} ?>

													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="grey">
														<path d="M5 10v7h10.797l1.594 2h-14.391v-9h-3l4-5 4 5h-3zm14 4v-7h-10.797l-1.594-2h14.391v9h3l-4 5-4-5h3z" />
													</svg>
												</div>
												<hr />
											<?php } ?>
											<div class="post__author author vcard inline-items">

												<?php
												if ($profilephoto != NULL) { ?>
													<img loading="lazy" src="./uploads/profile/<?php echo $profilephoto ?>" alt="author" width="36" height="36">
													<?php } else {
													if ($genderprofile == 'Male') { ?>
														<img loading="lazy" src="https://i.ibb.co/854VS2Z/avatar5.png" alt="authorM" width="36" height="36">
													<?php } elseif ($genderprofile == 'Female') { ?>
														<img loading="lazy" src="https://i.ibb.co/3kgHdxm/avatar2.png" alt="authorF" width="36" height="36">
												<?php }
												} ?>

												<div class="author-date">
													<a class="h6 post__author-name fn" href="02-ProfilePage.html"><?php echo $row1['name']; ?> <?php echo $row1['last_name']; ?></a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															<?php echo get_time_ago(strtotime($row['createdAt'])); ?>
														</time>
													</div>
												</div>
												<br />




												<div class="more">
													<svg class="olymp-three-dots-icon">
														<use xlink:href="#olymp-three-dots-icon"></use>
													</svg>
													<ul class="more-dropdown">
														<li>
															<a href="#">Edit Post</a>
														</li>
														<li>
															<a href="#">Delete Post</a>
														</li>
														<li>
															<a href="#">Turn Off Notifications</a>
														</li>
														<li>
															<a href="#">Select as Featured</a>
														</li>
													</ul>
												</div>
										<?php }
									} ?>
											</div>



											<p><?php echo makeLinksClickable($row['post_description']); ?></p>

											<div class="post-thumb">
												<?php
												if ($row['post_image'] != "") {
													echo '<img class="img-responsive pad" src="uploads/post/' . $row['post_image'] . '" alt="Photo">';
												}

												if ($row['post_video'] != "") {
												?>
													<div class="row">
														<div class="col-xs-12">
															<div class="embed-responsive embed-responsive-16by9">
																<video src="uploads/post/<?php echo $row['post_video']; ?>" controls width="618" height="412"></video>
															</div>
														</div>
													</div>
												<?php
												}

												if ($row['post_yt'] != "") {
												?>
													<div class="row">
														<div class="col-xs-12">
															<div class="embed-responsive embed-responsive-16by9">
																<iframe src="https://www.youtube.com/embed/<?php echo $row['post_yt']; ?>?rel=0&amp;showinfo=0" width="618" height="412"></iframe>
															</div>
														</div>
													</div>
												<?php
												}
												?>
												<!-- <img loading="lazy" src="img/post-photo6.webp" alt="photo" width="618" height="412"> -->
											</div>
											<?php
											$sql2 = "SELECT * FROM comments, users WHERE comments.comment_id_user = users.id_user and comments.comment_post_id = $id_post ORDER BY CommentTime DESC";
											$result2 = $conn->query($sql2);

											if ($result2->num_rows > 0) {
												while ($row2 =  $result2->fetch_assoc()) {
													$comment = $row2['comment'];
													$commentimage = $row2['profile_image'];
													$commentgender = $row2['gender'];
											?>

													<ul class="children single-children">
														<li class="comment-item">
															<div class="post__author author vcard inline-items">
																<?php
																if ($commentimage != NULL) { ?>
																	<img loading="lazy" src="./uploads/profile/<?php echo $commentimage; ?>" alt="author" width="36" height="36">
																	<?php } else {
																	if ($commentgender == 'Male') { ?>
																		<img loading="lazy" src="https://i.ibb.co/854VS2Z/avatar5.png" alt="authorM" width="36" height="36">
																	<?php } elseif ($commentgender == 'Female') { ?>
																		<img loading="lazy" src="https://i.ibb.co/3kgHdxm/avatar2.png" alt="authorF" width="36" height="36">
																<?php }
																} ?>
																<div class="author-date">
																	<a class="h6 post__author-name fn" href="#"><?php echo $row2['name']; ?> <?php echo $row2['last_name']; ?></a>
																	<div class="post__date">
																		<time class="published" datetime="2017-03-24T18:18">
																			<?php echo get_time_ago(strtotime($row2['CommentTime'])); ?>
																		</time>
																	</div>
																</div>
															</div>

															<p><?php echo makeLinksClickable($comment); ?></p>
														</li>
													</ul>

											<?php }
											} ?>

											<div class="post-additional-info inline-items">

												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-heart-icon">
														<use xlink:href="#olymp-heart-icon"></use>
													</svg>
													<span>15</span>
												</a>

												<ul class="friends-harmonic">
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28" height="28">
														</a>
													</li>
													<li>
														<a href="#">
															<img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28" height="28">
														</a>
													</li>
												</ul>

												<div class="names-people-likes">
													<a href="#">Diana</a>, <a href="#">Nicholas</a> and
													<br>13 more liked this
												</div>

												<div class="comments-shared d-flex">
													<a href="#" class="post-add-icon inline-items">
														<svg class="olymp-speech-balloon-icon">
															<use xlink:href="#olymp-speech-balloon-icon"></use>
														</svg>
														<span>0</span>
													</a>

													<form action="add-repost.php" method="post">
														<input type="hidden" value="<?php echo $post_id_user; ?>" name="post_user_id" />
														<input type="hidden" value="<?php echo $row['post_description']; ?>" name="post_description" />
														<input type="hidden" value="<?php echo $row['post_image']; ?>" name="post_image" />
														<input type="hidden" value="<?php echo $row['post_video']; ?>" name="post_video" />
														<input type="hidden" value="<?php echo $row['post_yt']; ?>" name="post_yt" />
														<input type="hidden" value="<?php echo $row['id_post']; ?>" name="id_post_repost" />
														<button type="submit" class="post-add-icon inline-items" style="border: none; background: none;">
															
															<svg class="olymp-share-icon">
																<use xlink:href="#olymp-share-icon"></use>
															</svg>


															<?php
															$stmt = $conn->prepare("SELECT COUNT(*) AS total FROM post WHERE id_post_repost = ?");
															$stmt->bind_param("i", $id_post);
															$stmt->execute();
															$result12 = $stmt->get_result();
															$row12 = $result12->fetch_assoc();
															$total = $row12['total'];
															?>
															<span><?php echo $total; ?></span>

														</button>
													</form>


												</div>

											</div>


								</article>


								<!-- Comment Form  -->

								<form class="comment-form inline-items" action="add-comment.php" method="post">

									<div class="post__author author vcard inline-items">
										<?php
										if ($profileimage != NULL) { ?>
											<img loading="lazy" src="./uploads/profile/<?php echo $profileimage; ?>" alt="author" width="36" height="36">
											<?php } else {
											if ($gender == 'Male') { ?>
												<img loading="lazy" src="https://i.ibb.co/854VS2Z/avatar5.png" alt="authorM" width="36" height="36">
											<?php } elseif ($gender == 'Female') { ?>
												<img loading="lazy" src="https://i.ibb.co/3kgHdxm/avatar2.png" alt="authorF" width="36" height="36">
										<?php }
										} ?>


										<div class="form-group with-icon-right ">
											<textarea class="form-control" placeholder="" name="comment_description"></textarea>
											<div class="add-options-message">
												<a href="#" class="options-message" data-bs-toggle="modal" data-bs-target="#update-header-photo">
													<svg class="olymp-camera-icon">
														<use xlink:href="#olymp-camera-icon"></use>
													</svg>
												</a>
											</div>
										</div>
									</div>
									<input type="hidden" name="comment_post_id" value="<?php echo $row['id_post']; ?>" />

									<button type="submit" class="btn btn-md-2 btn-primary">Post Comment</button>

									<button type="reset" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

								</form>

								<!-- ... end Comment Form  -->
							</div>

					<?php }
					} ?>

				</div>

				<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon">
						<use xlink:href="#olymp-three-dots-icon"></use>
					</svg></a>

			</main>

			<!-- ... end Main Content -->


			<!-- Left Sidebar -->

			<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">
				<div class="ui-block">

					<!-- W-Weather -->

					<div class="widget w-weather">
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>

						<div class="wethear-now inline-items">
							<div class="temperature-sensor">64°</div>
							<div class="max-min-temperature">
								<span>58°</span>
								<span>76°</span>
							</div>

							<svg class="olymp-weather-partly-sunny-icon">
								<use xlink:href="#olymp-weather-partly-sunny-icon"></use>
							</svg>
						</div>

						<div class="wethear-now-description">
							<div class="climate">Partly Sunny</div>
							<span>Real Feel: <span>67°</span></span>
							<span>Chance of Rain: <span>49%</span></span>
						</div>

						<ul class="weekly-forecast">

							<li>
								<div class="day">sun</div>
								<svg class="olymp-weather-sunny-icon">
									<use xlink:href="#olymp-weather-sunny-icon"></use>
								</svg>

								<div class="temperature-sensor-day">60°</div>
							</li>

							<li>
								<div class="day">mon</div>
								<svg class="olymp-weather-partly-sunny-icon">
									<use xlink:href="#olymp-weather-partly-sunny-icon"></use>
								</svg>
								<div class="temperature-sensor-day">58°</div>
							</li>

							<li>
								<div class="day">tue</div>
								<svg class="olymp-weather-cloudy-icon">
									<use xlink:href="#olymp-weather-cloudy-icon"></use>
								</svg>

								<div class="temperature-sensor-day">67°</div>
							</li>

							<li>
								<div class="day">wed</div>
								<svg class="olymp-weather-rain-icon">
									<use xlink:href="#olymp-weather-rain-icon"></use>
								</svg>

								<div class="temperature-sensor-day">70°</div>
							</li>

							<li>
								<div class="day">thu</div>
								<svg class="olymp-weather-storm-icon">
									<use xlink:href="#olymp-weather-storm-icon"></use>
								</svg>

								<div class="temperature-sensor-day">58°</div>
							</li>

							<li>
								<div class="day">fri</div>
								<svg class="olymp-weather-snow-icon">
									<use xlink:href="#olymp-weather-snow-icon"></use>
								</svg>

								<div class="temperature-sensor-day">68°</div>
							</li>

							<li>
								<div class="day">sat</div>

								<svg class="olymp-weather-wind-icon-header">
									<use xlink:href="#olymp-weather-wind-icon-header"></use>
								</svg>

								<div class="temperature-sensor-day">65°</div>
							</li>

						</ul>

						<div class="date-and-place">
							<h5 class="date">Saturday, March 26th</h5>
							<div class="place">San Francisco, CA</div>
						</div>

					</div>

					<!-- W-Weather -->
				</div>

				<div class="ui-block">

					<!-- W-Calendar -->

					<div class="w-calendar">
						<div class="calendar">
							<header>
								<h6 class="month">May</h6>
							</header>
							<table>
								<thead>
									<tr>
										<td>Mon</td>
										<td>Tue</td>
										<td>Wed</td>
										<td>Thu</td>
										<td>Fri</td>
										<td>Sat</td>
										<td>San</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-month="12" data-day="1">1</td>
										<td data-month="12" data-day="2">
											2
										</td>
										<td data-month="12" data-day="3">3</td>
										<td data-month="12" data-day="4">4</td>
										<td data-month="12" data-day="5">5</td>
										<td data-month="12" data-day="6">6</td>
										<td data-month="12" data-day="7">7</td>
									</tr>
									<tr>
										<td data-month="12" data-day="8">8</td>
										<td data-month="12" data-day="9">9</td>
										<td data-month="12" data-day="10">10</td>
										<td data-month="12" data-day="11">11</td>
										<td data-month="12" data-day="12">12</td>
										<td data-month="12" data-day="13">13</td>
										<td data-month="12" data-day="14">14</td>
									</tr>
									<tr>
										<td data-month="12" data-day="15">15</td>
										<td data-month="12" data-day="16">16</td>
										<td data-month="12" data-day="17">17</td>
										<td data-month="12" data-day="18">18</td>
										<td data-month="12" data-day="19">19</td>
										<td data-month="12" data-day="20">20</td>
										<td data-month="12" data-day="21">21</td>
									</tr>
									<tr>
										<td data-month="12" data-day="22">22</td>
										<td data-month="12" data-day="23">23</td>
										<td data-month="12" data-day="24">24</td>
										<td data-month="12" data-day="25">25</td>
										<td data-month="12" data-day="26">26</td>
										<td data-month="12" data-day="27">27</td>
										<td data-month="12" data-day="28">28</td>
									</tr>
									<tr>
										<td data-month="12" data-day="29">29</td>
										<td data-month="12" data-day="30">30</td>
										<td data-month="12" data-day="31">31</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>


					<!-- ... end W-Calendar -->
				</div>

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Pages You May Like</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
					</div>

					<!-- W-Friend-Pages-Added -->

					<ul class="widget w-friend-pages-added notification-list friend-requests">
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar41-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">The Marina Bar</a>
								<span class="chat-message-item">Restaurant / Bar</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>

						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar42-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Tapronus Rock</a>
								<span class="chat-message-item">Rock Band</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>

						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar43-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
								<span class="chat-message-item">Company</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar44-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
								<span class="chat-message-item">Clothing Store</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>

						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar45-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Crimson Agency</a>
								<span class="chat-message-item">Company</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar46-sm.webp" alt="author" width="38" height="38">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Mannequin Angel</a>
								<span class="chat-message-item">Clothing Store</span>
							</div>
							<span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="ADD TO YOUR FAVS">
								<a href="#">
									<svg class="olymp-star-icon">
										<use xlink:href="#olymp-star-icon"></use>
									</svg>
								</a>
							</span>
						</li>
					</ul>

					<!-- .. end W-Friend-Pages-Added -->
				</div>
			</aside>

			<!-- ... end Left Sidebar -->


			<!-- Right Sidebar -->

			<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">

				<div class="ui-block">

					<!-- W-Birthsday-Alert -->

					<div class="widget w-birthday-alert">
						<div class="icons-block">
							<svg class="olymp-cupcake-icon">
								<use xlink:href="#olymp-cupcake-icon"></use>
							</svg>
							<a href="#" class="more"><svg class="olymp-three-dots-icon">
									<use xlink:href="#olymp-three-dots-icon"></use>
								</svg></a>
						</div>

						<div class="content">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar48-sm.webp" alt="author" width="28" height="28">
							</div>
							<span>Today is</span>
							<a href="#" class="h4 title">Marina Valentine’s Birthday!</a>
							<p>Leave her a message with your best wishes on her profile page!</p>
						</div>
					</div>

					<!-- ... end W-Birthsday-Alert -->
				</div>

				<div class="ui-block">
					<div class="ui-block-title">
						<h6 class="title">Friend Suggestions</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
					</div>



					<!-- W-Action -->

					<ul class="widget w-friend-pages-added notification-list friend-requests">
						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar38-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Francine Smith</a>
								<span class="chat-message-item">8 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar39-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Hugh Wilson</a>
								<span class="chat-message-item">6 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
						</li>

						<li class="inline-items">
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar40-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Karen Masters</a>
								<span class="chat-message-item">6 Friends in Common</span>
							</div>
							<span class="notification-icon">
								<a href="#" class="accept-request">
									<span class="icon-add without-text">
										<svg class="olymp-happy-face-icon">
											<use xlink:href="#olymp-happy-face-icon"></use>
										</svg>
									</span>
								</a>
							</span>
						</li>

					</ul>

					<!-- ... end W-Action -->
				</div>

				<div class="ui-block">

					<div class="ui-block-title">
						<h6 class="title">Activity Feed</h6>
						<a href="#" class="more"><svg class="olymp-three-dots-icon">
								<use xlink:href="#olymp-three-dots-icon"></use>
							</svg></a>
					</div>


					<!-- W-Activity-Feed -->

					<ul class="widget w-activity-feed notification-list">
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar49-sm.webp" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar9-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a href="#" class="notification-link">status update.</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">5 mins ago</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar50-sm.webp" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to her <a href="#" class="notification-link">gallery album.</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 mins ago</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar51-sm.webp" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a href="#" class="notification-link">photo</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar48-sm.webp" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris Greyson’s <a href="#" class="notification-link">status update</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar52-sm.webp" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#" class="notification-link">status update</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
							</div>
						</li>
						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Elaine Dreyfuss </a> liked your <a href="#" class="notification-link">blog post</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Elaine Dreyfuss </a> commented on your <a href="#" class="notification-link">blog post</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img loading="lazy" src="img/avatar53-sm.webp" alt="author" width="28" height="28">
							</div>
							<div class="notification-event">
								<a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#" class="notification-link">profile picture</a>.
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">15 hours ago</time></span>
							</div>
						</li>

					</ul>

					<!-- .. end W-Activity-Feed -->
				</div>


				<div class="ui-block">


					<!-- W-Action -->

					<div class="widget w-action">

						<img loading="lazy" src="img/logo.webp" alt="Olympus" width="34" height="34">
						<div class="content">
							<h4 class="title">OLYMPUS</h4>
							<span>THE BEST SOCIAL NETWORK THEME IS HERE!</span>
							<a href="01-LandingPage.html" class="btn btn-bg-secondary btn-md">Register Now!</a>
						</div>
					</div>

					<!-- ... end W-Action -->
				</div>

			</aside>

			<!-- ... end Right Sidebar -->

		</div>
	</div>


	<a class="back-to-top" href="#">
		<svg class="back-icon" width="14" height="18">
			<use xlink:href="#olymp-back-to-top"></use>
		</svg>
	</a>




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

<!-- Mirrored from html.crumina.net/html-olympus/03-Newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 17:47:20 GMT -->

</html>