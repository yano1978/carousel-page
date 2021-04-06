<? include './components/header.php';?>
<!-- Main content area -->
 <main role="main">
    <div style="background: url(https://i.postimg.cc/3N7wnb75/background.jpg)" class="jumbotron bg-cover text-white">
        <div class="container py-5 text-center">
            <h1 class="display-4 font-weight-bold">
                <span>Explore locations</span>
            </h1>
            <h3 class="banner-title mb-0">The striking setting of our locations have made them popular with many high street brands</h3>
            <a href="#contact" id="btn-contact" role="button" class="btn btn-primary px-5 btn-contact">Create account</a>
        </div>
    </div>
    <div id="carousels">
        <? include './components/carousel.php';?>
    </div>
    <section id="contact">
        <div class="container">
            <? include './components/subscribe.php';?>
        </div>
    </section>
 </main>
<? include './components/footer.php';?>