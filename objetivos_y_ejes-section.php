<!-- Objetivo y Ejes tematicos -->
<section class="jpe2-bg-lighter-gray p-0 m-0">            
    <div class="row ">
        <!-- Objetivo -->
        <div class="col-xs-12 col-lg-6 mx-auto jpe2-bg-light-purple py-5" id="objetivos">
            <div class="container text-white py-5">
                <?php
                    $post_objetivo = get_post(19);
                ?>
                <h2 class="section-heading font-weight-bold">
                    <?php echo $post_objetivo ? $post_objetivo->post_title : "Titulo 1" ?>
                </h2>
                <div class="mt-5">
                    <?php echo $post_objetivo ? $post_objetivo->post_content : "Titulo 1" ?>
                </div>
            </div>
        </div>
        <!--Ejes tematicos -->
        <div class="col-xs-12  col-lg-6 mx-auto jpe2-bg-dark-purple py-5" id="ejes-tematicos">
            <div class="container text-white py-5">
                <?php
                    $post_ejes_tematicos = get_post(21);
                ?>
                <h2 class="section-heading font-weight-bold">
                    <?php echo $post_ejes_tematicos ? $post_ejes_tematicos->post_title : "Titulo 2" ?>
                </h2>
                <div class="mt-5">
                    <?php echo $post_ejes_tematicos ? $post_ejes_tematicos->post_content : "Titulo 2" ?>
                </div>
            </div>
        </div>
    </div>
</section>