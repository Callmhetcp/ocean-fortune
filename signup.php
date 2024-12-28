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
            <script src="js/country-states.js"></script>



        </head>


        <?php
            
            include 'signup_logic.php';

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

            <div class="wrapper" id="signup_html">

                <div class="image">
                    <div class="image_wrapper">
                        <img src="assets/svg/undraw_sign_up_n6im.svg" srcset="">
                        
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
                            <div class="span">Get started with Ocean Fortune</div>
                        </div>
                    </header>

                    <form action="" method="POST" class="form">
                        <?php if (!empty($GLOBALS['ERROR'])): ?>            
                            <div id="error" class="error_message"><?php echo $GLOBALS['ERROR']; ?></div>
                            <?php 
                                unset($GLOBALS['ERROR']); 
                            ?>
                        <?php endif; ?>
                        <div class="two_form_groups">
                            <div class="input-group">
                                <input type="text" required id="first_name_input" name="fname">
                                <label for="">First Name</label>
                            </div>
            
                            <div class="input-group">
                                <input type="text" required id="last_name_input" name="lname">
                                <label for="">Last Name</label>
                            </div>
                        </div>

                        <div class="input-group">
                            <input type="email" id="email_input" name="email" required >
                            <label for="email">Email Address</label>
                        </div>

                        <div class="input-group">
                            <input type="tel" id="phone_input" name="phone" required >
                            <label for="contact">Phone Number</label>
                        </div>

                        
                
                            <!-- <label for="state" class="form-label">State</label> -->
                            <div class="input-group">
                                <select id="country"  name="nationality" required>
                                    <option>select country</option>
                                </select>
                                <label for="">Nationality</label>

                            </div>
                            
                            <div class="input-group">

                                <select id="state"  name="state" required>
                                    <option>_</option>
                                </select>
                                <label for="">State</label>
                
                            </div>
                            

                            <div class="input-group">
                                <input type="date" name="dob" required>
                                <label for="">Date of Birth</label>  
                            </div>
                                

                            <div class="input-group">
                                <select name="gender" required class="input-group">
                                <option value="">-- select one --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                            <label for="">Gender</label>

                            </div>


                        <div class="input-group">
                            <input type="password" id="password_input" name="password" required>
                            <label for="">Password</label>
                            <div class="show_password">
                                <div class="image_wrapper" id="eye_icon_container" style="display:block;">
                                    <img id="show_hide" src="assets/svg/eye-off-svgrepo-com.svg" alt="">
                                    <!-- <img src="assets/svg/eye-svgrepo-com.svg" alt=""> -->
                                </div>
                            </div>
                            <script>
                                const passwordInput = document.querySelector(`#password_input`);
                                const showPassword = document.querySelector(`#show_hide`);
                                const eyeIconWrapper = document.querySelector(`#eye_icon_container`);

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

                        <div class="input-group">
                            <input type="password" id="confirm_password_input" name="conf_pass" required>
                            <label for="">Confirm Password</label>
                        </div>


                         <!--PASSWORD ALERT_TEXT -->
                            <span id="password_alert"> 

                            </span>

                        <div class="terms-conditions_checkbox_wrapper">
                            <div class="checkbox-wrapper-15">
                                <input type="checkbox" name="" id="hidden_cbx" style="position: absolute; opacity: 0; z-index: 999; height: 25px; width: 100px; left: -30px;">
                                <input class="inp-cbx terms-conditions_checkbox" id="cbx-15" type="checkbox" style="display: none;"/>
                                <label class="cbx" for="cbx-15">
                                <span>
                                    <svg width="12px" height="9px" viewbox="0 0 12 9">
                                    <polyline points="1 5 4 8 11 1"></polyline>
                                    </svg>
                                </span>
                                </label>
                                
                            </div>
                            <label id="terms-conditions_label" for="cbx-15">I agree to the <a href="#">Terms and Conditions</a></label>
                        </div>

                            <div class="submit_btn_wrapper">
                                <button type="submit" name="signup_btn">Sign up</button>
                            </div>

                        


                        <!-- ALREADY HAVE AN ACCOUNT? LOGIN! -->
                        <div class="already_have_an_account">
                            <span>Already have an Account?</span>
                            <a class="links" href="login.php">Login</a>
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

            <script>
                // user country code for selected option
                var user_country_code = "US";

                (() => {
                    // script https://www.php-code-generator.com/html/drop-down/state-name

                    // Get the country name and state name from the imported script.
                    const country_list = country_and_states.country;
                    const state_list = country_and_states.states;

                    const id_state_option = document.getElementById("state");
                    const id_country_option = document.getElementById("country");

                    const create_country_selection = () => {
                        let option = '';
                        option += '<option value="">select country</option>';
                        for (const country_code in country_list) {
                            // set selected option user country
                            let selected = (country_code == user_country_code) ? ' selected' : '';
                            option += '<option value="' + country_code + '"' + selected + '>' + country_list[country_code] + '</option>';
                        }
                        id_country_option.innerHTML = option;
                    };

                    const create_states_selection = () => {
                        // selected country code
                        let selected_country_code = id_country_option.value;
                        // get state names by selected country-code
                        let state_names = state_list[selected_country_code];

                        // if invalid country code
                        if (!state_names) {
                            id_state_option.innerHTML = '<option>select state</option>';
                            return;
                        }
                        // create option
                        let option = '';
                        option += '<option>select state</option>';
                        state_names.forEach(state => {
                            option += '<option value="' + state.code + '">' + state.name + '</option>';
                        });
                        id_state_option.innerHTML = option;
                    };

                    // country select change event update state code
                    id_country_option.addEventListener('change', create_states_selection);

                    create_country_selection();
                    create_states_selection();
                })();
            </script>

            
        </body>
                <!-- ============JAVASCRIPT-LINKS============= -->
                <script src="assets/javascript/function.js"></script>
                <script src="assets/javascript/app.js"></script>

                

</html>

