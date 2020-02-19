
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
<h1 class="register-title-top">Welcome to Pencils Pencils Pencils!!!</h1>
<h3 class="top-h3">(Table generated with a foreach loop)</h3>
<div class="php-table__container">

<?php

if(isset($_POST['submit'])) {
    //print_r($_POST);

    $table = "<table class='php-table'><tr>"; //Manually add in headers
    // Headers
    foreach($_POST as $key => $value){


        if($key != 'submit'){
            $table = $table."<td class='table-row-bgcolor'>".$key."</td>"."<td>".$value."</td>";
        }
        $table = $table."</tr>";
    }
    $table = $table."</table>";
    echo $table;
    }
?>

<?php
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
?>
</div>
<main class="registration-results">
    <h1 class="register-title">Welcome to Pencils Pencils Pencils!!!</h1>
    <h3>(Table generated manually)</h3>
    <div class="table-container">
        <table class="form-table">
            <thead class="table-head">
                <tr><th>Category</th><th>Your Info</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td>Title</td>
                    <td><?php echo $title?></td>
                </tr>
                <tr class="table-row-bgcolor">
                    <td>First Name</td>
                    <td><?php echo $firstName?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $lastName?></td>
                </tr>
                <tr class="table-row-bgcolor">
                    <td>Email Address</td>
                    <td><?php echo $emailAddress?></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<section class="explanatory-section">
    <p>I used the post method in my form and created a php page and put the relative url in to the action
    attribute of the form. </p>
    <p>The first table I built I did manually and just created a variable for each of the form inputs. I then
    added variable in to the appropriate table cell and styled it using css</p>
    <p>The second table I tried to build more dynamically. I wrote an if statement that checked if the 'super global variable' $_POST
    had a value of 'submit' (which meant that my form button had been clicked). For reference I wrote a print_r function that
    passed in the variable as an argument. If it had been clicked, I then looped through the contents of the array
    with a foreach loop and created the html table elements during each iteration of the loop. I started the code,
    but needed to work with Addison Boyer (the CS tutor) to debug it and make it work.</p>
    <p>I've still got some work left to do on the second table in terms of making headers for accessibility and styling
    etc., but I was pleased just to get it to work!</p>
</section>
<div class="footer-container">
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
</div>
</body>

</html>