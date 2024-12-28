<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <!-- ============TITLE============= -->
            <title>Ocean Fortune</title>

            <!-- ============HEAD-ICON-LOGO============= -->
            <link rel="icon" type="image/png" href="assets/images/logo.png">

            <!-- ============CSS-LINKS============= -->
            <link rel="stylesheet" href="assets/css/main.css">
            <link rel="stylesheet" href="assets/css/signup_&_login.css">
            <link rel="stylesheet" href="assets/css/main-mediaquery.css">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">



            <!-- ============FONT-AWESOME-LINKS============= -->
            <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

            <!-- ============JAVASCRIPT-LINKS============= -->
            <script type="module" src="assets/javascript/login.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/crypto-js@4.1.1/core.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/crypto-js@4.1.1/aes.js"></script>


        </head>

        <?php 
            
            
            include 'signin_logic.php'
            
            
            ?>


        <style>
            @keyframes flash {
            0%{
                transform: scale(0.12) translateY(35%);
                /* opacity: 0; */

            }

            100%{
                transform: scale(1) translateY(0);
                /* opacity: 1; */

            }
        }

        /* ============STYLING AND ANIMATION FOR THE HTML TAG============= */
        html{
            scroll-behavior: smooth;
            animation: flash 1s cubic-bezier(0.23, 1, 0.32, 1);
        }
        </style>


        <body>
            <div class="go_back">
                <div class="left-arrow">
                    <img src="assets/images/SLIDEUPARROW.PNG" alt="">
                </div>
                <a class="links" href="index.php">back to home</a>
            </div>

            <div class="wrapper" id="login_html">
                <div class="image">
                    <div class="image_wrapper">
                        <img src="assets/svg/undraw_mobile_login_re_9ntv.svg" srcset="">

                    </div>
                </div>

                <div class="form_wrapper">
                    <header>
                        <div class="logo">
                            <div class="image_wrapper">
                                <a class="links" href="index.php">
                                    <img src="assets/images/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="text">
                            <div class="span">Sign in to your Account</div>
                        </div>
                    </header>

                    <form action="" method="POST" class="form" id="login_form" >
                        <?php if (!empty($GLOBALS['ERROR'])): ?>
        					<p class="error_message" style="color: red;"><?php echo $GLOBALS['ERROR']; ?></p>
							<?php 
    							// Clear the error after displaying
    							unset($GLOBALS['ERROR']); 
							?>
   						 <?php endif; ?>
                        <!-- <div id="error" class="error_message">Login error!</div> -->
                        <div class="input-group">
                            <input type="text" id="email_input" name="email" required>
                            <label for="">Email Address</label>
                        </div>


                        <div class="input-group">
                            <input type="password" id="password_input" name="password" required>
                            <label for="">Password</label>
                            <div class="show_password">
                                <div class="image_wrapper">
                                    <img id="show_hide" src="assets/svg/eye-off-svgrepo-com.svg" alt="">
                                    <!-- <img src="assets/svg/eye-svgrepo-com.svg" alt=""> -->
                                </div>
                            </div>
                            <script>
                                const passwordInput = document.querySelector(`#password_input`);
                                const showPassword = document.querySelector(`#show_hide`);
                                const eyeIconWrapper = document.querySelector(`#eye_icon_container`);

                                passwordInput.addEventListener(`keydown`, () => {
                                    if(passwordInput.value === ``){
                                        eyeIconWrapper.style.setProperty(
                                            `display`,
                                            `none`
                                        )
                                    }
                                    else{
                                        eyeIconWrapper.style.setProperty(
                                            `display`,
                                            `block`
                                        )
                                    };
                                });

                                showPassword.addEventListener(`click`, () => {

                                    if(passwordInput.type === (`password`)) {
                                        passwordInput.type = (
                                            `text`
                                        );
                                        showPassword.src = (
                                            `assets/svg/eye-svgrepo-com.svg`
                                        );
                                    }
                                    else{
                                        passwordInput.type = (
                                            `password`
                                        );
                                        showPassword.src = (
                                            `assets/svg/eye-off-svgrepo-com.svg`
                                        );
                                    }
                                });
                            </script>
                        </div>



                        <div class="forgot_password">
                            <span>Forgot password? <a id="" href="">Reset</a></span>

                        </div>

                        <div class="submit_btn_wrapper">
                            <button type="submit" name="signin_btn">Sign in</button>
                        </div>

                        <!-- ALREADY HAVE AN ACCOUNT? LOGIN! -->
                        <div class="already_have_an_account">
                            <span>Don't have an Account?</span>
                            <a class="links" href="signup.php">Create Account</a>
                        </div>

                    </form>
                </div>
            </div>











                <!-- ============ PRELOADER ANIMATION============= -->
                <section class="preloader_animation">
                    <div class="wrapper">
                        <div class="logo">
                            <div class="image_wrapper">
                                <img src="assets/images/logo.png" alt="">
                            </div>
                        </div>

                        <div class="loading_svg">
                            <div class="image_wrapper">
                                <img class="bouncing_circles" src="assets/svg/bouncing-circles.svg" alt="">
                            </div>
                        </div>
                    </div>
                </section>


        </body>
                <!-- ============JAVASCRIPT-LINKS============= -->
                <script src="assets/javascript/function.js"></script>
                <script src="assets/javascript/app.js"></script>


</html>