<?php
namespace Topsdk\Topapi\Ability312\Domain;

class AlibabaAliqinTaSmsNumSendBizResult {

    /**
        返回结果
     **/
    private $model;

    /**
        返回信息描述
     **/
    private $msg;

    /**
        true表示成功，false表示失败
     **/
    private $success;

    /**
        错误码
     **/
    private $err_code;


    public function getModel() : string{
        return $this->model;
    }

    public function setModel(string $model){
        $this->model = $model;
    }

    public function getMsg() : string{
        return $this->msg;
    }

    public function setMsg(string $msg){
        $this->msg = $msg;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getErrCode() : string{
        return $this->err_code;
    }

    public function setErrCode(string $errCode){
        $this->err_code = $errCode;
    }


}

