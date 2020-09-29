<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/themeLight.css">
    <?php require_once "meta.php"?>
    <?php require_once "script.php"?>
    <title> login</title>
</head>
    <body>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" id="content">
                        <div class="profil">
                            <img src="assets/img/loginpic.png" class="img-circle">
                        </div>
                        <form action="" method="">
                            <div class="form-group input">
                                <label for="email">USER NAME</label>
                                <input type="email" name="" class="form-control" id="form-controlLogin" required>
                                <label for="password" class="password">PASSWORD</label>
                                <input type="password" id="form-controlLogin" name="password" class="form-control">
                                
                                <input type="submit" class="btn btn-block" value="LOGIN" />
                            </div>
                        </form>
                        <samp>FORGOT PASSWORD ? <a href="mailto:josiaslessa1@gmail.com">PLEASE CONTACT YOUR ADMINISTATOR</a>
                        </samp>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </section>
        <script>
            $('#password').password();
        </script>
    </body>
</html>