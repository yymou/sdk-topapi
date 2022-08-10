<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoItempropvaluesGetRequest {

    /**
        需要返回的字段。目前支持有：cid,pid,prop_name,vid,name,name_alias,status,sort_order
     **/
    private $fields;

    /**
        属性和属性值 id串，格式例如(pid1;pid2)或(pid1:vid1;pid2:vid2)或(pid1;pid2:vid2)
     **/
    private $pvs;

    /**
        叶子类目ID ,通过taobao.itemcats.get获得叶子类目ID
     **/
    private $cid;

    /**
        假如传2005-01-01 00:00:00，则取所有的属性和子属性(状态为删除的属性值不返回prop_name)
     **/
    private $datetime;

    /**
        获取类目的类型：1代表集市、2代表天猫
     **/
    private $type;

    /**
        属性的Key，支持多条，以“,”分隔
     **/
    private $attrKeys;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getPvs() : string{
        return $this->pvs;
    }

    public function setPvs(string $pvs){
        $this->pvs = $pvs;
    }

    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getDatetime() : string{
        return $this->datetime;
    }

    public function setDatetime(string $datetime){
        $this->datetime = $datetime;
    }

    public function getType() : int{
        return $this->type;
    }

    public function setType(int $type){
        $this->type = $type;
    }

    public function getAttrKeys() : array{
        return $this->attrKeys;
    }

    public function setAttrKeys(array $attrKeys){
        $this->attrKeys = $attrKeys;
    }


    public function getApiName() : string {
        return "taobao.itempropvalues.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->pvs)) {
            $requestParam["pvs"] = TopUtil::convertBasic($this->pvs);
        }

        if (!TopUtil::checkEmpty($this->cid)) {
            $requestParam["cid"] = TopUtil::convertBasic($this->cid);
        }

        if (!TopUtil::checkEmpty($this->datetime)) {
            $requestParam["datetime"] = TopUtil::convertBasic($this->datetime);
        }

        if (!TopUtil::checkEmpty($this->type)) {
            $requestParam["type"] = TopUtil::convertBasic($this->type);
        }

        if (!TopUtil::checkEmpty($this->attrKeys)) {
            $requestParam["attr_keys"] = TopUtil::convertStructList($this->attrKeys);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

