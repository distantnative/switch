![Switch Field for Kirby CMS](docs/logo.png)  

[![Release](https://img.shields.io/github/release/distantnative/switch.svg)](https://github.com/distantnative/switch/releases) [![Issues](https://img.shields.io/github/issues/distantnative/switch.svg)](https://github.com/distantnative/switch/issues) [![Moral Licenses](https://img.shields.io/badge/buy-moral_license-8dae28.svg)](https://gumroad.com/distantnative)


This plugin provides a switch toggle field for the Kirby 2 panel:  

![switch](docs/switch.gif)

## Requirements
Since version 1.0 the switch field requires Kirby CMS 2.3 or higher.  
If you are running an older version of Kirby, please use [version 0.5](https://github.com/distantnative/switch/releases/tag/v0.5) of the switch field.

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
  texts: 
    - I am on, you can turn me off
    - I am off, you can turn me on
```

As the switch field is basically just a restyled single checkbox, [this documentation](http://getkirby.com/docs/cheatsheet/panel-fields/checkbox) applies.

## Version history
You can find a more or less complete version history in the [changelog](CHANGELOG.md).

## License
[MIT License](http://www.opensource.org/licenses/mit-license.php)

## Author
Nico Hoffmann - <https://nhoffmann.com>
