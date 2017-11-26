<!--Kontaktformular-->
<section class="kontakt">
            <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="/ContactSave">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="name" class="cols-sm-2 control-label">Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="name" id="name"  placeholder="Geben Sie ihren Namen ein"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="cols-sm-2 control-label">E-Mail</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
                                <input type="email" class="form-control" name="email" id="email"  placeholder="Geben Sie ihre E-Mail ein"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="cols-sm-2 control-label">Betreff</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-star" aria-hidden="true"></i></span>
                                <input type="text" size="30" maxlength=" 50" class="form-control" name="subject" id="subject"  placeholder="Geben Sie ihren Betreff ein"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="cols-sm-2 control-label">Nachricht</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                                <input type="textarea"size="30" maxlength=" 1000" class="form-control" name="message" id="message"  placeholder="Geben Sie ihre Nachricht ein"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <input type="submit"  value="Senden" class="btn btn-primary btn-lg btn-block login-button">
                    </div>
                </form>
            </div>
</section>


