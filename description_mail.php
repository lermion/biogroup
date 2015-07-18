<style type="text/css">
	p{
		width: 290px;
		height: 20px;
		text-shadow: 2px 2px 3px rgba(137, 140, 131, 1);
		font-family: sans-serif;
		text-align: center;
		font-size: 18px;
		color: black;
		position: relative;
		bottom: 10px;
		margin: 0 auto;
	}
	.paddingParag{
		padding-top: 10px;
	}
</style>
<?php

$name = strip_tags( stripslashes( $_POST['name'] ) );
$email = strip_tags( stripslashes( $_POST['email'] ) );
$message = strip_tags( stripslashes( $_POST['message'] ) );
$descriptionForm = strip_tags(stripcslashes($_POST['descriptionForm']));
$descriptionPhone = strip_tags(stripcslashes($_POST['descriptionPhone']));
$pattern = "";


$myemail = "lermion666@gmail.com";
$name = check_input($_POST["name"], "<p class='paddingParag'>Введите ваше имя!<p>");
$descriptionPhone = check_input($_POST["descriptionPhone"], "<p>Вы забыли ввести номер телефона!<p>");
$email = check_input($_POST["email"], "<p class='paddingParag'>Введите ваш e-mail!<p>");
$message = check_input($_POST["message"], "<p class='paddingParag'>Вы забыли написать сообщение!<p>");

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<p>Е-mail адрес не существует</p>");
}

$pattern = "/^\d-?\d-?\d-?\d-?\d-?\d-?\d-?\d-?\d-?\d$/";
if(!preg_match($pattern, $descriptionPhone)){
	show_error("<p>Формат введенного вами номера должен быть: 099-111-22-33<p>");
}

$message_to_myemail = "Здравствуйте! 
Вашей контактной формой было отправлено сообщение! 
Имя отправителя: $name
Телефон отправителя: $descriptionPhone
E-mail: $email
Заказ из формы: $descriptionForm
Текст сообщения: $message 
Конец";

$from  = "From: $yourname <$email> \r\n Reply-To: $email \r\n"; 
mail($myemail, $tema, $message_to_myemail, $from);
?>
<style type="text/css">
	#messageImg{
		text-shadow: 2px 2px 30px rgba(255, 255, 255, 1);
		/*text-shadow: 4px 4px 10px rgba(84, 84, 84, 0.75);*/
		font-family: 'Roboto Slab', serif;
		text-align: center;
		font-size: 21px;
		color: black;
	}
</style>
<p>Спасибо,<br/>Ваше сообщение отправлено!</p>

<?php

function check_input($data, $problem = "")
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}
function show_error($myError)
{
?>
<html>
<head>
	<style type="text/css">
	#messageImgError{
		text-shadow: 2px 2px 30px rgba(255, 255, 255, 1);
		/*text-shadow: 4px 4px 10px rgba(84, 84, 84, 0.75);*/
		font-family: 'Roboto Slab', serif;
		text-align: center;
		font-size: 20px;
		color: #fff;
		height: 50px;
	}
</style>
</head>
<body>
<?php echo $myError; ?>
</body>
</html>
<?php
exit();
}
?>