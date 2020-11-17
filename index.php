<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>De After</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper vh-100 d-flex align-items-end">
        <video autoplay muted loop class="background">
            <source src="background.mp4" type="video/mp4">
        </video>
        <div class="logo-container">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-white mb-5">
                    <div id="typed-strings">
                        <p>
                            <b>De After</b><br>
                            <br>
                            Een 7 uur durende after vol chille muziek, activiteiten, sociale interactie en gezelligheid. En dat allemaal vanuit je eigen woonkamer!<br>
                            <br>
                            Blijf op de hoogte via het <u><a class="text-white" href=https://www.facebook.com/events/373651393852697>Facebook evenement</a></u>.<br>
                            <br>
                            <b>Contact:</b><br>
                            <u><a class="text-white" href="mailto:info@de-after.nl">info@de-after.nl</a></u>
                        </p>
                    </div>
                    <div id="typed" class="font"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script>
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            smartBackspace: false,
            typeSpeed: 10,
        });
</script>
</body>
</html>
