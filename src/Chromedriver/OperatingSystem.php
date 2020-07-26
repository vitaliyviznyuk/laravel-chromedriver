<?php declare(strict_types=1);
/**
 * @author Vitaliy Viznyuk <vitaliyviznyuk@gmail.com>
 * @copyright Copyright (c) 2020 Vitaliy Viznyuk
 */

namespace vitaliyviznyuk\Laravel\Chromedriver;

use Illuminate\Support\Str;

class OperatingSystem
{
    /**
     * Returns the current OS identifier.
     *
     * @return string
     */
    public static function id(): string
    {
        if (static::onMac()) {
            return static::onWindows() ? 'win' : ('mac');
        }

        return static::onWindows() ? 'win' : ('linux');
    }

    /**
     * Determine if the operating system is Windows or Windows Subsystem for Linux.
     *
     * @return bool
     */
    public static function onWindows(): bool
    {
        return PHP_OS === 'WINNT' || Str::contains(php_uname(), 'Microsoft');
    }

    /**
     * Determine if the operating system is macOS.
     *
     * @return bool
     */
    public static function onMac(): bool
    {
        return PHP_OS === 'Darwin';
    }
}
