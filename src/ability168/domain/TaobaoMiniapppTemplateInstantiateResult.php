<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniapppTemplateInstantiateResult {

    /**
        错误码
     **/
    private $err_code;

    /**
        错误信息
     **/
    private $err_message;

    /**
        model
     **/
    private $model;

    /**
        是否成功
     **/
    private $success;


    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }

    public function getErrMessage() : string{
        return $this->err_message;
    }

    public function setErrMessage(string $errMessage){
        $this->err_message = $errMessage;
    }

    public function getModel() : TaobaoMiniapppTemplateInstantiateMiniAppEntityDto{
        return $this->model;
    }

    public function setModel(TaobaoMiniapppTemplateInstantiateMiniAppEntityDto $model){
        $this->model = $model;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

