<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsSignnameModifyTopModifySmsSignRequest {

    /**
        要修改的签名,不能修改签名
     **/
    private $sign_name;

    /**
        请输入签名用途（必填）、企业官网链接（可提升通过率）
     **/
    private $remark;

    /**
        0--企事业单位的全程或简称   1--已备案网站  2--已上线APP  3--公众号或小程序 4--电商平台店铺名 5--已注册商标名
     **/
    private $sign_source;

    /**
        上传的证明文件
     **/
    private $sign_file_list;


    public function getSignName() : string{
        return $this->sign_name;
    }

    public function setSignName(string $signName){
        $this->sign_name = $signName;
    }

    public function getRemark() : string{
        return $this->remark;
    }

    public function setRemark(string $remark){
        $this->remark = $remark;
    }

    public function getSignSource() : int{
        return $this->sign_source;
    }

    public function setSignSource(int $signSource){
        $this->sign_source = $signSource;
    }

    public function getSignFileList() : array{
        return $this->sign_file_list;
    }

    public function setSignFileList(array $signFileList){
        $this->sign_file_list = $signFileList;
    }


}

