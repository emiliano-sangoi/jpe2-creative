<?php

    //habilitar output buffering:
    ob_start();
    
    //incluir encabezado (header.php):
    get_header();

    /*
      # Seccion About del tema original:
      partials/creative-about.html
    */

    # Sobre las jornadas:
    get_template_part('sobre_las_jornadas', 'section');

    /*
      # Seccion Services del tema original:
      partials/creative-services.html
    */

    /*
      Seccion Portfolio del tema original: Contact
      partials/creative-porfolio.html
    */

    # Antecedentes
    get_template_part('antecedentes', 'section');

    /*
      # Seccion Download del tema original:
      partials/creative-download.html
    */

    /*
      Seccion Download del tema original: Contact
      partials/creative-contact.html
    */

    # Ejes tematicos y programa:
    get_template_part('dos-columnas', 'section');

    //Inscripcion
    get_template_part('inscripcion', 'section');

    //Contacto
    get_template_part('contacto', 'section');

    /*
     * El contenido "crudo" de esta seccion se encuentra en: content/antecedentes.html
    */

    //Incluir footer:
    get_footer();

    //Vaciar buffer y retornar contenido:
    echo ob_get_clean();

    
?>