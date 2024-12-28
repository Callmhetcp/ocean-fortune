<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Ocean Fortune</title>
    <link rel="stylesheet" href="assets/css/deposit.css">
    <link rel="stylesheet" href="assets/css/toastify.css">
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/table-wallet.css">
    <link rel="stylesheet" href="assets/css/mediaquery.css">
    <link rel="stylesheet" href="assets/css/main-mediaquery.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

        <?php
            
            include 'session_handler.php';

        ?>
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
                                    <a href="profile.php">
                                        <i class="material-icons">person_outline</i>
                                        <span>Profile </span>
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
 <main class="main_content">
      <div class="app-container">
        <main class="main-content">
            <div class="amount-section">
                <h2>Enter Amount </h2>


                <div class="amount-input-container">
                    <span class="currency-symbol">$</span>
                    <input  type="" id="amount" class="amount" value="1000" name="amount" inputmode="numeric" pattern="[0-9]*" placeholder="0.00" oninput="validateInput(event)" >
                    <script>
                        function validateInput(event) {
                            let inputValue = event.target.value;

                            if (/[^0-9.]/.test(inputValue)) {
                                inputValue = inputValue.replace(/[^0-9.]/g, '');
                            }

                            if ((inputValue.split('.').length - 1) > 1) {
                                inputValue = inputValue.slice(0, inputValue.lastIndexOf('.')) + inputValue.slice(inputValue.lastIndexOf('.') + 1);
                            }

                            event.target.value = inputValue;
                        }
                    </script>
                </div>
                <br>

            </div>

            <div class="crypto-section">
                <div class="wrapper">
                    <h2>Select Payment Option</h2>
                    <div class="crypto-grid" id="cryptoGrid">
                        <?php

                            $cryptoData = [
                                ['id' => '1', 'symbol' => 'BTC', 'name' => 'Bitcoin', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/1.png'], //
                                ['id' => '2', 'symbol' => 'USDT', 'name' => 'Tether', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/825.png'], //
                                ['id' => '3', 'symbol' => 'ETH', 'name' => 'Ethereum', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/1027.png'],
                                ['id' => '4', 'symbol' => 'DOGE', 'name' => 'Dogecoin', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/74.png'], //
                                ['id' => '5', 'symbol' => 'BNB', 'name' => 'Binance Coin', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/1839.png'],
                                ['id' => '6', 'symbol' => 'SHIB', 'name' => 'Shiba Inu', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/5994.png'], //
                                ['id' => '7', 'symbol' => 'LTC', 'name' => 'Litecoin', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/2.png'],
                                ['id' => '8', 'symbol' => 'XRP', 'name' => 'Ripple', 'imageUrl' => 'https://s2.coinmarketcap.com/static/img/coins/64x64/52.png'],
                            ];

                            foreach ($cryptoData as $crypto) {
                                echo '<div class="crypto-option" data-id="' . $crypto['id'] . '" data-symbol="' . $crypto['symbol'] . '" data-name="' . $crypto['name'] . '" data-image-url="' . $crypto['imageUrl']. '">';
                                echo '<img src="' . $crypto['imageUrl'] . '" alt="' . $crypto['symbol'] . '">';
                                echo '<span class="crypto-name">' . $crypto['name'] . '</span>';
                                echo '<span class="crypto-ticker">' . $crypto['symbol'] . '</span>';
                                echo '</div>';

                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="amount-section">
                <h2>Wallet </h2>
                <div id="copy" class="copy_message">Error Message !!!</div>
                <div class="wallet-address-container">
                    <input style="color: white;" type="text" class="wallet" id="wallet" name="wallet" placeholder="Wallet">
                    <!-- Copy Button (Hidden initially) -->
                    <button id="copyButton" class="copy-button" style="display: none; color: var(--secondary-text);" onclick="copyToClipboard()">Copy</button>
                </div>
                <br>

                <div class="selected-crypto" id="selectedCrypto">
                    <span>Select cryptocurrency</span>
                </div>
            </div>

            <form id="cryptoForm" action="send_payment.php" method="POST">
                <input type="hidden" id="selectedCryptoData" name="selectedCryptoData">
                <div id="error" class="error_message">Error Message !!!</div>
                <button type="" class="deposit-button" id="depositButton" style="margin-bottom: 140px;">
                    <i class="fas fa-arrow-right"></i>
                    <span>Continue to Withdraw</span>
                </button>
                <div class="buttons">
                    <div class="btn" id="error">
                        <i class="fas fa-arrow-right"></i>
                        <span>Continue to Deposit</span>
                    </div>
                </div>
            </form>
        </main>
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

    <?php
    
    include 'wallet_logic.php';
    
    ?>

    <script src="assets/user/javascript/popup.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const cryptoOptions = document.querySelectorAll('.crypto-option');
        const selectedCrypto = document.getElementById('selectedCrypto');
        const selectedCryptoDataInput = document.getElementById('selectedCryptoData');
        const amountInput = document.getElementById('amount');
        const walletInput = document.getElementById('wallet');
        const copyButton = document.getElementById('copyButton');
        const cryptoForm = document.getElementById("cryptoForm");
        const errorMessage = document.getElementById("error");
        const depositButton = document.getElementById('depositButton');
        let currentSelection = null;

        // PHP variable passed to JS (user's crypto balances)
        const cryptoBalances = <?php echo json_encode($cryptoData); ?>;

        function updateCryptoData() {
            if (!currentSelection) return;

            const name = currentSelection.dataset.name;
            const symbol = currentSelection.dataset.symbol;
            const imageUrl = currentSelection.dataset.imageUrl;
            const amount = amountInput.value;
            const walletValue = walletInput.value.trim(); 
            selectedCrypto.innerHTML = `
                <img src="${imageUrl}" alt="${name}">
                <div>
                    <span class="selected-name">${name}</span>
                    <span class="selected-ticker">${symbol}</span>
                </div>
            `;
            selectedCrypto.classList.add('has-selection');

            if (walletValue) {
                copyButton.style.display = 'inline-block';
            } else {
                copyButton.style.display = 'none';
            }

            selectedCryptoDataInput.value = JSON.stringify({
                id: currentSelection.dataset.id,
                symbol: symbol,
                name: name,
                imageUrl: imageUrl,
                amount: amount,  
                wallet: walletValue
            });

            // Validate amount whenever the crypto selection or amount changes
            validateAmount();
        }

        function validateAmount() {
            if (!currentSelection) return;

            const selectedSymbol = currentSelection.dataset.symbol;
            const enteredAmount = parseFloat(amountInput.value) || 0;
            const availableBalance = cryptoBalances[selectedSymbol] || 0;

            // If entered amount exceeds available balance, display error and disable "Deposit" button
            if (enteredAmount > availableBalance) {
                errorMessage.innerHTML = `Insufficient balance for ${selectedSymbol}. Available: ${availableBalance.toFixed(8)}`;
                errorMessage.style.display = "block";
                // Disable the "Deposit" button
                depositButton.disabled = true;
                return false;
            } else {
                // Hide error message and enable "Deposit" button
                errorMessage.style.display = "none";
                depositButton.disabled = false;
                return true;
            }
        }

        // Attach click event to crypto options
        cryptoOptions.forEach(option => {
            option.addEventListener('click', () => {
                if (currentSelection) {
                    currentSelection.classList.remove('selected');
                }

                option.classList.add('selected');
                currentSelection = option;

                updateCryptoData();
            });
        });

        // Add input listeners for wallet and amount fields
        walletInput.addEventListener('input', updateCryptoData);
        amountInput.addEventListener('input', updateCryptoData);  

        // Copy wallet address to clipboard
        copyButton.addEventListener('click', () => {
            const wallet = walletInput.value;
            const copyMessage = document.getElementById("copyMessage");

            navigator.clipboard.writeText(wallet).then(() => {
                copyMessage.innerHTML = "Copied to clipboard!";
                copyMessage.style.display = "block";

                setTimeout(() => {
                    copyMessage.style.display = "none";
                }, 2000);
            }).catch(err => {
                window.alert('Failed to copy to clipboard: ' + err);
            });
        });

        // Form submission validation
        cryptoForm.addEventListener("submit", function (event) {
            const walletValue = walletInput.value.trim();

            if (!walletValue) {
                event.preventDefault();
                errorMessage.innerHTML = "Wallet address cannot be empty!";
                errorMessage.style.display = "block";
                return;
            }

            if (!currentSelection) {
                event.preventDefault();
                errorMessage.innerHTML = "No cryptocurrency selected!";
                errorMessage.style.display = "block";
                return;
            }

            if (!validateAmount()) {
                event.preventDefault(); // Prevent form submission if balance is insufficient
            }
        });
    });
    </script>


    <script src="assets/javascript/active-tab.js"></script>




</body>
</html>
