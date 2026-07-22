<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Linked custom stylesheet  -->
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <main>
        <div class="panel-container">
            <div class="panel">
                <!-- fold mark  -->
                <div class="fold-badge tl"></div>
                <div class="fold-badge tr"></div>
                <div class="fold-badge bl"></div>
                <div class="fold-badge br"></div>

                <!-- login panel  -->
                <div class="login-panel">
                    <div class="panel-header">
                        <figure class="panel-image">
                            <img src="../assets/logo/main-logo.png" alt="pmk logo">
                        </figure>
                        <h4 class="panel-title">PMK Portal</h4>
                    </div>

                    <form action="../server/admin_login.php" method="post" class="login-form">
                        <!-- user name  field  -->
                        <div class="form-field">
                            <label for="user-name">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                    <path d="M9 10a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                                </svg>
                                <div>
                                    username
                                    <span>*</span>
                                </div>
                            </label>
                            <input type="text" name="user_name" id="user-name" placeholder="user name">
                        </div>

                        <!-- password  field  -->
                        <div class="form-field">
                            <label for="user-password">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-password-user">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 17v4" />
                                    <path d="M10 20l4 -2" />
                                    <path d="M10 18l4 2" />
                                    <path d="M5 17v4" />
                                    <path d="M3 20l4 -2" />
                                    <path d="M3 18l4 2" />
                                    <path d="M19 17v4" />
                                    <path d="M17 20l4 -2" />
                                    <path d="M17 18l4 2" />
                                    <path d="M9 6a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                                    <path d="M7 14a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2" />
                                </svg>
                                <div>
                                    password
                                    <span>*</span>
                                </div>
                            </label>
                            <input type="password" name="user_password" id="user-password" placeholder="user password">
                        </div>

                        <!-- login button -->
                        <div class="form-field">
                            <button type="submit" class="login-button">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>