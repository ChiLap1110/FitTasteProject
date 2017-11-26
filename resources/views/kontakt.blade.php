<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('includes.head')
<title>FitTaste - Die Rezeptplattform für eine gesunde Ernährung</title>
</head>
<body id="kon">
@include('includes.header')
<div class="headside">
    <h1>Kontakt</h1>
</div>
<div class="container">
    <div class="row" style="margin-top: -50px;">
        <div class="container second-portion">
                <!-- Boxes de Acoes -->
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3>MAIL</h3>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> aleschne@htwg-konstanz.de
                                    <br>
                                    <br>
                                    <i class="fa fa-globe" aria-hidden="true"></i> chilap@htwg-konstanz.de
                                </p>

                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3>KONTAKT</h3>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> Alexander Schneider
                                    <br>
                                    <br>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> Chi Lap Hong
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="glyphicon glyphicon-road" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3>ADDRESSE</h3>
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> HTWG Konstanz <br>Alfred-Wachtel-Straße 8<br>78462 Konstanz
                                </p>
                            </div>
                        </div>
                        <br><br><br><br><br>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="red" style="background-color: #a9a9a9;">
    <div class="container">
            <div class="row" style="margin-top: 80px;">
        <div class="col-sm-12" id="parent">
            <div class="col-sm-6">
                <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10747.463547637306!2d9.1717968!3d47.6676017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x54038eaf78431d1a!2sHochschule+f%C3%BCr+Technik%2C+Wirtschaft+und+Gestaltung+Konstanz!5e0!3m2!1sde!2sde!4v1511557110947" allowfullscreen></iframe>
            </div>

            <div class="col-sm-6">
                <form action="/benachrichtigungSpeichern" class="contact-form" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                    </div>


                    <div class="form-group form_left">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="betreff" name="betreff"  maxlength="10" placeholder="Betreff" required="">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-contact" rows="5" id="comment" name="nachricht" placeholder="Schreiben Sie eine Nachricht." required=""></textarea>
                        <br>
                        <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Abschicken </button>
                    </div>
                </form>
                <br><br><br><br>
            </div>
        </div>
    </div>
        </div>
    </div>

@include('includes.footer')

</body>
</html>