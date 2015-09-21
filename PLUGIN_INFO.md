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
