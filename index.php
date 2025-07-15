<?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'home':
                        echo "<h1>Home</h1><p>Welcome to our homepage!</p>";
                        break;
                    case 'about':
                        echo "<h1>About Us</h1><p>Learn more about us.</p>";
                        break;
                    case 'services':
                        echo "<h1>Services</h1><p>Discover our services.</p>";
                        break;
                    case 'contact':
                        echo "<h1>Contact</h1><p>Get in touch with us.</p>";
                        break;
                    default:
                        echo "<h1>Home</h1><p>Welcome to our homepage!</p>";
                }
            } else {
                echo "<h1>Home</h1><p>Welcome to our homepage!</p>";
            }
        ?>