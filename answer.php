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
            $port_numbers = $_POST['port_numbers'];
            $language = $_POST['language'];
            $command = $_POST['command'];
        ?>
        <p><?php echo$my_name; ?>さんの結果は・・・？</p>
        <p>①の答え</p>
        <p>
            <?php if($port_numbers=="80"){
                echo "正解!";
            }else{
                echo "残念・・・";
            }
                ?>
        </p>

        <p>②の答え</p>
        <p>
            <?php if($language=="HTML"){
                echo "正解!";
            }else{
                echo "残念・・・";
            }
                ?>
        </p>

        <p>③の答え</p>
        <p>
            <?php if($command=="select"){
                echo "正解!";
            }else{
                echo "残念・・・";
            }
                ?>
        </p>
    </div>
</body>