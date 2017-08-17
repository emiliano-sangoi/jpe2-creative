<?php
    //Contacto
    $post_contacto = get_post(30);

/*
 * El contenido "crudo" de esta seccion se encuentra en: content/antecedentes.html
 */
?>

<section class="jpe2-bg-light-purple text-white" id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1 class="section-heading font-weight-bold text-center">
                    <?php
                    echo $post_contacto ? $post_contacto->post_title : "Titulo de \"Contacto\" no definido";
                    ?>
                </h1>

                <div class="mt-lg-5 mt-md-2 text-center" id="contacto-content">
                    <?php
                    echo $post_contacto ? $post_contacto->post_content : "Contenido de \"Contacto\" no definido";
                    ?>                            
                </div>                        
            </div>
        </div>
    </div>
</section>        