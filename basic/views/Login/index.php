<?php
/**
 * Created by PhpStorm.
 * User: alosha
 * Date: 11/25/17
 * Time: 3:49 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Stemukr01</title>
    <meta name="description" content="CSS Grid Real Example">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <style>body { opacity: 1; overflow-x: hidden; } html { background-color: #fff; }</style>

</head>
<body>

<header class="main-header grid" style="background-image: url(img/Phy.jpg);">
        
        <div class="header-content grid">
            <h1>Welcome to super stemukr01</h1>
            <div class="header-buttons">
                <a href="#login!" class="button">Log in!</a>
                <a href="#" class="button button-gray">Read more</a>
            </div>
        </div>
         <script src="js/scripts.min.js"></script>
    </header>

<section class="formsection">
        <div class="container">
            <a name="login!"></a>
            <form class="grid" action="<?= \Yii::$app->request->url ?>" class="well" method="POST">
                <div><input type="text" name="email" placeholder="Your login" required></div>
                <div><input type="text" name="password" placeholder="Your password"></div>
                <div><input type="text" name="name" placeholder="Special code(for admins)"></div>
                <div><button class="button">Log In</button></div>
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            </form>

        </div>
    </section> 

<? if(isset($failure) && $failure): ?>
    <script>
        $(function() {
            alert("Wrong username of password!")
        })
    </script>
<? endif; ?>



<section class="portfolio-section grid">
        <div class="portfolio-item grid" style="background-image: url(img/1.jpg)"><span>My Dis</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/2.jpg)"><span>Cool MacBook</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/3.jpg)"><span>Cool iMac</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/4.jpg)"><span>Cool Hacking</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/5.jpg)"><span>Cool Bull Shit</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/6.jpg)"><span>Cool WorkSpace</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/7.jpg)"><span>Cool Notebook</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/8.jpg)"><span>Cool Code</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/9.jpg)"><span>Cool Timer</span></div>
        <div class="buttoncase text-center">
            <a href="#" class="button">View Portfolio</a>
        </div>
    </section>

    <section class="section-ready landing-section">
        <div class="container grid">
            
            <div class="ready-left">
                
                <h2>The Coolest system!<br>Fantastic four: Yarik, Alosha, Sofi, Annet</h2>

                <p>А сюди щось цікаве!)</p>
                <p>Ullam eos illum, voluptate necessitatibus laudantium, enim rem sed magni facilis vel praesentium minus? Magnam excepturi distinctio atque sint nam facilis recusandae assumenda quibusdam a. Deleniti, obcaecati dolorum tenetur sunt.</p>

            </div>

            <div class="ready-right">
                
                <img src="img/example.jpg" alt="Example" class="img-responsive">

            </div>

        </div>
    </section>

    

    <section class="landing-section section-blog">
        <div class="container">
            
            <h2>Events</h2>
<!-- ТУТ може бути що-завгодно, (Student events in your city: Kyiv), СОФІЯ - твоє завдання придумати що саме-->

            <div class="blog-home grid">
                
                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/rottenapples.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>Permanent Installation</h4>
                        <p>Rotten Apples: Botanical Models of Diversity and Disease</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/2.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/3.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/4.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/5.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/6.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <div class="buttoncase text-center">
                    <a href="#" class="button">View Blog</a>
                </div>

            </div>

        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-logo">
                We Are Real <span>Creators</span>
            </div>
            <div class="footer-copy">~©~</div>
        </div>
    </footer>
    
    <link rel="stylesheet" href="css/main.min.css">
   


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
