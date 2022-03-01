<?php
class chat {
    public  function getmessage(){
        //recuperer le message
    }
    public function  setmessage(){
        //modifier le message
    }
    private  function decode(){
        //recupere le contenu de file json et le returner
        $file =file_get_contents('tsconfig.json');
        $json=json_decode($file,JSON_UNESCAPED_UNICODE);
        return $file;
  }
}