<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css?v=1" rel="stylesheet">

</head>
<style>
    .imagebg {
        background-image: url("img/ensaj.jpg");
    }
</style>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block imagebg"></div>
                    <div class="col-lg-7" style="height: 80vh;">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
                            </div>
                            <form class="user" method="Post" action="Mail.php">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nom" name="nom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Prenom" name="prenom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email">
                                </div>
                                <!--input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block"/-->
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Inscription" onclick="alert();">
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="login.php">Vous avez déja un compte? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script>
        function verify (){
        var pass1 = document.getElementById("pass1");
        var pass2 = document.getElementById("pass2");
        var msg = document.getElementById("msg")
        
        if(pass1.value === pass2.value){
            msg.style.color = 'green';
            msg.value ="identique";
        }else  {
            msg.style.color = 'red';
            msg.value ="non indentique";
        }
    }
    </script>
    <script>
        function alert(){
            alert("Un mail a été envoyer sur votre adresse email")
        }
    </script>

</body>

</html>