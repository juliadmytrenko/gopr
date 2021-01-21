<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <style type="text/css">

        .my-jumbotron {
            background-image:url(https://cdn.pixabay.com/photo/2016/12/11/12/02/bled-1899264_960_720.jpg);
            max-width: 100%;
            background-size: cover;
            background-position: center;
            height: 70vh;
            overflow-x:hidden;
        }

        .my-jumbotron-slogan {
            background:  rgba(0, 0, 0, 0.5);

        }

        .my.jumbotron-text {
            letter-spacing: 0.35rem;
        }

        .separator{
            position: relative;
            overflow: hidden;
            padding-bottom: 50px;
            width: 100%;
        }

        .separator::before, .separator::after {
            content: '';
            position: absolute;
        }

        .separator::before{
            bottom: 100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: #6f42c1;
            transform-origin: 100% 100%;
            transform: rotate(-1deg);
        }


    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>

<div id="content" name="content">

    <section class="my-section-jumbotron" id="strona-glowna">
        <div class="jumbotron jumbotron-fluid my-jumbotron d-flex align-items-center">
            <div class="container text-center my-jumbotron-slogan">
                <h1 class="display-4 text-white text-uppercase my-jumbotron-text my-4">GÓRSKIE OCHOTNICZE POGOTOWIE RATUNKOWE <span class="text-primary font-weight-bold"> W CZORSZTYNIE</span> </h1>

            </div>
        </div>
    </section>

    <section class="zagrozenie-lawinowe" id="zag-lawinowe">
        <div class="container my-5">
            <div class="text-center">
                <h2 class="text-uppercase">Zagrożenia <span class="text-danger">Lawinowe</span></h2>
            </div>

            <blochquote class="blochquote text-center">

                <h2> wieje strasznie</h2>
                <!-- Tu trzeba będzie z bazy pobrać -->
                <br><br><br><br><br><br>
            </blochquote>
        </div>
        <div class="separator"></div>
    </section>

    <section class="Opis organizacji" id="opis">
        <div class="container my-5">
            <div class="text-center">
                <h2 class="text-uppercase"> <span class="text-primary">Opis Naszego Pogotowia</span></h2>
            </div>

            <blochquote class="blochquote text-center">

                <h2> Lorem ipsum</h2>

                <br><br><br><br><br><br>
            </blochquote>
        </div>
        <div class="separator"></div>
    </section>


    <section class="rekrutacja" id="rekrutacja">
        <div class="container my-5">
            <div class="text-center">
                <h2 class="text-uppercase"> <span class="text-primary">Jak dostać zostać ratownikiemw naszym pogotowiu</span></h2>
            </div>

            <blochquote class="blochquote text-center">

                <h2> Lorem ipsum</h2>

                <br><br><br><br><br><br>
            </blochquote>
        </div>
        <div class="separator"></div>
    </section>

    <section class="kontakt" id="kontakt">
        <div class="container my-5">
            <div class="text-center">
                <h2 class="text-uppercase"> <span class="text-primary">Kontakt</span></h2>
            </div>

            <blochquote class="blochquote text-center">

                <h2> Lored       m ipsum</h2>

                <br><br><br><br><br><br>
            </blochquote>
        </div>

    </section>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

