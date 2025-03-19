<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - <?php echo $site_name; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Contact Me</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section id="contact">
    <h2>Get in Touch</h2>
    <form action="mail.php" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $site_name; ?></p>
</footer>

</body>
</html>
