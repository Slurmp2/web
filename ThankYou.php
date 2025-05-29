<?php
// Retrieve data from the POST request
$name = isset($_POST['user_name']) ? htmlspecialchars($_POST['user_name']) : 'N/A';
$email = isset($_POST['user_email']) ? htmlspecialchars($_POST['user_email']) : 'N/A';
$feedback = isset($_POST['user_feedback']) ? htmlspecialchars($_POST['user_feedback']) : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="body-layout">
    <header class="header-layout">
        <div class="container header-content">
            <h1 class="site-title">Thank You!</h1>
            <nav class="main-nav">
                <ul class="nav-list">
                    <li><a href="index.html" class="nav-link">Home</a></li>
                    <li><a href="about.html" class="nav-link">About</a></li>
                    <li><a href="Future Plans.html" class="nav-link">Future Plans</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container main-content">
        <section class="section-card">
            <h2 class="section-title">Thank You for Your Feedback!</h2>
            <p class="section-paragraph">We appreciate you taking the time to share your thoughts.</p>

            <div class="feedback-details">
                <p><strong>Your Name:</strong> <?php echo $name; ?></p>
                <p><strong>Your Email:</strong> <?php echo $email; ?></p>
                <p><strong>Your Feedback:</strong></p>
                <p class="feedback-message"><?php echo nl2br($feedback); ?></p>
            </div>

            <div class="text-center-wrapper">
                <a href="index.html" class="button-primary">Back to Home</a>
            </div>
        </section>
    </main>

    <footer class="footer-layout">
        <div class="container footer-content">
            <p>&copy; 2025 Michael. All rights reserved.</p>
            <p class="footer-links">Connect with me:
                <a href="https://twitter.com/" target="_blank" class="footer-link social-icon"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/" target="_blank" class="footer-link social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/" target="_blank" class="footer-link social-icon"><i class="fab fa-linkedin-in"></i></a>
            </p>
        </div>
    </footer>
</body>
</html>
