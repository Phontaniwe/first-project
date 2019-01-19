$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$order = $_POST['order'];
$theme = $_POST['theme'];
$comment = $_POST['comment'];
$subscribe = $_POST['subscribe'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$number = htmlspecialchars($number);
$order = htmlspecialchars($order);
$theme = htmlspecialchars($theme);
$comment = htmlspecialchars($comment);
$subscribe = htmlspecialchars($subscribe);

$name = urldecode($name);
$email = urldecode($email);
$number = urldecode($number);
$order = urldecode($order);
$theme = urldecode($theme);
$comment = urldecode($comment);
$subscribe = urldecode($subscribe);

$name = trim($name);
$email = trim($email);
$number = trim($number);
$order = trim($order);
$theme = trim($theme);
$comment = trim($comment);
$subscribe = trim($subscribe);

//echo $name;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $number;
//echo "<br>";
//echo $order;
//echo "<br>";
//echo $theme;
//echo "<br>";
//echo $comment;
//echo "<br>";
//echo $subscribe;

mail("phontaniwe@gmail.com", "Форма с сайта", "Имя:".$name.". e-mail: ".$email.". Номер телефона:".$number.". Номер заказа:".$order.". Тема:".$theme.". Комментарий:".$comment.". Подписка:".$subscribe,"From: pavel.m2012@yandex.ru \r\n");

if (mail("phontaniwe@gmail.com", "Форма с сайта", "Имя:".$name.". e-mail: ".$email.". Номер телефона:".$number.". Номер заказа:".$order.". Тема:".$theme.". Комментарий:".$comment.". Подписка:".$subscribe,"From: pavel.m2012@yandex.ru \r\n"))
 { 
    echo "сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки"; 
}


