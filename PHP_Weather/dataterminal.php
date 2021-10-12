﻿<!DOCTYPE html>

<!--Dette er siden for å få tilgang til alt i nettsiden min som har med PHP å gjøre-->

<html lang="en" lang="no">
<head>
    <!--Setter bredden på siden til 1, gjør at grids kan bli oppgitt i prosent-->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <!--Gir ÆØÅ-->
    <meta charset="utf-8" />
    <!--Linker extern css sheet-->
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">

    <meta https-equiv="refresh" content="30">

    <!--Website tab icon-->
    <link rel="icon" href="../mainbilder/minilogo.png">
    <title>Henrik Hub</title>
</head>
<body>

    <!--Selve siden er her-->
    <section id="phppage">

        <!--Meny og dropdown meny er her-->
        <div class="header"> <div class="homebtn"> <a href="../../index.html">Henrik's Hub</a></div> </div>

        <div class="header-menu">
            <!--Her er dropdown menyen-->
            <div class="dropdown">
                <button class="dropbtn">Fag</button>
                <div class="dropdown-content">
                    <a href="../undernettsider/teknologiforstaelse/tekno.html">Teknologiforståelse</a>
                    <a href="../undernettsider/404.html">Konsept og koding</a>
                    <a href="../undernettsider/prod-his-form/prod-his-form.html">Historie og prod</a>
                    <a href="../undernettsider/404.html">Naturfag</a>
                    <a href="../undernettsider/404.html">Engelsk</a>
                    <a href="../undernettsider/404.html">Kroppsøving</a>
                    <a href="../undernettsider/404.html">Matte</a>
                </div>
            </div>  

            <div class="dropdown">
                <button class="dropbtn">Annet skolerelatert</button>
                <div class="dropdown-content">
                    <a href="../undernettsider/tverrfaglig/tver-video-main.html">Tverrfaglige videoer</a>
                    <a href="../undernettsider/tverrfaglig/stream.html">Stream</a>
                    <a href="#">Raspi Værstasjon</a>
                </div>
            </div>

        </div>


        <!--Left space og right space gir mellomrommet på sidene-->
        <div class="left-space"></div>
        <div class="right-space"></div>
        <main>

            <!--Her er innholdet på siden -->
            <h2 class="phpmain">Latest image by the raspberry pi</h2>
            <img class="imgPHP" id="Nisse" alt="Loading...">

            <div class="php_paramain">

             <!--Legger inn php (legg inn i databasen og nåværende innhold i databasen)-->
            <?php
            
            include 'Oversikt.php'
             ?>
            </div>

        <script>
            function uuidv4()
            {
                return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                    let r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
                    return v.toString(16);
                });
            }

            document.getElementById("Nisse").src = "https://asvgit.com/tokyo/pi_img/temp.jpg?" + uuidv4();
        </script>



        </main>  
        <div class="footer"><p class="fotp">Henrik made this</p></div>
    </section>

</body>
</html>