            <?php
            session_start();
            if (isset($_GET['x']) && $_GET['x'] == 'home') {
                $page = "home.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'warehouse') {
                $page = "warehouse.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
                if ($_SESSION['level_inventory'] == 1) {
                    $page = "user.php";
                    include "main.php";
                } else {
                    $page = "home.php";
                    include "main.php";
                }
            } elseif (isset($_GET['x']) && $_GET['x'] == 'counter1') {
                $page = "counter1.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'counter2') {
                $page = "counter2.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'counter3') {
                $page = "counter3.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'counter4') {
                $page = "counter4.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'counter5') {
                $page = "counter5.php";
                include "main.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
                if ($_SESSION['level_inventory'] == 1) {
                    $page = "report.php";
                    include "main.php";
                } else {
                    $page = "home.php";
                    include "main.php";
                }
            } elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
                include "login.php";
            } elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
                include "proses/proses_logout.php";
            } else {
                $page = "home.php";
                include "main.php";
            }


            ?>
