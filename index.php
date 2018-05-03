<?php
$letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    
    function encoder($text, $key){
        global $letters;
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
    function encoder_word($text, $key, $arg=1){
        global $letters;
        $key = strtolower($key);                  // text to lower  
        $key = str_split($key);                   //string -> array

        $text = strtolower($text);                          // text to lower                    
        $text_arr = str_split($text);                       //string -> array

        for($m = 0, $mcount = count($key); $m < $mcount; $m++){ 
            for($j = 0, $jcount = count($letters); $j < $jcount; $j++){
                if ($key[$m] == $letters[$j]){
                    $m_key2[$m] = $j;                          //numbers array
                }
            }
        }
        for($i = 0, $count = count($text_arr); $i < $count; $i++){
            for($j = 0, $jcount = count($letters); $j < $jcount; $j++){
                if ($text_arr[$i] == $letters[$j]){
                    $m_key1[$i] = $j;
                }
            }  
        }
        $c = 0;
        for($j = 0, $jcount = count($text_arr); $j < $jcount; $j++){
            if ($text_arr[$j] == ' '){
                $encoder_wordText[$j] = ' ';
            }
            else{
                $m = $c % count($m_key2);
                $x = $m_key1[$j] + $m_key2[$m]*$arg;
                if ($x < 0){
                    $x = count($letters) + $x;
                }
                $x_m = $x % count($letters);
                $encoder_wordText[$j] = $letters[$x_m];
                $c++;
            }
        }
        return $encoder_wordText;
    }
    
    function decoder($text, $key){
        $key = count($letters) - $key;
        return encoder($text,$key);
    }

    function decoder_word($text, $key){
        return encoder_word($text,$key,-1);
    }
    
     if ($_POST['varKey'] == 'number'){
        if($_POST['text'] != '' && $_POST['key'] != ''){
            $text = ($_POST['text']);
            $key = ($_POST['key']);
            $encoderText = encoder($text, $key);
            $encoderText = implode($encoderText);
        }
    }

    if ($_POST['varKey'] == 'number'){
        if($_POST['textD'] != '' && $_POST['keyD'] != ''){
            $text = ($_POST['textD']);
            $key = ($_POST['keyD']);
            $encoderText = decoder($text, $key);
            $encoderText = implode($encoderText);
        }
    }

    if ($_POST['varKey'] == 'word'){
        if($_POST['text'] != '' && $_POST['key'] != ''){
            $text = ($_POST['text']);
            $key = ($_POST['key']);
            $encoderText = encoder_word($text, $key);
            $encoderText = implode($encoderText);
        }
    }

    if ($_POST['varKey'] == 'word'){
        if($_POST['textD'] != '' && $_POST['keyD'] != ''){
            $text = ($_POST['textD']);
            $key = ($_POST['keyD']);
            $encoderText = decoder_word($text, $key);
            $encoderText = implode($encoderText);
        }
    }

    function render ($template, $data =[])
    { 
        $path = $template . ".php";
       
        if (file_exists($path))
        {
            extract($data);
            require($path);
        }
    }
    render('forms', ["encoderText"=>"$encoderText", "text"=>"$text", "key"=>"$key"]);
?>