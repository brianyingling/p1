<?php 
    include 'quotes.php';
    $quote = getRandomQuote();
?>
<html>
    <head>
        <title>Project 1 - Dynamic Web Applications</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/skeleton.css">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="title">
                <h1>Brian Yingling</h1>
            </div>
            <div class="image">
                <img src="/images/me.jpg" alt="Picture of me"/>
            </div>
            <div class="about-me">
                <h3>About Me</h3>
                <p>
                    I'm a former teacher who made a career change to web development about four years ago.
                    I'm currently working in the industry as a front end developer and I'm eager to learn PHP and 
                    Laravel. I'm married with a ten-month-old son that takes up much of my time. 
                </p>
            </div>
            <div class="quote">
                <h3>Random Quote</h3>
                <div class='quote-text'>
                    <? echo $quote['text']; ?>
                </div>
                <div class='quote-author'>
                    -- <? echo $quote['author']; ?>
                </div>
            </div>
        </div>
    </body>
</html>