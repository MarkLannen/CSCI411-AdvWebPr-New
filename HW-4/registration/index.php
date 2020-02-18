
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>PencilsPencilsPencils</title>
    <link rel="shortcut icon" href="../images/ppp-logo-favicon-20px.png">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="registration.css">

</head>
<body>
<header class="main-header">
    <div>
        <a href="../index.html" class="main-header__brand">
            <img src="../images/ppp-logo-75px.png" alt="Pencils Pencils Pencils logo">
        </a>
    </div>
    <nav class="main-nav">
        <ul class="main-nav__items">
            <li class="main-nav__item">
                <a href="../products/index.html">Products</a>
            </li>
            <li class="main-nav__item">
                <a href="../shopping_cart/index.html">Shopping Cart</a>
            </li>
            <li class="main-nav__item">
                <a href="../login/index.html">Login</a>
            </li>
            <li class="main-nav__item main-nav__item--cta">
                <a href="../registration/index.html">Registration</a>
            </li>
        </ul>
    </nav>
</header>

<?php
$title = $_POST['title'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$emailAddress = $_POST['emailAddress'];
?>
<main class="register-page">
    <h1 class="register-title">Welcome to Pencils Pencils Pencils!!!</h1>
    <div class="form-table">
        <table class="form-table">
            <thead>
            <tr><th>Title</th><th>First Name</th><th>Last Name<th>Email Address</th></tr>
            </thead>
            <tbody>
            <tr>
                <?php
                    if(isset($_POST['submit']))
                ?>
                <td><?php echo $title?></td>
                <td><?php echo $firstName?></td>
                <td><?php echo $lastName?></td>
                <td><?php echo $emailAddress?></td>
                
            </tr>
            </tbody>
        </table>


    </div>
</main>



<footer class="main-footer">
    <nav>
        <ul class="main-footer__links">
            <li class="main-footer__link">
                <a href="#">Contact</a>
            </li>
            <li class="main-footer__link">
                <a href="#">Privacy Policy</a>
            </li>
        </ul>
    </nav>
</footer>

</body>

</html>