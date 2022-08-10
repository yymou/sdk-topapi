<?php
namespace Topsdk\Topapi\Ability312\Domain;

class AlibabaAliqinTaNumberSinglecallbyttsResult {

    /**
        返回值
     **/
    private $model;

    /**
        信息
     **/
    private $msg;

    /**
        成功，失败
     **/
    private $success;


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


}

