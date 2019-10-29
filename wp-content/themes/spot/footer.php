 <footer class="footer ">
        <div class="container " style="padding: 10px ">
            <div class="row ">
                <div class="col-sm-3 ">
                    <h4 class="title ">Prati te nas</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit, libero a molestie consectetur, sapien elit lacinia mi.</p>
                    <ul class="social-icon ">
                        <a href="# " class="social "><i class="fa fa-facebook " aria-hidden="true "></i></a>
                        <a href="# " class="social "><i class="fa fa-twitter " aria-hidden="true "></i></a>
                        <a href="# " class="social "><i class="fa fa-instagram " aria-hidden="true "></i></a>
                        <a href="# " class="social "><i class="fa fa-youtube-play " aria-hidden="true "></i></a>
                        <a href="# " class="social "><i class="fa fa-google " aria-hidden="true "></i></a>
                        <a href="# " class="social "><i class="fa fa-dribbble " aria-hidden="true "></i></a>
                    </ul>
                </div>
                <div class="col-sm-3 ">
                    <h4 class="title ">Informacije</h4>
                    <span class="acount-icon ">          
            <a href="# "><i class="fa fa-heart " aria-hidden="true "></i> Moj nalog</a>
            <a href="# "><i class="fa fa-cart-plus " aria-hidden="true "></i> Moja korpa</a>
            <a href="# "><i class="fa fa-user " aria-hidden="true "></i> Profil</a>
            <a href="# "><i class="fa fa-globe " aria-hidden="true "></i> Moje adrese</a>           
          </span>
                </div>

                <div class="col-sm-3 ">
                    <h4 class="title ">Nacin placanja</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <ul class="payment ">
                        <li><a href="# "><i class="fa fa-cc-paypal " aria-hidden="true " style="text-align: center; " ></i></a></li>

                    </ul>
                </div>

                <div class="col-sm-3 ">
                    <h4 class="title ">Moj nalog</h4>
                    <h5>SPOT kolekcija</h5>
                    <h5>Paje Pajica bb</h5>
                    <h5>21000 Novi Sad</h5>
                    <h5>tel. 021 555 555 555</h5>
                    <h5>email@spot.com</h5>

                </div>
            </div>
            <hr>

            <div class="row text-center "> © 2017. Made with by WebsitesWorkshop.</div>



    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
    <script src="js/bootstrap-formhelpers.js "></script>


    <script>
        $(document).ready(function () {
            // Initialize Tooltip
            $('[data-toggle="tooltip "]').tooltip();
        })

        $(document).ready(function () {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, .navbar-footer a, footer a[href='#myPage' ] ").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== " ") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
    
    <?php wp_footer(); ?>
    
</body>

</html>