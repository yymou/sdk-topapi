<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappTemplateQueryappMiniAppEntityTemplateDto {

    /**
        小程序app_id
     **/
    private $app_id;

    /**
        小程序icon
     **/
    private $app_icon;

    /**
        小程序描述
     **/
    private $app_description;

    /**
        小程序名称
     **/
    private $app_name;

    /**
        appkey
     **/
    private $appkey;


    public function getAppId() : string{
        return $this->app_id;
    }

    public function setAppId(string $appId){
        $this->app_id = $appId;
    }

    public function getAppIcon() : string{
        return $this->app_icon;
    }

    public function setAppIcon(string $appIcon){
        $this->app_icon = $appIcon;
    }

    public function getAppDescription() : string{
        return $this->app_description;
    }

    public function setAppDescription(string $appDescription){
        $this->app_description = $appDescription;
    }

    public function getAppName() : string{
        return $this->app_name;
    }

    public function setAppName(string $appName){
        $this->app_name = $appName;
    }

    public function getAppkey() : string{
        return $this->appkey;
    }

    public function setAppkey(string $appkey){
        $this->appkey = $appkey;
    }


}

