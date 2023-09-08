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

        <?php function answer($a,$b){
            if($a==$b){
                echo "正解!";
            }else{
                echo "残念・・・";
            }
        }
        ?>
        
        


        <p><?php echo$my_name; ?>さんの結果は・・・？</p>
        <p>①の答え</p>
        <p>
            <?php answer($port_numbers,"80") ?>
        </p>

        <p>②の答え</p>
        <p>
            <?php answer($language,"HTML") ?>
        </p>

        <p>③の答え</p>
        <p>
            <?php answer($command,"select") ?>
        </p>
    </div>
</body>