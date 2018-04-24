<?php
    function encoder($text,$key){
            $text_arr = str_split($text);                                   //string -> array
            for($i = 0, $count = count($text_arr); $i<$count; $i++){
                $encoderText[$i] = chr(ord($text_arr[i])+$key);             //work with ASCII-code
            }
            return $encoderText;

    }

    $text = "London is a capital of great britain";
    $key = 3;                                               //offset
    $encoderText = encoder($text, $key);
    echo implode($encoderText);                             //array -> string


?>