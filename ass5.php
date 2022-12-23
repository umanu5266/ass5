

add_shortcode('pledge_count', 'get_pledge_count');

add_filter( 'pre_get_posts', 'fb_pre_get_posts' );
function fb_pre_get_posts( $queryobj ) {
    switch($query->query_vars['post_type']){
        case 'attachment':  // Media library
            $queryobj->query_vars[ 'author' ] = get_current_user_id();
            break;
        
        case 'post':        // Posts
            $queryobj->query_vars[ 'author' ] = get_current_user_id();
            break;

        case 'page':        // Pages
            $queryobj->query_vars[ 'author' ] = get_current_user_id();
            break; 

   } // switch post_type
    return $queryobj;
}
