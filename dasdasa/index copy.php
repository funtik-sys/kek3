<!DOCTYPE html>
<html lang="en">
    
<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
</head>
<body>
    <div class="news">Новости</div>
    <br>
    <button style="margin-bottom: 25px;"><a href="add.php">Добавить Новость</a></button>
    <button style="margin-bottom: 25px;"><a href="addZ.php">Добавить Раздел</a></button>
    <br>
    <div class="header"></div>
    <div class="tabll">
<table>
<tbody>
<style>
    th {
      text-align: left;
    }
    td {
      text-align: left;
    }
    form {
      text-align: left;
    }
</style>
<?php

$mysql = mysqli_connect('localhost', 'root', '', 'يوسوبوف');
$queryaboba1 = mysqli_query($mysql, "SELECT * FROM `الأخبار`");
#while($fetish_abcoc1 = $queryaboba1->fetch_assoc()){
    #echo $fetish_abcoc1['الاسم'];//name
    #echo $fetish_abcoc1['الإدمان'];//dep
    #echo $fetish_abcoc1['النوع'];//type 0 = news 1 = category
    #echo $fetish_abcoc1['النص'];//text
    #cho $fetish_abcoc1['التاريخ'];//data
    #echo $fetish_abcoc1['المعرف'];//id 
#}

function nestoit($queryaboba1, $dep, $name, $otstupi){
    static $bilo=[];
    if(in_array($dep, $bilo)){return;}
    array_push($bilo, $dep);
    $bdsm = mysqli_fetch_all($queryaboba1, MYSQLI_ASSOC);
    mysqli_data_seek($queryaboba1, 0);
    ?><tr><td><?for($i=0;$i<$otstupi;$i++){?></td><td><?;}?><?echo $name.":";?></td></tr><?
    foreach($bdsm as $value){
        if($value['الإدمان'] == $dep){
            if($value['النوع'] == 1){
                nestoit($queryaboba1, $value['المعرف'], $value['الاسم'], $otstupi+1);
            }else{
                echo "<br>";
                ?><tr><td><?for($i=0;$i<$otstupi;$i++){?></td><td><?;}?><form action="kek.php" method="POST"><input type="hidden" name="id" value="<?php echo $value['المعرف']; ?>"> <button type="submit"><?php echo $value['الاسم']." (".$value['التاريخ'].")"; ?></button></form></td></tr><?
            }
        }
    }
}

while($fetish_abcoc1 = $queryaboba1->fetch_assoc()){
    if($fetish_abcoc1['الإدمان'] == 0){
            if($fetish_abcoc1['النوع'] == 0){
            ?><a href="kek.html"><?= $fetish_abcoc1['الاسم'] . " " . $fetish_abcoc1['التاريخ'] ?></a><br><? //исправить
            }
            else{
                if ($fetish_abcoc1['النوع'] == 0){
                    echo $fetish_abcoc1['الاسم'];
                }else{
                    nestoit($queryaboba1, $fetish_abcoc1['المعرف'], $fetish_abcoc1['الاسم'], 1);
                }
        }
    }
}?>

</tbody>
</table>
</div>
</body>
<html>


