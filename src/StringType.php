<?php
namespace ScriptFUSION\Type;

use ScriptFUSION\StaticClass;

/**
 * Provides common string extension methods.
 */
final class StringType
{
    use StaticClass;

    /**
     * Determines whether the specified string starts with the specified substring.
     *
     * @param string $string String.
     * @param string $start Substring.
     *
     * @return bool True if the the start of string exactly matches the substring, otherwise false.
     */
    public static function startsWith($string, $start)
    {
        return strpos($string, $start) === 0;
    }

    /**
     * Determines whether the specified string ends with the specified substring.
     *
     * @param string $string String.
     * @param string $end Substring.
     *
     * @return bool True if the end of string exactly matches the substring, otherwise false.
     */
    public static function endsWith($string, $end)
    {
        // Needle cannot be found if needle is longer than haystack.
        if (($offset = strlen($string) - strlen($end)) >= 0) {
            return strpos($string, $end, $offset) === $offset;
        }

        return false;
    }
}
