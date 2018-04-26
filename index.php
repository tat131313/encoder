<?php

    function encoder($text, $key){
        $letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        $text = strtolower($text);                          // text to lower                    
        $text_arr = str_split($text);                       //string -> array
        for($i = 0, $count = count($text_arr); $i < $count; $i++){
            for($j = 0, $jcount = count($letters); $j < $jcount; $j++){
                if ($text_arr[$i] == ' '){
                    $encoderText[$i] = ' ';
                } 
                if ($text_arr[$i] == $letters[$j]){
                    if($j < $jcount - $key){
                        $encoderText[$i] = $letters[$j + $key];
                    }
                    elseif($j >= $jcount - $key){
                        $new_key = $j + $key - $jcount;
                        $encoderText[$i] = $letters[$new_key];
                    }
                } 
            }    
        }
        return $encoderText;
    }   

    $text = "abc xyz wsr";
    $key = 3;                                               //offset
    $encoderText = encoder($text, $key);

   // var_dump($encoderText);
    echo implode($encoderText);                             //array -> string


?>