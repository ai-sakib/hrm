<?php
namespace App\Http\Services;
use Rats\Zkteco\Lib\ZKTeco;

class FingerprintService {

    public function connect(){
        $zk = new ZKTeco('192.168.88.104', 8080);
        return $zk;
    }
}

