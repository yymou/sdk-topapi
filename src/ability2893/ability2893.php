<?php
namespace Topsdk\Topapi\Ability2893;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2893\Request\TaobaoOpentradeCustomizationRefundEnableRequest;

class Ability2893 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        定制订单设置允许仅退款
    **/
    public function taobaoOpentradeCustomizationRefundEnable(TaobaoOpentradeCustomizationRefundEnableRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.opentrade.customization.refund.enable", $request->toMap(), $request->toFileParamMap(), $session);
    }
}