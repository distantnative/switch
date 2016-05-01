<?php

class SwitchField extends CheckboxField {

  public static $assets = array(
     'css' => array(
       'style.css'
     )
   );

  public function input() {

    $wrapper = parent::input();
    $wrapper->removeClass('input-with-checkbox');
    $wrapper->addClass('input-with-switch');

    $switch = new Brick('label', null);
    $switch->addClass('btn');
    $switch->attr('for', $this->id());
    $wrapper->append($switch);
    $wrapper->append($this->text(true));

    return $wrapper;

  }

  public function text($current = null) {

    if($current === null) return;

    if(isset($this->texts)) {
      $texts = new Brick('span', null);
      $texts->addClass('txt');

      foreach (['on', 'off'] as $key => $state) {
        $text  = new Brick('span', null);
        $text->addClass($state);
        $text->text($this->i18n($this->texts[$key]));
        $texts->append($text);
      }

      return $texts;


    } else {
      $text = parent::text();
      return empty($text) ? ' ' : $this->i18n($text);
    }

  }

  public function result() {
    return v::accepted(parent::result()) ? 'true' : 'false';
  }

}
