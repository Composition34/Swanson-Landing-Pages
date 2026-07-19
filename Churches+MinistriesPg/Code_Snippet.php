add_action('wp_head', function() {
    // 1. Check if we are on the public frontend for page 118023
    $is_frontend_target = (!is_admin() && get_the_ID() === 118023);
    
    // 2. Check if we are inside the active Elementor Editor frame for page 118023
    $is_editor_target = false;
    if (class_exists('\Elementor\Plugin')) {
        $editor = \Elementor\Plugin::$instance->editor;
        $preview = \Elementor\Plugin::$instance->preview;
        
        // Check if editor interface or preview frame is active for this specific ID
        if ($editor->is_edit_mode() || $preview->is_preview_mode(118023)) {
            $is_editor_target = true;
        }
    }

    // Serve the styles if either condition matches
    if ($is_frontend_target || $is_editor_target) {
        ?>
        <style id="lp-synchronized-styles">



body.page-id-118023 #content-wrap {
  width: 100% !important;
  max-width: 100% !important;
  padding-left: 0 !important;
  padding-right: 0 !important;
}
body.page-id-118023 .hide {
  display: none !important;
}

.lp__1080 {
  width: 1080px;
}

.lp__full {
  width: 100%;
}

.elementor-element {
  padding: 0 !important;
}
.elementor-element .e-con-inner {
  display: flex !important;
  align-items: center !important;
  padding: 0 !important;
}

.category__thumbs__5 {
  display: flex;
  flex-direction: row;
  justify-content: center;
  column-gap: 3px;
}
.category__thumbs__5 a {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  flex: 1;
}
.category__thumbs__5 a img {
  display: flex;
  width: 100%;
}
.category__thumbs__5 a p {
  display: flex;
  padding: 10px;
  font-family: "kepler-3-display-variable", serif;
  font-weight: 500;
  font-size: 16px;
}





        /* ---------------------------------------------------------
           PASTE YOUR COMPILED SCSS/CSS ABOVE THIS LINE
           --------------------------------------------------------- */
        </style>
        <?php
    }
}, 99);