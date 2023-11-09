<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            font-size: 100%;
            background-image: url(https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHRlY2hub2xvZ3l8ZW58MHwwfDB8fHww&auto=format&fit=crop&w=500&q=60);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 0;
            top: 0;
            left: 0;
            z-index: 1;
            background-color: #111136;
            overflow-x: hidden;
            transition: 0.4s;
            padding: 1rem 0;
            box-sizing: border-box;
        }

        .sidebar .boton-cerrar {
            background-color: #00324b;
            position: absolute;
            top: 0.5rem;
            right: 1rem;
            font-size: 2rem;
            display: block;
            padding: 0;
            line-height: 1.5rem;
            margin: 0;
            height: 32px;
            width: 32px;
            text-align: center;
            
        }

        .sidebar ul, .sidebar li {
            margin: 0;
            padding: 0;
            list-style: none inside;
        }

        .sidebar ul {
            margin: 4rem auto;
            display: block;
            width: 80%;
            min-width: 200px;
        }

        .sidebar a {
            display: block;
            font-size: 120%;
            color: #eee;
            text-decoration: none;
        }

        .sidebar a:hover {
            color: #fff;
            background-color: #f90;
        }

        h1 {
            color: #f90;
            font-size: 180%;
            font-weight: normal;
        }

        #contenido {
            transition: margin-left .4s;
            padding: 1rem;
        }

        .abrir-cerrar {
            color: #2E88C7;
            font-size: 1rem;
        }

       

        #cerrar {
            display: none;
        }
    </style>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            flex-direction: row;
        }

        .sidebar {
            width: 30%;
            height: 100vh;
            background-color: white;
            color: #fff;
            position: fixed;
            border-right: 4px solid #000;
        }

        .content {
            margin-left: 30%;
            padding: 20px;
            max-width: 70%;
        }

        .logo {
            text-align: center;
            margin-top: 20px;
        }

        .logo img {
            height: 80px;
        }

        .description {
            text-align: center;
            
            margin-top: 10px;
        }

        .description p {
            font-size: 15px;
            color: white;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            text-decoration: none;
            
            margin: 10px;
        }

        .contact {
            text-align: center;
            margin-top: 20px;
        }

        .contact a {
            text-decoration: none;
            display: block;
        }

        .login {
            text-align: center;
            margin-top: 20px;
        }

        .login form {
            display: none;
        }

        .profile {
            margin-left: auto;
            margin-right: 20px;
            text-align: right;
        }

        .profile a {
            text-decoration: none;
            color: #333;
            background-color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .date {
            text-align: right;
            margin-top: 10px;
            color: #777;
        }

        .blog-post {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
        }

        .blog-image {
            width: 100px;
            height: 100px;
            margin-right: 20px;
            float: left;
        }

        .blog-title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 0;
        }

        .blog-date {
            font-size: 12px;
            color: #777;
            margin-top: auto;
            text-align: right;
        }

        header {
            text-align: left;
        }

        .profile {
            text-align: left;
        }

        .profile {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div id="sidebar" class="sidebar" style="width: 300px; background-color: #060712; color: white !important;">
        <a href="#" class="boton-cerrar" onclick="ocultar()">X</a>
        <div class="logo">
            <img src="imagenes/logo.jpeg" style="height: 80px;">
        </div>
        <br>
        <div class="description">
            <p>Blog creado con fines informativos. Encontrarás publicaciones correspondientes a la carrera de Ingeniería de Sistemas o actividades que realice la universidad. Además, noticias importantes sobre avances tecnológicos.</p>
        </div>
        <br>
        <br>
        <div class="links">
            <a href="https://www.tiktok.com/@universidadutp" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 290"><path fill="#FF004F" d="M189.72 104.421c18.678 13.345 41.56 21.197 66.273 21.197v-47.53a67.115 67.115 0 0 1-13.918-1.456v37.413c-24.711 0-47.59-7.851-66.272-21.195v96.996c0 48.523-39.356 87.855-87.9 87.855c-18.113 0-34.949-5.473-48.934-14.86c15.962 16.313 38.222 26.432 62.848 26.432c48.548 0 87.905-39.332 87.905-87.857v-96.995h-.002Zm17.17-47.952c-9.546-10.423-15.814-23.893-17.17-38.785v-6.113h-13.189c3.32 18.927 14.644 35.097 30.358 44.898ZM69.673 225.607a40.008 40.008 0 0 1-8.203-24.33c0-22.192 18.001-40.186 40.21-40.186a40.313 40.313 0 0 1 12.197 1.883v-48.593c-4.61-.631-9.262-.9-13.912-.801v37.822a40.268 40.268 0 0 0-12.203-1.882c-22.208 0-40.208 17.992-40.208 40.187c0 15.694 8.997 29.281 22.119 35.9Z"/><path d="M175.803 92.849c18.683 13.344 41.56 21.195 66.272 21.195V76.631c-13.794-2.937-26.005-10.141-35.186-20.162c-15.715-9.802-27.038-25.972-30.358-44.898h-34.643v189.843c-.079 22.132-18.049 40.052-40.21 40.052c-13.058 0-24.66-6.221-32.007-15.86c-13.12-6.618-22.118-20.206-22.118-35.898c0-22.193 18-40.187 40.208-40.187c4.255 0 8.356.662 12.203 1.882v-37.822c-47.692.985-86.047 39.933-86.047 87.834c0 23.912 9.551 45.589 25.053 61.428c13.985 9.385 30.82 14.86 48.934 14.86c48.545 0 87.9-39.335 87.9-87.857V92.85h-.001Z"/><path fill="#00F2EA" d="M242.075 76.63V66.516a66.285 66.285 0 0 1-35.186-10.047a66.47 66.47 0 0 0 35.186 20.163ZM176.53 11.57a67.788 67.788 0 0 1-.728-5.457V0h-47.834v189.845c-.076 22.13-18.046 40.05-40.208 40.05a40.06 40.06 0 0 1-18.09-4.287c7.347 9.637 18.949 15.857 32.007 15.857c22.16 0 40.132-17.918 40.21-40.05V11.571h34.643ZM99.966 113.58v-10.769a88.787 88.787 0 0 0-12.061-.818C39.355 101.993 0 141.327 0 189.845c0 30.419 15.467 57.227 38.971 72.996c-15.502-15.838-25.053-37.516-25.053-61.427c0-47.9 38.354-86.848 86.048-87.833Z"/></svg>            </a>
            <a href="https://www.instagram.com/universidadutp/?hl=eshttps://www.facebook.com/UTP.Peru/?locale=es_LA" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256"><path fill="#1877F2" d="M256 128C256 57.308 198.692 0 128 0C57.308 0 0 57.307 0 128c0 63.888 46.808 116.843 108 126.445V165H75.5v-37H108V99.8c0-32.08 19.11-49.8 48.347-49.8C170.352 50 185 52.5 185 52.5V84h-16.14C152.958 84 148 93.867 148 103.99V128h35.5l-5.675 37H148v89.445c61.192-9.602 108-62.556 108-126.445"/><path fill="#FFF" d="m177.825 165l5.675-37H148v-24.01C148 93.866 152.959 84 168.86 84H185V52.5S170.352 50 156.347 50C127.11 50 108 67.72 108 99.8V128H75.5v37H108v89.445A128.959 128.959 0 0 0 128 256a128.9 128.9 0 0 0 20-1.555V165h29.825"/></svg>                <br>
            </a>
            <a href="https://www.instagram.com/universidadutp/?hl=es" target="_blank">
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256"><g fill="none"><rect width="256" height="256" fill="url(#skillIconsInstagram0)" rx="60"/><rect width="256" height="256" fill="url(#skillIconsInstagram1)" rx="60"/><path fill="#fff" d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604h.031Zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396c0 26.688-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413c0-26.704.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5c3.5-3.5 6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563v.025Zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12v.004Zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355c0 28.361 22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355h.002Zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334c-18.41 0-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334Z"/><defs><radialGradient id="skillIconsInstagram0" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse"><stop stop-color="#FD5"/><stop offset=".1" stop-color="#FD5"/><stop offset=".5" stop-color="#FF543E"/><stop offset="1" stop-color="#C837AB"/></radialGradient><radialGradient id="skillIconsInstagram1" cx="0" cy="0" r="1" gradientTransform="matrix(22.25952 111.2061 -458.39518 91.75449 -42.881 18.441)" gradientUnits="userSpaceOnUse"><stop stop-color="#3771C8"/><stop offset=".128" stop-color="#3771C8"/><stop offset="1" stop-color="#60F" stop-opacity="0"/></radialGradient></defs></g></svg>            </a>
        </div>
        <br>
        <br>
    </div>
</div>

<div id="contenido" style=" justify-content: center; display: flex;" class="content row col-12">
    <div class="col-12">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-3 border-bottom border-primary">
                <a class="navbar-brand"></a>
                <img src="imagenes/logo.jpeg" style="width: 10%">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="" target="_blank">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://example-eight-omega.vercel.app/" target="_blank">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto  </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="profile">
                <a href="#" onclick="mostrar();">Menu </a>
            </div>
            <div class="profile">
            </div>
            <div class="date">20 de agosto del 2023</div>
        </header>
    </div>
    <div class="col-12">
        <div class="container">
            <div class="blog-post">
                <img class="blog-image" src="https://i.ytimg.com/vi/IfM3TpvN2Og/maxresdefault.jpg" style="width: 680px; height: 340px"><br>
                <div>
                    <h2 class="blog-title">Mi Primer Día en la Universidad</h2>
                    <p>El primer día en la universidad fue emocionante y lleno de expectativas. Conocí a nuevos amigos, exploré el campus y asistí a mi primera clase...</p>
                    <div class="blog-date">20 de agosto del 2023</div>
                </div>
            </div>
            <div class="blog-post">
                <img class="blog-image" src="https://i.ytimg.com/vi/IfM3TpvN2Og/maxresdefault.jpg" style="width: 680px; height: 340px"><br>
                <div>
                    <h2 class="blog-title">Mi Primer Día en la Universidad</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, temporibus magnam? Nulla eaque rem ducimus quae officiis nostrum, qui suscipit blanditiis saepe harum, enim eveniet ut minima dignissimos alias quaerat.</p>
                    <div class="blog-date">20 de agosto del 2023</div>
                </div>
            </div>
            <div class="blog-post">
                <img class="blog-image" src="https://i.ytimg.com/vi/IfM3TpvN2Og/maxresdefault.jpg" style="width: 680px; height: 340px"><br>
                <div>
                    <h2 class="blog-title">Mi Primer Día en la Universidad</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad rerum odio tenetur nobis minima temporibus repellendus voluptatum atque consectetur eveniet iusto, animi blanditiis unde, maxime error accusantium consequuntur quam architecto.</p>
                    <div class="blog-date">20 de agosto del 2023</div>
                </div>
            </div>
            <div class="blog-post">
                <img class="blog-image" src="imagenes/383684907_980159979761606_393654502069266237_n.jpg" style="width: 380px; height: 340px "><br>
                <div>
                    <h2 class="blog-title">Mi Primer Día en la Universidad</h2>
                    <p>Nuestra comunidad UTP es un verdadero equipo que siempre está listo para superar cualquier reto.💪 Cada uno tiene una habilidad o característica única. Cuéntanos quién sería tu compañero UTP convocado. ⚽ ⁣</p>
                    <div class="blog-date">20 de agosto del 2023</div>
                </div>
            </div>
            <!-- Agrega más publicaciones de blog aquí -->
        </div>
    </div>
</div>

<script>
    function showContact() {
        var contactNumbers = document.getElementById("contactNumbers");
        if (contactNumbers.style.display === "none") {
            contactNumbers.style.display = "block";
        } else {
            contactNumbers.style.display = "none";
        }
    }

    function showLogin() {
        var loginForm = document.getElementById("loginForm");
        if (loginForm.style.display === "none") {
            loginForm.style.display = "block";
        } else {
            loginForm.style.display = "none";
        }
    }
</script>

<script>
    function mostrar() {
        document.getElementById("sidebar").style.width = "300px";
        document.getElementById("contenido").style.marginLeft = "300px";
        document.getElementById("abrir").style.display = "none";
        document.getElementById("cerrar").style.display = "inline";
    }

    function ocultar() {
        document.getElementById("sidebar").style.width = "0";
        document.getElementById("contenido").style.marginLeft = "0";
        document.getElementById("abrir").style.display = "inline";
        document.getElementById("cerrar").style.display = "none";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
