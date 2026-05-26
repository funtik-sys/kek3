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
            ?>
            <ul>
            <form action="" method="post">
                
                <li><input type="text" name="News" placeholder="<?echo $fetish_abcoc1['الاسم']?>"></li>
                <li><textarea name="TextNews" rows="5" cols="45" placeholder="<?echo $fetish_abcoc1['النص']?>"></textarea></li>
                <li><input type="hidden" name="idot" value="<? echo $_POST['id']; ?>"><button type="submit">Подтвердить</button></li>
                <br>
            
            </form>
            <li><form action="kek.php" method="post"><input type="hidden" name="kek" value="<? echo $_POST['id']; ?>"><button><a href="kek.php" style="text-decoration: none;color: black;">Назад</a></button></form></li>
            </ul>
            </body>
            </html>
            <?
        }
    }
}
if(isset($_POST['idot'])){
    $id = $_POST['idot'];
    $name = $_POST['News'];
    $text = $_POST['TextNews'];
    $query = mysqli_query($mysql, "UPDATE الأخبار SET الاسم = '$name', النص = '$text' WHERE المعرف = $id");
    header("Location: index.php");
}


