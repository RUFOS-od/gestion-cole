<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="signin.css">
</head>

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

<body>

    <main class="form-signin">
        <form action="login.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <!--User name  -->
            <div class="form-floating">
                <input type="text" name="uname" class="form-control" id="floatingInput" placeholder="User Name">
                <label for="floatingInput">User Name</label>
            </div><br>
            <!-- Password -->
            <div class="form-floating">
                <input type="password" name="password" placeholder="Password" class="form-control"
                    id="floatingPassword">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <a href="signup.php" class="ca">Create an account</a>

            <p class="mt-5 mb-3 text-muted">&copy; 2023 Rufos</p>
        </form>
    </main>
</body>

</html>