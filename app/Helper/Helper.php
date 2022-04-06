<?php


namespace App\Helper;


use App\Message;

class Helper
{
    public static function messCount(){
        $text = Message::where('status', '=', '0')->count();

        return $text;

    }

}
