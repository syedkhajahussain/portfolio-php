<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - <?php echo $site_name; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1><?php echo $site_name; ?></h1>
    <p><?php echo $site_title; ?></p>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="projects.php">Projects</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<section id="home">
    <h2>Welcome to My Portfolio</h2>
    <p>Hi, I'm a web developer skilled in PHP, JavaScript, and modern frameworks.</p>
</section>

<footer>
    <p>Connect with me: 
        <a href="<?php echo $github; ?>" target="_blank">GitHub</a> | 
        <a href="<?php echo $linkedin; ?>" target="_blank">LinkedIn</a>
    </p>
</footer>

</body>
</html>
