<?php
namespace App\Helpers;

class Format {

    static function ingredients($ingredients)
    {
        $output = array();
        //Loop through each ingredient
        foreach ($ingredients as $ingredient) {
            //If the amount is 0 only the name of the ingredient needs to be outputted
            if ($ingredient->amount > 0) {
                //If the unit is grams or millilitres there is no need to put a space after the amount
                if ($ingredient->measurement == "g" OR $ingredient->measurement == "ml") {
                    array_push($output, $ingredient->amount . $ingredient->measurement . " " . $ingredient->name);
                } else {
                    array_push($output, $ingredient->amount . " " . $ingredient->measurement .
                        " " . $ingredient->name);
                }
            } else {
                array_push($output, $ingredient->name);
            }
        }
        return $output;
    }
}

