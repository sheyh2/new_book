<?php

namespace App\Core;


use App\Models\User;

class Authenticate{

    /**
     * @return bool
     */
    public static function checkToken(): bool{
        $token = request()->header('token');
        dd($token);
        return User::query()
            ->where('token', '=', $token)
            ->exists();
    }

//    public static function getUser(): ?array{
//        $token = request()->header('token');
//        if (self::checkToken()){
//            /** @var User $user */
//            $user = User::query()
//                ->where('token', '=', $token)
//                ->first();
//
//        }
//    }
}
