<?php
session_start();

// Redirect to login if the session is not set
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'] ;
$user_fname = $_SESSION['user_firstname'] ;
$user_lname = $_SESSION['user_lastname'] ;
$email = $_SESSION['user_email'] ;
$dob = $_SESSION['user_dob'] ;
$gender = $_SESSION['user_gender'] ;
$nationality = $_SESSION['user_nationality'] ;
$state = $_SESSION['user_state'] ;
$phone = $_SESSION['user_phone'];

?>



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
        <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
        <link rel="stylesheet" href="assets/css/profile.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/swap.css">
        <link rel="stylesheet" href="assets/css/table-wallet.css">
        <link rel="stylesheet" href="assets/css/mediaquery.css">
        <link rel="stylesheet" href="assets/main-mediaquery.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    
    
        <!-- ============FONT-AWESOME-LINKS============= -->
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


        <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
    </head>

    <?php

        include 'profile_logic.php'
    ?>

    <style>
        html{
          animation: none;
        }
        .tradingview-widget-container{
            width: auto;
            height: auto;
            position: relative;
            bottom: auto;
            z-index: auto;
        }
  
    </style>
<body>
    
      <header class="dashboard_header">
          <div class="wrapper">
            <div class="logo">
              <div class="image_wrapper">
                  <img src="assets/images/logo.png" width="42" height="42" alt="">
              </div>
              <!-- <div class="logo_name">Ocean </div> -->
            </div>

            <div class="icons">
              <ul>
                  <li class=""><a href="#"><i class="material-icons notification-icon">notifications_none</i></a>
                      <div class="notification_box">
                        <div class="wrapper">
                          <header>
                              <span>Notifications</span>
                              <a href="#">Clear All</a>
                          </header>
                          <ul>
                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>487887</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="view_all"><a href="#">View All</a></div>
                        </div>
                      </div>
                  </li>

                  <li><a href="#"><i class="material-icons account-icon">account_circle</i></a>
                      <div class="profile_box">
                          <ul>
                              <li>
                                  <a href="profile.php">
                                      <i class="material-icons">person_outline</i>
                                      <span>Profile</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="wallet_page.php">
                                      <i class="material-icons">account_balance_wallet</i>
                                      <span>Wallet</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="logout.php">
                                      <i class="material-icons">logout</i>
                                      <span>Logout</span>
                                  </a>
                              </li>
                          </ul>
                      </div>

                      
                  </li>

                
              </ul>
            </div>
          </div>


        <!-- ============ CRYPTO STICKER ============= //--AT THE TOP, BELOW THE NAV BAR--//-->
        <div class="crypto-ticker">
          <div style="height:62px; background-color: #1e293b; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
              <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                  <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                  <script>
                      document.addEventListener('contextmenu', (event) => event.preventDefault());
                          document.onkeydown = function(e) {
                              // Disable F12, Ctrl+Shift+I (Inspector), Ctrl+Shift+J (Console), Ctrl+U (View Source)
                              if (e.keyCode == 123 || // F12
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) || // Ctrl+Shift+I
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) || // Ctrl+Shift+J
                                  (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) { // Ctrl+U
                                  return false; // Prevent the event
                              }
                          };
                  </script>
              </div>
              <div style="color: #1e293b; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                  <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px"></a>
              </div>
          </div>
        </div>
      </header>



    
        
            
      <aside class="sidebar">
          <div class="wrapper">


              <div class="sidebar_menu">
                  <ul>
                      <li>
                          <a href="dashboard.php">
                              <i class="material-icons">dashboard</i>
                              <span>Home</span>
                          </a>
                      </li>
                      <li>
                          <a href="swap.php">
                              <i class="material-icons">swap_calls</i>
                              <span>Swap</span>
                          </a>
                      </li>
                      <li>
                          <a href="history.php">
                              <i class="material-icons">history</i>
                              <span>History</span>
                          </a>
                      </li>
                      <li>
                          <a href="features.php">
                              <i class="material-icons">widgets</i>
                              <span>Features</span>
                          </a>
                      </li>
                      <li>
                          <a href="market.php">
                              <i class="material-icons">store</i>
                              <span>Market</span>
                          </a>
                      </li>
                  </ul>
              </div>

              <div class="sidebar_widgets">
                <div class="wrapper">
                  <div class="image">
                    <img src="assets/images/crypto-join.png" alt="">
                  </div>
                  <div class="text">
                    <h3>Invest Now!</h3>
                    <a href="">
                      Buy and Sell Coins
                    </a>
                    <br><br>
                  </div>
                </div>
              </div>
          </div>
      </aside>

      <main class="main_content">
        <div class="app-container">
            <div class="profile-header">
                <div class="profile-avatar">
                    <div class="avatar">
                        <span><?php echo htmlspecialchars(strtoupper(sprintf('%s', $user_fname[0]))); ?></span>
                         <span><?php echo htmlspecialchars(strtoupper(sprintf('%s', $user_lname[0]))); ?></span>
                    </div>
                </div>
                    
                <h1><?php echo htmlspecialchars(strtoupper(sprintf('%s %s', $user_fname, $user_lname))); ?></h1>
                <h4 class="email" id="user_id">ID: <?php echo htmlspecialchars($user_id); ?></h4>
                <p class="location" ><?php echo htmlspecialchars($nationality); ?></p>
                <span class="badge">
                <?php echo htmlspecialchars($status); ?>
                </span>
            </div>

            <nav class="quick-actions">
                <a href="#" class="action-item">
                    <span class="icon">💰</span>
                    <span>Invests</span>
                </a>
                <a href="#" class="action-item">
                    <span class="icon">👛</span>
                    <span>Wallet</span>
                </a>
                <a href="#" class="action-item">
                    <span class="icon">⬇️</span>
                    <span>Receive</span>
                </a>
                <a href="#" class="action-item">
                    <span class="icon">⬆️</span>
                    <span>Send</span>
                </a>
            </nav>
    
            <section class="profile-section">
                <h2>Personal Details</h2>

                <?php
                if (isset($_SESSION['update_message']) && isset($_SESSION['update_time'])) {
                    $timeout_duration = 5; // Timeout in seconds
                    $time_elapsed = time() - $_SESSION['update_time'];

                    if ($time_elapsed <= $timeout_duration) {
                        $message = htmlspecialchars($_SESSION['update_message']);
                        $type = $_SESSION['update_type'] === "success" ? "green" : "red";
                        echo "<p style='color: $type;'>$message</p>";
                    }

                    if ($time_elapsed > $timeout_duration) {
                        unset($_SESSION['update_message']);
                        unset($_SESSION['update_type']);
                        unset($_SESSION['update_time']);
                    }
                }
                ?>


                <form class="profile-form" method="POST" action="">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" value="<?php echo htmlspecialchars(ucfirst($user_fname)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars(ucfirst($user_lname)); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                    </div>
                    <button type="submit" name="update_profile" class="btn-primary">Update Profile</button>
                </form>
            </section>
            
                <?php if ($update_success): ?>
                    <p style="color: green;"><?php echo htmlspecialchars($update_success); ?></p>
                <?php endif; ?>

    
            <section class="profile-section">
                <h2>Change Password</h2>
                <form class="profile-form" method="POST">
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" id="current_password" name="current_password" required>
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input type="password" id="new_password" name="new_password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" required>
                    </div>
                    <button type="submit" name="change_password_btn" class="btn-primary">Change Password</button>
                </form>

                <?php if ($update_success): ?>
                    <p style="color: green;"><?php echo htmlspecialchars($update_success); ?></p>
                <?php endif; ?>

                <?php if ($update_error): ?>
                    <p style="color: red;"><?php echo htmlspecialchars($update_error); ?></p>
                <?php endif; ?>
            </section>
            
            <section class="profile-section">
                <h2>KYC Information</h2>

                <!-- Display feedback messages -->
                <?php if (!empty($kyc_message)): ?>
                    <div class="alert <?= strpos($kyc_message, 'successfully') !== false ? 'alert-success' : 'alert-danger'; ?>">
                        <?= htmlspecialchars($kyc_message); ?>
                    </div>
                <?php endif; ?>

                <!-- KYC Form -->
                <form class="profile-form" action="" method="POST">
                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" value="<?= htmlspecialchars($dob); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="<?= htmlspecialchars($address); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="gov_id">Government ID Type</label>
                        <input type="text" name="gov_id" id="gov_id" placeholder="Passport" value="<?= htmlspecialchars($gov_id); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="id_number">ID Number</label>
                        <input type="text" name="id_number" id="id_number" value="<?= htmlspecialchars($id_number); ?>" required>
                    </div>
                    <button type="submit" name="submit_kyc" class="btn-primary">Submit KYC</button>
                </form>
            </section>
            <br><br>

        </div>
        <script>
            import { getAuth, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js";
            import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-firestore.js";
            const auth = getAuth();
            const db = getFirestore();
    
            document.addEventListener("DOMContentLoaded", async () => {
            const userUID = sessionStorage.getItem("userUID");
            const showUserId = document.querySelector("#user_id"); // Element to show user UID
    
            if (!userUID) {
                alert("No user logged in. Redirecting to login...");
                window.location.href = "login.php";
                return;
            }
            try {
            // Fetch user details from Firestore
            const userDoc = await getDoc(doc(db, "users", userUID));
    
            if (userDoc.exists()) {
            const userData = userDoc.data();
            showUserId.innerHTML = `Welcome, ${userData.firstName}! (UID: ${userUID})`;
            } else {
                showUserId.innerHTML = `User data not found. UID: ${userUID}`;
            }
            } catch (error) {
                console.error("Error fetching user data:", error.message);
                showUserId.innerHTML = `Error loading user data`;
            }
        });
    
        </script>
    
      </main>

      
      <footer class="dashboard_footer">
        <div class="wrapper">
          <span>© 2024 <a href="index.php">Creative Fortune</a>All Right Reserved</span>
          <span><a href="#">Purchase Now</a></span>
        </div>
      </footer>

      <section class="bottom_nav">
        <div class="wrapper">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Home</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="swap.php">
                        <i class="material-icons">swap_calls</i>
                        <span>Swap</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="history.php">
                        <i class="material-icons">history</i>
                        <span>History</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="features.php">
                        <i class="material-icons">widgets</i>
                        <span>Features</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="market.php">
                        <i class="material-icons">store</i>
                        <span>Market</span>
                    </a>
                </li>
            </ul>
        </div>
      </section>


 
    <!-- ============JAVASCRIPT-LINKS============= -->
    <script src="assets/user/javascript/popup.js"></script>
</body>
</html>

