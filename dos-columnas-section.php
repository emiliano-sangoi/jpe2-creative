<!-- Objetivo y Ejes tematicos -->
<?php
    //ejes tematicos:
    $post_ejes_tematicos = get_post(21);
    //programa:
    $post_programa = get_post(27);
?>
<section class="jpe2-bg-lighter-gray p-0 m-0">            
    <div class="row ">
        <!-- Objetivo -->
        <div class="col-xs-12 col-lg-6 mx-auto jpe2-bg-light-purple py-5" id="objetivos">
            <div class="container text-white py-5">

                <h2 class="section-heading font-weight-bold">
                    <?php echo $post_ejes_tematicos ? $post_ejes_tematicos->post_title : "Titulo 2" ?>
                </h2>
                <div class="mt-5">
                    <?php echo $post_ejes_tematicos ? $post_ejes_tematicos->post_content : "Titulo 2" ?>
                </div>
            </div>
        </div>
        <!--Ejes tematicos -->
        <div class="col-xs-12  col-lg-6 mx-auto jpe2-bg-dark-purple py-5" id="ejes-tematicos">
            <div class="container text-white py-5">
                <h2 class="section-heading font-weight-bold">
                    <?php
                    echo $post_programa ? $post_programa->post_title : "Titulo de \"Programa\" no definido";
                    ?>
                </h2>

                <div class="mt-lg-5 mt-md-2" id="programa-content">
                    <?php
                    echo $post_programa ? $post_programa->post_content : "Contenido de \"Programa\" no definido";
                    ?>                            
                </div>
            </div>
        </div>
    </div>
</section>