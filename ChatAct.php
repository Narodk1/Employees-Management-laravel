<?php
class chatAct {
    public  function getmessage(){
        //recuperer le message
        return $this->decode();
    }
        public function setMessage($message, $pseudo): void
        {
            $json = $this->decode(); // On décode le fichier.json
            // On ajoute les nouvelles données dans le tableau chatAct du json
            array_push($json['chatAct'], [
                "pseudo" => $pseudo,
                "message" => $message,
                "date" => date('d/m/Y H:i')
            ]);
            // On insere dans le fichier json
            $str = json_encode($json, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
            file_put_contents(__DIR__.'chatAct.json', $str);
        }
    // Decode du fichier json pour recuperer le content
    private  function decode(){
        //recupere le contenu sous form tableau de file json et le returner
        return json_decode(file_get_contents(__DIR__.'tsconfig.json'),JSON_UNESCAPED_UNICODE);
  }
}