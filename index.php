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
<div class="beach">
<button><a href="add.php">Добавить Новость</a></button>
<button><a href="addZ.php">Добавить Раздел</a></button>
</div>
<br>
<div class="header"></div>
<div class="tabll">
<table>
<tbody>
<style>
th { text-align: left; }
td { text-align: left; }
form { text-align: left; }
</style>
<?
$mysql = mysqli_connect('localhost', 'root', '', 'يوسوبوف');
$queryaboba1 = mysqli_query($mysql, "SELECT * FROM `الأخبار`");
$bdsm = mysqli_fetch_all($queryaboba1, MYSQLI_ASSOC);

function nestoit($bdsm, $dep, $name, $otstupi){
    static $bilo=[];
    if(in_array($dep, $bilo)){
        return;
        }
    array_push($bilo, $dep);

    ?><tr><?
    for($i=0;$i<$otstupi;$i++){ 
        ?><td></td><? 
        }

    echo "<td colspan='10'>" . $name . ":" . "</td>";
    ?></tr><?

    foreach($bdsm as $value){
        if($value['الإدمان'] == $dep){
            if($value['النوع'] == 1){
                nestoit($bdsm, $value['المعرف'], $value['الاسم'], $otstupi+1);
            }else{
                ?><tr><?
                for($i=0;$i<$otstupi+1;$i++){ 
                    echo "<td></td>"; 
                    }

                ?>
                    <td colspan="10">
                    <form action="kek.php" method="POST">
                    <input type="hidden" name="id" value="<? echo $value['المعرف']; ?>">
                    <button style="padding: 5px 5px;border-radius: 4px;background: #fff; border: 1px solid #20c7c7;" type="submit">
                <? echo $value['الاسم']." (".$value['التاريخ'].")";?>
                    </button>
                    </form>
                    </td>
                    </tr>
                <?

                }
            }
        }
    }

foreach($bdsm as $fetish_abcoc1){
    if($fetish_abcoc1['الإدمان'] == 0){
        if($fetish_abcoc1['النوع'] == 0){?>
            <tr><td></td><td>
            <form action="kek.php" method="POST">
            <input type="hidden" name="id" value="<? echo $fetish_abcoc1['المعرف']; ?>">
            <button style="padding: 5px 5px;border-radius: 4px;background: #fff; border: 1px solid #20c7c7;" type="submit">
        <? echo $fetish_abcoc1['الاسم']." (".$fetish_abcoc1['التاريخ'].")";?>
            </button>
            </form>
            </td></tr>
        <?
        } else {
            nestoit($bdsm, $fetish_abcoc1['المعرف'], $fetish_abcoc1['الاسم'], 1);
        }
    }
}
?>
</tbody>
</table>
</div>
</body>
</html>
