<?php
/**
 * Prevent black backgrounds of transparent images with non-bundled PHP/GD versions
 * Addon for Cockpit CMS, that replaces an image library with a modified version
 * 
 * @see       https://github.com/raffaelj/cockpit_SimpleImageFixBlackBackgrounds
 * @see       https://github.com/agentejo/cockpit/
 * @see       https://github.com/claviska/SimpleImage/
 * 
 * @version   0.1.1
 * @author    Raffael Jesche
 * @license   MIT
 */

if (defined('GD_BUNDLED') && GD_BUNDLED === 0) {

    $this->helpers['image'] = 'SimpleImageFixBlackBackgrounds\\Helper\\Image';

}
