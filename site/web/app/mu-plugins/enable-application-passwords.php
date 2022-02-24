<?php

if (WP_ENV === 'development') {
  add_filter( 'wp_is_application_passwords_available', '__return_true' );
}