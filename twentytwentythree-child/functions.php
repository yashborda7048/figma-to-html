<?php
function my_theme_enqueue_styles()
{
    $parent_style = 'twentyseventeen-style'; // This is 'parent-style' for the Twenty Seventeen theme.
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function clinets_shortcode($atts)
{
    $output = '';
    $args = array(
        'post_type' => 'clients',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $clients_query = new WP_Query($args);

    if ($clients_query->have_posts()) {
        while ($clients_query->have_posts()) {
            $clients_query->the_post();
            $clients_image = get_field('clients_image'); // Replace with your ACF field name
            $background_image = get_field('background_image'); // Replace with your ACF field name
            $background_img_class = get_field('background_img_class'); // Replace with your ACF field name
            if ($clients_image) {
                $output .= '<div class="client_logo"><div class="back_img"><img src="' . $background_image . '" alt="' . $background_image . '" class="img-fluid" /></div><div class="overlay_logo"><img src="' . $clients_image . '" alt="' . esc_attr(get_the_title()) . '" class="' . $background_img_class . '" /></div></div>';
            }
        }
    }

    return $output;
}

add_shortcode('clinets', 'clinets_shortcode');

function case_studies_shortcode($atts)
{
    $output = '';
    $args = array(
        'post_type' => 'case_studies',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );

    $case_studies_query = new WP_Query($args);

    if ($case_studies_query->have_posts()) {
        while ($case_studies_query->have_posts()) {
            $case_studies_query->the_post();
            $project_image = get_field('project_image'); // Replace with your ACF field name
            $project_link = get_field('project_link'); // Replace with your ACF field name
            $project_link_name = get_field('project_link_name'); // Replace with your ACF field name
            if ($project_image) {
                $output .= '<div class="card" data-aos="fade-down" data-aos-duration="500"><a href="' . $project_link . '" class="card-img"><img src="' . $project_image . '" class="img-fluid" alt="project_1.jpg"><div class="overlay"></div></a><div class="card-body pb-0"><h5>' . esc_attr(get_the_title()) . '</h5><a href="' . $project_link . '" class="link">' . $project_link_name . '</a></div></div>';
            }
        }
    }

    return $output;
}

add_shortcode('case_studies', 'case_studies_shortcode');

function blogs_shortcode($atts)
{
    $output = '';
    $args = array(
        'post_type' => 'blogs',
        'posts_per_page' => -1,
        'order' => 'ASC',
    );
    $blogs_query = new WP_Query($args);

    if ($blogs_query->have_posts()) {
        $output .= '<div class="row gy-4" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">';
        while ($blogs_query->have_posts()) {
            $blogs_query->the_post();
            $thumbnail_id = get_post_thumbnail_id(); // Get the ID of the post's thumbnail image
            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size');
            $author_name = get_the_author(); //Get the name of the post's author 
            $published_date = get_the_date(); // Get the post's published date
            $blog_link = get_permalink(); // Get the URL of the current blog
            $blog_paragraph = get_field('blog_paragraph'); // Replace with your ACF field name
            $tags = get_field('tags'); // Replace with your ACF field name

            if ($thumbnail_url) {
                $output .= '<div class="col-md-6 col-xl-4">';
                $output .= '<div class="blog-container">';
                $output .= '<a href="' . $blog_link . '">';
                $output .= '<img src="' . $thumbnail_url[0] . '" alt="main-img" class="img-fluid main-img">';
                $output .= '</a>';
                $output .= '<a class="link" href="' . $blog_link . '">' . $author_name . '<span class="dot"><i class="fa-solid fa-circle"></i></span><span>' . $published_date . '</span></a>';
                $output .= '<div class="title"><h4>' . esc_attr(get_the_title()) . '</h4></div>';
                $output .= '<p class="paragraph">' . $blog_paragraph . '</p>';
                if ($tags) {
                    $output .= '<div class="tag">';
                    foreach ($tags as $val) {
                        $output .= '<a href=' . $val . ' class="text-capitalize">' . $val . '</a>';
                    }
                    $output .= '</div>';
                }
                $output .= '</div>';
                $output .= '</div>';
            }
        }
        $output .= '</div>';
    }

    return $output;
}

add_shortcode('blogs', 'blogs_shortcode');