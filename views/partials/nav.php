<header>
    <nav>
        <div class='sign-in-up'>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']): ?>
                <!-- Display username and logout link if user is logged in -->
                <div><?php echo htmlspecialchars($_SESSION['username']) . " - <a href='logout.php'>LOGOUT</a>"; ?></div>
                <?php else: ?>
                <!-- Show these buttons if user is not logged in -->
                <button type='button' onclick="popup('login-popup')">LOGIN</button>
                <button type='button' onclick="popup('register-popup')">REGISTER</button>
            <?php endif; ?>
            
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="menu.php">Feed Me</a></li>
            </ul>
        </nav>
</header>