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
        $Name = $_POST['Name'];
        $Text = $_POST['Text'];
        $Date = $_POST['Date'];
        $Dep = $_POST['Dep'];
        mysqli_query($mysql, "INSERT INTO `الأخبار`(`الاسم`, `الإدمان`, `النوع`, `النص`, `التاريخ`)  VALUES ('$Name','$Dep',0,'$Text','$Date')");}
?>
<body>
    <div class="news">Новости</div>
    <br>
    <div class="hero">
    <form action="" method="POST">
        <label for="Name">Заголовок</label>
        <input type="text" name="Name"></input>
        <label for="Text">Содержимое</label>
        <input type="text" name="Text"></input>
        <label for="Date">Дата публикации</label>
        <input type="date" name="Date"></input>
        <select name="Dep">
        <option value = "0">Без подкатегории</option>

        <?
        $queryaboba = mysqli_query($mysql, "SELECT * FROM `الأخبار` WHERE `النوع` = 1");
        try{
            while($fetish_abcoc = $queryaboba->fetch_assoc()){
            if(isset($fetish_abcoc['الاسم'])){    
            ?><option value="<?=$fetish_abcoc['المعرف']; ?>"><? echo $fetish_abcoc['الاسم'];?></option><?}}
        }catch(Exception $e){
            echo '';
        }
        ?>
        </select>
        <input type="submit" style="margin-bottom: 25px;padding: 4px 2px;background: linear-gradient(45deg, rgb(241, 169, 61), rgb(238, 175, 80));border: none;border-radius: 10px;"></input>
    </form>

    <button id="hui" style="position: fixed; padding: 4px 10px; background: linear-gradient(45deg, rgb(241, 169, 61), rgb(238, 175, 80)); border: none; border-radius: 10px; z-index: 9999;"><a href="index.php" style="text-decoration: none; color: black; font-weight: bold;">x</a></button>
    <script language="YoptaScript">
    ясенХуй btn внатуре ксива.вычислитьЛохаПоНомеру('hui') нахуй
        йопта moveButton() жЫ
            ясенХуй x внатуре Очканавт.бабкиГони(Очканавт.шара() * (ебало.внутриЖирный - btn.offsetWidth)) нахуй
            ясенХуй y внатуре Очканавт.бабкиГони(Очканавт.шара() * (ебало.внутриДлинный - btn.offsetHeight)) нахуй
            btn.style.left внатуре x + 'px' нахуй
            btn.style.КрышаЙбать внатуре y + 'px' нахуй
        есть
        посетитьСизо(moveButton, 0) нахуй
        moveButton() нахуй
    </script>
    <script src="yopta.js"></script>
</body>
</html>
<?

//https://yandex.ru/an/count/WguejI_zOoVX2LbZ0WKL05DcbYQakB1mmHMWnn5C2nZ-9M1Ee8fF8EmD4z2RuYqca0XuQn3GJKXnOU62Aq2F1tI1Ff_BdJtRxzpvhg-Thz_nUiCTxfrBfzFy6OLAdVZjbEBJ82Bg1pjWonszATv2qgXZLZOl01o1vLCfbJMBQbzmR67GSRJX4kgKgV2ee721wWOwJ0oaGHRGA05Na0BAFq0E2z3-034iGFi3X5o0zWT8OG7Q7o241MW_cCGMeFrWaga0xGUJUW7Q3xwS2z1-y6Mo0Eq7NxuKeFtWYsG1sXjRTObtID36Nmh8_W0npFdIVeO_o4nCYRFnboQum01V-LGwRV6a8KAKnxP0WXaSh8yoX9kMc8KERCcDrmTgbHt5JLvwUZUx7a1vGrlO-Np3PEEbnpQx3mpS08xPy0rW0pU1BYU56xQ-Zf18dWPnSyaLAbeDUtF95IfQ3LiCkW3U6fs3NICaZo4xjbXek3fiG2IOAQ1Cr8R3y86q6X82-Fe1OXZ0rW7jZjTZW2rOJNBdnAif5hOMTe10jhgv0gOWVWkC8JUPj7TCUXGsHap7w33VdIWI2Rewg5c4wGwWQ447kouxfZJrw76JIu-Rk_-D5hXVV2783oyG-S4QiFzhWVkzCFY-DX_xMURI6oNhkgvZQVC5hx8gO7IZ0FkLCteNOBzoHYJFc_sZB-T0WMpqv2_6MCJ9ZtsU1oUWMEZtvhynuYj3hBpNDtqnizFwBQthJ4rVpEoqNcllE9FqMHgl7dPUzrHDylZAL5EHTKSSfa2W8Q0To034wYvNAfNA49fTI7iPfFmw_hwcM2ubI10L_FDeuyYveblSsu-xNF2dYgpRFwDr9EBXBeokyK3lA45KJTkt-5HOTWh7e_R6aaPBdlqYnI4qA0AqpLwKoV6x9Ifk1000~2

?>