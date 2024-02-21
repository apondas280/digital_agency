<?php session_start();

?>

<!doctype html>
<html lang="en">

    <head>
        <title>login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous" />
    </head>

    <body>
        <header>
            <h1 class="text-center mt-5">User login</h1>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 border border-primary p-3 rounded">
                        <form action="validate_login.php" method="post" class="mb-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter user name or email" />
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" />
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary w-100">

                            <p class="mt-3">
                                Create new account. <a href="sign_up.php">here</a>
                            </p>
                        </form>


                        <?php if (isset($_SESSION['err'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?php echo $_SESSION['err']; ?></strong>
                            <?php unset($_SESSION['err']) ?>
                        </div>
                        <?php elseif (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success" role="alert">
                            <strong><?php echo $_SESSION['success']; ?></strong>
                            <?php unset($_SESSION['success']) ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
    </body>

</html>
