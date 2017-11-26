<!doctype html>

<html lang="{{ app()->getLocale() }}">
<head>
    @include('includes.head')
    <title>FitTaste - Die Rezeptplattform für eine gesunde Ernährung</title>
</head>
<body id="startseite">
@include('includes.header')
<div class="subhead">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="title">
                    <h1><b>Die Rezeptplattform für <br>eine gesunde Ernährung</b></h1><br>
                    <p class="iconnav glyphicon glyphicon-ok"><p style="margin-left: 30px; margin-top: -34px;">Erfolgreicher als jede Diät</p></p>
                    <p class="iconnav glyphicon glyphicon-ok"><p style="margin-left: 30px; margin-top: -34px;">Egal ob Abnehmen, gesund ernähren oder mehr Lebensqualität</p></p>
                    <p class="iconnav glyphicon glyphicon-ok"><p style="margin-left: 30px; margin-top: -34px;">FitTaste hilft Ihnen dabei, ihre Ziele umzusetzen</p></p>
                    <br>
                    <p><a class="btn btn-primary btn-lg" href="#registrieren" role="button">Jetzt registrieren!</a></p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>

</div>
<!-- Statistiken -->
<section class="statistik">
    <div class="center-container">
        <div class="center-row"">
            <div class="col-md-4 s1">
                <img style="text-align: center;" src="../media/recipe.png" alt="recipe">
                <h2>Wir stellen dir Rezepte zur Verfügung</h2>
            </div>
            <div class="col-md-4 s2">
                <img style="text-align: center;" src="../media/cereal.png" alt="recipe">
                <h2>Du wählst deine leckeren Rezepte aus</h2>

            </div>
            <div class="col-md-4 s3">
                <img style="text-align: center;" src="../media/strong.png" alt="recipe">
                <h2>Du hast mehr vom Leben und lebst gesünder</h2>
            </div>
        </div>
    </div>
</section>



<section class="persona">
    <div class="container">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <img src="media/Frank1.jpg" alt="persona1">
                <img src="media/Frank2.jpg" alt="persona2">
            </div>
            <div class="col-md-6">
                <br><br>
                <div class="title">
                    <h3><b>Frank, 30</b></h3>
                    <br>
                    <p>Ich konnte und wollte nicht wahrhaben, dass ich das auf den Bildern sein sollte. Ein Blick in den Spiegel sagte mir, dass ich etwas ändern musste
                        und nicht mehr so weiterleben konnte. Ich ernährte mich größtenteils von Tiefkühl- und Fertigprodukten und war sehr unsportlich. Dann stieß
                        ich auf FitTaste und habe durch die zahlreichen Rezepte gelernt erfolgreich abzunehmen, ohne hungern zu müssen. Ich kann FitTaste nur jedem empfehlen, der
                        gesund und langfristig abnehmen möchte</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Tabelle-->
<section class="features">
    <h2 style="text-align: center">Testen Sie kostenlos unsere Rezepte</h2>
    <p class="textcenter">Sie können zunächst unsere Rezepte kostenlos testen. Danach haben Sie die Möglichkeit sich als Premium Benutzer zu registrieren. <br>In der untenstehenden Tabelle sehen Sie die Vorteile die Sie als Premium Benutzer erhalten. </p>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Information</th>
                <th style="text-align: center;">Kostenloser Benutzer</th>
                <th style="text-align: center;">Premium Benutzer</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Sie erhalten unsere kostenlosen Rezepte</td>

                <td style="text-align: center;"><span class="glyphicon glyphicon-ok green" ></span></td>
            </tr>
            <tr>
                <td>Sie erhalten alle unserer Rezepte</td>
                <td></td>
                <td style="text-align: center;"><span class="glyphicon glyphicon-ok green"></span></td>
            </tr>
            <tr>
                <td>Sie können Rezepte als Favoriten speichern</td>
                <td></td>
                <td style="text-align: center;"><span class="glyphicon glyphicon-ok green"></span></td>
            </tr>
            <tr>
                <td>Sie können Rezepte bewerten </td>
                <td></td>
                <td style="text-align: center;"><span class="glyphicon glyphicon-ok green"></span></td>
            </tr>
            <tr>
                <td>Sie können ihre eigenen Rezepte erstellen</td>
                <td></td>
                <td style="text-align: center;"><span class="glyphicon glyphicon-ok green"></span></td>
            </tr>
            </tbody>
        </table>
            </div>
            <div class="col-md-2"></div>
        </div>
        <a name="registrieren"></a>
    </div>
    <br><br>

</section>

@include('includes.contactform')

@include('includes.footer')
</body>
</html>