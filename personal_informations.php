<?php

require_once __DIR__ . '/partials/_validations.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Your Account - Personal Information</title>

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
    <!-- Profile Settings Responsive -->

    <div class="profile-settings-responsive">

        <a href="#" class="js-profile-settings-open profile-settings-open">
            <svg class="settings-open-arrow" width="14" height="14">
                <use xlink:href="#olymp-popup-left-arrow"></use>
            </svg>
        </a>
        <div class="mCustomScrollbar" data-mcs-theme="dark">
            <div class="ui-block">
                <div class="your-profile">
                    <div class="ui-block-title ui-block-title-small">
                        <h6 class="title">Your PROFILE</h6>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Profile Settings
                                    <svg class="olymp-dropdown-arrow-icon">
                                        <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                                    </svg>
                                </button>
                            </h6>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="your-profile-menu">
                                        <li>
                                            <a href="personal_informations.php">Personal Information</a>
                                        </li>
                                        <li>
                                            <a href="29-YourAccount-AccountSettings.php">Account Settings</a>
                                        </li>
                                        <li>
                                            <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                                        </li>
                                        <li>
                                            <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and Interests</a>
                                        </li>
                                        <li>
                                            <a href="32-YourAccount-EducationAndEmployement.html">Education and
                                                Employement</a>
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
            </div>
        </div>
    </div>

    <!-- ... end Profile Settings Responsive -->


    <!-- Fixed Sidebar Left -->
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
    <!-- Main Header Account -->

    <div class="main-header">
        <div class="content-bg-wrap bg-account"></div>
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 m-auto col-md-8 col-sm-12 col-12">
                    <div class="main-header-content">
                        <h1>Your Account Dashboard</h1>
                        <p>Welcome to your account dashboard! Here you’ll find everything you need to change your
                            profile
                            information, settings, read notifications and requests, view your latest messages, change
                            your pasword and much
                            more! Also you can create or manage your own favourite page, have fun!</p>
                    </div>
                </div>
            </div>
        </div>
        <img class="img-bottom" src="img/account-bottom.webp" width="1169" height="153">
    </div>

    <!-- ... end Main Header Account -->


    <!-- Your Account Personal Information -->

    <div class="container">
        <div class="row">
            <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Personal Information</h6>
                    </div>
                    <div class="ui-block-content">


                        <!-- Personal Information Form  -->

                        <form method="post" action="update-profile.php">
                            <div class="row">

                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <input class="form-control" name="name" placeholder="" type="text"
                                            value="<?php echo $name; ?>">
                                    </div>

                                    <div class=" form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input class="form-control" name="email" placeholder="" type="email"
                                            value="<?php echo $email; ?>">
                                    </div>

                                    <div class=" form-group date-time-picker label-floating">
                                        <label class="control-label">Your Birthday</label>
                                        <input name="birthday" type="date" value="<?php echo $birthday; ?>" />
                                    </div>
                                </div>

                                <div class=" col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input class="form-control" name="last_name" type="text"
                                            value="<?php echo $lastname; ?>">
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Website</label>
                                        <input class="form-control" name="website" placeholder="" type="text"
                                            value="<?php echo $website; ?>">
                                    </div>


                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your Phone Number</label>
                                        <input class="form-control" name="phone" placeholder="" type="text"
                                            value="<?php echo $phone; ?>">
                                    </div>
                                </div>

                                <div class=" col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Country</label>
                                        <select class="form-select">
                                            <option value="US">United States</option>
                                            <option value="AU">Australia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your State / Province</label>
                                        <select class="form-select">
                                            <option value="CA">California</option>
                                            <option value="TE">Texas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-lg-4 col-md-4 col-sm-12 col-12">
                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your City</label>
                                        <select class="form-select">
                                            <option value="SF">San Francisco</option>
                                            <option value="NY">New York</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="about"
                                            placeholder="Write a little description about you"><?php echo $about; ?></textarea>
                                    </div>

                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Your Gender</label>
                                        <select class="form-select" name="gender">
                                            <option value="Male" <?php

																	if ($gender == "Male") {
																		echo 'selected';
																	}
																	?>>Male</option>
                                            <option value="Female" <?php

																	if ($gender == "Female") {
																		echo 'selected';
																	}
																	?>>Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Religious Belifs</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your Birthplace</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Occupation</label>
                                        <input class="form-control" placeholder="" type="text" value="UI/UX Designer">
                                    </div>

                                    <div class="form-group label-floating is-select">
                                        <label class="control-label">Status</label>
                                        <select class="form-select">
                                            <option value="MA">Married</option>
                                            <option value="FE">Not Married</option>
                                        </select>
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Political Incline</label>
                                        <input class="form-control" placeholder="" type="text" value="Democrat">
                                    </div>
                                </div>
                                <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group with-icon label-floating">
                                        <label class="control-label">Your Facebook Account</label>
                                        <input class="form-control" type="text"
                                            value="www.facebook.com/james-spiegel95321">
                                        <svg class="c-facebook" width="20" height="20">
                                            <use xlink:href="#olymp-facebook-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="form-group with-icon label-floating">
                                        <label class="control-label">Your Twitter Account</label>
                                        <input class="form-control" type="text" value="www.twitter.com/james_spiegelOK">
                                        <svg class="c-twitter" width="20" height="20">
                                            <use xlink:href="#olymp-twitter-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="form-group with-icon label-floating is-empty">
                                        <label class="control-label">Your RSS Feed Account</label>
                                        <input class="form-control" type="text">
                                        <svg class="c-rss" width="20" height="20">
                                            <use xlink:href="#olymp-rss-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="form-group with-icon label-floating">
                                        <label class="control-label">Your Dribbble Account</label>
                                        <input class="form-control" type="text"
                                            value="www.dribbble.com/thecowboydesigner">
                                        <svg class="c-dribbble" width="20" height="20">
                                            <use xlink:href="#olymp-dribble-icon"></use>
                                        </svg>
                                    </div>
                                    <div class="form-group with-icon label-floating is-empty">
                                        <label class="control-label">Your Spotify Account</label>
                                        <input class="form-control" type="text">
                                        <svg class="c-spotify" width="20" height="20">
                                            <use xlink:href="#olymp-spotify-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <button type="reset" class="btn btn-secondary btn-lg full-width">Restore all
                                        Attributes</button>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                                    <button type="submit" class="btn btn-primary btn-lg full-width">Save all
                                        Changes</button>
                                </div>

                            </div>
                        </form>

                        <!-- ... end Personal Information Form  -->
                    </div>
                </div>
            </div>

            <div
                class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12 responsive-display-none">
                <div class="ui-block">

                    <!-- Your Profile  -->

                    <div class="your-profile">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">Your PROFILE</h6>
                        </div>

                        <div class="accordion" id="accordionExample1">
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="headingOne1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne1" aria-expanded="true"
                                        aria-controls="collapseOne1">
                                        Profile Settings
                                        <svg class="olymp-dropdown-arrow-icon">
                                            <use xlink:href="#olymp-dropdown-arrow-icon"></use>
                                        </svg>
                                    </button>
                                </h6>
                                <div id="collapseOne1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne1" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <ul class="your-profile-menu">
                                            <li>
                                                <a href="personal_informations.php">Personal Information</a>
                                            </li>
                                            <li>
                                                <a href="29-YourAccount-AccountSettings.php">Account Settings</a>
                                            </li>
                                            <li>
                                                <a href="30-YourAccount-ChangePassword.html">Change Password</a>
                                            </li>
                                            <li>
                                                <a href="31-YourAccount-HobbiesAndInterests.html">Hobbies and
                                                    Interests</a>
                                            </li>
                                            <li>
                                                <a href="32-YourAccount-EducationAndEmployement.html">Education and
                                                    Employement</a>
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
    <script src="js/libs/moment.min.js"></script>
    <script src="js/libs/daterangepicker.min.js"></script>
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

<!-- Mirrored from html.crumina.net/html-olympus/personal_informations.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 17:49:35 GMT -->

</html>