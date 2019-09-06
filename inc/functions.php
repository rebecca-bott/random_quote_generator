<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
//This is a array holding an array of 10 quotes with other attributes
$quotes = [
    0 => array(

        'quote' => "It does not do to dwell on dreams and forget to live",

        'source' => "Albus Dumbledore",

        'citation' => "Sorcerer’s Stone",

        'year' => ''

    ),
    1 => array(

        'quote' => "It takes a great deal of bravery to stand up to our enemies, but just as much to stand up to our friends",
    
        'source' => "Albus Dumbledore",
    
        'citation' => "Sorcerer’s Stone",
    
        'year' => ''    
    
        ),
    2 => array(

        'quote' => "It is our choices, Harry, that show what we truly are, far more than our abilities",
        
        'source' => "Albus Dumbledore",
        
        'citation' => "Chamber of Secrets",
        
        'year' => ''
        
            ),
    3 => array(

        'quote' => "I am what I am an’ I’m not ashamed",
            
        'source' => "Rubeus Hagrid",
            
        'citation' => "Goblet of Fire",
            
        'year' => ''
            
                ),
    4 => array(

        'quote' => "If you want to know what a man’s like, take a good look at how he treats his inferiors, not his equals",
                
        'source' => "Sirius Black",
                
        'citation' => "Goblet of Fire",
                
        'year' => 'year 4'
                
                    ),
    5 => array(

        'quote' => "Differences of habit and language are nothing at all if our aims are identical and our hearts are open",
                    
        'source' => "Albus Dumbledore",
                    
        'citation' => "Goblet of Fire",
                    
        'year' => 'year 4'
                    
                        ),
    6 => array(

        'quote' => "Things we lose have a way of coming back to us in the end, if not always in the way we expect",
                    
        'source' => "Luna Lovegood",
                    
        'citation' => "Order of the Phoenix",
                    
        'year' => 'year 5'
                    
                        ),
    7 => array(

        'quote' => "You're a little scary sometimes, you know that? Brilliant ... but scary",
                    
        'source' => "Ron Weasley",
                    
        'citation' => "Sorcerer’s Stone",
                    
        'year' => ''
                    
                        ),
     8 => array(

        'quote' => "Always",
                    
        'source' => "Severus Snape",
                    
        'citation' => "Deathly Hallows",
                    
        'year' => 'year 7'
                    
                        ),
    9 => array(

        'quote' => "Of course it is happening inside your head, Harry, but why on earth should that mean it is not real?",
                    
        'source' => "Albus Dumbledore",
                    
        'citation' => "Deathly Hallows",
                    
        'year' => 'year 7'
                    
                        ),


];


// Create the getRandomQuuote function and name it getRandomQuote
function getRandomQuote($array) {
    $randomNumber = rand(0, 9);
    return $array[$randomNumber];
};

// Create the printQuote funtion and name it printQuote
function printQuote($array) {
    $quote_array = getRandomQuote($array);
    $quote_string = '';
    $quote_string = "<p class='quote'>" . $quote_array['quote'] . "</p>";

    if ($quote_array['citation'] && $quote_array['year']) {
        $quote_string .= "<p class='quote'>" . $quote_array['source'] . "</p>";
        $quote_string .= "<span class='citation'>" . $quote_array['citation'] . "</span>";
        $quote_string .= "<span class='year'>" . $quote_array['year'] . "</span>";
        $quote_string .= "</p>";
    } elseif ($quote_array['citation']) {
        $quote_string .= "<p class='quote'>" . $quote_array['source'] . "</p>";
        $quote_string .= "<span class='citation'>" . $quote_array['citation'] . "</span>";
        $quote_string .= "</p>";
    } elseif ($quote_array['year']) {
        $quote_string .= "<p class='quote'>" . $quote_array['source'] . "</p>";
        $quote_string .= "<span class='year'>" . $quote_array['year'] . "</span>";
        $quote_string .= "</p>";
    } else {
        $quote_string .= "<p class='quote'>" . $quote_array['source'] . "</p>";
    }


    echo $quote_string;
};

printQuote($quotes);
