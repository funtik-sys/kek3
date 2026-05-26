<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?
$mysql = mysqli_connect('localhost', 'root', '', 'يوسوبوف');

if(isset($_POST['id'])){
    $news_id = $_POST['id'];
    $queryaboba1 = mysqli_query($mysql, "SELECT * FROM `الأخبار`");
    while($fetish_abcoc1 = $queryaboba1->fetch_assoc()){
        if($fetish_abcoc1['المعرف'] == $news_id){
            echo strtoupper($fetish_abcoc1['الاسم'])."<br><br>".$fetish_abcoc1['التاريخ']."<br><br>".$fetish_abcoc1['النص'];
        }
    }
}else{
    $news_id = $_POST['idN'];
    mysqli_query($mysql, "DELETE FROM `الأخبار` WHERE المعرف = '$news_id'");
    header("Location: index.php");
}
?>

<ul>
    <li><form action="her.php" method="post"><input type="hidden" name="id" value="<? echo $_POST['id']; ?>"><button type="submit">Изменить</button></form></li>
    <br>
    <li><form action="" method="post"><input type="hidden" name="idN" value="<?echo $news_id; ?>"><button type="submit">Удалить</button></form></li>
    <br>
    <li><button><a href="index.php" style="text-decoration: none;color: black;">Назад</a></button></li>
</ul>
</body>
</html>