<!DOCTYPE html>

<html>
<head>
<title>Encoder</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div align="center">
            Choose encoder method:
            <select name="varKey" size="1">
                <option value="number">Number</option>
                <option value="word">Word</option>
            </select>
        </div> 

        <p align="center"><strong>Encoder</strong></p>
        <div align="center">
            <textarea name="text" placeholder="Enter text" cols="60" rows="7"></textarea>
        </div>
        <div align="center">
            <textarea name="key" placeholder="Enter key" cols="20" rows="2"></textarea>
        </div>
        <div align="center">
            <input type="submit" value="Submit"/>
        </div>

        <p align="center"><strong>Decoder</strong></p>
        <div align="center">
            <textarea name="textD" placeholder="Enter text" cols="60" rows="7"></textarea>
        </div>
        <div align="center">
            <textarea name="keyD" placeholder="Enter key" cols="20" rows="2"></textarea>
        </div>
        <div align="center">
            <input type="submit" value="Submit"/>
        </div>
    </form>

    
        <br><fieldset> Text: <?php echo $text; ?><br><hr>
        Key: <?php echo $key; ?><br><hr>
        Output text: <?php echo $encoderText; ?> </fieldset>
        
</body>
</html>
