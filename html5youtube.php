<?php
/*
 * kirbytag html5youtube
 * responsive html5 youtube player embedding
 * 
 * copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | jtByt.Pictures@gmail.com
 * license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 * 
 * version 2.0 (03.11.2014)
 * changelog:
 * - v2.0: kirby 2 support
 */

kirbytext::$tags['html5youtube'] = array(
  'attr' => array(
    'options'
  ),
  'html' => function($tag) {
    $base = 'https://www.youtube-nocookie.com/embed/';
    $end = '?rel=0&html5=1';
    
    $url     = 'http://wikipedia.org/wiki';
    $videoID = $tag->attr('html5youtube');
    $options    = $tag->attr('options');

    return '<div class="video-container"><iframe src="' . $base . $videoID . $end . $options . '" frameborder="0" allowfullscreen="1"></iframe></div>';
  }
  
);