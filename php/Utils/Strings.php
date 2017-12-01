<?php

namespace Utils;

//use InvalidArgumentException;

class Strings
{
    /**
     * @var string $string
     */
    protected $string;

    /**
     * Change case of a given string to kebeb
     *
     * @example this-is-kebab-case
     *
     * @return string kebab-cased string
     * @throws \DomainException
     */
    public function kebabCase() :string
    {
        if(!is_callable($this->string)){
            throw new \DomainException('Enter string is empty.');
        }
        return strtolower(preg_replace('%([a-z])([A-Z])%', '\1-\2', $this->string));
    }

    /**
     * Count char occurrences in the given string
     *
     * @param  string $char Needle
     * @return int Count of occurrence
     * @throws \InvalidArgumentException
     */
    public function countCharOccurrence(string $char) : int
    {
        if (empty(trim($char))) {
            throw new \InvalidArgumentException('Enter string is empty.');
        }
        return substr_count($this->string, $char);
    }

    /**
     * Get char that most frequentlly occurs in the given string
     *
     * @param  string $char Needle
     * @return string Char
     * @throws \InvalidArgumentException
     */
    public function mostFrequentChars(string $char): string
    {
        if (empty(trim($char))) {
            throw new \InvalidArgumentException('Enter string is empty.');
        }
        $searchResult = count_chars($char,1);
        $charCode = array_keys($searchResult,max($searchResult))[0];
        $searchChar= chr($charCode);

        return $searchChar;
    }

    /**
     * Get first unique (or less occured) char for the given string
     *
     * @return string Char
     */
    public function firstUniqueChar() :string
    {
        $chars = preg_split('//', $this->string, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($chars as $char) {
            if (substr_count($this->string, $char) == 1) {
                return $char;
            }
        }
        return false;
    }

    /**
     * Get a compressed string
     *
     * @example
     * <code>
     *   aaa       -> a3
     *   apple     -> a1p2l1e1
     *   apple pie -> a1p3l1e2i1
     * </code>
     * @return string
     */
    public function asciiCompression() :string
    {
        $output = '';
        $pieces = str_split( str_replace(" ","", $this->string) );

        foreach($pieces as $val)
            $pos[$val] = substr_count($this->string, $val);
        foreach($pos as $key => $cal)
        {
            $output .= $key.$cal;
        }
        return $output;
    }

    /**
     * Is given string a heterogram
     *
     * @return bool
     */
    public function isHeterogram(): bool
    {
        $string = str_replace(' ', '', $this->string);
        $cString = count( str_split($string));
        $cUstring = count( array_unique( str_split($string)));
        if ($cString == $cUstring) return true;
        return false;
    }

}
