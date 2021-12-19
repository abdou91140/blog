<?php

namespace App\Classe;

use Mailjet\Resources;
use Mailjet\Client;

class Mail
{
    private $api_key = 'bf186e98a513e17d185df294b805a2d7';
    private $api_key_secret = 'f73298ed30ff72094be148a51d298117';

    public function send($to_email, $to_name, $subject, $content)
    {
        $mj = new Client($this->api_key, $this->api_key_secret,true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "blogfindly@gmail.com",
                        'Name' => "blog findly"
                    ],
                    'To' => [
                        [
                            'Email' => $to_email,
                            'Name' => $to_name
                        ]
                    ],
                    'TemplateID' => 3440066,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content,
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
    }
}