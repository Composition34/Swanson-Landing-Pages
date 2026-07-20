add_action('wp_head', function() {
    // 1. Define your array of target Page IDs here
    $target_pages = [118023, 118495, 118502]; 
    
    // Get the current page ID safely
    $current_id = get_the_ID();

    // 2. Check if we are on the public frontend for one of the target pages
    $is_frontend_target = (!is_admin() && in_array($current_id, $target_pages));
    
    // 3. Check if we are inside the active Elementor Editor
    $is_editor_target = false;
    if (class_exists('\Elementor\Plugin')) {
        $editor = \Elementor\Plugin::$instance->editor;
        
        // Check if we are in edit mode AND on one of our target pages
        if ($editor->is_edit_mode() && in_array($current_id, $target_pages)) {
            $is_editor_target = true;
        }
    }

    // Serve the styles if either condition matches
    if ($is_frontend_target || $is_editor_target) {
        ?>
        <style id="lp-synchronized-styles">






        /* ---------------------------------------------------------
            PASTE YOUR COMPILED SCSS/CSS ABOVE THIS LINE
           --------------------------------------------------------- */
        </style>
        <?php
    }
}, 99);