<?php
namespace Topsdk\Topapi\Ability139\Domain;

class TaobaoOpenlinkSessionGetSessionInfo {

    /**
        skey
     **/
    private $skey;

    /**
        openId
     **/
    private $open_id;

    /**
        accessToken
     **/
    private $access_token;

    /**
        unionId
     **/
    private $union_id;


    public function getSkey() : string{
        return $this->skey;
    }

    public function setSkey(string $skey){
        $this->skey = $skey;
    }

    public function getOpenId() : string{
        return $this->open_id;
    }

    public function setOpenId(string $openId){
        $this->open_id = $openId;
    }

    public function getAccessToken() : string{
        return $this->access_token;
    }

    public function setAccessToken(string $accessToken){
        $this->access_token = $accessToken;
    }

    public function getUnionId() : string{
        return $this->union_id;
    }

    public function setUnionId(string $unionId){
        $this->union_id = $unionId;
    }


}

