<? 
    /**
    * Carousels component
    */

    $carousels = array(
        array(
            'id' => '1',
            'name' => 'Harrington',
        ),
        array(
            'id' => '2',
            'name' => 'Cornwall',
        ),
        array(
            'id' => '3',
            'name' => 'Southwell',
        ),
        array(
            'id' => '4',
            'name' => 'Mews',
        ),
        array(
            'id' => '5',
            'name' => 'Kensington',
        )
    );
    foreach ($carousels as $carousel) {
        echo '
            <!-- Carousels -->
                <section class="container-fluid px-0">
                    <h3 class="carousel-title">'.$carousel['name'].'</h3>
                    <div id="carouselIndicators-'.$carousel['id'].'" class="carousel slide" data-ride="carousel">
                        <ol id="carousel-indicators-'.$carousel['id'].'" class="carousel-indicators"></ol>
                        <div id="carousel-inner-'.$carousel['id'].'" class="carousel-inner"></div>
                        <a class="carousel-control-prev" href="#carouselIndicators-'.$carousel['id'].'" role="button" data-slide="prev">
                            <div class="wrapper-icons">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </div>
                                <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators-'.$carousel['id'].'" role="button" data-slide="next">
                        <div class="wrapper-icons">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </div>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>
            <!-- END: Carousels -->
        ';
    }
?>