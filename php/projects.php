<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - <?php echo $site_name; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>My Projects</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section id="projects">
    <h2>Projects</h2>
    <ul>
        <li><strong>Portfolio Website</strong> - A dynamic personal portfolio (PHP, MySQL, Bootstrap)</li>
        <li><strong>Blog CMS</strong> - A full-stack blogging platform (PHP, Laravel, MySQL)</li>
    </ul>
</section>

<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $site_name; ?></p>
</footer>

</body>
</html>
