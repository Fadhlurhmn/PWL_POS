<!DOCTYPE html>
<html>
<head>
<title>CRUD Laravel</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.mi
n.css">

<style>
    body {
        background: linear-gradient(to bottom right, #007bff, #6c5ce7, #ff3f34);
        color: white;
        margin: 0;
        padding: 0;
        height: 100%; /* Tinggi 100% dari viewport */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        width: 100%;
        margin-top: 60px;
        margin-bottom: 60px;
        padding: 20px;
        box-sizing: border-box;
        background-color: rgba(255, 255, 255, 0.521);
        border-radius: 10px;
        box-shadow: 0 0 20px []rgba(0, 0, 0, 0.1);
    }
</style>

</head>
<body>
<div class="container">
@yield('content')
</div>
</body>
</html>