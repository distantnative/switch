![Switch Field for Kirby CMS](docs/assets/logo.png)  

[![Release](https://img.shields.io/github/release/distantnative/switch.svg)](https://github.com/distantnative/switch/releases) [![Issues](https://img.shields.io/github/issues/distantnative/switch.svg)](https://github.com/distantnative/switch/issues)


This plugin provides a switch toggle field for the Kirby 2 panel:  

![switch](docs/assets/example.gif)

## Requirements
Since version 1.0.0 the switch field requires Kirby CMS 2.3 or higher.  
If you are running an older version of Kirby, please use [version 0.5.0](https://github.com/distantnative/switch/releases/tag/v0.5) of the switch field.

## Installation & Update
Copy the files to `site/plugins/field-switch/`.

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

## Version history
You can find a more or less complete version history in the [changelog](docs/CHANGELOG.md).

## License
[MIT License](http://www.opensource.org/licenses/mit-license.php)

## Author
Nico Hoffmann - <https://nhoffmann.com>
