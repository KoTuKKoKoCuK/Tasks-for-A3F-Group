<?php
namespace App\Classes;

class Parse
{
    public static function countTags(string $uri)
    {
        $cont=file_get_contents($uri);
        $tag='</';
        $pattern= '/' . $tag;
        preg_match_all($pattern,$cont,$matches);
        return count($matches[0]);
    }
}
?>