<?php
include 'Telegram.php';

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
/**
 * Telegram Bot Send messages from codeigniter.
 *
 * @author Prasaath <prasaath.developer@gmail.com>
 */
class Telegram_lib
{

    public function __construct()
    {
        $this->ci = &get_instance();

        $this->ci->load->config('telegram', true);

    }

    public function sendmsg($msg)
    {
        $telegram = new Telegram($this->ci->config->item('bot_token', 'telegram'));
        $chat_id = $this->ci->config->item('chat_id', 'telegram');
        $content = array('chat_id' => $chat_id, 'text' => $msg);
        return $telegram->sendMessage($content);
    }
    public function sendlocation($lat, $long)
    {
        $telegram = new Telegram($this->ci->config->item('bot_token', 'telegram'));
        $chat_id = $this->ci->config->item('chat_id', 'telegram');
        $content = ['chat_id' => $chat_id, 'latitude' => $lat, 'longitude' => $long];
        return $telegram->sendLocation($content);
    }
    public function sendimg($img_path, $caption = false)
    {
        $telegram = new Telegram($this->ci->config->item('bot_token', 'telegram'));
        $chat_id = $this->ci->config->item('chat_id', 'telegram');
        $img = curl_file_create('test.png', 'image/png');
        $content = ['chat_id' => $chat_id, 'photo' => new CURLFile(realpath($img_path)), 'caption' => $caption];
        return $telegram->sendPhoto($content);
    }
    public function sendaudio($audio_path, $caption = false)
    {
        $telegram = new Telegram($this->ci->config->item('bot_token', 'telegram'));
        $chat_id = $this->ci->config->item('chat_id', 'telegram');
        $content = ['chat_id' => $chat_id, 'audio' => new CURLFile(realpath($audio_path)), 'caption' => $caption];
        return $telegram->sendAudio($content);
    }
    public function senddoc($doc_path, $caption = false)
    {
        $telegram = new Telegram($this->ci->config->item('bot_token', 'telegram'));
        $chat_id = $this->ci->config->item('chat_id', 'telegram');
        $content = ['chat_id' => $chat_id, 'document' => new CURLFile(realpath($doc_path)), 'caption' => $caption];
        return $telegram->sendDocument($content);
    }
    public function sendvenue($lat, $long, $title, $address)
    {
        $telegram = new Telegram($this->ci->config->item('bot_token', 'telegram'));
        $chat_id = $this->ci->config->item('chat_id', 'telegram');
        $content = ['chat_id' => $chat_id, 'latitude' => $lat, "longitude" => $long, "title" => $title, "address" => $address];
        return $telegram->sendVenue($content);
    }
    public function sendcontact($phone, $f_name, $l_name = false)
    {
        $telegram = new Telegram($this->ci->config->item('bot_token', 'telegram'));
        $chat_id = $this->ci->config->item('chat_id', 'telegram');
        $content = ['chat_id' => $chat_id, 'phone_number' => $phone, "first_name" => $f_name, "last_name" => $l_name];
        return $telegram->sendContact($content);
    }
}
