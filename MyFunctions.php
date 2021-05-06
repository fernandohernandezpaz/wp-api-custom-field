<?php

add_action('rest_api_init', function () {
    register_rest_field('category', 'imagenes', array(
        'get_callback' => function ($category) {
            global $wpdb;
            $sql = 'Select post_name, guid from wp_posts inner join wp_termmeta ' .
                'on wp_posts.ID=wp_termmeta.meta_value ' .
                'where wp_termmeta.term_id=' . $category['id'];
            $baseUrl = get_bloginfo('url');
            $mediaUrl = '/wp-json/wp/v2/media?slug=';
            $imagenes = $wpdb->get_results($wpdb->prepare($sql));
            $imagenes = json_decode(json_encode($imagenes), true);
            $imagenes = array_map(function ($imagen) use ($baseUrl, $mediaUrl) {
                return [
                    'url' => $baseUrl . $mediaUrl . $imagen['post_name'],
                ];
            }, $imagenes);
            return $imagenes;
        },
        'update_callback' => null,
        'schema' => null
    ));
});


