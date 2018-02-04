<?php 
    include 'quotes.php';
    $quote = getRandomQuote();
?>

<html>
    <head>
        <title>Project 1 - Dynamic Web Applications</title>
    </head>
    <body>
        <h1>A Quote Generator!</h1>
        <div><? echo $quote['text']; ?></div>
        <div><? echo $quote['author']; ?></div>
    </body>
</html>