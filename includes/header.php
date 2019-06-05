<header id="site-banner">
    <img src="assets/header-background.jpg" style="width:100%;height:275px;" />
</header>

<nav id="nav-bar">
    <ul>
        <?php
            // Add basic menu items.
            $menuitems = array("Home" => "index.php", "Fight" => "fight.php", "About" => "about.php");
            foreach ($menuitems as $label => $location) {
                echo "<li><a href=$location>$label</a></li>";
            }

            // Add conditional menu items.
            $signedOutMenuItems = array("Signup" => "signup.php", "Login" => "login.php");
            $signedInMenuItems = array("Profile" => "profile.php", "Logout" => "logout.php");

            if (!isset($_SESSION['username'])) {                        // Signed out.
                foreach ($signedOutMenuItems as $label => $location) {
                    echo "<li><a href=$location>$label</a></li>";
                }
            }
            else {                                                      // Signed in.
                foreach ($signedInMenuItems as $label => $location) {
                    echo "<li><a href=$location>$label</a></li>";
                }

                // Admin page that will allow creation of more than five characters.
                // Admin characters will be the 'AI' characters that users battle.
                if (isset($_SESSION['type']) && $_SESSION['type'] == 'admin') {
                    echo "<li><a href=admin.php>Admin</a></li>";
                }
            }
        ?>
    </ul>
</nav>
