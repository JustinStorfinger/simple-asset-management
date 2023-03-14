<?php
    $actionAlert = "";
    $action = "";

    session_start();

    if($_GET['action'] === "logout") {
        session_start();
        session_destroy();
        $actionAlert = "
        <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
            <div class=\"d-flex\">
                <div>
                    <!-- SVG icon from http://tabler-icons.io/i/check -->
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-check\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                    <path d=\"M5 12l5 5l10 -10\"></path>
                    </svg>
                </div>
                <div>
                    <h4 class=\"alert-title\">Successful!</h4>
                    <div class=\"text-muted\">You have been logged out!</div>
                </div>
            </div>
            <a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>
        </div>
        ";
    } 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Sign in :: Simple Asset Management</title>
        <!-- CSS files -->
        <link href="../assets/css/tabler.min.css?1674944402" rel="stylesheet"/>
        <link href="../assets/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
        <link href="../assets/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
        <link href="../assets/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
        <link href="../assets/css/demo.min.css?1674944402" rel="stylesheet"/>
    </head>
    <body >
        <script src="../assets/js/demo-theme.min.js?1674944402"></script>
        <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <span class="h1">Simple Asset Management</span>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <?php if(isset($actionAlert)) { echo $actionAlert; } ?>
                    <h2 class="h2 text-center mb-4">Login to your account</h2>
                    <form action="./" method="get" autocomplete="off" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">
                                Password
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off">
                                <span class="input-group-text">
                                    <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                            <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                        </svg>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </div>
                    </form>
                </div>
                <div class="hr-text">or</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn w-100">
                                <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                                </svg>
                                Login with Enterprise SSO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Tabler Core -->
        <script src="../assets/js/tabler.min.js?1674944402" defer></script>
        <script src="../assets/js/demo.min.js?1674944402" defer></script>
    </body>
</html>