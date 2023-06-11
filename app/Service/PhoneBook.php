<?php

namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
    public static function searchByName(string $name):array
    {     
        return self::searchBy('name', $name);
    }

    public static function searchByEmail(string $email):array
    {
        return self::searchBy('email', $email);
    }

    public static function searchByCity(string $city):array
    {
        return self::searchBy('city', $city);
    }

    public static function searchBy(string $key, string $value):array
    {
        /* return collect(self::contacts())->filter(function($contact) use ($name){
           return Str::contains($contact['name'], $name);
        })->all();*/

        return collect(self::contacts())
            ->filter(fn($contact) => Str::contains(strtolower($contact[$key]), strtolower($value)))
            ->all();

        /*return collect(self::contacts())
            ->filter(fn($contact) => str_contains(strtolower($contact[$key]), strtolower($value)))
            ->all();*/
    }

    public static function contacts():array
    {
        return [
            [
                'name' => 'Jon Doe',
                'email' => 'jondoe@exapmle.com',
                'phone' => '022504780',
                'city' => 'Manistand, UK'
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janew@hotmail.co',
                'phone' => '04122543255',
                'city' => 'Outada, UK'
            ],
            [
                'name' => 'Michel Darine',
                'email' => 'mdarine@yanadoo.ca',
                'phone' => '07888541241',
                'city' => 'Trafinorinja, FR'
            ],
            [
                'name' => 'Halina Sounari',
                'email' => 'hsounari@ghuils.uk',
                'phone' => '00124512450',
                'city' => 'Trijande, UK'
            ],
            [
                'name' => 'Frank Lumbert',
                'email' => 'lumbert_f@hitarino.uk',
                'phone' => '0412445210',
                'city' => 'Guitano, UK'
            ],
        ];
    }
}