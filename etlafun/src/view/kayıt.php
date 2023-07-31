<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<!-- CSS only -->

<style>
    <?php
    include "css/giris.css";


    ?>
</style>




<body>

    <main class="a">
        <br>
        <p> HALIYIKAMA YÖNETİM SİSTEMİ</p>
        <form action="requres.php" method="post" class="a">
            <label for="" class="a">kulanıçı ad</label>
            <br>
            <input type="text" name="keposta" class="a" id="a1">

            <br>
            <label for="" class="a">eposta</label>
            <br>
            <input type="text" name="kad" class="a" id="a1">

            <br>
            <label for="" class="a">firma ismi</label>
            <br>
            <input type="text" name="kfirma" class="a" id="a1">
            <br>
            <label for="" class="a" id="ll">kulanıçı şifre</label>
            <br>
            <input type="text" name="ksifre" class="a" id="a2">
            <br>
            <button type="submit" class="a" name="submit">giriş</button>
            <br>


           
        </form>


    </main>



    <script type="text/javascript">
        <?php
        require_once("mvc/view/js/BB.js");

        ?>
    </script>

</body>

</html>