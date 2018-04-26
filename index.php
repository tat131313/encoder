<?php

    function encoder($text, $key){
        $letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        $text = strtolower($text);                          // text to lower                    
        $text_arr = str_split($text);                       //string -> array
        for($i = 0, $count = count($text_arr); $i < $count; $i++){
            for($j = 0, $jcount = count($letters); $j < $jcount; $j++){
                if($j < $jcount - $k){
                    while ($text_arr[$i] == $letters[$j]){
                        $encoderText[$i] = $letters[$j + $key];
                        var_dump($j);
                        var_dump($text_arr[$j]);
                        break;
                    }
                }
                else{
                    $encoderText[$i] = 'a';
                    var_dump($j);
                    /*while ($text_arr[$i] == $letters[$j]){
                        $encoderText[$i] = 'a';
                        var_dump($j);
                        var_dump($text_arr[$j]);
                        break;
                    }*/
                }
                
                
                /*while ($text_arr[$i] == $letters[$j]){
                    if($j < $jcount - $k){
                        $encoderText[$i] = $letters[$j + $key];
                        //var_dump($j);
                    }
                    elseif($j >= $jcount - $k){
                        $encoderText[$i] = 'a';
                    }
                    else $encoderText[$i] = 'a';
                    break;
                } */ 
            }    
        }
        return $encoderText;
    }   

    $text = "abc xyz wsr";
    $key = 3;                                               //offset
    $encoderText = encoder($text, $key);

   // var_dump($encoderText);
   // echo implode($encoderText);                             //array -> string


?>