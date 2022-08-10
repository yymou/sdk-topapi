<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniapppTemplateInstantiateMiniAppEntityDto {

    /**
        appkey
     **/
    private $appkey;

    /**
        小程序appId
     **/
    private $id;

    /**
        小程序名称
     **/
    private $app_name;

    /**
        小程序描述
     **/
    private $app_description;

    /**
        icon
     **/
    private $app_icon;

    /**
        当前版本
     **/
    private $online_version;

    /**
        线上码
     **/
    private $online_code;


    public function getAppkey() : string{
        return $this->appkey;
    }

    public function setAppkey(string $appkey){
        $this->appkey = $appkey;
    }

    public function getId() : string{
        return $this->id;
    }

    public function setId(string $id){
        $this->id = $id;
    }

    public function getAppName() : string{
        return $this->app_name;
    }

    public function setAppName(string $appName){
        $this->app_name = $appName;
    }

    public function getAppDescription() : string{
        return $this->app_description;
    }

    public function setAppDescription(string $appDescription){
        $this->app_description = $appDescription;
    }

    public function getAppIcon() : string{
        return $this->app_icon;
    }

    public function setAppIcon(string $appIcon){
        $this->app_icon = $appIcon;
    }

    public function getOnlineVersion() : string{
        return $this->online_version;
    }

    public function setOnlineVersion(string $onlineVersion){
        $this->online_version = $onlineVersion;
    }

    public function getOnlineCode() : string{
        return $this->online_code;
    }

    public function setOnlineCode(string $onlineCode){
        $this->online_code = $onlineCode;
    }


}

