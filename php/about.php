<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - <?php echo $site_name; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>About Me</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section id="about">
    <h2>About Me</h2>
    <p>I am a PHP developer specializing in web applications, APIs, and databases.</p>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $site_name; ?></p>
</footer>

</body>
</html>
