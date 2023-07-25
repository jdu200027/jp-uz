<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N5-レベル</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
        defer></script>
    <style>
        .nav-link {
            display: grid;
            width: 100px;
        }
        #contact{
            display: grid;
            grid-template-columns: auto auto auto auto;
        }
        #contact > div {
            margin: 2px;
            text-align: center;
        }
        .kanji_furigana{
            display: none;
        }

        .kanji:hover .kanji_furigana{
            display: inline;
            color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="#">Logo/Brand</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Action</a></li>
                            <li><a href="#" class="dropdown-item">Another action</a></li>
                            <li><a href="#" class="dropdown-item">Anyway</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a href="#" class="dropdown-item">Something</a></li>
                        </ul>
                    </li>
                </ul>
                <form action="app.js" id="form-grammer" class="d-flex">
                    <input type="search" name="" placeholder="Search Grammer..." id="searchGrammer"
                        class="form-control me-2">
                    <button class="submit btn btn-outline-success">Search</button>
                </form>
            </div>
        </div>
        <div id="mobile-form-container"></div>
        <div class="tab-container mt-4">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab">Bunpo</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab">Goi</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab">Kanji</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <div class="accordion" id="n5-bunpo">

                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel"
                aria-labelledby="contact-tab">

                </div>
            </div>
        </div>
    </div>
    <script src="main.js" type="module"></script>
</body>

</html>