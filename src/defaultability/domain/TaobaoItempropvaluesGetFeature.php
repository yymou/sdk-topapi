<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItempropvaluesGetFeature {

    /**
        属性键
     **/
    private $attr_key;

    /**
        属性值
     **/
    private $attr_value;


    public function getAttrKey() : string{
        return $this->attr_key;
    }

    public function setAttrKey(string $attrKey){
        $this->attr_key = $attrKey;
    }

    public function getAttrValue() : string{
        return $this->attr_value;
    }

    public function setAttrValue(string $attrValue){
        $this->attr_value = $attrValue;
    }


}

