<?php
    function getRandomQuote() {
        $quotes = [
            [
                "text" => "That's one small step for man, one giant leap for mankind",
                "author" => "Neil Armstrong",
                "source" => ""
            ],
            [
                "text" => "Ask not what your country can do for you, ask what you can do for your country",
                "author" => "John F. Kennedy",
                "source" => ""
            ],
            [
                "text" => "You miss 100% of the shots you don't take. -- Wayne Gretsky",
                "author" => "Michael Scott",
                "source" => "http://theopenend.com/wp-content/uploads/2009/10/michaelscott.jpg"
            ],
            [
                "text" => "Great things in business are never done by one person. They're done by a team of people.",
                "author" => "Steve Jobs",
                "source" => "https://www.brainyquote.com/photos_tr/en/s/stevejobs/737723/stevejobs1.jpg" 
            ],
            [
                "text" => "Everything should be made as simple as possible, but not simpler.",
                "author" => "Albert Einstein",
                "source" => "https://geniusquotes.org/wp-content/uploads/2014/01/Great-quote-famous-Albert-Einstein.png"
            ]
        ];
        $i = array_rand($quotes);
        return $quotes[$i];
    }  