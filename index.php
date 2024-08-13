<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FleetControl Login</title>
        <link rel="stylesheet" href="/public/css/styles.css">
        <link rel="shortcut icon" href="/public/favorite.ico" type="image/x-icon">
        <script src="/public/js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
        <div class="container text-center">
            <div class="row">
                <h1>Welcome to FleetControl</h1>
            </div>
        </div>
    </header>
        <div class="row">
            <div class="col-4" id="img">
                <img class="img-fluid" src="public/img/Truck_368x368.jpg" alt="image of a truck">
            </div>
            <div class="col-8" id="content">
                <hr>
                <h2>FleetControl</h2>
                <hr>
                <h3>Your Online Vehicle Management System</h3>
                <hr>
                <p>Please log in to view or add information about your vehicles.</p>
                <hr>
                <h1>Log in</h1>
                <div class="login">
                    <form action="/FleetControl/_private/authenticate.php" method="post">
                        <label for="username">
                            <i class="fas fa-user"></i>
                        </label>
                        <input type="text" name="username" placeholder="Username" id="username" required>
                        <label for="password">
                            <i class="fas fa-lock"></i>
                        </label>
                        <input type="password" name="password" placeholder="Password" id="password" required>
                        <input type="submit" value="Login">
                    </form>
                <hr>
            </div>
            <hr>
            <form action="/FleetControl/_private/authenticate.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="submit" value="Login">
            </form>
            <hr>
        </div>
    </article>
    <footer class="bg-dark link-light">
        <div>
            <!-- Social media and contact links. Add or remove any networks. -->
            <ul>
                <li><a href="mailto:paulmsummitt@gmail.com"><img src="https://res.cloudinary.com/dhfzm8v7y/image/upload/v1656777427/images/opened-email-envelope_icon-icons.com_70656_gx2u5j.png" style="color: white" title="e-mail" width="20" height="20">paulmsummitt@gmail.com</a></li>
                <li><a href="https://www.linkedin.com/in/paul-m-summitt/" target="_blank" rel="noopener">
                        <img src="https://res.cloudinary.com/dhfzm8v7y/image/upload/v1656777431/images/LinkedIn_Rounded_icon-icons.com_61573_fhhjjs.png" style="color: white" title="LinkedIn"  width="20" height="20">LinkedIn</a></li>
            </ul>
        <p id="textbottom">&copy; <?php echo date('Y'); ?> Paul M. Summitt</p>
        </div>
    </footer>
    </body>
</html>