{{-- <?php

session_start();

include("connection.php");
include("function.php");

$user_data = check_login($con);
if (isset($user_data)) {
    $user_name = strtoupper($_SESSION['name']);
} else {
    $user_name = "Login / Singup";
}

?> --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>E-Clinic</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: #fdfffffa;
        }

        .model {
            height: 250px;

            min-width: 4rem;
            max-height: 100%;
            max-width: 100%;
            padding-top: 5%;
        }

        .xy {
            margin-top: 5%;
            transition: 0.2s;
            box-shadow: 0 4px 16px 0 rgba(0, 0, 0, 0.3);
            margin-left: 3.5%;
            border-radius: 2ch;
        }

        .xy:hover {
            background-image: linear-gradient(rgb(255, 255, 255), rgb(225, 243, 245));
            /* background-color:rgb(225, 245, 245); */
            font-size: large;
            font-weight: bold;
            box-shadow: 0 8px 25px 0 rgba(0, 0, 0.5, 0.5);
        }

        @media screen and (max-width: 720px) {
            .xy {
                border: 3px solid black;
                margin-left: 20px;
                box-shadow: 2px 10px 12px rgba(0, 0, 0, 0.5);
                margin-left: 3.5%;
                border-radius: 2ch;
            }

            .model {
                height: 100px;
            }

            body {
                margin-right: 5%;
            }
        }

        @media screen and (max-width: 985px) {
            .xy {

                box-shadow: 2px 10px 12px rgba(0, 0, 0, 0.5);
                margin-left: 3.5%;
                border-radius: 2ch;
            }

            .model {
                height: 150px;
            }
        }
    </style>
</head>

<body>
    <x-Header componentName="E-clinic" />


    <div class="container">
        <div class="row">
            <div class="col-sm xy">
                <div>
                    <div class="container">
                        <div>
                            <img src="img/1.png" class="model">
                        </div>
                        <div>
                            <a href="/routine" class="link"><button type="button" class="btn btn-outline-success my-2">Routin Checkup</button></a>

                            <p class="text">In Routin Checkup we will ask you some questions, and you have to give
                                answers in yes or
                                no ,and then we will prectict a solution for you.
                            </p>

                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm xy">
                <div class="container">

                    <div>
                        <img src="img/2.png" class="model">
                    </div>
                    <div>
                        {{-- <a href="/chat.php" class="link"><button type="button" class="btn btn-outline-success my-2">Talk With Specialist</button></a> --}}
                        <a href="http://localhost:3000" class="link"><button type="button" class="btn btn-outline-success my-2">Talk With Specialist</button></a>
                        <p>BY click on these you can interact with specialist via chat.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-sm xy">
                <div class="container">

                    <div>
                        <img src="img/3.png" class="model">
                    </div>
                    <div>
                        <a href="/labtest.php" class="lin"><button type="button" class="btn btn-outline-success my-2">Lab Test</button></a>

                        <p>Here you can Apply for lab test at the Doorstep.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-sm xy">
                <div class="container">

                    <div>
                        <img src="img/4.png" class="model">
                    </div>
                    <div>
                        <a href="/medicine.php" class="link"><button type="button" class="btn btn-outline-success my-2">Medicine</button></a>
                        <p>Here you can apply for medicine and get it on home delivery.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar fixed-bottom py-0 navbar-light bg-light">
        <div class="container-fluid justify-content-center" style="background-image: linear-gradient(rgb(196, 210, 216), rgb(192, 229, 233));">
            <a class="navbar-brand" href="#">Contect us</a>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>