<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $address = $_POST['address'];
        $delType = $_POST['delType'];
        $select = $_POST['select'];
        $comment = $_POST['comment'];
        
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);    
        $date = htmlspecialchars($date);   
        $address = htmlspecialchars($address);   
        $delType = htmlspecialchars($delType);   
        $select = htmlspecialchars($select);  
        $comment = htmlspecialchars($comment); 
    ?>

    <h1>Здравствуйте!</h1>
    <h2>Поступил новый заказ!</h2>
    <p>Имя: <?php echo $name ?>,</p>
    <p>Эл. почта: <?php echo $email ?>,</p>
    <p>Дата доставки: <?php echo $date ?>,</p>
    <p>Адрес доставки: <?php echo $address ?>,</p>
    <p>Тип доставки: <?php echo $delType ?>,</p>
    <p>Способ оплаты: <?php echo $select ?>,</p>
    <p>Комментарий: <?php echo $comment ?>.</p>
</body>
</html>