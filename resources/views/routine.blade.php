<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Routine checkup</title>
    <style>
        .check {
            height: 20px;
            width: 20px;
            margin-right: 10px;
            margin-top: 3px;
            /* margin: 10px 7px 5px 10px; */
        }

        .me {
            margin-top: 20px;
        }

        .si {
            width: 200px !important;
        }

        .res {
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
            font-size: larger;
        }
        #test1{
            font-weight: bolder;
        }
        #info{
            padding-bottom: 5px;
        }
        .xy{
            margin-bottom: 10px;
        }
        
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg container-fluid navbar-light bg-light shadow p-0 px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Routine Checkup</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Report</a></li>
                            <li><a class="dropdown-item" href="/routine_checkup/routine.php">Routine Checkup</a></li>
                            <li><a class="dropdown-item" href="#">Talk With Specialist</a></li>
                            <li><a class="dropdown-item" href="#">Lab Test</a></li>
                            <li><a class="dropdown-item" href="#">Get Meds</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="/routine.php"><label>Go Back</label></a>

            </div>
        </div>
    </nav>
    <div>
        <div class="container my-5">
            <div class="row row-cols-4">
                <div class="col me"><button type="button" class="btn btn-outline-primary d-flex si"><input type="checkbox" class="check" name="value[]" value="45">Sweating</button></div>
                <div class="col me"><button type="button" class="btn btn-outline-primary d-flex si"><input type="checkbox" class="check" name="value[]" value="14">Chills and shivering</button></div>
                <div class="col me"><button type="button" class="btn btn-outline-primary d-flex si"><input type="checkbox" class="check" name="value[]" value="7">Headache</button></div>
                <div class="col me"><button type="button" class="btn btn-outline-primary d-flex si"><input type="checkbox" class="check" name="value[]" value="14">Muscle aches</button></div>
                <div class="col me"><button type="button" class="btn btn-outline-primary d-flex si"><input type="checkbox" class="check" name="value[]" value="3.5">Loss of appetite</button></div>
                <div class="col me"><button type="button" class="btn btn-outline-primary d-flex si"><input type="checkbox" class="check" name="value[]" value="3.5">Irritability</button></div>
                <div class="col me"><button type="button" class="btn btn-outline-primary d-flex si"><input type="checkbox" class="check" name="value[]" value="14">General weakness</button></div>
            </div>
        </div>
    </div>

    <div class="container res">

        <p id="test1"></p>
        <p id="info"></p>
        <p id="info1"></p>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.check').click(function() {
                var text = 0;
                $('.check:checked').each(function() {
                    run = $(this).val();
                    text += parseInt(run);
                    // ($(this).parseInt(val()));
                })
                // text = text.substring(0,text.length-1);
                run1 = "Acording to your choice you have " + text + "% chances to have a fever";
                $('#test1').text(run1);
                info = "A person has a fever if their body temperature rises above the normal range of 98–100°F (36–37°C). It is a common sign of an infection. As a person's body temperature increases, they may feel cold until it levels off and stops rising. People describe this as “chills.”";
                button = "<a href='/chat.php'><button class='btn btn-outline-primary xy'>Talk with Doctors </button></a>";
                $('#info').text(info);
                $('#info1').html(button);
                
                // var count = $("[type='checkbox']:checked").length;
                // $('#test2').val($("[type='checkbox']:checked").length);
            });

        });
    </script>
</body>

</html>