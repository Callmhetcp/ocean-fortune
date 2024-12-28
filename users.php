<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Fortune</title>
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/swap.css">
    <link rel="stylesheet" href="assets/css/users.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mediaquery.css">
    <link rel="stylesheet" href="assets/css/main-mediaquery.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

    .main_content{
        margin-top: 8rem;
    }

    #toast {
    font-size: 14px;
    font-weight: bold;
    color: #fff;
    transition: all 0.5s ease-in-out;
    opacity: 0;
}

#toast.success {
    background-color: #4caf50; /* Green for success */
}

#toast.error {
    background-color: #f44336; /* Red for error */
}
  
</style>

<body>
    <?php
    include 'session_handler.php';


   include 'users_logic.php';

    $dropdownOptions =  [
        'Edit', 'Delete', 'Disable', 'Add Balance', 'Email', 'Verify Email', 'Verify KYC'
    ];
    ?>


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
        <div class="box-body" style="margin-top: 150px;">
            <div class="input-group-navbar">
                <input type="text" id="searchInput" class="form-control" placeholder="Search users by name or email">
                <button type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
            </div>
            <div id="error" class="error_message">No users found matching your search.</div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Avatar</th>
                            <th>User Info</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="usersTableBody">
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <!-- Avatar -->
                                <td>
                                    <a class="avatar" href="#">
                                        <img src="https://api.dicebear.com/6.x/initials/svg?seed=<?= urlencode($user['name']) ?>&backgroundColor=4f46e5&textColor=ffffff" alt="<?= $user['name'] ?>'s Avatar">
                                    </a>
                                </td>
                                
                                <!-- User Info -->
                                <td class="user-info">
                                    <strong><?= htmlspecialchars($user['name']) ?></strong>
                                    <span class="sidetitle"><?= htmlspecialchars($user['user_id']) ?></span>
                                    <span class="sidetitle"><?= htmlspecialchars($user['email']) ?></span>
                                    <span class="location"><?= htmlspecialchars($user['nationality']) ?></span>
                                    <div class="balance">$<?= number_format($user['balance'], 2) ?></div>
                                    <span class="badge <?= $user['status'] === 'Enabled' ? 'badge-success' : ($user['status'] === 'Disabled' ? 'badge-fail' : 'badge-danger') ?>">
                                        <?= htmlspecialchars($user['status']) ?>
                                    </span>
                                    <span class="badge <?= $user['kyc_status'] === 'Verified' ? 'badge-success' : ($user['kyc_status'] === 'Disabled' ? 'badge-danger' : 'badge-danger') ?>">
                                        <?= htmlspecialchars($user['kyc_status']) ?>
                                    </span>
                                </td>

                                <!-- Actions -->
                                <td>
                                    <div class="btn-group">
                                        <button class="dropdown-toggle" onclick="toggleDropdown(this)">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>
                                        <div class="action-dropdown-menu">
                                            <button class="dropdown-item edit__user" name="edit" onclick="openEditUser('edit_user_<?= htmlspecialchars($user['user_id']) ?>')" >Edit</button>
                                            <button class="dropdown-item delete" name="delete" onclick="openDeleteUser('delete_user_<?= htmlspecialchars($user['user_id']) ?>')">Delete</button>
                                            <button class="dropdown-item toggle-status" 
                                                    data-user-id="<?= htmlspecialchars($user['user_id']) ?>" 
                                                    data-status="<?= htmlspecialchars($user['status']) ?>">
                                                <?= $user['status'] === 'enabled' ? 'Disable' : 'Enable' ?>
                                            </button>


                                            <button class="dropdown-item add__balance" name="add_balance" onclick="openAddBalance('add_balance_<?= htmlspecialchars($user['user_id']) ?>')">Add Balance</button>
                                            <button class="dropdown-item send__email" name="send_email"  onclick="openSendEmail('send_email_<?= htmlspecialchars($user['user_id']) ?>')">Email</button>
                                            <button class="dropdown-item verify__kyc" name="verify_kyc"  onclick="openVerifyKyc('verify_kyc_<?= htmlspecialchars($user['user_id']) ?>')">Verify KYC</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <script>
                                // Wait for the document to fully load before adding event listeners
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Add event listener to all toggle-status buttons
                                    document.querySelectorAll('.toggle-status').forEach(button => {
                                        button.addEventListener('click', function() {
                                            const userId = this.getAttribute('data-user-id');
                                            let currentStatus = this.getAttribute('data-status');
                                            let newStatus = currentStatus === 'enabled' ? 'disabled' : 'enabled';
                                            
                                            // Send an AJAX request to toggle the status in the database
                                            fetch('toggle_status_logic.php', {
                                                method: 'POST',
                                                headers: {
                                                    'Content-Type': 'application/x-www-form-urlencoded',
                                                },
                                                body: `user_id=${userId}&status=${newStatus}`
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.success) {
                                                    // Update the button text and data-status attribute
                                                    this.textContent = newStatus === 'enabled' ? 'Disable' : 'Enable';
                                                    this.setAttribute('data-status', newStatus);
                                                } else {
                                                    alert(data.message);
                                                }
                                            })
                                            .catch(error => {
                                                alert('An error occurred while updating the status.');
                                            });
                                        });
                                    });
                                });
                            </script>




                                                
                            <!-- EDIT DEVELOPERS DETAILS -->
                            <section class="edit_user action_overlay" id="edit_user_<?= htmlspecialchars($user['user_id']) ?>">
                                <div class="wrapper">
                                    <header>
                                        <h4>
                                            Edit <strong><?= htmlspecialchars($user['name']) ?> </strong>'s Details
                                        </h4>
                                        <img class="close_action" src="assets/images/c-close-svgrepo-com.svg" alt="" width="20">
                                    </header>
                                    <main style="display:flex; flex-direction:column; gap:10px;">
                                    <form action="users_logic.php" method="POST">
                                        <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                                        <label for="firstname">First name*</label>
                                        <input id="firstname" name="firstname" value="<?= htmlspecialchars($user['name']) ?>" type="text" placeholder="Name*" style="width: 100%;">
                                        <label for="lastname">Last name*</label>
                                        <input id="lastname" name="lastname" value="<?= htmlspecialchars($user['lastname']) ?>" type="text" placeholder="Name*" style="width: 100%;">
                                        <label for="email" >Email*</label>
                                        <input id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" type="email" placeholder="Email*" style="width: 100%;">
                                        <label for="phone_No">Phone No.*</label>
                                        <input id="phone_No" name="phone_No" value="<?= htmlspecialchars($user['phone'] ?? '') ?>" type="text" placeholder="Phone no.*" style="width: 100%;">
                                        <label for="gender">Gender*</label>
                                        <select id="gender" name="gender" style="width: 100%;">
                                            <option value="Male" <?= ($user['gender'] ?? '') === 'Male' ? 'selected' : '' ?>>Male</option>
                                            <option value="Female" <?= ($user['gender'] ?? '') === 'Female' ? 'selected' : '' ?>>Female</option>
                                        </select>
                                    </main>
                                    <div style="display: flex; gap:10px;">
                                            <button id="close" class="close_action negative_btn" type="button">Close</button>
                                            <button id="delete_btn" class="positive_btn" name="button" type="submit">Save Changes</button>
                                    </form>
                               </div>
                            </div>
                        </section>
                        

                        <!-- DELETE USER -->
                        <section class="delete_section action_overlay" id="delete_user_<?= htmlspecialchars($user['user_id']) ?>">
                            <div class="wrapper">
                                <header>
                                    <h5>
                                        Delete <strong><?= htmlspecialchars($user['name']) ?></strong>'s Details
                                    </h5>
                                    <img class="close_action" src="assets/images/c-close-svgrepo-com.svg" alt="" width="20">
                                </header>
                                <main class="question">
                                    <span>Are you sure you want to delete <strong><?= htmlspecialchars($user['name']) ?></strong>'s details?</span>
                                </main>
                                <div style="display: flex; gap: 10px;">
                                    <form action="delete_logic.php" method="POST">
                                        <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                                        <button id="close" class="close_action negative_btn" type="button">Close</button>
                                        <button id="delete_btn" class="positive_btn" name="button" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </section>

                        <!-- ADD BALANCE -->
                        <section class="add_balance action_overlay" id="add_balance_<?= htmlspecialchars($user['user_id']) ?>">
                            <div class="wrapper">
                                <header>
                                    <h4>Add Balance</h4>
                                    <img class="close_action" src="assets/images/c-close-svgrepo-com.svg" alt="" width="20">
                                </header>
                                <main style="display: flex; gap: 10px;">
                                    <form action="add_balance_logic.php" method="POST">
                                        <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                                        <select name="wallet" id="wallet_<?= htmlspecialchars($user['user_id']) ?>" required>
                                            <option value="">Select Wallet</option>
                                            <option value="BTC">BTC</option>
                                            <option value="USDT">USDT</option>
                                            <option value="ETH">ETH</option>
                                            <option value="DOGE">DOGE</option>
                                            <option value="BNB">BNB</option>
                                            <option value="SHIB">SHIB</option>
                                            <option value="LTC">LTC</option>
                                            <option value="XRP">XRP</option>
                                        </select>
                                        <input type="number" name="amount" placeholder="Enter amount" required>
                                        <div style="display: flex; gap: 10px; margin-top: 10px;">
                                            <button id="close" class="close_action negative_btn" type="button">Close</button>
                                            <button id="send_btn" class="positive_btn" name="send" type="submit">Send</button>
                                        </div>
                                    </form>
                                </main>
                            </div>
                        </section>

                        <!-- SEND EMAIL -->
                        <section class="send_email action_overlay" id="send_email_<?= htmlspecialchars($user['user_id']) ?>">
                            <div class="wrapper">
                                <header>
                                    <h4>
                                        Send Email
                                    </h4>
                                    <img class="close_action" src="assets/images/c-close-svgrepo-com.svg" alt="" width="20">
                                </header>
                                <main style="display:flex; flex-direction:column; gap:10px;">
                                    <input type="text" placeholder="Subject*" style="width: 100%;">
                                    <textarea name="" id="<?= htmlspecialchars($user['user_id']) ?>" placeholder="Message*"></textarea>
                                    <p>Enable / Disable Notification</p>
                                    <input type="file" name="" id="">
                                </main>
                                <div style="display: flex; gap:10px;">
                                    <form action="" method="POST">
                                        <button id="close" class="close_action negative_btn" type="button">Close</button>
                                        <button id="delete_btn" class="positive_btn" name="" type="button">Send Mail</button>
                                    </form>
                               </div>
                            </div>
                        </section>
                        

                        
                        <!-- VERIFY KYC -->
                        <section class="verify_kyc action_overlay" id="verify_kyc_<?= htmlspecialchars($user['user_id']) ?>">
                            <div class="wrapper">
                                <header>
                                    <h4>
                                        Approve/Decline KYC
                                    </h4>
                                    <img class="close_action" src="assets/images/c-close-svgrepo-com.svg" alt="" width="20">
                                </header>
                                <main style="display:flex; flex-direction:column; gap:10px;">
                                    <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                                    <input type="text" placeholder="Date of Birth*" style="width: 100%;" value="<?= htmlspecialchars($user['dob']) ?>">
                                    <input type="text" placeholder="Address*" style="width: 100%;" value="<?= htmlspecialchars($user['address']) ?>">
                                    <input type="text" placeholder="Government Issued ID*" style="width: 100%;" value="<?= htmlspecialchars($user['gov_id']) ?>">
                                    <input type="text" placeholder="Identity Number*" style="width: 100%;" value="<?= htmlspecialchars($user['id_number']) ?>">

                                </main>
                                <div style="display: flex; gap:10px;">
                                <form action="decline_kyc_status.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                                    <button class="negative_btn" type="submit" name="decline_kyc">Decline</button>
                                </form>
                                    <form action="update_kyc_status.php" method="POST">
                                        <input type="hidden" name="user_id" value="<?= htmlspecialchars($user['user_id']) ?>">
                                        <button id="approve_btn" class="positive_btn" name="approve_kyc" type="submit">Approve</button>
                                    </form>
                               </div>
                            </div>
                        </section>
                        

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


            <nav>
                <ul class="pagination" id="pagination"></ul>
            </nav>
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
    <!--  ADMIN - ACTIONS TO THE USERS -->


    <script src="assets/user/javascript/popup.js"></script>
    <!-- <script src="assets/user/javascript/action_popup.js"></script> -->
    <script>
            let currentPage = 1;
            const usersPerPage = 10;

            const searchInput = document.getElementById('searchInput');
            const usersTableBody = document.getElementById('usersTableBody');
            const paginationContainer = document.getElementById('pagination');

            let filteredUserRows = [];

            const getAllUserRows = () => Array.from(document.querySelectorAll('#usersTableBody tr'));

            const renderUsersForPage = (page) => {
                const startIndex = (page - 1) * usersPerPage;
                const endIndex = startIndex + usersPerPage;

                getAllUserRows().forEach(row => row.style.display = 'none'); // Hide all rows
                filteredUserRows.slice(startIndex, endIndex).forEach(row => row.style.display = ''); // Show filtered rows
            };

            const createPagination = () => {
                const totalPages = Math.ceil(filteredUserRows.length / usersPerPage);
                let paginationHTML = '';

                paginationHTML += `
                    <li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                        <button class="page-link" onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>‹</button>
                    </li>
                `;

                for (let i = 1; i <= totalPages; i++) {
                    paginationHTML += `
                        <li class="page-item ${currentPage === i ? 'active' : ''}">
                            <button class="page-link" onclick="changePage(${i})">${i}</button>
                        </li>
                    `;
                }

                paginationHTML += `
                    <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                        <button class="page-link" onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>›</button>
                    </li>
                `;

                paginationContainer.innerHTML = paginationHTML;
            };

            const changePage = (page) => {
                const totalPages = Math.ceil(filteredUserRows.length / usersPerPage);

                if (page >= 1 && page <= totalPages) {
                    currentPage = page;
                    renderUsersForPage(currentPage);
                    createPagination();
                }
            };

            const handleSearch = () => {
                const searchTerm = searchInput.value.toLowerCase();
                const allUserRows = getAllUserRows();

                filteredUserRows = allUserRows.filter((row) => {
                    const name = row.querySelector('.user-info strong')?.textContent.toLowerCase();
                    const email = row.querySelector('.sidetitle')?.textContent.toLowerCase();
                    return name.includes(searchTerm) || email.includes(searchTerm);
                });

                document.getElementById('error').style.display = filteredUserRows.length ? 'none' : 'block';

                currentPage = 1;
                createPagination();
                renderUsersForPage(currentPage);
            };

            const toggleDropdown = (button) => {
                const dropdown = button.nextElementSibling;
                document.querySelectorAll('.action-dropdown-menu.show').forEach(menu => {
                    if (menu !== dropdown) menu.classList.remove('show');
                });
                dropdown.classList.toggle('show');
            };

            document.addEventListener('click', (event) => {
                const isDropdownButton = event.target.closest('.dropdown-toggle');
                const isDropdownMenu = event.target.closest('.action-dropdown-menu');

                if (!isDropdownButton && !isDropdownMenu) {
                    document.querySelectorAll('.action-dropdown-menu.show').forEach(menu => {
                        menu.classList.remove('show');
                    });
                }
            });


            searchInput.addEventListener('input', handleSearch);
            document.addEventListener('DOMContentLoaded', () => {
                filteredUserRows = getAllUserRows(); 
                renderUsersForPage(currentPage);
                createPagination();
            });

    </script>


<script>
    function openEditUser(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return; 

        document.querySelectorAll('.edit_user').forEach(sec => {
            sec.style.visibility = 'hidden';
            sec.style.opacity = '0';
        });

        section.style.visibility = 'visible';
        section.style.opacity = '1';
    }

    function openDeleteUser(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return; 

        document.querySelectorAll('.delete_section').forEach(sec => {
            sec.style.visibility = 'hidden';
            sec.style.opacity = '0';
        });

        section.style.visibility = 'visible';
        section.style.opacity = '1';
    }
    function openAddBalance(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return; 

        document.querySelectorAll('.add_balance').forEach(sec => {
            sec.style.visibility = 'hidden';
            sec.style.opacity = '0';
        });

        section.style.visibility = 'visible';
        section.style.opacity = '1';
    }
    function openSendEmail(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return; 

        document.querySelectorAll('.send_email').forEach(sec => {
            sec.style.visibility = 'hidden';
            sec.style.opacity = '0';
        });

        section.style.visibility = 'visible';
        section.style.opacity = '1';
    }

    function openVerifyKyc(sectionId) {
        const section = document.getElementById(sectionId);
        if (!section) return; 

        document.querySelectorAll('.verify_kyc').forEach(sec => {
            sec.style.visibility = 'hidden';
            sec.style.opacity = '0';
        });

        section.style.visibility = 'visible';
        section.style.opacity = '1';
    }







    
    document.querySelectorAll('.close_action').forEach(button => {
        button.addEventListener('click', function () {
            const actionOverlay = this.closest('.action_overlay');
            if (actionOverlay) {
                actionOverlay.style.visibility = 'hidden'; 
                actionOverlay.style.opacity = '0';
            }
        });
    });


</script>
<!-- <script>
    document.querySelector('form').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission
        const formData = new FormData(this);

        fetch('users_logic.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                showToast(data.message, 'success');
            } else {
                showToast(data.message, 'error');
            }
        })
        .catch(error => {
            showToast('An unexpected error occurred.', 'error');
            console.error('Error:', error);
        });
    });

    function showToast(message, type) {
        const toast = document.getElementById('toast');
        const toastMessage = document.getElementById('toast-message');

        // Set toast message and type
        toastMessage.textContent = message;
        toast.className = type; // Apply success or error class
        toast.style.opacity = 1; // Make the toast visible
        toast.style.display = 'block';

        // Automatically hide the toast after 3 seconds
        setTimeout(() => {
            toast.style.opacity = 0; // Fade out effect
            setTimeout(() => {
                toast.style.display = 'none';
                toast.className = ''; // Reset class after hiding
            }, 500);
        }, 3000);
    }
</script> -->
