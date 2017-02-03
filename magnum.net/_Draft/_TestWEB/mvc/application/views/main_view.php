<?php
/*
 * Created by MagNum on 27.11.2016.
 */

// Config
$_THIS_PAGE_ADDRESS = '/';
$_MYSQL_SERVER = 'localhost';
$_USER = 'root';
$_PASSWORD = '123456';
$_DB= 'oldprofish'; //default dataBase


if(count($_POST)>0&&($_POST['pattern']!=''||$_POST['value']!='')){
    $db = $_POST['database'];
    $text_pattern = $_POST['pattern'];
    $text_value = $_POST['value'];
}else{
    $db = $_DB;
    $text_pattern = 'шаблон';
    $text_value ='значение';
}
?>

<div>
    <form action="<?php echo $_THIS_PAGE_ADDRESS?>" method="post">
        <div class="input-group btn-block" style="max-width: 200px;"><input name="database" value="<?php echo $db?>" class="form-control" type="text" placeholder=""><input name="pattern" value="" class="form-control" type="text" placeholder="<?php echo $text_pattern?>"><input name="value" value="" class="form-control" type="text" placeholder="<?php echo $text_value?>"><span class="input-group-btn"><button type="submit" title="Отправить" class="btn btn-primary"><i class="fa fa-refresh"></i></button></span></div>
<p></p>
    </form>
</div>




<?php
if(count($_POST)>0&&($_POST['pattern']!=''||$_POST['value']!='')){
    $pattern = '/'.$_POST['pattern'].'/i';
    $value_pattern ='/'.$_POST['value'].'/i';
    $link = mysqli_connect($_MYSQL_SERVER, $_USER, $_PASSWORD, $db);
    if (!$link) {
        die('Ошибка соединения: ');
    }else{
        //echo 'Успешно соединились c MySQL server <br><br><br>';
    }
    $listdbtables = array_column(mysqli_fetch_all($link->query('SHOW TABLES')),0);
    foreach ($listdbtables as $table){
        $print_table = true;


        if ($_POST['pattern']!=''&&preg_match($pattern, $table)&&$print_table){
            echo '<h4><span style="font-size: xx-small">'.$db.'.</span>'.$table.'</h4>';
            $print_table = false;
        }
        $q = $link->query('DESCRIBE '.$table);

        //        print_r($q);
        while($row = mysqli_fetch_array($q)) {

            if($_POST['value']!=''){
                $values = array_column(mysqli_fetch_all($link->query('SELECT '.$row['Field'].' FROM '.$table)),0);
                foreach ($values as $value){
                    if (preg_match($value_pattern, $value)){
                        if ($print_table){
                            echo '<h4><span style="font-size: xx-small">'.$db.'.</span>'.$table.'</h4>';
                            $print_table = false;
                        }
                        echo "{$row['Field']} - {$value}<br>\n";
                    }
                }
            }

            if ($_POST['pattern']!=''&&preg_match($pattern, $row['Field'])){
                if ($print_table){
                    echo '<h4><span style="font-size: xx-small">'.$db.'.</span>'.$table.'</h4>';
                    $print_table = false;
                }
                echo "{$row['Field']} - {$row['Type']}<br>\n";
            }
//            $q_value = $link->query('SELECT * FROM '.$table);


        }
        if(!$print_table){echo '<br>';}

    }
    mysqli_close($link);
}

?>
<div>
    <form action="<?php echo $_THIS_PAGE_ADDRESS?>" method="post">


        <div class="input-group btn-block" style="max-width: 200px;"><input name="pattern" value="" class="form-control" type="text" placeholder="шаблон"><span class="input-group-btn"><button type="submit" title="Отправить" class="btn btn-primary"><i class="fa fa-refresh"></i></button></span></div>

    </form>
</div>

