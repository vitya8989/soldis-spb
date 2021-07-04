<?
if((isset($_POST['name']))&&(isset($_POST['telephone']))){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'stp.dir@soldisgroup.com'; 
        $subject = 'ЗАЯВКА на УСЛУГУ'; //Загаловок сообщения
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
        $headers .= "stp.dir@soldisgroup.com"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>