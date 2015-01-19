<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login, registration forms">
    <meta name="author" content="Seong Lee">

    <title>Authenty</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/animation.css" rel="stylesheet">
		<link href="css/checkbox/orange.css" rel="stylesheet">
		<link href="css/preview.css" rel="stylesheet">
		<link href="css/authenty.css" rel="stylesheet">
	
		<!-- Font Awesome CDN -->
		<link href="css/font-awesome.css" rel="stylesheet">
		
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
		
<section id="authenty_preview">
    <section id="signin_main" class="authenty signin-main">
        <div class="section-content">
            <div class="wrap">
                <div class="container">	  
                    <div class="form-wrap">
                        <div class="row">
                            <div class="title" data-animation="fadeInDown" data-animation-delay=".8s">
                                <h1>Reekmans Site</h1>
                                <h5>Welkom terug</h5>
                            </div>
                            <div id="form_1" data-animation="bounceIn">
                                <div class="form-header">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="form-main">
                                    <form>
                                        <div class="form-group">
                                              <input type="text" id="un_1" class="form-control" placeholder="Username" required="required">
                                                      <input type="password" id="pw_1" class="form-control" placeholder="Password" required="required">
                                        </div>
                                        <button id="signIn_1" type="submit" class="btn btn-block signin">Sign In</button>
                                    </form>	
                                </div>
                                <div class="form-footer">
                                    <div class="row">
                                        <div class="col-xs-7">
                                            <i class="fa fa-unlock-alt"></i>
                                            <a href="#password_recovery" id="forgot_from_1">Forgot password?</a>
                                        </div>
                                        <div class="col-xs-5">
                                            <i class="fa fa-check"></i>
                                            <a href="#signup_wizard" id="signup_from_1">Sign Up</a>
                                        </div>
                                    </div>
                                </div>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
		
  
		
		
    <section id="signup_wizard" class="authenty signup-wizard">
            <div class="section-content">
                    <div class="wrap">
                            <div class="container">
                                    <div class="form-wrap">

                                            <div data-animation="fadeInUp" data-animation-delay=".6s">
                                                    <div class="row nav-step">
                                                            <div class="col-xs-4 active"><span></span></div>
                                                            <div class="col-xs-4"><span></span></div>
                                                            <div class="col-xs-4"><span></span></div>
                                                    </div>								
                                    <div class="row nav-step-label">
                                    <div class="col-xs-4">Details</div>
                                                            <div class="col-xs-4">Account</div>
                                                            <div class="col-xs-4">Confirm</div>
                                                    </div>
                                            </div>

                                            <div data-animation="bounceInLeft" data-animation-delay=".2s">
                                                    <div class="row">
                                                    <ul class="page-container">
                                            <li class="current">
                                                                            <form>
                                                                              <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Name">
                                                                              </div>
                                                                              <div class="form-group">
                                                                                <input type="email" class="form-control" placeholder="Email">
                                                                              </div>
                                                                              <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Phone">
                                                                              </div>
                                                                            </form>	
                                                                    </li>
                                            <li>
                                                                            <form>
                                                                              <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Username">
                                                                              </div>
                                                                              <div class="form-group">
                                                                                <input type="password" class="form-control" placeholder="Password">
                                                                              </div>
                                                                              <div class="form-group">
                                                                                <input type="password" class="form-control" placeholder="Confirm Password">
                                                                              </div>
                                                                            </form>	
                                            </li>
                                            <li><span>Confirm details before you submit.</span>
                                                                            <div class="step-confirm">
                                                                                    <div class="row">
                                                                                            <div class="col-xs-5">Name</div>
                                                                                            <div class="col-xs-5"></div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                            <div class="col-xs-5">Email</div>
                                                                                            <div class="col-xs-5"></div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                            <div class="col-xs-5">Username</div>
                                                                                            <div class="col-xs-5"></div>
                                                                                    </div>
                                                                            </div>
                                            </li>
                                            </ul>
                                                    </div>

                                                    <div class="page-footer">
                                                            <div class="row step-wrap">
                                                                    <div class="col-xs-12">
                                                                            <span><span id="stepNo"></span> of 3</span>
                                                                    </div>
                                                            </div>
                                                            <div class="row btn-wrap">
                                                                    <div class="col-xs-6" id="prev">
                                                                            <button class="btn btn-block nav-step-btn">Previous</button> 
                                                                    </div>
                                                                    <div class="col-xs-6" id="next">
                                                            <button class="btn btn-block nav-step-btn">Next</button>
                                                                    </div>
                                                    <div class="col-xs-6" id="submit">
                                                            <button class="btn btn-block nav-step-btn" type="submit">Submit</button>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>

                                    </div>
                            </div>
                    </div>
            </div>
    </section>

		
    <section id="password_recovery" class="authenty password-recovery">
            <div class="section-content">
                    <div class="wrap">
                            <div class="container">
                                    <div class="form-wrap">
                                            <div class="row">
                                                    <div class="col-xs-12 col-sm-3 brand" data-animation="fadeInUp">
                                                            <h2>Authenty</h2>
                                                            <p>Authentication made beautiful</p>
                                                    </div>
                                                    <div class="col-sm-1 hidden-xs">
                                                            <div class="horizontal-divider"></div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-8 main" data-animation="fadeInLeft" data-animation-delay=".5s">
                                                            <h2>Forgot your password?</h2>
                                                            <p>Not to worry. Just enter your email address below and we'll send you an instruction email for recovery.</p>
                                                            <form>
                                                              <div class="form-group">
                                                                <input type="email" class="form-control" placeholder="Email" required="required">
                                                              </div>
                                                                    <div class="row">
                                                                            <div class="col-xs-12 col-sm-4 col-sm-offset-8">
                                                                                    <button type="submit" class="btn btn-block reset">Reset Password</button>
                                                                            </div>
                                                                    </div>
                                                            </form>	
                                                    </div>
                                            </div>

                                    </div>
                            </div>
                    </div>
            </div>
    </section>
			

		
</section>	
		
	  
    <!-- js library -->
    <script src="js/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/jqueryui/1.10.0/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.icheck.min.js"></script>
    <script src="js/waypoints.min.js"></script>

    <!-- authenty js -->
    <script src="js/authenty.js"></script>

    <!-- preview scripts -->
    <script src="js/preview/jquery.malihu.PageScroll2id.js"></script>
    <script src="js/preview/jquery.address-1.6.min.js"></script>
    <script src="js/preview/scrollTo.min.js"></script>
    <script src="js/preview/init.js"></script>


    <!-- preview scripts -->
    <script>
            (function($) {

                    // get full window size
                    $(window).on('load resize', function(){
                        var w = $(window).width();
                        var h = $(window).height();

                        $('section').height(h);
                    });		

                    // scrollTo plugin
                    $('#signup_from_1').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                    $('#forgot_from_1').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                    $('#signup_from_2').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                    $('#forgot_from_2').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });
                    $('#forgot_from_3').scrollTo({ easing: 'easeInOutQuint', speed: 1500 });


                    // set focus on input
                    var firstInput = $('section').find('input[type=text], input[type=email]').filter(':visible:first');

                    if (firstInput != null) {
                    firstInput.focus();
                    }

                    $('section').waypoint(function (direction) {
                            var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
                            target.focus();
                    }, {
                        offset: 300
                    }).waypoint(function (direction) {
                                              var target = $(this).find('input[type=text], input[type=email]').filter(':visible:first');
                                      target.focus();
                    }, {
                        offset: -400
                    });


                    // animation handler
                    $('[data-animation-delay]').each(function () {
                var animationDelay = $(this).data("animation-delay");
                $(this).css({
                    "-webkit-animation-delay": animationDelay,
                    "-moz-animation-delay": animationDelay,
                    "-o-animation-delay": animationDelay,
                    "-ms-animation-delay": animationDelay,
                    "animation-delay": animationDelay
                });
            });

            $('[data-animation]').waypoint(function (direction) {
                if (direction == "down") {
                    $(this).addClass("animated " + $(this).data("animation"));
                }
            }, {
                offset: '90%'
            }).waypoint(function (direction) {
                if (direction == "up") {
                    $(this).removeClass("animated " + $(this).data("animation"));
                }
            }, {
                offset: '100%'
            });

            })(jQuery);
    </script>
  </body>
</html>
