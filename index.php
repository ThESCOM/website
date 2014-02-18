<!DOCTYPE html>
<!-- Das ist html5-style. HTML5 ist abwärtskompatibel -->
<!-- http://css3-html5.de/html5-workshop-tutorial/ -->
<!-- font-squirrel: fontsquirrel.com -->
<html lang="en">
    <?php include("meta.php") ?>
    <body>
        <?php include("header.php") ?>

        <?php include("nav.php") ?>

        <div id="overview">
            <article id="encryption">
                <p>Datensicherheit wird immer wichtiger. <mark>Daten verschlüsseln
                aber wie?</mark>
                Ich helfe Ihnen gerne dabei</p>
            </article>
            <article id="complicated">
            <p>Jedes Projekt/Produkt kommt in der heutigen Zeit nicht mehr um
            Dinge wie <mark>Ticketsystem</mark>, <mark>Versionsverwaltung</mark>
            und <mark>Continuous
            Integration</mark> herum. Ich helfe gerne bei der Auswahl und Konfiguration der richtigen
            Tools und bei der Findung Ihres Entwicklerworkflows.</p>
            </article>
        </div>
        <div>
            <article class="info-box" id="programming">
                <div>
                </div>
                <p><mark>Programmierung</mark></p><p>individueller
                Smartphone-Anwendungen, Desktopanwendungen oder Unterstützung
                Ihres Teams bei Programmiertätigkeiten.
                </p>
            </article>
            <article class="info-box" id="website">
                <div>
                </div>
                <p><mark>Webseiten</mark></p><p>Von der Idee ins Internet. Von der
                Programmierung bis zum Hosting, alles in einer Hand.</p>
            </article>
            <article class="info-box" id="question">
                <div>
                </div>
                <p><mark>Fragen/Probleme</mark></p><p>Fragen zu Computerproblemen? Auf der Suche nach einem
                neuen PC/Laptop?</p>
            </article>
        </div>

        <?php include("footer.php") ?>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
