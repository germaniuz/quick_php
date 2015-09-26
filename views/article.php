<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first PHP Blog</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


</head>
<body>
    <div class="container">
     <h1>My first PHP Blog</h1>
     <div>
        <div class="article">
            <h3><?=$article['title']?></h3>
            <em>>Published: <?=$article['date']?></em>
            <p><?=$article['content']?></p>
        </div>
        <footer>
<p>My first PHP Blog <br>Copyrights &copy; 2015
</p>
</footer>
    </div>
</body>
</html>