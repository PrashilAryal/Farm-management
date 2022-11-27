<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <title>MBO Farm</title>
    @vite(['resources/js/app.js'])
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Rubik+Distressed&display=swap');

    body {
        background-color: #EEF2E6;
        font-family: 'Roboto', sans-serif;
    }

    #navBar {
        background-color: #1C6758;
    }

    .container-fluid>a:hover {
        color: #D6CDA4;
    }

    #adminName {
        font-weight: 800;
        color: #3D8361;
    }

    #adminName:hover {
        cursor: pointer;
        color: #1C6758;
    }

    .navbar-brand {
        color: white;

    }

    .nav-link:hover {
        color: #D6CDA4;
    }

    .content {
        margin-left: 10px;
        margin-top: 10px;
        margin-right: 10px;
    }

    .button {
        background-color: #1C6758;
        color: #EEF2E6;
        border: 1px solid #3D8361;
        border-radius: 5px;
        padding: 8px;
        font-weight: 400;
        font-family: 'Roboto', sans-serif;
    }

    .button:hover {
        background-color: #D6CDA4;
        color: #1C6758;
        font-weight: 800;
    }

    .buttonContainer {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .container-fluid>a {
        font-weight: 500;
        font-family: 'Rubik Distressed', cursive;
        font-size: 50px;
        /* color: purple; */
        /* color: #D6CDA4; */
        color: white;

    }

    .navbar-nav>li>a {
        font-size: 20px;
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
        color: white;
    }

    .navbar-nav>li {
        padding-left: 50px;

    }

    .dashboard>h2 {
        font-weight: 900;
    }

    .p-5 {
        background-color: #BB6464;
        border-radius: 10px;
        font-size: 1.3rem;
        font-weight: 800;

    }

    .pageHead {
        padding: 20px;
        font-size: 40px;
        display: flex;
        justify-content: center;
    }

    #addForm {
        margin-top: 50px;
    }

    .tableData>td>a {
        text-decoration: none;
    }

    label {
        font-size: 1rem;
        font-weight: 600;
    }

    .formLink {
        display: flex;
        justify-content: center;
    }

    .logout {
        padding-left: 50px;
    }

    .formLink>a {
        text-decoration: none;
        color: #D6CDA4;
        padding-left: 5px;
    }

    #formLayout {
        justify-content: center;
        width: 50%;
        margin: auto;
        background-color: #3D8361;
        color: white;
        border-radius: 10px;
        margin-top: 50px;
    }

    #formLayout>h1 {
        padding-top: 30px;
    }

    #formLayout>div>form>button {
        margin-bottom: 30px;
    }

    #formLayout>div>form>div {
        justify-content: center;
    }

    .form-control {
        width: 20rem;
    }

    #formLayout>div>form>div>span {
        background-color: #EEF2E6;
        color: red;
        border: 1px solid #EEF2E6;
        border-radius: 5px;
        padding-left: 5px;
    }
    </style>
</head>


<body>
    <nav id="navBar" class="navbar navbar-expand-lg bg-success">

        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('dashboard')}}">MBO Farm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarNav"> -->
            <div class="d-flex justify-content-centre" id="navbarNav">
                @auth
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('add')}}">Add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('view')}}">View</a>
                    </li>
                    <li class="logout">
                        <a href="{{route('logout')}}">
                            <button class="button" type="submit">Logout</button>
                        </a>
                    </li>
                </ul>

                @endauth
                @guest
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled">Extra</a>
                    </li> -->
                </ul>
                @endguest
            </div>
        </div>
    </nav>
    <!-- Dynamic content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> -->

</body>

</html>