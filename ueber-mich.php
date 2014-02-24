<!DOCTYPE html>
<!-- Das ist html5-style. HTML5 ist abwärtskompatibel -->
<!-- http://css3-html5.de/html5-workshop-tutorial/ -->
<!-- font-squirrel: fontsquirrel.com -->
<html lang="en" class="tut">
    <?php include("meta.php") ?>
    <body>
        <?php include("header.php") ?>

        <?php include("nav.php") ?>

        <div id="private">
            <article class="info-box-horizontal">
            <div id="info-box-horizontal-description">
                <p><mark>Name:</mark> Max Oberberger</p>
                <p><mark>Abschluss:</mark> Bachelor of Science (FH-Rosenheim)</p>
                <h3>Projekthistorie</h3>
                <table>
                    <thead>
                        <tr>
                        <th>Zeitraum</th>
                        <th>Tätigkeit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>2013 - 2014</td>
                        <td>Zu tun</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <img src="media/images/portrait.jpg">
            </div>
            <div id="info-box-horizontal-information">
                <h4>Ich verfüge über:</h4>
                <ul>
                    <li>mehrjährige Erfahrung als
                    <mark>Systemadministrator</mark>
                    mit Linux-Betriebssystemen</li>
                    <li>3 Jahre Erfahrung <mark>Python-Entwicklung</mark></li>
                    <li>2 Jahre Erfahrung in der Virtualisierung mit kvm, drbd und
                    lvm</li>
                    <li>Über 1 Jahr Erfahrung mit Client- und Serverkonfiguration durch
                    CFEngine2</li>
                    <li>Über 1 Jahr Erfahrung mit <mark>Client- und
                    Serverkonfiguration durch puppet</mark></li>
                </ul>
            </div>
            </article>
        </div>

        <?php include("footer.php") ?>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
