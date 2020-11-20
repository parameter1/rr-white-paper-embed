<?php

/**
 *
 */
class WhitePaperEmbed {

  /**
   *
   */
  public function load() {
    // Throw an error?
    if (!method_exists('GFForms', 'include_addon_framework')) {
			wp_die(esc_html__('Gravity Forms is required!', 'rr-white-paper-embed'));
    };

    add_action('init', function() {
      add_rewrite_rule('wpembed/([a-z0-9-]+)[/]?$', 'index.php?wpembed=$matches[1]', 'top');
    });

    add_filter('query_vars', function($vars) {
      $vars[] = 'wpembed';
      return $vars;
    });

    add_filter('template_include', function($template) {
      $wpId = get_query_var('wpembed');
      if ($wpId == false || $wpId == '') return $template;

      $template = __DIR__ . '/template.php';

      // load_template($template);
      return $template;
    });

  }

}
