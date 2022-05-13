<?php

namespace linguifeng\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package linguifeng\captcha\facade
 * @mixin \linguifeng\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \linguifeng\captcha\Captcha::class;
    }
}
