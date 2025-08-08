<?php

    include 'src/php/htaccess.php';
    require __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <meta name="adopt-website-id" content="74455c82-7e97-4610-9865-f84b936b0467" />
    <script src="//tag.goadopt.io/injector.js?website_code=74455c82-7e97-4610-9865-f84b936b0467" class="adopt-injector"></script>


    <link rel="icon" href="<?php echo $url?>src/images/favicon.png" type="image/png">

    <link rel="stylesheet" href="<?php echo $url?>src/css/style.css?<?php echo time(); ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M7BS75ND8X"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-M7BS75ND8X');
    </script>
    

</head>
  <body>

    <header class="slider-navbar home">
        <?php include 'components/#header.php'; ?>
        <?php if( empty($link[0]) ){ include 'components/#slider.php'; } ?>
    </header>

    <main>
        <?php include $paginaExibi; ?>
    </main>

    <?php 

    $pagesNoExibir = ['torre-master'];
    
    if( !in_array($link[0], $pagesNoExibir) ){
        include 'pages/contato.php'; 
    }
    ?>
    
    <footer>
        <?php include 'components/#footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 80) {
                $('.navbar').removeClass('navbar-transparent').addClass('navbar-black');
            } else {
                $('.navbar').removeClass('navbar-black').addClass('navbar-transparent');
            }
        });
    </script>
  </body>
</html>