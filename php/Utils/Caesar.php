<?php

namespace Utils;

class Caesar implements Cipher
{

    /**
     * Returns an encrypted & utf8-encoded
     */
    public static function encode(string $string): string
    {
        $shift = 5;
        $encodeText = '';
        for($i = 0; $i < strlen($string); $i++)  {
            $symbol = ord($string[$i]) + $shift;
            if($symbol > 255) $symbol = $symbol - 255;
            $encodeText = $encodeText.chr($symbol);
        }
        return $encodeText;
    }

    /**
     * Returns decrypted original string
     */
    public static function decode(string $string): string
    {
        $shift = 5;
        $decodeText = '';
        for($i = 0; $i < strlen($string); $i++)  {
          $symbol = ord($string[$i]) - $shift;
          if($symbol < $shift) $symbol = 255 - $shift;
            $decodeText = $decodeText.chr($symbol);
        }
        return $decodeText;
    }
}
