<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Core -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Happy Health</title>
    <meta name="title" content="Happy Health">
    <meta name="description" content="Happy Health is a website with graph and statistics about Happiness and Health around the world.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <!-- <meta property="og:url" content="https://happy-health.com/"> -->
    <meta property="og:title" content="Happy Health">
    <meta property="og:description" content="Happy Health is a website with graph and statistics about Happiness and Health around the world.">
    <meta property="og:image" content="logoHappy.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <!-- <meta property="twitter:url" content="https://happy-health.com/"> -->
    <meta property="twitter:title" content="Happy Health">
    <meta property="twitter:description" content="Happy Health is a website with graph and statistics about Happiness and Health around the world.">
    <meta property="twitter:image" content="logoHappy.png">
    
    <!-- Links / Script -->
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./assets/images/icon.png" type="image/x-icon">

</head>
<body>
<header></header>
<main>
<section>
    <section></section>
    <section></section>

    <?php include "./php/twig.php" ?>
    {% set collection = [1, 2, 3] %}
    <ul>
    {% for item in collection %}
        <li>{{ item }}</li>
    {% endfor %}
    </ul>

</section>
<section>
    <section></section>
    <section></section>
    <section></section>
</section>

</main>
<footer></footer>    
<!-- <script src="./js/citation.js"></script> -->
</body>
</html>