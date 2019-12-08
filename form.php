<?php
if(isset($_POST['number']) && isset($_POST['phone'])){

    $phone = htmlspecialchars($_POST['phone']);
    $name = htmlspecialchars($_POST['name']);
    $city = htmlspecialchars($_POST['city']);
    $email = htmlspecialchars($_POST['email']);

    if(preg_match('/^\+ \(380\) [0-9]{9}$/iu', $phone)
        && preg_match('/^([а-яёіїєґ\-\']+(\s)?)+$/iu', $name)
        && ((preg_match('/^([а-яёіїєґ\-\']+(\s)?)+$/iu', $city) || $city == null)
            || (preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/iu', $email) || $city == null))){

        $goodInfo = htmlspecialchars($_POST['goodInfo']);
        $goodPrice = htmlspecialchars($_POST['goodPrice']);

        $message = "П.І.Б: $name; Тел: $phone; Місто: $city; email: $email";
        $to = "vladgor1001@gmail.com";
        $from = "vladgor1001@gmail.com";
        $subject = "$goodInfo + ' | ' + $goodPrice";
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";

        mail($to, $subject, $message, $headers);

        // header('Location: order.php');
    }
    else{
        // header('Location: index.php?check');
    }
}
?>
