<?php
global $gva_node_index;
function sanblog_preprocess_node(&$variables) {
  global $gva_node_index;
  $gva_node_index = $gva_node_index + 1;
  $variables['gva_node_index'] = $gva_node_index;

  $date = $variables['node']->getCreatedTime();
  //$variables['date'] = date( 'M', $date) . ' ' . t(date( 'd', $date)) . ', ' . date( 'Y', $date);
  $variables['date'] = date( 'M', $date) . ' ' . t(date( 'd', $date));

  if ($variables['teaser'] || !empty($variables['content']['comments']['comment_form'])) {
    unset($variables['content']['links']['comment']['#links']['comment-add']);
  }
  $date_ago = \Drupal::service('date.formatter')->formatTimeDiffSince($date);
  $variables['date_ago'] = $date_ago . t(' ago');
  if ($variables['node']->getType() == 'article') {
      $node = $variables['node'];
      if($node->hasField('comment')){
        $variables['comment_count'] = $node->get('comment')->comment_count;
      }
      $post_format = 'standard';
      try{
         $field_post_format = $node->get('field_post_format');
         if(isset($field_post_format->value) && $field_post_format->value){
            $post_format = $field_post_format->value;
         }
      }catch(Exception $e){
         $post_format = 'standard';
      }
      $iframe = '';
      $variables['post_format'] = $post_format;

    // video content type
  }elseif($variables['node']->getType() == 'video'){
    $iframe = '';
    $node = $variables['node'];
    try{
      $field_post_embed = $node->get('field_video_embed');
      if(isset($field_post_embed->value) && $field_post_embed->value){
        $autoembed = new AutoEmbed();
        $iframe = $autoembed->parse($field_post_embed->value);
      }else{
        $iframe = '';
      }
    }
    catch(Exception $e){
       $iframe = '';
    }
    $variables['gva_iframe'] = $iframe;
  }
}

function sanblog_preprocess_node__article(&$variables) {
  $view_mode = $variables['view_mode'];
  $allowed_view_modes = ['full'];
  if(in_array($view_mode, $allowed_view_modes)) {
    $allowed_regions = ['related_content'];
    sanblog_add_regions_to_node($allowed_regions, $variables);
  }
}

function sanblog_preprocess_user(&$variables) {
  $allowed_regions = ['user_content'];
  sanblog_add_regions_to_node($allowed_regions, $variables);
}

function sanblog_preprocess_comment(&$variables){
   $date = $variables['comment']->getCreatedTime();
  $variables['created'] = date( 'j F Y', $date);
}

function sanblog_preprocess_field(&$variables, $hook) {
  $element = $variables['element'];
}

function sanblog_preprocess_breadcrumb(&$variables){
  $variables['#cache']['max-age'] = 0;
  $request = \Drupal::request();
  $title = '';
  if ($route = $request->attributes->get(\Symfony\Cmf\Component\Routing\RouteObjectInterface::ROUTE_OBJECT)) {
    $title = \Drupal::service('title_resolver')->getTitle($request, $route);
  }

  if($variables['breadcrumb']){
     foreach ($variables['breadcrumb'] as $key => &$value) {
      if($value['text'] == 'Node'){
        unset($variables['breadcrumb'][$key]);
      }
    }


    if(!empty($title)){
      $variables['breadcrumb'][] = array(
          'text' => ''
      );
      $variables['breadcrumb'][] = array(
          'text' => $title
      );
    }
  }
}

