<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsSignnameDeleteTopDeleteSmsSignRequest {

    /**
        待删除的签名
     **/
    private $sign_name;


    public function getSignName() : string{
        return $this->sign_name;
    }

    public function setSignName(string $signName){
        $this->sign_name = $signName;
    }


}

