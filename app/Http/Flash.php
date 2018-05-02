<?php
/**
 * Created by PhpStorm.
 * User: Esmaiel
 * Date: 4/17/2018
 * Time: 9:29 PM
 */

namespace App\Http;

class Flash
{
    public function create($title,$message,$level ,$key='flash_message')
    {
        return session()->flash($key,[
            'title' =>$title,
            'message' =>$message,
            'icon' =>$level


        ]);
    }
    public function info($title,$message)
    {
     return $this->create($title,$message, 'info');
    }
    public function success($title,$message)
    {
        return $this->create($title,$message, 'success');

    }
    public function warning($title,$message)
    {
        return $this->create($title,$message, 'warning');


    }
    public function error($title,$message)
    {
        return $this->create($title,$message, 'error');


    }
    public function overly($title,$message,$level = 'success')
    {
        return $this->create($title,$message, $level, 'flash_message_overlay');


    }
}