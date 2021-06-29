<?
if((isset($_POST['name']))&&(isset($_POST['telephone']))){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'vitya898989@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'ЗАЯВКА на УСЛУГУ'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>Телефон: '.$_POST['telephone'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "vitya898989@gmail.com"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>