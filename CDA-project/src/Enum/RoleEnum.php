<?php
namespace App\Enum;

use MyCLabs\Enum\Enum;

class RoleEnum extends Enum
{
    public const ROLE_USER ='ROLE_USER';
    public const ROLE_ADMIN ='ROLE_ADMIN';
    public const ROLE_SUPER_ADMIN ='ROLE_SUPER_ADMIN';

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