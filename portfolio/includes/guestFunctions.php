<?php

// Function to validate GuestBook


// function to validate name "text-boxes"
function validName($name)
{
    return !empty($name);
}



// validate How We Met: accepts an array of selections
function validSelect($selectedItems){
    $validSelect = array("Meetup","Job Fair","We haven't met yet","other");
    // check each topping and return false if it is not valid
    foreach ($selectedItems as $selectedItems){
        if(!in_array($selectedItems,$validSelect)){
            echo"<p>Go away, evildoer !</p>";
            return false;
        }
    }
    // All toppings are valid
    return true;
}

function validateURL($link){
    if (filter_var($link, FILTER_VALIDATE_URL)) {
        return true;
    } else {
        echo "<p>Not a valid URL</p>";
        return false;
    }
}