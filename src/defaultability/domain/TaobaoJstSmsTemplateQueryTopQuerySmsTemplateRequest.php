<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoJstSmsTemplateQueryTopQuerySmsTemplateRequest {

    /**
        要查询的模板CODE
     **/
    private $template_code;


    public function getTemplateCode() : string{
        return $this->template_code;
    }

    public function setTemplateCode(string $templateCode){
        $this->template_code = $templateCode;
    }


}

