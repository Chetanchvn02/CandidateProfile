
<?php
function load_stylesheet(){

    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');


if(isset($_POST['submitBtn'])){

    global $wpdb;
    
    $data = array(
        'firstname'         => $_POST['firstname'],
        'lastname'          => $_POST['lastname'],
        'gender'            => $_POST['gender'],
        'email'             => $_POST['email'],
        'phone'             => $_POST['phone'],
        'state'             => $_POST['state'],
        'city'              => $_POST['city'],
        //'image'             => $_POST['image'],
        'graduation'        => $_POST['graduation'],
        'grade'             => $_POST['grade'],
        'year'              => $_POST['year'],
        'specialization'    => $_POST['specialization'],
        'college'           => $_POST['college'],
        'primary_skill'     => $_POST['primary_skill'],
        'secondary_skill'   => $_POST['secondary_skill'],
        'certification'      => $_POST['certification'],
        'pitch'             => $_POST['pitch'],
        
    );

    $table_name = 'profile';

    $result = $wpdb->insert($table_name, $data, $format=NULL);

    if($result == 1){
        echo "<script> alert('saved'); </script>";
    }else{
        echo "<script> alert('not saved'); </script>";
    }
}

?>