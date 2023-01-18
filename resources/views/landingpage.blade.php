<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav> 
            <h1 class="logo">
                <a href="/">Indonesia</a>
            </h1>
            <a href="" class="btn-sign-up">Sign Up</a>
        </nav>
        <div class="header-title">Bali.</div>
        <div class="header-bottom">
            <p class="today-date"><?php echo date('d'); ?><span><?php echo "/ "; echo date('M'); echo date(' Y')?></span></p>
            <ul class="social-media">
                <li><a href="">Youtube</a></li>
                <li><a href="">Github</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Whatsapp</a></li> 
            </ul>
        </div>
    </header>
</body>
</html>