
   <?php get_header(); ?>

   
    <!-- karusel -->
    <section id="pocetna">
        <div class="container">
            <div class="row">
                
                <?php 

                    $the_query = new WP_Query( 'showposts=1&category=home-slider' ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="col-xs-12 col-md-12 col-md-4 col-lg-12">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php endif; ?>
                
            </div>
        </div>
    </section>

    <!-- neki text o spotu -->
    <div class="container text-center">
        <div class="col-sm-4">
            <img class="img-responsive img-center" src="img/logo3.png">

        </div>

        <div class="col-sm-8">
            <h3>SPOT</h3>

            <p style="text-align: justify;"> Skoro dve decenije bavljenja zanatskom proizvodnjom, izgradilo je naš stav da ono što stvorimo mora biti spoj ZANATSKOG PRISTUPA IZRADI i KVALITETNIH MATERIJALA. Tako je nastala i <b><u>S P O T</u></b> kolekcija za kućne ljubimce.
                <b><u>S P O T</u></b> kolekcija, koja je spojila dve ljubavi, ljubavi prema našim malim krznenim životnim saputnicima i ljubavi prema zanatstvu. Verujem da uspevamo da stvorimo i da ćemo stvarati lepe i funkcionalne proizvode, za NJIHOVE SNOVE U BOJI, jer oni to zaslužuju !!!</p>
        </div>
    </div>
    </section>
    <!-- proizvodi -->
    <section id="proizvodi ">


        <div class="bg-1 ">
            <div class="container ">
                <div class="row text-center ">
                    <div class="col-sm-4 ">
                        <div class="thumbnail ">
                            <img src="img/jastuk2.jpg " alt="Jastuk " width="400 " height="400 ">
                            <p><strong>Jastuk</strong></p>
                            <p>Vec od</p>
                            <a href="jastuk.html " class="btn "> Vise o jastuku</a>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="thumbnail ">
                            <img src="img/krevet2.jpg " alt="Krevet " width="400 " height="400 ">
                            <p><strong>Lezaljka</strong></p>
                            <p>Vec od</p>
                            <button class="btn " data-toggle="modal " data-target="#myModalKrevet ">Vise o krevetu</button>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="thumbnail ">
                            <img src="img/dusek2.jpg " alt="Dusek " width="400 " height="400 ">
                            <p><strong>Dusek</strong></p>
                            <p>Vec od</p>
                            <button class="btn " data-toggle="modal " data-target="#myModalDusek ">Vise o duseku</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container text-center ">

            <img class="img-responsive img-center " src="img/logo3.png ">
            <h3>SPOT</h3>
            <p><em>Najbolje za vasheg ljubimca</em></p>
            <p>I njima je san jako bitan</p>
        </div>
    </section>
    <!-- proizvodi -->



<?php get_footer(); ?>