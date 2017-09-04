<?php
//Sobre las jornadas
$post_sobre_las_jornadas = get_post(8);

/*
 * El contenido "crudo" de esta seccion se encuentra en: content/sobre_las_jornadas.html
 */
?>

<section class="jpe2-bg-white" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="section-heading jpe2-text-dark-purple font-weight-bold text-center">
                    <?php
                    echo $post_sobre_las_jornadas ? $post_sobre_las_jornadas->post_title : "Titulo no definido";
                    ?>
                </h1>

                <div class="mt-lg-5 mt-md-2 text-justify">
                    <?php
                    echo $post_sobre_las_jornadas ? $post_sobre_las_jornadas->post_content : "Contenido no definido";
                    ?>                            
                </div>                        
            </div>
        </div>
    </div>
</section>