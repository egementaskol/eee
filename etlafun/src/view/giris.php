<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    <?php
    include "css/giris.css";


    ?>
</style>




<body>

    <main class="a">
        <br>
        <p>ETLAFUN HALIYIKAMA YÖNETİM SİSTEMİ</p>
        <form action="requres.php" method="post" class="a">
            <label for="" class="a">kulanıçı ad</label>
            <br>
            <input type="text" name="ad" class="a" id="a1">
            <br>
            <label for="" class="a" id="ll">kulanıçı şifre</label>
            <br>
            <input type="text" name="sifre" class="a" id="a2">
            <br>
            <button type="submit" class="a" name="tık"> giris</button>
        </form>


    </main>



    <script type="text/javascript">
        <?php
        require_once("mvc/view/js/BB.js");

        ?>
    </script>

</body>

</html>