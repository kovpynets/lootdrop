<footer class="footer fixed-bottom <?php if($date > $date_soonFix){ echo 'footer-run';}elseif($date < $date_soonFix){echo 'footer-soon';}; ?>">
    <div class="footer_social">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="f-book-500 text-center text-uppercase"><?= $langInside['tagline_join_social'] ?></h4>
                    <nav class="navbar footer-hyperx navbar-expand-sm justify-content-center scrolled">
                        <ul class="navbar-nav footer-navbar-nav">
                            <li class="nav-item">
                                <a onclick="dataLayer.push({'event': 'GAevent','eventCategory':  'Social-block','eventAction': 'Social-block-share','eventLabel': 'fb',});" target="_blank" href="<?= $lang['fb'] ?>" class="nav-link"><img class="soc-svg" src="/assets/img/fb.png"></a>
                            </li>
                            <li class="nav-item">
                                <a onclick="dataLayer.push({'event': 'GAevent','eventCategory':  'Social-block','eventAction': 'Social-block-share','eventLabel': 'yt',});" target="_blank" href="<?= $lang['yt'] ?>" class="nav-link"><img class="soc-svg" src="/assets/img/yt.png"></a>
                            </li>
                            <li class="nav-item">
                                <a onclick="dataLayer.push({'event': 'GAevent','eventCategory':  'Social-block','eventAction': 'Social-block-share','eventLabel': 'in',});" target="_blank" href="<?= $lang['in'] ?>" class="nav-link"><img class="soc-svg" src="/assets/img/in.png"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3 my-auto f-b1">
                    <a target="_blank" href="https://hyperx.com"><img src="/assets/svg/hx_logo.svg" alt="hyperx.com"></a>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-6 my-auto copyright f-b2 text-center">
                    <p>Copyright © 2022 HP - All rights reserved.</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 my-auto subscribe_center f-b3"><a style="font-family: 'RBNo3.1';" class="text-uppercase hre-f" href="https://hyperx.com">hyperx.com</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script type="text/javascript">
    jQuery( document ).ready(function() {
        jQuery('.navbar-collapse a').click(function(){
            jQuery('.navbar-collapse').css('height', '0');
            jQuery('.navbar-collapse').removeClass('show');
        });
    });

</script>

<style>
    .messages_cookies {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        height: auto;
        overflow: hidden;
        background-color: white;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        color: #666;
        padding: 15px 0;
        font-size: 12px;
    }
    .messages_cookies-wrp {
        position: relative;
        width: 80%;
        margin: 0 auto;
        font-family: 'Roboto', sans-serif;
    }
    .messages_cookies-close {
        position: absolute;
        top: 0;
        bottom: 0;
        right: -20px;
        display: inline-block;
        width: 16px;
        height: 16px;
        margin: auto 0;
        background: url(/assets/img/сlose.png) 0 0 no-repeat;
    }
</style>

<script>
    $(document).ready(function(){
        $('.messages_cookies-close').click(function(){
            $('.messages_cookies').hide(100);
            document.cookie = "messages_cookies=true; max-age=31556926";
            return false;
        });
    });
</script>
<script>
    $(document).ready(function(){
        setTimeout(function(){
            window.scrollTo(0, 0);
        }, 1);
    });
</script>

<?php if (empty($_COOKIE['messages_cookies'])): ?>
    <div class="messages_cookies">
        <div class="messages_cookies-wrp">
            <a href="#" class="messages_cookies-close"></a>
            This site uses cookies to provide enhanced features and functionality. By using the site, you are consenting to this.
            <a style="color: red" target="_blank" href="https://www.hp.com/us-en/privacy/privacy-central.html">Read more</a> about our cookie policy.
        </div>
    </div>
<?php endif; ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>