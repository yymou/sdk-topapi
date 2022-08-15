<?php
namespace Topsdk\Topapi\Ability2893\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoOpentradeCustomizationRefundEnableRequest {

    /**
        主订单ID
     **/
    private $tradeId;


    public function getTradeId() : int{
        return $this->tradeId;
    }

    public function setTradeId(int $tradeId){
        $this->tradeId = $tradeId;
    }


    public function getApiName() : string {
        return "taobao.opentrade.customization.refund.enable";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->tradeId)) {
            $requestParam["trade_id"] = TopUtil::convertBasic($this->tradeId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

