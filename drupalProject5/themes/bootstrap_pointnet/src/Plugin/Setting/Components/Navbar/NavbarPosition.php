<?php

namespace Drupal\bootstrap_pointnet\Plugin\Setting\Components\Navbar;

use Drupal\bootstrap\Plugin\Setting\SettingBase;

/**
 * The "navbar_position" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "navbar_position",
 *   type = "select",
 *   title = @Translation("Navbar Position"),
 *   description = @Translation("Determines where the navbar is positioned on the page."),
 *   defaultValue = "",
 *   groups = {
 *     "components" = @Translation("Components"),
 *     "navbar" = @Translation("Navbar"),
 *   },
 *   empty_option = @Translation("Normal"),
 * )
 */
class NavbarPosition extends SettingBase {}
