<!DOCTYPE html>
<html>
<head>
	<title>Manual captcha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    session_start();
    require "randomizer.php";

    function generateRandomCode($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $code = "";
        for ($i = 0; $i < $length; $i++) {
            $code .= substr($chars, rand(0, strlen($chars)-1), 1);
        }
        return $code;
    }

    if (!isset($_SESSION['random_code'])) {
        $random_code = generateRandomCode(7);
        $_SESSION['random_code'] = $random_code;
    } else {
        $random_code = $_SESSION['random_code'];
    }

    if (isset($_POST['submit'])) {
        $input_code = $_POST['input_code'];
        if ($input_code === $random_code) {
            unset($_SESSION['random_code']);
            header("Location:success.php");
        } else {
            echo "Sorry, the code you entered is incorrect. Please try again.";
            $random_code = generateRandomCode(7);
            $_SESSION['random_code'] = $random_code;
        }
    }

    ?>

    <br><br>
    <div class="captcha-image-bg">
        <div class="captcha-image">
            <?php
                for($i=0; $i<generateRandom_LineCount(); $i++) { 
                    echo('<div class="line" style="
                    margin-left: '.generateRandomHorizontalOffset_line().'px;
                    transform: rotate('.generateRandomRotation_line().'deg);
                    background-color: rgba(20, 20, 20, 0.'.generateRandomOpcity_line().');
                    filter: blur('.generateRandomBlur().'px);
                    width: '.generateRandomWidth_line().'px;
                    "></div>');
                }
            ?>
            <?php
                for($i=0; $i<generateRandom_DotCount(); $i++) {
                    $dot_size = generateRandomSize_dot();
                    echo('<div class="dot" style="
                    left: '.generateRandomLeftOffset_dot().'px;
                    top: '.generateRandomTopOffset_dot().'px;
                    background-color: rgba(20, 20, 20, 0.'.generateRandomOpcity_line().');
                    filter: blur('.generateRandomBlur_dot().'px);
                    width: '.$dot_size.'px;
                    height: '.$dot_size.'px;
                    "></div>');
                }
            ?>
            <?php
                for($i = 0; $i < 7; $i++){
                    echo('<div class="scale" style="
                    transform: scale('.generateRandomScale().');
                    ">
                    <div class="skew" style="
                    transform: skew('.generateRandomSkew().'deg);
                    filter: blur('.generateRandomBlur().'px);
                    ">
                    <div class="character" style="
                    transform: rotate('.generateRandomRotation().'deg);
                    margin-top: '.generateRandomVerticalOffset().'rem;
                    margin-left: '.generateRandomHorizontalOffset().'rem;
                    font-weight: '.generateRandomFontWeight().';
                    filter: opacity('.generateRandomOpacity().'%);
                    font-family: '.generateRandomFontFamily().';
                    ">'.$random_code[$i].'</div></div></div>');
                }
            ?>
        </div>
    </div>
    <br>

    <form method="post" action="">
        <label>Enter the 7-character code:</label>
        <input type="text" name="input_code" maxlength="7" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>