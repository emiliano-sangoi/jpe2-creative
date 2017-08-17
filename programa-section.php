<?php
    //Programa
    $post_programa = get_post(27);

/*
 * El contenido "crudo" de esta seccion se encuentra en: content/antecedentes.html
 */
?>

<section class="jpe2-bg-beige" id="programa">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="section-heading jpe2-text-dark-purple font-weight-bold text-center">
                    <?php
                    echo $post_programa ? $post_programa->post_title : "Titulo de \"Programa\" no definido";
                    ?>
                </h1>

                <div class="mt-lg-5 mt-md-2" id="programa-content">
                    <?php
                    echo $post_programa ? $post_programa->post_content : "Contenido de \"Programa\" no definido";
                    ?>                            
                </div>                        
            </div>
        </div>
    </div>
</section>