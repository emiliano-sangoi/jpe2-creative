
    
        <footer id="footer" class=" py-5 text-white jpe2-bg-dark-purple">
            <div class="container my-1 py-2">
                <!--                
                <h1 class="text-center">Footer ?</h1>
                -->
                <div class="footer-content">
                    <?php
                    $logo_fich = get_template_directory_uri() . "/img/logo-fich.png";
                    $logo_unl = get_template_directory_uri() . "/img/logo-unl.png";
                    ?>
                    <a href="http://fich.unl.edu.ar" target="blanck">
                        <img class="" src="<?php echo $logo_fich; ?>" class="center-block" />
                    </a>
                    <a href="http://www.unl.edu.ar/" target="blanck">
                        <img class="" src="<?php echo $logo_unl; ?>" class="center-block" />
                    </a>

                </div>                

            </div>
        </footer>

        <!--CDN de popper.js-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>-->

        <?php wp_footer(); ?>

    </body>
</html>