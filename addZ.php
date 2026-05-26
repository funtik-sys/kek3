<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить новость</title>
</head>
<?      $mysql = mysqli_connect('localhost', 'root', '', 'يوسوبوف');
        if (isset($_POST['Name'])){
        $Dep = $_POST['Dep'];
        $Name = $_POST['Name'];
        mysqli_query($mysql, "INSERT INTO `الأخبار`(`الاسم`, `الإدمان`, `النوع`)  VALUES ('$Name','$Dep',1)");}
?>

<body>
    <div class="news"><p>Новости</p></div>
    <br>
    <form action="" method="POST">
        <label for="Name">Заголовок</label>
        <input type="text" name="Name"></input>
        
        <select name="Dep">
        <option value = "0">Без подкатегории</option>

        <?
        $mysql = mysqli_connect('localhost', 'root', '', 'يوسوبوف');
        $queryaboba = mysqli_query($mysql, "SELECT * FROM `الأخبار` WHERE `النوع` = 1");
        try{
            while($fetish_abcoc = $queryaboba->fetch_assoc()){
            if(isset($fetish_abcoc['الاسم'])){    
          ?><option value="<?=$fetish_abcoc['المعرف']; ?>">d<? echo $fetish_abcoc['الاسم'];?></option><?}}
        }catch(Exception $e){
            echo '';
        }
        ?>
</select>
<input type="submit"></input>
<button><a href="index.php">Назад</a></button>
</body>
</html>