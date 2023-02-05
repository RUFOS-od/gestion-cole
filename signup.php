<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="signin.css">


    <!-- Bootstrap core CSS -->

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
</head>

<body class="text-center">

    <main class="form-signin">
        <form action="signup-check.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <h1 class="h3 mb-3 fw-normal">sign Up</h1>

            <div class="form-floating">
                <label for="floatingInput">Name</label>
                <?php if (isset($_GET['name'])) { ?>
                <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
                <?php }else{ ?>
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name"><br>
                <?php }?>

            </div>
            <div class="form-floating">
                <label for="floatingInput">User Name</label>
                <?php if (isset($_GET['uname'])) { ?>
                <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
                <?php }else{ ?>
                <input type="text" name="uname" class="form-control" id="floatingInput" placeholder="User Name"><br>
                <?php }?>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="re_Password">
                <label for="floatingPassword">Re_Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
            <a href="index.php" class="ca">Already have an account?</a>

            <p class="mt-5 mb-3 text-muted">&copy; 2023 Rufos</p>
        </form>
    </main>



</body>

</html>