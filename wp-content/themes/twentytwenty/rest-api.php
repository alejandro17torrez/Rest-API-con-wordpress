<?php 

define("API_URL", "wp/v2");

$filters_default = [
    'sort_order'  => 'desc',
    'post_type'   => 'page',
    'post_status' => 'publish',
];



function get_pages_test()
{
    $pages = get_pages($filters_default);
    return get_custom_page($pages);
}

function get_post_test(WP_REST_Request $request)
{
    $parametros = $request->get_url_params();
    $args = [
        'name' => $parametros['slug'],
        'post_type'   => 'post',
        'post_status' => 'publish',
    ];
    $posts = get_posts($args);
    return get_custom_post($posts);
    
}

function get_custom_page($pages)
{
    $data = [];
    foreach ($pages as &$page) {
        $data["ID"]          = $page->ID;
        $data['post_status'] = $page->post_status;
        $data['post_author'] = $page->post_author;
        $data['post_type']   = $page->post_type;
        $data['post_title']  = $page->post_title;

        // get custom fields
        $custom_fields         = get_fields($page->ID);
        $data['acf'] = $custom_fields;
    }
    return $data;
}

function get_custom_post($posts)
{
    $data = [];
    foreach ($posts as &$post) {
        $data["ID"]          = $post->ID;
        $data['post_type']   = $post->post_type;
        $data['post_title']  = $post->post_title;

        // get custom fields
        $custom_fields         = get_fields($post->ID);
        $data['acf'] = $custom_fields;
    }
    return $data;
}

function get_news()
{
    $noticias = get_noticias();
    $posts = get_posts();
    $json [] = [$noticias, $posts];
    return $json;
}


add_action('rest_api_init', function () {

    register_rest_route(API_URL, '/consulta-pages', [
        'methods'  => 'GET',
        'callback' => 'get_pages_test',
    ]);

    register_rest_route(API_URL, '/consulta-posts/(?P<slug>[a-zA-Z0-9-]+)', array(
        'methods'  => 'GET',
        'callback' => 'get_post_test',
    ));

    register_rest_route(API_URL, 'news', array(
        'methods' => 'GET',
        'callback' => 'get_news',
    ));

});