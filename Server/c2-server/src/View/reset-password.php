<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DHGift | Reset Password</title>
    <link href="src/View/assets/vendor/bootstrap/css/bootstrap.min.cs" rel="stylesheet">
    <link href="src/View/assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="auth-content">
            <?php if(isset($error)): ?>
                <div class="alert alert-danger" id="error-alert" role="alert">
                    <strong> <?= $error ?> </strong>
                </div>
            <?php endif ?>
            <div class="card">
                <div class="card-body text-center">                   
                    <h6 class="mb-4 text-muted">Reset Password</h6>
                    <form action="/reset" method="POST">
                        <div class="mb-3 text-start">
                            <label for="username" class="form-label">Username</label>
                            <input name="username" type="text" class="form-control" placeholder="Username" required value="<?= $_SESSION['username'] ?>">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-primary shadow-2 mb-4" style="background-color: #fa184b;border: none;" value="Reset">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="src/View/assets/vendor/jquery/jquery.min.js"></script>
    <script src="src/View/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>