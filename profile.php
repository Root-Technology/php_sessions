<?php

require_once __DIR__ . '/partials/_validations.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Profile Page</title>

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
    <!-- <link rel="stylesheet" type="text/css" href="css/rtl.min.css"> -->

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
                        <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite"
                            values="6;22" />
                        <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite"
                            values="6;22" />
                        <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="8">
                        <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite"
                            values="6;1;2;3;4;5;6" />
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
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="top-header">
                        <div class="top-header-thumb">
                            <?php
								if($profileimage != NULL){ ?>
                            <img loading="lazy" src="./uploads/profile/<?php echo $profileimage; ?>" alt="author"
                                width="124" height="124">
                            <?php }  ?>
                        </div>
                        <div class="profile-section">
                            <div class="row">
                                <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="02-ProfilePage.html" class="active">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="05-ProfilePage-About.html">About</a>
                                        </li>
                                        <li>
                                            <a href="06-ProfilePage.html">Friends</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col col-lg-5 ms-auto col-md-5 col-sm-12 col-12">
                                    <ul class="profile-menu">
                                        <li>
                                            <a href="07-ProfilePage-Photos.html">Photos</a>
                                        </li>
                                        <li>
                                            <a href="09-ProfilePage-Videos.html">Videos</a>
                                        </li>
                                        <li>
                                            <div class="more">
                                                <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                                </svg>
                                                <ul class="more-dropdown more-with-triangle">
                                                    <li>
                                                        <a href="#">Report Profile</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Block Profile</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="control-block-button">
                                <a href="35-YourAccount-FriendsRequests.html" class="btn btn-control bg-blue">
                                    <svg class="olymp-happy-face-icon">
                                        <use xlink:href="#olymp-happy-face-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="btn btn-control bg-purple">
                                    <svg class="olymp-chat---messages-icon">
                                        <use xlink:href="#olymp-chat---messages-icon"></use>
                                    </svg>
                                </a>

                                <div class="btn btn-control bg-primary more">
                                    <svg class="olymp-settings-icon">
                                        <use xlink:href="#olymp-settings-icon"></use>
                                    </svg>

                                    <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                        <li>
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#update-header-photo">Update Profile Photo</a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#update-header-photo">Update Header Photo</a>
                                        </li>
                                        <li>
                                            <a href="29-YourAccount-AccountSettings.html">Account Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="top-header-author">
                            <a href="02-ProfilePage.html" class="author-thumb">
                                <?php
								if($profileimage != NULL){ ?>
                                <img loading="lazy" src="./uploads/profile/<?php echo $profileimage; ?>" alt="author"
                                    width="124" height="124">
                                <?php }
								else{
								if ($gender == 'Male') { ?>
                                <img loading="lazy" src="https://i.ibb.co/854VS2Z/avatar5.png" alt="authorM" width="124"
                                    height="124">
                                <?php } elseif ($gender == 'Female') { ?>
                                <img loading="lazy" src="https://i.ibb.co/3kgHdxm/avatar2.png" alt="authorF" width="124"
                                    height="124">
                                <?php } } ?>

                            </a>
                            <div class="author-content">

                                <a href="02-ProfilePage.html"
                                    class="h4 author-name"><?php echo $name . ' ' . $lastname; ?> </a>
                                <div class="country">San Francisco, CA</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Top Header-Profile -->
    <div class="container">
        <div class="row">

            <!-- Main Content -->

            <div class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                <div id="newsfeed-items-grid">

                    <div class="ui-block">
                        <!-- Post -->

                        <article class="hentry post">

                            <div class="post__author author vcard inline-items">
                                <img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            19 hours ago
                                        </time>
                                    </div>
                                </div>

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

                            </div>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt
                                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem
                                accusantium doloremque.
                            </p>

                            <div class="post-additional-info inline-items">

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="#olymp-heart-icon"></use>
                                    </svg>
                                    <span>8</span>
                                </a>

                                <ul class="friends-harmonic">
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                </ul>

                                <div class="names-people-likes">
                                    <a href="#">Jenny</a>, <a href="#">Robert</a> and
                                    <br>6 more liked this
                                </div>


                                <div class="comments-shared">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon">
                                            <use xlink:href="#olymp-speech-balloon-icon"></use>
                                        </svg>
                                        <span>17</span>
                                    </a>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-share-icon">
                                            <use xlink:href="#olymp-share-icon"></use>
                                        </svg>
                                        <span>24</span>
                                    </a>
                                </div>


                            </div>

                            <div class="control-block-button post-control-button">

                                <a href="#" class="btn btn-control featured-post">
                                    <svg class="olymp-trophy-icon">
                                        <use xlink:href="#olymp-trophy-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="btn btn-control">
                                    <svg class="olymp-like-post-icon">
                                        <use xlink:href="#olymp-like-post-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="btn btn-control">
                                    <svg class="olymp-comments-post-icon">
                                        <use xlink:href="#olymp-comments-post-icon"></use>
                                    </svg>
                                </a>

                                <a href="#" class="btn btn-control">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="#olymp-share-icon"></use>
                                    </svg>
                                </a>

                            </div>

                        </article>

                        <!-- .. end Post -->
                    </div>
                    <div class="ui-block">

                        <!-- Post -->

                        <article class="hentry post video">

                            <div class="post__author author vcard inline-items">
                                <img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                                    shared a
                                    <a href="#">link</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            7 hours ago
                                        </time>
                                    </div>
                                </div>

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

                            </div>

                            <p>If someone missed it, check out the new song by System of a Revenge! I thinks they are
                                going back to their roots...</p>

                            <div class="post-video">
                                <div class="video-thumb">
                                    <img loading="lazy" src="img/video5.webp" alt="photo" width="178" height="178">
                                    <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
                                        <svg class="olymp-play-icon">
                                            <use xlink:href="#olymp-play-icon"></use>
                                        </svg>
                                    </a>
                                </div>

                                <div class="video-content">
                                    <a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo
                                        incididunt ut labore..</p>
                                    <a href="#" class="link-site">YOUTUBE.COM</a>
                                </div>
                            </div>

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
                                            <img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                </ul>

                                <div class="names-people-likes">
                                    <a href="#">Jenny</a>, <a href="#">Robert</a> and
                                    <br>13 more liked this
                                </div>

                                <div class="comments-shared">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon">
                                            <use xlink:href="#olymp-speech-balloon-icon"></use>
                                        </svg>
                                        <span>1</span>
                                    </a>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-share-icon">
                                            <use xlink:href="#olymp-share-icon"></use>
                                        </svg>
                                        <span>16</span>
                                    </a>
                                </div>


                            </div>


                        </article>

                        <!-- .. end Post -->
                    </div>
                    <div class="ui-block">
                        <!-- Post -->

                        <article class="hentry post">

                            <div class="post__author author vcard inline-items">
                                <img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            2 hours ago
                                        </time>
                                    </div>
                                </div>

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

                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt
                                ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                consequat.
                            </p>

                            <div class="post-additional-info inline-items">

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="#olymp-heart-icon"></use>
                                    </svg>
                                    <span>36</span>
                                </a>

                                <ul class="friends-harmonic">
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic9.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic11.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                </ul>

                                <div class="names-people-likes">
                                    <a href="#">You</a>, <a href="#">Elaine</a> and
                                    <br>34 more liked this
                                </div>


                                <div class="comments-shared">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon">
                                            <use xlink:href="#olymp-speech-balloon-icon"></use>
                                        </svg>
                                        <span>17</span>
                                    </a>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-share-icon">
                                            <use xlink:href="#olymp-share-icon"></use>
                                        </svg>
                                        <span>24</span>
                                    </a>
                                </div>


                            </div>


                        </article>

                        <!-- .. end Post -->
                        <!-- Comments -->

                        <ul class="comments-list">
                            <li class="comment-item">
                                <div class="post__author author vcard inline-items">
                                    <img loading="lazy" src="img/avatar10-sm.webp" alt="author" width="36" height="36">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                5 mins ago
                                            </time>
                                        </div>
                                    </div>

                                    <a href="#" class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </a>

                                </div>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der
                                    doloremque laudantium.</p>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="#olymp-heart-icon"></use>
                                    </svg>
                                    <span>8</span>
                                </a>
                                <a href="#" class="reply">Reply</a>
                            </li>
                            <li class="comment-item has-children">
                                <div class="post__author author vcard inline-items">
                                    <img loading="lazy" src="img/avatar5-sm.webp" alt="author" width="42" height="42">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                1 hour ago
                                            </time>
                                        </div>
                                    </div>

                                    <a href="#" class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </a>

                                </div>

                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed
                                    quia
                                    consequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque
                                    porro
                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en
                                    lorem ipsum der.
                                </p>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="#olymp-heart-icon"></use>
                                    </svg>
                                    <span>5</span>
                                </a>
                                <a href="#" class="reply">Reply</a>

                                <ul class="children">
                                    <li class="comment-item">
                                        <div class="post__author author vcard inline-items">
                                            <img loading="lazy" src="img/avatar8-sm.webp" alt="author" width="36"
                                                height="36">

                                            <div class="author-date">
                                                <a class="h6 post__author-name fn" href="#">Diana Jameson</a>
                                                <div class="post__date">
                                                    <time class="published" datetime="2017-03-24T18:18">
                                                        39 mins ago
                                                    </time>
                                                </div>
                                            </div>

                                            <a href="#" class="more">
                                                <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                                </svg>
                                            </a>

                                        </div>

                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                            eu fugiat nulla pariatur.</p>

                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-heart-icon">
                                                <use xlink:href="#olymp-heart-icon"></use>
                                            </svg>
                                            <span>2</span>
                                        </a>
                                        <a href="#" class="reply">Reply</a>
                                    </li>
                                    <li class="comment-item">
                                        <div class="post__author author vcard inline-items">
                                            <img loading="lazy" src="img/avatar2-sm.webp" alt="author" width="42"
                                                height="42">

                                            <div class="author-date">
                                                <a class="h6 post__author-name fn" href="#">Nicholas Grisom</a>
                                                <div class="post__date">
                                                    <time class="published" datetime="2017-03-24T18:18">
                                                        24 mins ago
                                                    </time>
                                                </div>
                                            </div>

                                            <a href="#" class="more">
                                                <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="#olymp-three-dots-icon"></use>
                                                </svg>
                                            </a>

                                        </div>

                                        <p>Excepteur sint occaecat cupidatat non proident.</p>

                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-heart-icon">
                                                <use xlink:href="#olymp-heart-icon"></use>
                                            </svg>
                                            <span>0</span>
                                        </a>
                                        <a href="#" class="reply">Reply</a>

                                    </li>
                                </ul>

                            </li>

                            <li class="comment-item">
                                <div class="post__author author vcard inline-items">
                                    <img loading="lazy" src="img/avatar4-sm.webp" alt="author" width="42" height="42">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="#">Chris Greyson</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                1 hour ago
                                            </time>
                                        </div>
                                    </div>

                                    <a href="#" class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="#olymp-three-dots-icon"></use>
                                        </svg>
                                    </a>

                                </div>

                                <p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                                    in culpa qui officia deserunt mollit.</p>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="#olymp-heart-icon"></use>
                                    </svg>
                                    <span>7</span>
                                </a>
                                <a href="#" class="reply">Reply</a>

                            </li>
                        </ul>

                        <!-- ... end Comments -->
                        <a href="#" class="more-comments">View more comments <span>+</span></a>

                        <!-- Comment Form  -->

                        <form class="comment-form inline-items">

                            <div class="post__author author vcard inline-items">
                                <img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

                                <div class="form-group with-icon-right ">
                                    <textarea class="form-control" placeholder=""></textarea>
                                    <div class="add-options-message">
                                        <a href="#" class="options-message" data-bs-toggle="modal"
                                            data-bs-target="#update-header-photo">
                                            <svg class="olymp-camera-icon">
                                                <use xlink:href="#olymp-camera-icon"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-md-2 btn-primary">Post Comment</button>

                            <button
                                class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

                        </form>

                        <!-- ... end Comment Form  -->
                    </div>
                    <div class="ui-block">
                        <!-- Post -->

                        <article class="hentry post has-post-thumbnail shared-photo">

                            <div class="post__author author vcard inline-items">
                                <img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                                    shared
                                    <a href="#">Diana Jameson</a>’s <a href="#">photo</a>
                                    <div class="post__date">
                                        <time class="published" datetime="2017-03-24T18:18">
                                            7 hours ago
                                        </time>
                                    </div>
                                </div>

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

                            </div>

                            <p>Hi! Everyone should check out these amazing photographs that my friend shot the past
                                week. Here’s one of them...leave a kind comment!</p>

                            <div class="post-thumb">
                                <img loading="lazy" src="img/post-photo6.webp" alt="photo" width="618" height="412">
                            </div>

                            <ul class="children single-children">
                                <li class="comment-item">
                                    <div class="post__author author vcard inline-items">
                                        <img loading="lazy" src="img/avatar8-sm.webp" alt="author" width="36"
                                            height="36">
                                        <div class="author-date">
                                            <a class="h6 post__author-name fn" href="#">Diana Jameson</a>
                                            <div class="post__date">
                                                <time class="published" datetime="2017-03-24T18:18">
                                                    16 hours ago
                                                </time>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Here’s the first photo of our incredible photoshoot from yesterday. If you like
                                        it please say so and tel me what you wanna see next!</p>
                                </li>
                            </ul>

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
                                            <img loading="lazy" src="img/friend-harmonic5.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic10.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic7.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic8.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/friend-harmonic2.webp" alt="friend" width="28"
                                                height="28">
                                        </a>
                                    </li>
                                </ul>

                                <div class="names-people-likes">
                                    <a href="#">Diana</a>, <a href="#">Nicholas</a> and
                                    <br>13 more liked this
                                </div>

                                <div class="comments-shared">
                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-speech-balloon-icon">
                                            <use xlink:href="#olymp-speech-balloon-icon"></use>
                                        </svg>
                                        <span>0</span>
                                    </a>

                                    <a href="#" class="post-add-icon inline-items">
                                        <svg class="olymp-share-icon">
                                            <use xlink:href="#olymp-share-icon"></use>
                                        </svg>
                                        <span>16</span>
                                    </a>
                                </div>

                            </div>


                        </article>

                        <!-- .. end Post -->
                    </div>
                </div>

                <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html"
                    data-container="newsfeed-items-grid">
                    <svg class="olymp-three-dots-icon">
                        <use xlink:href="#olymp-three-dots-icon"></use>
                    </svg>
                </a>
            </div>

            <!-- ... end Main Content -->


            <!-- Left Sidebar -->

            <div class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-6 col-12">

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Profile Intro</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Personal-Info -->

                        <ul class="widget w-personal-info item-block">
                            <li>
                                <span class="title">About Me:</span>
                                <span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the
                                    “Daydreams” Agency in Pier 56.</span>
                            </li>
                            <li>
                                <span class="title">Favourite TV Shows:</span>
                                <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,
                                    American Guy.</span>
                            </li>
                            <li>
                                <span class="title">Favourite Music Bands / Artists:</span>
                                <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a
                                    Revenge.</span>
                            </li>
                        </ul>

                        <!-- .. end W-Personal-Info -->
                        <!-- W-Socials -->

                        <div class="widget w-socials">
                            <h6 class="title">Other Social Networks:</h6>
                            <a href="#" class="social-item bg-facebook">
                                <svg width="16" height="16">
                                    <use xlink:href="#olymp-facebook-icon"></use>
                                </svg>
                                Facebook
                            </a>
                            <a href="#" class="social-item bg-twitter">
                                <svg width="16" height="16">
                                    <use xlink:href="#olymp-twitter-icon"></use>
                                </svg>
                                Twitter
                            </a>
                            <a href="#" class="social-item bg-dribbble">
                                <svg width="16" height="16">
                                    <use xlink:href="#olymp-dribble-icon"></use>
                                </svg>
                                Dribbble
                            </a>
                        </div>


                        <!-- ... end W-Socials -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">James’s Badges</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Badges -->

                        <ul class="widget w-badges">
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge1.webp" alt="author" width="38" height="38">
                                    <div class="label-avatar bg-primary">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge4.webp" alt="author" width="38" height="38">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge3.webp" alt="author" width="38" height="38">
                                    <div class="label-avatar bg-blue">4</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge6.webp" alt="author" width="38" height="38">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge11.webp" alt="author" width="38" height="38">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge8.webp" alt="author" width="38" height="38">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge10.webp" alt="author" width="38" height="38">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge13.webp" alt="author" width="38" height="38">
                                    <div class="label-avatar bg-breez">2</div>
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge7.webp" alt="author" width="38" height="38">
                                </a>
                            </li>
                            <li>
                                <a href="24-CommunityBadges.html">
                                    <img loading="lazy" src="img/badge12.webp" alt="author" width="38" height="38">
                                </a>
                            </li>
                        </ul>

                        <!--.. end W-Badges -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">My Spotify Playlist</h6>
                    </div>

                    <!-- W-Playlist -->

                    <ol class="widget w-playlist">
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist6.webp" alt="thumb-composition" width="34"
                                    height="34">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">The Past Starts Slow...</a>
                                <a href="#" class="composition-author">System of a Revenge</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">3:22</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Add Song to Player</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Playlist to Player</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>

                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist7.webp" alt="thumb-composition" width="34"
                                    height="34">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">The Pretender</a>
                                <a href="#" class="composition-author">Kung Fighters</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">5:48</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Add Song to Player</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Playlist to Player</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist8.webp" alt="thumb-composition" width="34"
                                    height="34">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">Blood Brothers</a>
                                <a href="#" class="composition-author">Iron Maid</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">3:06</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Add Song to Player</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Playlist to Player</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist9.webp" alt="thumb-composition" width="34"
                                    height="34">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">Seven Nation Army</a>
                                <a href="#" class="composition-author">The Black Stripes</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Add Song to Player</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Playlist to Player</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        <li class="js-open-popup" data-popup-target=".playlist-popup">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist10.webp" alt="thumb-composition" width="34"
                                    height="34">
                                <div class="overlay"></div>
                                <a href="#" class="play-icon">
                                    <svg class="olymp-music-play-icon-big">
                                        <use xlink:href="#olymp-music-play-icon-big"></use>
                                    </svg>
                                </a>
                            </div>

                            <div class="composition">
                                <a href="#" class="composition-name">Killer Queen</a>
                                <a href="#" class="composition-author">Archiduke</a>
                            </div>

                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">5:40</time>
                                <div class="more">
                                    <svg class="olymp-three-dots-icon">
                                        <use xlink:href="#olymp-three-dots-icon"></use>
                                    </svg>
                                    <ul class="more-dropdown">
                                        <li>
                                            <a href="#">Add Song to Player</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Playlist to Player</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                    </ol>

                    <!-- .. end W-Playlist -->
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Twitter Feed</h6>
                    </div>

                    <!-- W-Twitter -->

                    <ul class="widget w-twitter">
                        <li class="twitter-item">
                            <div class="author-folder">
                                <img loading="lazy" src="img/twitter-avatar1.webp" alt="avatar" width="40" height="40">
                                <div class="author">
                                    <a href="#" class="author-name">Space Cowboy</a>
                                    <a href="#" class="group">@james_spiegelOK</a>
                                </div>
                            </div>
                            <p>Tomorrow with the agency we will run 5 km for charity. Come and give us your support!
                                <a href="#" class="link-post">#Daydream5K</a>
                            </p>
                            <span class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    2 hours ago
                                </time>
                            </span>
                        </li>
                        <li class="twitter-item">
                            <div class="author-folder">
                                <img loading="lazy" src="img/twitter-avatar1.webp" alt="avatar" width="40" height="40">
                                <div class="author">
                                    <a href="#" class="author-name">Space Cowboy</a>
                                    <a href="#" class="group">@james_spiegelOK</a>
                                </div>
                            </div>
                            <p>Check out the new website of “The Bebop Bar”! <a href="#"
                                    class="link-post">bytle/thbp53f</a>
                            </p>
                            <span class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    16 hours ago
                                </time>
                            </span>
                        </li>
                        <li class="twitter-item">
                            <div class="author-folder">
                                <img loading="lazy" src="img/twitter-avatar1.webp" alt="avatar" width="40" height="40">
                                <div class="author">
                                    <a href="#" class="author-name">Space Cowboy</a>
                                    <a href="#" class="group">@james_spiegelOK</a>
                                </div>
                            </div>
                            <p>The Sunday is the annual agency camping trip and I still haven’t got a tent
                                <a href="#" class="link-post">#TheWild #Indoors</a>
                            </p>
                            <span class="post__date">
                                <time class="published" datetime="2017-03-24T18:18">
                                    Yesterday
                                </time>
                            </span>
                        </li>
                    </ul>


                    <!-- .. end W-Twitter -->
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Last Videos</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Latest-Video -->

                        <ul class="widget w-last-video">
                            <li>
                                <a href="https://vimeo.com/ondemand/viewfromabluemoon4k/147865858"
                                    class="play-video play-video--small">
                                    <svg class="olymp-play-icon">
                                        <use xlink:href="#olymp-play-icon"></use>
                                    </svg>
                                </a>
                                <img loading="lazy" src="img/video8.webp" alt="video" width="272" height="181">
                                <div class="video-content">
                                    <div class="title">System of a Revenge - Hypnotize...</div>
                                    <time class="published" datetime="2017-03-24T18:18">3:25</time>
                                </div>
                                <div class="overlay"></div>
                            </li>
                            <li>
                                <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                                    <svg class="olymp-play-icon">
                                        <use xlink:href="#olymp-play-icon"></use>
                                    </svg>
                                </a>
                                <img loading="lazy" src="img/video7.webp" alt="video" width="272" height="177">
                                <div class="video-content">
                                    <div class="title">Green Goo - Live at Dan’s Arena</div>
                                    <time class="published" datetime="2017-03-24T18:18">5:48</time>
                                </div>
                                <div class="overlay"></div>
                            </li>
                        </ul>

                        <!-- .. end W-Latest-Video -->
                    </div>
                </div>

            </div>

            <!-- ... end Left Sidebar -->


            <!-- Right Sidebar -->

            <div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Last Photos</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Latest-Photo -->

                        <ul class="widget w-last-photo js-zoom-gallery">
                            <li>
                                <a href="img/last-photo10-large.webp">
                                    <img loading="lazy" src="img/last-photo10-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot11-large.webp">
                                    <img loading="lazy" src="img/last-phot11-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot12-large.webp">
                                    <img loading="lazy" src="img/last-phot12-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot13-large.webp">
                                    <img loading="lazy" src="img/last-phot13-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot14-large.webp">
                                    <img loading="lazy" src="img/last-phot14-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot15-large.webp">
                                    <img loading="lazy" src="img/last-phot15-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot16-large.webp">
                                    <img loading="lazy" src="img/last-phot16-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot17-large.webp">
                                    <img loading="lazy" src="img/last-phot17-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                            <li>
                                <a href="img/last-phot18-large.webp">
                                    <img loading="lazy" src="img/last-phot18-large.webp" alt="photo" width="600"
                                        height="600">
                                </a>
                            </li>
                        </ul>


                        <!-- .. end W-Latest-Photo -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Blog Posts</h6>
                    </div>
                    <!-- W-Blog-Posts -->

                    <ul class="widget w-blog-posts">
                        <li>
                            <article class="hentry post">

                                <a href="#" class="h4">My Perfect Vacations in South America and Europe</a>

                                <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut
                                    labore et.</p>

                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        7 hours ago
                                    </time>
                                </div>

                            </article>
                        </li>
                        <li>
                            <article class="hentry post">

                                <a href="#" class="h4">The Big Experience of Travelling Alone</a>

                                <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut
                                    labore et.</p>

                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        March 18th, at 6:52pm
                                    </time>
                                </div>

                            </article>
                        </li>
                    </ul>

                    <!-- .. end W-Blog-Posts -->
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Friends (86)</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Faved-Page -->

                        <ul class="widget w-faved-page js-zoom-gallery">
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar38-sm.webp" alt="author" width="36" height="36">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar24-sm.webp" width="42" height="42" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar36-sm.webp" alt="author" width="42" height="42">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar35-sm.webp" alt="user" width="42" height="42">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar34-sm.webp" alt="author" width="42" height="42">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar33-sm.webp" alt="author" width="42" height="42">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar32-sm.webp" alt="user" width="42" height="42">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar31-sm.webp" alt="author" width="42" height="42">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar30-sm.webp" alt="author" width="42" height="42">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar29-sm.webp" width="42" height="42" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar28-sm.webp" width="42" height="42" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar27-sm.webp" width="42" height="42" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar26-sm.webp" width="42" height="42" alt="user">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img loading="lazy" src="img/avatar25-sm.webp" width="42" height="42" alt="user">
                                </a>
                            </li>
                            <li class="all-users">
                                <a href="#">+74</a>
                            </li>
                        </ul>

                        <!-- .. end W-Faved-Page -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Favourite Pages</h6>
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
                            <span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="ADD TO YOUR FAVS">
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
                            <span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="ADD TO YOUR FAVS">
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
                            <span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="ADD TO YOUR FAVS">
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
                            <span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="ADD TO YOUR FAVS">
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
                            <span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="ADD TO YOUR FAVS">
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
                            <span class="notification-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                data-bs-original-title="ADD TO YOUR FAVS">
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

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">James's Poll</h6>
                    </div>
                    <div class="ui-block-content">

                        <!-- W-Pool -->

                        <ul class="widget w-pool">
                            <li>
                                <p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
                            </li>
                            <li>
                                <div class="skills-item">
                                    <div class="skills-item-info">
                                        <span class="skills-item-title">
                                            <span class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios">
                                                    Thomas Bale
                                                </label>
                                            </span>
                                        </span>
                                        <span class="skills-item-count">
                                            <span class="count-animate" data-speed="1000" data-refresh-interval="50"
                                                data-to="62" data-from="0"></span>
                                            <span class="units">62%</span>
                                        </span>
                                    </div>
                                    <div class="skills-item-meter">
                                        <span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
                                    </div>

                                    <div class="counter-friends">12 friends voted for this</div>

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic1.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic2.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic3.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic4.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic5.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic6.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic7.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic8.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic9.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="all-users">+3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="skills-item">
                                    <div class="skills-item-info">
                                        <span class="skills-item-title">
                                            <span class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios">
                                                    Ben Robertson
                                                </label>
                                            </span>
                                        </span>
                                        <span class="skills-item-count">
                                            <span class="count-animate" data-speed="1000" data-refresh-interval="50"
                                                data-to="27" data-from="0"></span>
                                            <span class="units">27%</span>
                                        </span>
                                    </div>
                                    <div class="skills-item-meter">
                                        <span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
                                    </div>
                                    <div class="counter-friends">7 friends voted for this</div>

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic7.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic8.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic9.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic10.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic11.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic12.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic13.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <div class="skills-item">
                                    <div class="skills-item-info">
                                        <span class="skills-item-title">
                                            <span class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios">
                                                    Michael Streiton
                                                </label>
                                            </span>
                                        </span>
                                        <span class="skills-item-count">
                                            <span class="count-animate" data-speed="1000" data-refresh-interval="50"
                                                data-to="11" data-from="0"></span>
                                            <span class="units">11%</span>
                                        </span>
                                    </div>
                                    <div class="skills-item-meter">
                                        <span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
                                    </div>

                                    <div class="counter-friends">2 people voted for this</div>

                                    <ul class="friends-harmonic">
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic14.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img loading="lazy" src="img/friend-harmonic15.webp" alt="friend"
                                                    width="28" height="28">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                        <!-- .. end W-Pool -->
                        <a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
                    </div>
                </div>

            </div>

            <!-- ... end Right Sidebar -->

        </div>
    </div>

    <!-- Window-popup Update Header Photo -->

    <div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo"
        aria-hidden="true">
        <div class="modal-dialog window-popup update-header-photo" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>

                <div class="modal-header">
                    <h6 class="title">Update Header Photo</h6>
                </div>

                <div class="modal-body">
                    <a href="#" class="upload-photo-item">
                        <svg class="olymp-computer-icon">
                            <use xlink:href="#olymp-computer-icon"></use>
                        </svg>

                        <h6>Upload Photo</h6>
                        <br />
                        <form action="update-profile-image.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="profile_image" />
                            <br />
                            <button type="submit" class="btn btn-md-2 btn-primary">Update</button>
                        </form>

                    </a>

                    <a href="#" class="upload-photo-item">

                        <svg class="olymp-photos-icon">
                            <use xlink:href="#olymp-photos-icon"></use>
                        </svg>

                        <h6>Upload background Photo</h6>
                        <form action="update-background-image.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="background_image" />
                            <br />
                            <button type="submit" class="btn btn-md-2 btn-primary">Update</button>
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- ... end Window-popup Update Header Photo -->

    <!-- Window-popup Choose from my Photo -->

    <div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo"
        aria-hidden="true">
        <div class="modal-dialog window-popup choose-from-my-photo" role="document">

            <div class="modal-content">
                <a href="#" class="close icon-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="#olymp-close-icon"></use>
                    </svg>
                </a>
                <div class="modal-header">
                    <h6 class="title">Choose from My Photos</h6>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab"
                                aria-expanded="true">
                                <svg class="olymp-photos-icon">
                                    <use xlink:href="#olymp-photos-icon"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-expanded="false">
                                <svg class="olymp-albums-icon">
                                    <use xlink:href="#olymp-albums-icon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="modal-body">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-expanded="true">

                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo1.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo2.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo3.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>

                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo4.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo5.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo6.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>

                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo7.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo8.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>
                            <div class="choose-photo-item">
                                <div class="radio">
                                    <label class="custom-radio">
                                        <img loading="lazy" src="img/choose-photo9.webp" alt="photo" width="247"
                                            height="166">
                                        <input type="radio" name="optionsRadios">
                                    </label>
                                </div>
                            </div>


                            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                            <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-expanded="false">

                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="img/choose-photo10.webp" alt="photo" width="225"
                                        height="180">
                                    <figcaption>
                                        <a href="#">South America Vacations</a>
                                        <span>Last Added: 2 hours ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="img/choose-photo11.webp" alt="photo" width="225"
                                        height="180">
                                    <figcaption>
                                        <a href="#">Photoshoot Summer 2016</a>
                                        <span>Last Added: 5 weeks ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="img/choose-photo12.webp" alt="photo" width="225"
                                        height="180">
                                    <figcaption>
                                        <a href="#">Amazing Street Food</a>
                                        <span>Last Added: 6 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="img/choose-photo13.webp" alt="photo" width="224"
                                        height="179">
                                    <figcaption>
                                        <a href="#">Graffity & Street Art</a>
                                        <span>Last Added: 16 hours ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="img/choose-photo14.webp" alt="photo" width="225"
                                        height="180">
                                    <figcaption>
                                        <a href="#">Amazing Landscapes</a>
                                        <span>Last Added: 13 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="choose-photo-item">
                                <figure>
                                    <img loading="lazy" src="img/choose-photo15.webp" alt="photo" width="225"
                                        height="180">
                                    <figcaption>
                                        <a href="#">The Majestic Canyon</a>
                                        <span>Last Added: 57 mins ago</span>
                                    </figcaption>
                                </figure>
                            </div>


                            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
                            <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ... end Window-popup Choose from my Photo -->

    <!-- Playlist Popup -->

    <div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup"
        aria-hidden="true">

        <a href="#" class="icon-close js-close-popup">
            <svg class="olymp-close-icon">
                <use xlink:href="#olymp-close-icon"></use>
            </svg>
        </a>

        <div class="mCustomScrollbar">
            <table class="playlist-popup-table">

                <thead>

                    <tr>

                        <th class="play">
                            PLAY
                        </th>

                        <th class="cover">
                            COVER
                        </th>

                        <th class="song-artist">
                            SONG AND ARTIST
                        </th>

                        <th class="album">
                            ALBUM
                        </th>

                        <th class="released">
                            RELEASED
                        </th>

                        <th class="duration">
                            DURATION
                        </th>

                        <th class="spotify">
                            GET IT ON SPOTIFY
                        </th>

                        <th class="remove">
                            REMOVE
                        </th>
                    </tr>

                </thead>

                <tbody>
                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist19.webp" alt="thumb-composition" width="34"
                                    height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">We Can Be Heroes</a>
                                <a href="#" class="composition-author">Jason Bowie</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">Ziggy Firedust</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist6.webp" alt="thumb-composition" width="34"
                                    height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">The Past Starts Slow and Ends</a>
                                <a href="#" class="composition-author">System of a Revenge</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">Wonderize</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist7.webp" alt="thumb-composition" width="34"
                                    height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">The Pretender</a>
                                <a href="#" class="composition-author">Kung Fighters</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">Warping Lights</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist8.webp" alt="thumb-composition" width="34"
                                    height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">Seven Nation Army</a>
                                <a href="#" class="composition-author">The Black Stripes</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist9.webp" alt="thumb-composition" width="34"
                                    height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">Leap of Faith</a>
                                <a href="#" class="composition-author">Eden Artifact</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition">The Assassins’s Soundtrack</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="play">
                            <a href="#" class="play-icon">
                                <svg class="olymp-music-play-icon-big">
                                    <use xlink:href="#olymp-music-play-icon-big"></use>
                                </svg>
                            </a>
                        </td>
                        <td class="cover">
                            <div class="playlist-thumb">
                                <img loading="lazy" src="img/playlist10.webp" alt="thumb-composition" width="34"
                                    height="34">
                            </div>
                        </td>
                        <td class="song-artist">
                            <div class="composition">
                                <a href="#" class="composition-name">Killer Queen</a>
                                <a href="#" class="composition-author">Archiduke</a>
                            </div>
                        </td>
                        <td class="album">
                            <a href="#" class="album-composition ">News of the Universe</a>
                        </td>
                        <td class="released">
                            <div class="release-year">2014</div>
                        </td>
                        <td class="duration">
                            <div class="composition-time">
                                <time class="published" datetime="2017-03-24T18:18">6:17</time>
                            </div>
                        </td>
                        <td class="spotify">
                            <svg class="composition-icon" width="22" height="22">
                                <use xlink:href="#olymp-spotify-icon"></use>
                            </svg>
                        </td>
                        <td class="remove">
                            <a href="#" class="remove-icon">
                                <svg class="olymp-close-icon">
                                    <use xlink:href="#olymp-close-icon"></use>
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!----------------------------------------------- MediaPlayer ----------------------------------------------------->

        <audio id="mediaplayer" data-showplaylist="true">
            <source src="mp3/Twice.html" title="Track 1" data-poster="track1.webp" type="audio/mpeg">
            <source src="mp3/Twice.html" title="Track 2" data-poster="track2.webp" type="audio/mpeg">
            <source src="mp3/Twice.html" title="Track 3" data-poster="track3.webp" type="audio/mpeg">
            <source src="mp3/Twice.html" title="Track 4" data-poster="track4.webp" type="audio/mpeg">
        </audio>

        <!-- JS library for MediaPlayer -->
        <script defer src="js/libs/mediaelement-and-player.min.js"></script>
        <script defer src="js/libs/mediaelement-playlist-plugin.min.js"></script>
        <!-- ...end JS library for MediaPlayer -->

        <!------------------------------------------------ ... end MediaPlayer -------------------------------------------->

    </div>

    <!-- ... end Playlist Popup -->


    <a class="back-to-top" href="#">
        <svg class="back-icon" width="14" height="18">
            <use xlink:href="#olymp-back-to-top"></use>
        </svg>
    </a>


    <!-- Window-popup-CHAT for responsive min-width: 768px -->

    <div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog"
        aria-labelledby="popup-chat-responsive" aria-hidden="true">

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
                                <img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
                                    I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/author-page.webp" width="36" height="36" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img loading="lazy" src="img/avatar14-sm.webp" width="28" height="28" alt="author"
                                    class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow!
                                    I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated"
                                        datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
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
                                            <img loading="lazy" src="img/icon-chat1.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat2.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat3.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat4.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat5.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat6.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat7.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat8.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat9.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat10.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat11.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat12.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat13.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat14.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat15.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat16.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat17.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat18.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat19.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat20.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat21.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat22.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat23.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat24.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat25.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat26.webp" alt="icon" width="20"
                                                height="20">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img loading="lazy" src="img/icon-chat27.webp" alt="icon" width="20"
                                                height="20">
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

</html>