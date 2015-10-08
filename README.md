![Switch Field for Kirby CMS](http://distantnative.com/remote/github/kirby-switch-github.png)  

[![Release](https://img.shields.io/github/release/distantnative/switch.svg)](https://github.com/distantnative/switch/releases)  [![Issues](https://img.shields.io/github/issues/distantnative/switch.svg)](https://github.com/distantnative/switch/issues) [![License](https://img.shields.io/badge/license-GPLv3-blue.svg)](https://raw.githubusercontent.com/distantnative/switch/master/LICENSE) [![Moral Licenses](https://img.shields.io/badge/buy-moral_licenses-8dae28.svg)](https://gumroad.com/distantnative)


This plugin provides a switch toggle field for the Kirby 2 Panel:

![switch](https://cloud.githubusercontent.com/assets/3788865/6529068/88780f92-c426-11e4-87f4-386ca9ab1b05.gif)

# Installation & Update
Copy the files to `site/fields/switch/`.

# Usage
In your blueprint:

```
switchit:
  label: Switch
  type: switch
  text: You can turn me on and off
```

If you want different texts for on and off state:

```
switchit:
  label: Switch
  type: switch
  text_on: You can turn me off
  text_off: You can turn me on
```

As it is basically a single checkbox, [this documentation](http://getkirby.com/docs/cheatsheet/panel-fields/checkbox) applies.

# Version history

**v0.5**  
- Swtiched to boolean values (true/false) to better match the toggle field type (thx to @creichel)

**v0.4.**
- Added option for different on and off state texts

**v0.3**
- CSS improvements

**v0.2**
- Changed the repo name to `switch`, restructured the files
- Inherits now from checkbox field
- Fixed display bug, when `text` is not specified
