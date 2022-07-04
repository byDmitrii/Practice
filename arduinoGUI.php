<?php require_once ('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>GUI_LITVINOV_BST2001</title>
    <link rel="stylesheet" href="GUIstyle.css" <?php echo time();?>>
    <!--Styles-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
    <!--BOOTSTRAP-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center ">Графический интерфейс для схемы на Arduino</h1>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div class="inputcoord">
                        <div class="input-field">
                            <form method="POST">
                                <fieldset>
                                    <label for="xcoord" class="text-field__label">Введите координату x</label>
                                    <input name ="xcoordinate" id="xcoord" type="text" class="text-field__input" autocomplete="off"/>
                                    <label for="ycoord" class="text-field__label">Введите координату y</label>
                                    <input name ="ycoordinate" id="ycoord" type="text" class="text-field__input" autocomplete="off"/>
                                    <input id="but" type="button" value="Ввод"/>
                                    <input id="butDB" type="submit" value="Записать в базу данных"/>
                                </fieldset>
                            </form>
                            <a class="tink" href="https://www.tinkercad.com/things/hQlTFFxatrX?sharecode=98aBF2jLYCnK_i-WaOeJbbQMxcBApp0Z7xv3gHQ2mP0">Схема 1</a>
                            <a class="tink" href="https://www.tinkercad.com/things/dqUYQDQ436X?sharecode=dMILrIQwRgna1PUuv-VislWv5neYAxvSwLNCJzjEDh8">Схема 2</a>
                            <a class="tink" href="https://www.tinkercad.com/things/detsjEV5WAA?sharecode=zCcXW4txNcFn8-PqQQP34xuGNP0iHpbqQYI7wL5vcNE">3D макет</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12 col-sm-12">
                    <div>
                        <div class="axis" id="axis_x-3" style="--c: 10; --cx: 1; --cy: 9; --dsize: 10;">
                            <div id="movingblock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="/allscripts.js" <?echo time();?>>
    </script> 
    </body>
</html>