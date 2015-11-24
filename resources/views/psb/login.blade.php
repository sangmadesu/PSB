<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/unemi.css') }}">
    <title>Admin Page</title>
</head>

<body>
    <div class="home">
        <h1>Hello Admin!</h1>
        <span>Reeva Admin Page</span>
        <br>
        <br>
        <div class="login">
            <form action="/auth/login" method="post">
                <input type="text" placeholder="Email" name="email">
                <br>
                <input type="password" placeholder="Password" name="password">
                <br>
                <input type="submit" value="Hint!">
            </form>
        </div>
        <br>
        <br>
        <span>Have a problem? please contact to cs@reeva.com</span>
        <br>
        <span>or</span>
        <br>
        <span>Facebook | Twitter | Google+</span>
    </div>
</body>

</html>