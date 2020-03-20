<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login | Admin</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center" style="margin-top: 10%;">
            <div class="card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="card-title mb-5">
                        <p class="display-4" style="font-size: 50px;">Login Administrator</p>
                        <h6><?= validation_errors(); ?></h6>
                    </div>
                    <form action="<?= base_url('login/do_login') ?>" method="post">
                        <div class="form-group">
                            <label for="">Username : </label>
                            <input type="text" name="username" id="" class="form-control">
                            <h6><?= form_error('username'); ?></h6>
                        </div>
                        <div class="form-group">
                            <label for="">Password : </label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <input type="submit" value="Login" class="btn btn-outline-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
