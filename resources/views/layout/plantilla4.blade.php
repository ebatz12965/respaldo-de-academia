<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu Lateral</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"
    />
</head>
<style>
    nav,
    .offcanvas {
        background-color: #1e293b;
    }
    .navbar-toggler {
        border: none;
    }
    .navbar-toggler:focus {
        outline: none;
        box-shadow: none;
    }

    @media (max-width: 768px) {
        .navbar-nav > li:hover {
            background-color: #0dcaf0;
        }
    }

    body{
        background-image: url(https://static01.nyt.com/images/2020/03/14/upshot/14up-colleges-remote/14up-colleges-remote-videoSixteenByNineJumbo1600.jpg);
        background-position:center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

    }
</style>
<body>
@yield('contenido')
</body>
</html>
