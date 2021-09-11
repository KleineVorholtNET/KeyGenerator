<?php
/**
 * SarpexConsole - Config.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file Config.php
 * @date 29.07.2021 23:09
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

namespace NASSplash\Configuration;

/**
 * Class Config used to save Configuration values
 * @package SarpexConsole\Configuration
 */
class Config
{

    /**
     * @var array Stores all Configuration Values
     */
    private static array $configValues;

    /**
     * Gets the stored data of any key
     * @param $name string Configuration key identifier
     * @return mixed Saved Data
     */
    public static function read(string $name): mixed
    {
        return self::$configValues[$name];
    }

    /**
     * Sets data for any config key
     * @param $name string Configuration key identifier
     * @param $value mixed Data to save
     */
    public static function write(string $name, mixed $value)
    {
        self::$configValues[$name] = $value;
    }

    /**
     * Check if any Configuration keys are set
     * @return bool Returns true if configuration is empty
     */
    public static function isEmpty(): bool
    {
        return self::$configValues == [];
    }

    /**
     * Clears the whole configuration data
     */
    public static function clear()
    {
        self::$configValues = [];
    }

    /**
     * @return array Returns all config values as an array
     */
    public static function readValues(): array
    {
        return self::$configValues;
    }

    /**
     * @return string Returns all config values as a JSON string
     */
    public static function getJSON(): string
    {
        return json_encode(self::readValues());
    }
}