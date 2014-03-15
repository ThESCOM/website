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

            <article class="contact-box">
            <h4>Kontaktieren Sie mich</h4>
            <p><mark>Name:</mark> Max Oberberger</p>
            <p><mark>Email:</mark> max@thescom.de</p>
            <p><mark>Tel:</mark> +49 17625687735</p>

<form action="http://thescom.de/cgi-bin/selfmail.pl" method="post">
    <input type="hidden" name="return" value="http://thescom.de/kontakt.php">
    <input type="hidden" name="delimiter" value=": ">
    <input type="hidden" name="subject" value="Feedback-Formular">

    <input type="text" id="full_name" name="full_name" placeholder="Name*" required oninvalid="this.setCustomValidity('Bitte geben Sie Ihren Namen ein')">

    <input type="email" id="email_addr" name="email_addr" placeholder="Email*" required>

    <input type="text" id="title" name="title" placeholder="Betreff*" required oninvalid="this.setCustomValidity('Bitte geben Sie einen Betreff ein')">

    <textarea rows="4" cols="40" id="message" placeholder="Nachricht*" required oninvalid="this.setCustomValidity('Bitte geben Sie eine Nachricht ein')"></textarea>

    <input type="submit" value="Absenden" />
</form>

            </article>
        </div>

        <?php include("footer.php") ?>
    </body>
</html>
