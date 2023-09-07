<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="index.css">
</head>



<body>
    <div class="center">
        <div class="space_2"></div>
        <?php
        $my_name = $_POST['my_name'];
        $port_numbers = ["80", "22", "20", "21"];
        $language = ["PHP", "Python", "JAVA", "HTML"];
        $command = ["join", "select", "insert", "update"];
        ?>




        <p>お疲れ様です<?php echo$my_name; ?>さん</p>

        <form action="answer.php" method="post">
            <h2>①ネットワークのポート番号は何番？</h2>
                <?php foreach($port_numbers as $value){ ?>
                <input type="radio" name="port_numbers" value="<?php echo $value; ?>"><?php echo $value; ?>
            <?php };?>


            <h2>②Webページを作成するための言語は？</h2>

                <?php foreach($language as $value){ ?>
                <input type="radio" name="language" value="<?php echo $value; ?>"><?php echo $value; ?>
            <?php };?>


            <h2>③MySQLで情報を取得するためのコマンドは？</h2>
            <form action="answer.php" method="post">
                <?php foreach($command as $value){ ?>
                <input type="radio" name="command" value="<?php echo $value; ?>"><?php echo $value; ?>
            <?php }?>
            <br>
            <input type="submit" value="回答する">
            <input type="hidden" name="my_name" value="<?php echo $my_name; ?>">
        </form>
    </div>
</body>