<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/Fury.css">
    <script src="Jquery/jquery-3.4.1.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="search">
        <form action="./index.php">
            <input type="text" name="query" />
            <button type="submit">Search</button>
        </form>
    </div>

    <div id="big-card">
        <?php foreach ($result as $item) {?>
            <div class="card" >
                <img src="Images/<?=$item['image']?>" height="200px" width="250px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$item['title']?></h5>
                    <p class="card-text"><?=$item['description']?></p>
                </div>
            </div>
        <?php }?>
    </div>


    <div id="ask-name">
        <form action="" method="POST">
            <input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" >
            <button type="submit">Search</button>
        </form>
        <?php
            if (isset($_REQUEST['submit'])){
                $name = $_REQUEST['name'];
                echo $name;
            }
            ?>
    </div>

    <br>
    <br>

    <div id="ask-languages">
        <form action="" method="POST">
            <select name="lang[]" id="" multiple="[]">
                <option> html </option>
                <option> css </option>
                <option> php </option>
                <option> javascript </option>
            </select>
            <button type="submit">Search</button>
        </form>

        <?php
        if(isset($_REQUEST['lang']))
        {
            echo '<span>You know:</span>' . implode('<span>,</span>', $_REQUEST['lang']);
        }
        ?>
    </div>



</body>
</html>