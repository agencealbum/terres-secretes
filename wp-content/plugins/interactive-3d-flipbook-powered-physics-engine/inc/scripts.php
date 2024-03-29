<?php
  namespace iberezansky\fb3d;
  define('iberezansky\fb3d\PDFJS_WORKER', ASSETS_JS.'pdf.worker.js');

  function register_scripts() {
    // wp_register_script(POST_ID.'-react', ASSETS_JS.'react.min.js', null, '17.0.2', true);
    // wp_register_script(POST_ID.'-react-dom', ASSETS_JS.'react-dom.min.js', array(POST_ID.'-react'), '17.0.2', true);
    wp_register_script(POST_ID.'-pdf-js', ASSETS_JS.'pdf.min.js', null, '2.5.207', true);
    wp_register_script(POST_ID.'-three', ASSETS_JS.'three.min.js', null, '108', true);
    wp_register_script(POST_ID.'-html2canvas', ASSETS_JS.'html2canvas.min.js', null, '0.5', true);

    wp_register_script(POST_ID.'-colorpicker', ASSETS_JS.'colorpicker.js', array('jquery'), '1.1.1', true);
    wp_register_script(POST_ID.'-edit', ASSETS_JS.'edit.min.js', array('react', 'react-dom', 'jquery', POST_ID.'-pdf-js', POST_ID.'-html2canvas', POST_ID.'-colorpicker'), VERSION, true);
    wp_register_script(POST_ID.'-insert', ASSETS_JS.'insert.min.js', array('react', 'react-dom', 'jquery'), VERSION, true);
    wp_register_script(POST_ID.'-settings', ASSETS_JS.'settings.min.js', array('react', 'react-dom', 'jquery'), VERSION, true);
    wp_register_script(POST_ID.'-shortcode-generator', ASSETS_JS.'shortcode-generator.js', array('react', 'react-dom', 'jquery', POST_ID.'-insert'), VERSION, true);

    wp_register_script(POST_ID, ASSETS_JS.'3d-flip-book.min.js', array('jquery', POST_ID.'-pdf-js', POST_ID.'-html2canvas', POST_ID.'-three'), VERSION, true);
    wp_register_script(POST_ID.'-client', ASSETS_JS.'client.min.js', array('jquery', POST_ID.'-pdf-js', POST_ID.'-html2canvas', POST_ID), VERSION, true);

    localize_scripts();
  }

  $fb3d['registered_scripts_and_styles'] = false;
  function register_scripts_and_styles() {
    global $fb3d;
    if(!$fb3d['registered_scripts_and_styles']) {
      register_styles();
      register_scripts();
      $fb3d['registered_scripts_and_styles'] = true;
    }
  }

  function get_style_srcs($name, $d=5) {
    global $wp_styles;
    $r = [];
    if($d && isset($wp_styles->registered[$name])) {
      $s = $wp_styles->registered[$name];
      $r[$s->src] = 1;
      foreach($s->deps as $n) {
        $deps = get_style_srcs($n, $d-1);
        foreach($deps as $dep) {
          $r[$dep] = 1;
        }
      }
    }
    return array_keys($r);
  }

  function localize_scripts() {
    global $fb3d;

    wp_localize_script(POST_ID.'-pdf-js', 'PDFJS_LOCALE', array(
      'pdfJsWorker'=> PDFJS_WORKER,
      'pdfJsCMapUrl'=> ASSETS_CMAPS
    ));

    wp_localize_script(POST_ID, 'FB3D_LOCALE', array(
      'dictionary'=> $fb3d['dictionary']
    ));

    $thumbnailSize = [
      'width'=> get_option('thumbnail_size_w'),
      'height'=> get_option('thumbnail_size_h')
    ];

    wp_localize_script(POST_ID.'-edit', 'FB3D_ADMIN_LOCALE', array(
      'editMountNode'=> POST_ID.'-edit',
      'images'=> ASSETS_IMAGES,
      'thumbnailSize'=> $thumbnailSize,
      'dictionary'=> $fb3d['dictionary'],
      'styles'=> get_style_srcs(POST_ID.'-edit')
    ));

    wp_localize_script(POST_ID.'-insert', 'FB3D_ADMIN_LOCALE', array(
      'key'=> POST_ID,
      'templates'=> $fb3d['templates'],
      'lightboxes'=> $fb3d['lightboxes'],
      'dictionary'=> $fb3d['dictionary'],
      'shortcodeGeneratorMountNode'=> POST_ID.'-shortcode-generator'
    ));

    wp_localize_script(POST_ID.'-settings', 'FB3D_ADMIN_LOCALE', array(
      'settingsMountNode'=> POST_ID.'-settings',
      'images'=> ASSETS_IMAGES,
      'templates'=> $fb3d['templates'],
      'lightboxes'=> $fb3d['lightboxes'],
      'dictionary'=> $fb3d['dictionary'],
      'license'=> $fb3d['options']['license']
    ));

    wp_localize_script(POST_ID.'-client', 'FB3D_CLIENT_LOCALE_ENCODED', ['data'=> base64_encode(json_encode(array(
      'key'=> POST_ID,
      'ajaxurl'=> admin_url('admin-ajax.php'),
      'templates'=> $fb3d['templates'],
      'images'=> ASSETS_IMAGES,
      'jsData'=> $fb3d['jsData'],
      'thumbnailSize'=> $thumbnailSize
    )))]);
  }

?>
