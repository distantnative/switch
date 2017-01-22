![switch Field for Kirby CMS](https://distantnative.com/remote/github/field-switch/logo.png)  

[![Release](https://img.shields.io/github/release/distantnative/switch.svg)](https://github.com/distantnative/switch/releases) [![Issues](https://img.shields.io/github/issues/distantnative/switch.svg)](https://github.com/distantnative/switch/issues)


This plugin provides a switch toggle field for the Kirby 2 panel:  

![switch](https://distantnative.com/remote/github/field-switch/example.gif)

## Requirements
Since version 1.0.0 the switch field requires Kirby CMS 2.3 or higher.  
If you are running an older version of Kirby, please use [version 0.5.0](https://github.com/distantnative/switch/releases/tag/v0.5) of the switch field.

## Installation & Update
[Download](https://github.com/distantnative/field-switch/zipball/master/) all files and copy them to `site/plugins/field-switch/`.

#### With the [Kirby CLI](https://github.com/getkirby/cli)
```
kirby plugin:install distantnative/field-switch
```

## Usage
In your blueprint:

```
traveling:
  label: Travel mode
  type:  switch
  text:  Switch on when you are traveling - off when not
```

If you want different texts for on and off state:

```
traveling:
  label:    Travel mode
  type:     switch
  texts: 
    - Switch is on, which means I am currently traveling
    - Switch is off, so I am stuck at home
```

As the switch field is basically just a restyled single checkbox, [this documentation](https://getkirby.com/docs/cheatsheet/panel-fields/checkbox) applies.

## Support other languages

If you want to support multiple panel languages, you can use it like this:

```
traveling:
  label:    
    en: Travel mode
    de: Reisemodus
  type:     switch
  texts:
    - 
      en: Switch is on, which means I am currently traveling
      de: An, also reise ich gerade
    - 
      en: Switch is off, so I am stuck at home
      de: Aus, also bin ich noch zuhause
```

## Version history
You can find a more or less complete version history in the [changelog](CHANGELOG.md).

## License
[MIT License](http://www.opensource.org/licenses/mit-license.php)

## Author
Nico Hoffmann - <https://nhoffmann.com>
