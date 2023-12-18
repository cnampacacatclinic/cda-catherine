<?php
namespace App\Enum;

use MyCLabs\Enum\Enum;//permet de simuler un enum 

class CityEnum extends Enum
{
    public const PARIS ="Paris";
    public const VALENCE ="Valence";
    public const NICE ="Nice"; 
    public const LIMOGES="Limoges";

    
    /* Ceci sert à afficher dans le form la valeur de la constante et non le nom de la constante
    * C'est à dire Village et non VILLAGE
    * Il faut savoir que dans la table avec ou sans la fonction getChoise
    * C'est bel et bien la valeur qui est insérée pas le nom de la variable
    */
    public static function getChoices(): array
    {
        $choices = [];

        foreach (self::toArray() as $key => $value) {
            $choices[$value] = $value;
        }

        return $choices;
    }
}