<?php 
    include './quotes.php';
    $quote = getRandomQuote();
?>

<!-- Nice blockquoting style; https://css-tricks.com/snippets/css/simple-and-nice-blockquote-styling/ -->
<html>
    <head>
        <title>Project 1 - Dynamic Web Applications</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/skeleton.css">
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="five columns">
                    <img src="/images/me.jpg" alt="Picture of me"/>
                </div>
                <div class="seven columns">
                    <h1>Brian Yingling</h1>
                    <h3>About Me</h3>
                    <p>
                        I'm a former teacher who made a career change to web development about four years ago.
                        I'm currently working in the industry as a front end developer. I work with Javascript
                        daily but I'm eager to learn more server side development. 
                    </p>
                    <p>
                        I'm married with a ten-month-old son that takes up much of my time. I enjoy reading, traveling,
                        and while I don't enjoy cooking, I relish in the results of those who do.
                    </p>
                    <h3>Random Quote</h3>
                    <blockquote>
                        <div class='quote-text'>
                            <? echo $quote['text']; ?>
                        </div>
                        <div class='quote-author'>
                            -- <? echo $quote['author']; ?>
                        </div>
                    </blockquote
                </div>
            </div>
    </body>
</html>

