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
                <p>Jedes Projekt/Team kommt in der heutigen Zeit nicht mehr um
                Dinge wie <mark>Ticketsystem</mark>, <mark>Versionsverwaltung</mark>
                und <mark>Continuous
                Integration</mark> herum. <mark>Ich biete</mark> Ihnen Unterstützung bei der Auswahl
                sowie der Konfiguration der richtigen Tools.</p>
            </article>
        </div>
        <div>
            <article class="info-box" id="programming">
                <div>
                </div>
                <p><mark>Programmierung</mark> individueller
                Smartphone-Anwendungen, Desktopanwendungen sowie Unterstützung
                Ihres Teams bei Programmiertätigkeiten.
                </p>
            </article>
            <article class="info-box" id="website">
                <div>
                </div>
                <p>Von der Idee ins Internet. <mark>Webseiten</mark> von der
                Programmierung bis zum Hosting, <mark>alles in einer Hand</mark>.</p>
            </article>
            <article class="info-box" id="question">
                <div>
                </div>
            </article>
        </div>

        <?php include("footer.php") ?>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
