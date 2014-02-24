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
                <p><mark>Geburtsdatum:</mark> 10.02.1988</p>
                <h3>Projekthistorie</h3>
                <ul>
                    <li><mark>09/13 - 11/13 (Elektroniksystem- und Logistik-GmbH)</mark>
                        <ul>
                            <li>Systemadministrator SuSE</li>
                            <li>Client-Migration von SuSE auf Ubuntu</li>
                            <li>Git-Schulung für das Entwicklerteam</li>
                            <li>Client-Konfiguration mit Puppet</li>
                            <li>Qt-Gui Entwicklung mit C++</li>
                        </ul>
                    </li>
                    <br />
                    <li><mark>03/13 - 08/13 (Linux Information Systems AG)</mark>
                        <ul>
                            <li>Webentwicklugn mit Django</li>
                            <li>Firefox-Plugin Entwicklung</li>
                            <li>OPSI-Paketierung</li>
                            <li>Client-/Serverkonfiguration mit Cfengine2</li>
                        </ul>
                    </li>
                    <br />
                    <li><mark>10/12 - 02/13 (FH-Rosenheim)</mark>
                        <ul>
                            <li>Wetterstation auf Android-Basis mit externer Server Anbindung und Android-Widget zur Sensor-Darstellung</li>
                        </ul>
                    </li>
                    <br />
                    <li><mark>03/12 - 07/12 (FH-Rosenheim)</mark>
                        <ul>
                            <li>Android App (erideaResApp) für das reservieren, buchen und belegen von Stromtankstellen im Auftrag der Eridea</li>
                        </ul>
                    </li>
                    <br />
                    <li><mark>10/11 - 02/12 (Linux Information Systems AG)</mark>
                        <ul>
                            <li>Systemadministration Ubuntu Server</li>
                            <li>Entwicklung mit Python und Perl</li>
                            <li>Paketierung von deb-Paketen</li>
                            <li>Umstellung des Entwicklerworkflows von SVN auf Git</li>
                            <li>Client-/Serverkonfiguration mit Cfengine2</li>
                        </ul>
                    </li>
                    <br />
                    <li><mark>08/10 - 09/11 (Elektroniksystem- und Logistik-GmbH)</mark>
                        <ul>
                            <li>Systemadministrator SuSE</li>
                            <li>Paketierung von rpm-Paketen</li>
                            <li>Integration und Programmierung des Steuerknüppels für einen Kampfjetsimulator (Programmiersprachen: C, C++ -- Hardwarenahe Programmierung)</li>
                        </ul>
                    </li>
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
