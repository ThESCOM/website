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

<form action="http://thescom.de/cgi-bin/selfmail.pl" method="post">
    <input type="hidden" name="return" value="http://new.thescom.de/kontakt.php">
    <input type="hidden" name="delimiter" value=": ">
    <input type="hidden" name="subject" value="Feedback-Formular">

    <label>* Name:</label>
    <input type="text" id="full_name" name="full_name" placeholder="Name" required>

    <label>* Emailadresse:</label>
    <input type="email" id="email_addr" name="email_addr" required>

    <label>* Betreff:</label>
    <input type="text" id="title" name="title" placeholder="Betreff" required>

    <label>* Text:</label>
    <textarea rows="4" cols="40"></textarea>

    <input type="submit" value="Absenden" />
</form>

            </article>
        </div>

        <?php include("footer.php") ?>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
