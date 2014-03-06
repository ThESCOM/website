<!DOCTYPE html>
<!-- Das ist html5-style. HTML5 ist abwärtskompatibel -->
<!-- http://css3-html5.de/html5-workshop-tutorial/ -->
<!-- font-squirrel: fontsquirrel.com -->
<html lang="en">
    <?php include("meta.php") ?>
    <body>
        <?php include("header.php") ?>

        <?php include("nav.php") ?>

        <div id="private">

            <article class="info-box-horizontal">
            <h4>Kontaktieren Sie mich</h4>
            <p><mark>Name:</mark> Max Oberberger</p>
            <p><mark>Email:</mark> max@thescom.de</p>
            <p><mark>Tel:</mark> +49 17625687735</p>

                <p><input type="text" name="Titel"/></p>
                <p><input type="email" name="Email"/></p>
                <p><textarea rows="4" cols="40"></textarea></p>
            </article>
        </div>

        <?php include("footer.php") ?>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
