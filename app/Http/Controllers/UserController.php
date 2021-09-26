<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\Feedback;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveUser(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:4|max:20',
        ]);
        if ($request['email_way'] != 1) {
            $request['email_way'] = 0;
        };
        if ($request['telegram_way'] != 1) {
            $request['telegram_way'] = 0;
        };
        User::insert([
            'id' => null,
            'name' => $request['name'],
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'email_way' => $request['email_way'],
            'telegram_way' => $request['telegram_way'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $params = [
            'message' => 'Ми раді, що Ви приєдналися до підписки на отримання новин NASA.',
            'name' => $request['name']
        ];
        $text = 'lol kek cheburek';
        Mail::to($request['email'])->send(new Feedback($params));
        return view('pages.hello', [
            'user' => $request['name']
        ]);
    }
    public static function notify($text)
    {
        $client = new Client();
        try {
            $client->post('https://api.telegram.org/bot2009676866:AAGauOUMp4Nzv7EWbyuFWGL2xWTtUk8ud9g/sendMessage', [
                RequestOptions::JSON => [
                    'chat_id' => 519979711,
                    'text' => $text,
                ]
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
