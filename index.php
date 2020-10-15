<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>reCAPTCHA</title>
    <script src='https://www.google.com/recaptcha/api.js?render=6LesxdcZAAAAAHl9ioEHTgjXtcXFeZq31mILqsYi'></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LesxdcZAAAAAHl9ioEHTgjXtcXFeZq31mILqsYi', {
                    action: 'formulario'
                })
                .then(function(token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
        });
    </script>
</head>

<body>
    <h1 class="header">Prueba reCAPTCHA</h1>
    <div class="main-container">
        <form action="procesar_recaptcha.php" class="form" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" class="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" class="last_name" name="last_name" placeholder="Your Last Name" required>
            </div>

            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            <input type="hidden" name="action" value="process">
            <input type="submit" value="Submit" class="submit" id="submit" name="submit">
        </form>
    </div>

    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>