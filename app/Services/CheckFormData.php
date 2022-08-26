<?php

namespace App\Services;

class CheckFormData
{
    public static function checkGender($gender)
    {
        if ($gender === 0) {
            $gender = '男性';
        }

        if ($gender === 1) {
            $gender = '女性';
        }
        return $gender;
    }

    public static function checkAge($age)
    {
        if ($age === 1) {
            $age = '~19歳';
        }
        if ($age === 2) {
            $age = '20歳~29歳';
        }
        if ($age === 3) {
            $age = '30歳~39歳';
        }
        if ($age === 4) {
            $age = '40歳~49歳';
        }
        if ($age === 5) {
            $age = '50歳~59歳';
        }
        if ($age === 6) {
            $age = '60歳~';
        }
        return $age;
    }
}
