# SimpleImageFixBlackBackgrounds

Addon for Cockpit CMS, that replaces an image library with a modified version to prevent black backgrounds of transparent images with non-bundled PHP/GD versions.

This is a modified version of the [SimpleImage][5] library by Raffael Jesche.

On some hosts, transparent png and gif files lose their transparency and the background turns black.

After multiple days of digging through the code, reading about GD and doing a lot of tests, I'm pretty sure, that the problem comes from differences between bundled and non-bundled PHP/GD versions.

I fixed the problem with black backgrounds after cropping/resizing images, but **this library doesn't work with filters anymore**.

This library is written to replace the original library in [Cockpit CMS][1], that displays black backgrounds for thumbnails on some hosts. It will only get active, `if (GD_BUNDLED === 0)`.

I wasn't able to test it on different hosts with non-bundled GD. My test scenario was on an [Uberspace 7][4] (CentOS 7, PHP 7+), which uses a non-bundled GD version.

If you also have problems with black backgounds, than my fix might work for you.

[Source][2], [Discussion][3]

## Installation

Copy this repository into `/addons` and name it `SimpleImageFixBlackBackgrounds` or

```bash
cd path/to/cockpit
git clone https://github.com/raffaelj/cockpit_SimpleImageFixBlackBackgrounds.git addons/SimpleImageFixBlackBackgrounds
```

[1]: https://github.com/agentejo/cockpit/
[2]: https://github.com/raffaelj/SimpleImage/tree/fix-black-png-thumbnail
[3]: https://github.com/claviska/SimpleImage/issues/236
[4]: https://uberspace.de/en/
[5]: https://github.com/claviska/SimpleImage/
