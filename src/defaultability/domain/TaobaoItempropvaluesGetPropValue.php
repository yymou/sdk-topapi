<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoItempropvaluesGetPropValue {

    /**
        类目ID
     **/
    private $cid;

    /**
        属性 ID
     **/
    private $pid;

    /**
        属性值ID
     **/
    private $vid;

    /**
        属性值
     **/
    private $name;

    /**
        属性名
     **/
    private $prop_name;

    /**
        状态。可选值:normal(正常),deleted(删除)
     **/
    private $status;

    /**
        属性值别名
     **/
    private $name_alias;

    /**
        是否为父类目属性
     **/
    private $is_parent;

    /**
        排列序号。取值范围:大于零的整数
     **/
    private $sort_order;

    /**
        属性值feature
     **/
    private $features;


    public function getCid() : int{
        return $this->cid;
    }

    public function setCid(int $cid){
        $this->cid = $cid;
    }

    public function getPid() : int{
        return $this->pid;
    }

    public function setPid(int $pid){
        $this->pid = $pid;
    }

    public function getVid() : int{
        return $this->vid;
    }

    public function setVid(int $vid){
        $this->vid = $vid;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getPropName() : string{
        return $this->prop_name;
    }

    public function setPropName(string $propName){
        $this->prop_name = $propName;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getNameAlias() : string{
        return $this->name_alias;
    }

    public function setNameAlias(string $nameAlias){
        $this->name_alias = $nameAlias;
    }

    public function getIsParent() : bool{
        return $this->is_parent;
    }

    public function setIsParent(bool $isParent){
        $this->is_parent = $isParent;
    }

    public function getSortOrder() : int{
        return $this->sort_order;
    }

    public function setSortOrder(int $sortOrder){
        $this->sort_order = $sortOrder;
    }

    public function getFeatures() : array{
        return $this->features;
    }

    public function setFeatures(array $features){
        $this->features = $features;
    }


}

