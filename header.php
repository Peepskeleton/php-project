<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Project 01</title>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <a href="login.php">Login Form</a>
        <a href="register.php">register Form</a>

</head>
<body>
<header>
<nav>

    <div class="wrapper">
    <li><a href="index.php">Home</a><li>
    <li><a href="discover.php">About us</a></li>
    <li><a href="blog.php">Find Blogs</a></li>
    <li><a href="signup.php">Sign up</a></li>
    <li><a href="login.php">Log in</a></li>

</nav>
        <section class="index-intro">
            <h1> This is an introduction</h1>
            <p>Here is an important paragraph</p>
</section>
<div>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/E-mail...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="login-submit">Login</button>
<a href="signup.php">signup</a>
<form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">logout</button> 
</div>
</header>


<section class="index-categories">
    <h2>This are the categories</h2>
    <div class="index-categories-list">
</section>
</body>
</html> 