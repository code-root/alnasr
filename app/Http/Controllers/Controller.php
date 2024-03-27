<?php

namespace App\Http\Controllers;

use App\Models\ImageItem;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function generateRandomToken() {
        $alphabet = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $token = '';
        for ($i = 0; $i < 5; $i++) {
            $index = rand(0, strlen($alphabet) - 1);
            $token .= $alphabet[$index];
        }

        return $token;
    }

    function generateUniqueTokenImage() {
        do {
            $token = $this->generateRandomToken();
            $existingToken =ImageItem::where('token', $token)->first();
        } while ($existingToken);
        return $token;
    }


    function messageTelegram($messaggio ) {
        $token ='6747764828:AAHqvMoSXmTtJqfL9Y83aifsgWoLzyeYGPc';
        $data = [
            'text' => $messaggio,
            'chat_id' => '6525700724'
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) .'parse_mode=html');
    }

}
