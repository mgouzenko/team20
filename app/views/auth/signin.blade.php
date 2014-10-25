@section('body')
<body class="login-page">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN Main Content -->
        <div class="login-wrapper">
            <!-- BEGIN Login Form -->
            <form id="form-login" action="/auth" method="POST">
                <h3>Login to your account</h3>
                <hr/>
                <div class="control-group">
                    <div class="controls">
                        <input name="email" type="email" placeholder="E-mail" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="password" name="password"placeholder="Password" class="input-block-level" />
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value="remember" /> Remember me
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary input-block-level">Sign In</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix text-center">
                    Email: <a href="mailto:pinaksaha@nyu.edu"> Pinak Saha </a> reagaurding any issues.
                </p>
                <p class="clearfix text-center">
                	Thank you.
                </p>
            </form>
            <!-- END Login Form -->
        </div>
        <!-- END Main Content -->

        <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="assets/bootstrap/bootstrap.min.js"></script>
    </body>
@stop