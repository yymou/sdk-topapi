<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateOfflineappMiniappInstanceAppOfflineDto {

    /**
        端信息
     **/
    private $client;

    /**
        错误信息
     **/
    private $fail_msg;

    /**
        是否成功
     **/
    private $success;


    public function getClient() : string{
        return $this->client;
    }

    public function setClient(string $client){
        $this->client = $client;
    }

    public function getFailMsg() : string{
        return $this->fail_msg;
    }

    public function setFailMsg(string $failMsg){
        $this->fail_msg = $failMsg;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

