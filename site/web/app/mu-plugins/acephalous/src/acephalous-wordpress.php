<?php
/**
 *
 * @package acephalous-wordpress
 */
namespace AcephalousWP;

/**
 */
final class Acephalous_WordPress {

  /**
   * Class instance
   *
   * @var object
   */
  private static $instance;

  /**
   * Class constructor
   *
   * @return void
   */
  public function __construct() {
    $this->init();
  }

  /**
   * Initialize
   *
   * @return void
   */
  public static function init() {
    add_action('wp', array(get_called_class(), 'acephalous_guillotine'));
  }

  /**
   * Report an error if the front end is requested
   *
   * @return void
   */
  public static function acephalous_guillotine() {
    if (!is_admin()) {
      if (get_option('page_on_front') === get_the_id() || get_option('page_for_posts') === get_the_id() || is_front_page()) {
        wp_die('Not Available');
        exit;
      } else {
        wp_safe_redirect(is_user_logged_in() ? admin_url('post.php?post=' . get_the_id() . '&action=edit') : wp_login_url(admin_url('post.php?post=' . get_the_id() . '&action=edit')));
      }
    }
  }

  /**
   * Get the object instance
   *
   * @return object
   */
  public static function get_instance() {
    return self::$instance ?? new Acephalous_WordPress();
  }
}
