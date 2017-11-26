<div id="header2">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-header ">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="logo" src="media/fittaste_logo_v4_k.png" alt="Fit Taste Logo" width="50">
            </div>

            <!--Navigationsbar-->
            <div class="collapse navbar-collapse pullUp" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li id="home">
                        <a href="/">
                            <p class="response">Home</p>
                        </a>
                    </li>
                        @else
                            <li id="dashboard">
                                <a href="/home">
                                    <p class="response">Home</p>
                                </a>
                            </li>
                        @endguest
                    <li id="erfolg">
                        <a href="/erfolgsgeschichten">

                            <p class="response">Erfolgsgeschichten</p>
                        </a>
                    </li>
                    <li id="kontakt">
                        <a href="/kontakt">

                            <p class="response">Kontakt</p>
                        </a>
                    </li>




                    @guest
                        <li id="login">
                            <a href="/login">
                                <p class="response">Login</p>
                            </a>

                        </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>

    </nav>

</div>




