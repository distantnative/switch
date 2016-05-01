This plugin provides a switch toggle field for the Kirby 2 Panel:

![switch](https://github.com/distantnative/switch/blob/master/switch.gif)

## Requirements
Since version 1.0 the switch field requires Kirby CMS 2.3 – if you are running an older version of Kirby, please use [version 0.5](https://github.com/distantnative/switch/releases/tag/v0.5).

## Installation & Update
Copy the files to `site/plugins/switch/`.

## Usage
In your blueprint:

```
switch:
  label: Switch
  type:  switch
  text:  You can turn me on and off
```

If you want different texts for on and off state:

```
switch:
  label:    Switch
  type:     switch
  text_on:  I am on, you can turn me off
  text_off: I am off, you can turn me on
```

As the switch field is basically just a restyled single checkbox, [this documentation](http://getkirby.com/docs/cheatsheet/panel-fields/checkbox) applies.
