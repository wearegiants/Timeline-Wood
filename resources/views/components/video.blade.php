@php  
  if ( preg_match('/src="(.+?)"/', $video, $matches) ) {
    $src = $matches[1];
    $params = array(
      'showinfo'        => 1,
      'autohide'        => 1,
      'controls'        => 0,
      'autoplay'        => 1,
      'mute'            => 1,
      'loop'            => 1,
    );
    $new_src = add_query_arg($params, $src);
    $video = str_replace($src, $new_src, $video);
    $attributes = 'frameborder="0"';
    $video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);
  }
  echo $video;
@endphp
