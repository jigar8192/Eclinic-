<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-0 px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{$title}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Report</a></li>
                        <li><a class="dropdown-item" href="/routine.php">Routine Checkup</a></li>
                        <li><a class="dropdown-item" href="/chat.php">Talk With Specialist</a></li>
                        <li><a class="dropdown-item" href="/labtest.php">Lab Test</a></li>
                        <li><a class="dropdown-item" href="/medicine.php">Get Meds</a></li>
                    </ul>
                </li>
            </ul>
            <a class="nav-link" href="logout.php">
                <button type="button" class="btn btn-outline-dark">
                    Logout
                </button></a>
            <a href="/regi"><button class="btn btn-outline-dark">Registation</button></a>
        </div>
    </div>
</nav>