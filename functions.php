<?php
// Inclussão do Arquivo para menu responsivo
require_once get_template_directory(). '/inc/wp-bootstrap-navwalker.php';
// Carregamento de Css e js
function load_scripts()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
    wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css');
    wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
    wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/style.css');

    wp_register_script('jquery-tow', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array('jquery-tow'), null, true );
    wp_enqueue_script('bootstrap-bundle-min', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery-tow'), null, true);
    wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/assets/vendor/jquery-sticky/jquery.sticky.js', array('jquery-tow'), null, true);
    wp_enqueue_script('venobox-min', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery-tow'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-tow'), null, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

//Habilitar Imagens de destaque
add_theme_support('post-thumbnails');

//Habilitar Logomarca Customizada
add_theme_support('custom-logo', array(
    'flex-width' => true,
));


//  Registro de Menus 
register_nav_menus(
    array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu',
        'service_menu' => 'Service Menu',
        
    )
);

// Registro de Sidebars e Widgets
function blog_sidebars(){
    register_sidebar(
        array(
            'name' => ('Endereço Rodapé'),
            'id'   => 'footer-address',
            'description' => ('Adicione suas Informações de Enderecços'),
            'before_widget' => '<p>',
            'after_widget' => '</p>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',

        )
    );
    register_sidebar(
        array(
            'name' => ('Adicione contato'),
            'id'   => 'top-bar',
            'description' => ('Adicione suas Informações de Enderecços'),
            'before_widget' => ' <li>',
            'after_widget' => ' </li>',
            // 'before_title' => '<h3>',
            // 'after_title' => '</h3>',

        )
    );
    // Barra lateral
    register_sidebar(
        array(
            'name' => ('Barra Lateral'),
            'id'   => 'sidebar-right',
            'description' => ('Adicione Widgets na Barra Lateral'),
            'before_widget' => '<div class="sidebar-item categories"><ul><li><a href="#">',
            'after_widget' => '</a></li></ul></div>',
            'before_title' => '<h3 class="sidebar-title">',
            'after_title' => '</h3>',

        )
    );
    // Tags
    register_sidebar(
        array(
            'name' => ('Tags'),
            'id'   => 'sidebar-tags',
            'description' => ('Adicione Tags na pagina de post'),
            'before_widget' => '<div class="sidebar-item tags"><ul><li><a href="#">',
            'after_widget' => '</a></li></ul></div>',
            'before_title' => '<h3 class="sidebar-title">',
            'after_title' => '</h3>',

        )
    );
}
add_action('widgets_init', 'blog_sidebars');
// Miniatura de Post
// add_theme_support('post-thumbnails');

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length' );

// topbar