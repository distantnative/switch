<?php

class SwitchField extends CheckboxField {

  static public $assets = array(
     'css' => array(
       'style.css'
     )
   );

  public function input() {

    $input = new Brick('input', null);
    $input->addClass('tgl');
    $input->attr(array(
      'id'           => $this->id(),
      'name'         => $this->name(),
      'required'     => $this->required(),
      'autofocus'    => $this->autofocus(),
      'autocomplete' => $this->autocomplete(),
      'readonly'     => $this->readonly(),
      'type'         => 'checkbox',
      'checked'      => v::accepted($this->value()),
    ));
    $btn = new Brick('label', null);
    $btn->addClass('tgl-btn');
    $btn->attr('for', $this->id());

    $wrapper = parent::input();
    $wrapper->tag('label');
    $wrapper->text($this->i18n($this->text()));
    $wrapper->attr('for', $this->id());
    $wrapper->removeAttr('id');
    $wrapper->addClass('input-with-checkbox');
    $wrapper->prepend($btn);
    $wrapper->prepend($input);

    return $wrapper;

  }

  public function text() {
    $text = parent::text();
    return empty($text) ? ' ' : $text;
  }

}
