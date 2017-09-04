<?php
//Antecedentes:
$post_antecedentes = get_post(16);

/*
 * El contenido "crudo" de esta seccion se encuentra en: content/antecedentes.html
 */
?>

<section class="jpe2-bg-beige pb-lg-5" id="antecedentes">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="section-heading jpe2-text-dark-purple font-weight-bold text-center">
                    <?php
                    echo $post_antecedentes ? $post_antecedentes->post_title : "Titulo no definido";
                    ?>
                </h1>

                <div class="mt-lg-5 mt-md-2 text-justify">               
                    <?php
                    echo $post_antecedentes ? $post_antecedentes->post_content : "Contenido no definido";
                    ?>                            
                </div>                        
            </div>
        </div>        
    </div>    
</section>
<div class="jpe2-bg-beige">
    <?php
    if (function_exists('envira_gallery')) {
        envira_gallery('45');
    }
    ?>
</div>