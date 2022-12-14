<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersPageRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterUserPermissionsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItempropvaluesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkuGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoAppstoreSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemSkusGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRolesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterRoleAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscribeGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasOrderSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoVasSubscSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoFuwuScoresGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameCreateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsSignnameModifyRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateCreateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateDeleteRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoJstSmsTemplateModifyRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoItemcatsGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersInfoQueryRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSkusCustomGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubusersGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserFullinfoGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSubuserInfoUpdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserPermitRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersPageRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        ????????????????????????????????????
    **/
    public function taobaoSellercenterSubusersGet(TaobaoSellercenterSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????????????????????????????isv????????????taobao.sellercenter.subusers.page?????????
    **/
    public function taobaoSubusersPage(TaobaoSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????
    **/
    public function taobaoSellercenterUserPermissionsGet(TaobaoSellercenterUserPermissionsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.user.permissions.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????
    **/
    public function taobaoItempropvaluesGet(TaobaoItempropvaluesGetRequest $request) {
        return $this->client->execute("taobao.itempropvalues.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ???????????????????????????
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????SKU
    **/
    public function taobaoItemSkuGet(TaobaoItemSkuGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????appstore??????????????????
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request) {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ????????????ID????????????SKU??????
    **/
    public function taobaoItemSkusGet(TaobaoItemSkusGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.skus.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ?????????????????????????????????
    **/
    public function taobaoSellercenterRolesGet(TaobaoSellercenterRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????????????????
    **/
    public function taobaoSellercenterRoleAdd(TaobaoSellercenterRoleAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.role.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request) {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request) {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request) {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????????????????
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request) {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????????????????
    **/
    public function taobaoJstSmsSignnameCreate(TaobaoJstSmsSignnameCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????
    **/
    public function taobaoJstSmsSignnameQuery(TaobaoJstSmsSignnameQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????
    **/
    public function taobaoJstSmsSignnameDelete(TaobaoJstSmsSignnameDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????
    **/
    public function taobaoJstSmsSignnameModify(TaobaoJstSmsSignnameModifyRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.modify", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????
    **/
    public function taobaoJstSmsTemplateCreate(TaobaoJstSmsTemplateCreateRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ????????????????????????
    **/
    public function taobaoJstSmsTemplateQuery(TaobaoJstSmsTemplateQueryRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ????????????????????????
    **/
    public function taobaoJstSmsTemplateDelete(TaobaoJstSmsTemplateDeleteRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.delete", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ????????????????????????
    **/
    public function taobaoJstSmsTemplateModify(TaobaoJstSmsTemplateModifyRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.modify", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ??????????????????????????????????????????????????????
    **/
    public function taobaoItemcatsGet(TaobaoItemcatsGetRequest $request) {
        return $this->client->execute("taobao.itemcats.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ???????????????????????????????????????????????????????????????
    **/
    public function taobaoSubusersInfoQuery(TaobaoSubusersInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????ID?????????SKU
    **/
    public function taobaoSkusCustomGet(TaobaoSkusCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.skus.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ????????????????????????????????????????????????
    **/
    public function taobaoSubusersGet(TaobaoSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????????????????
    **/
    public function taobaoSubuserFullinfoGet(TaobaoSubuserFullinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.fullinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ??????????????????????????????????????????
    **/
    public function taobaoSubuserInfoUpdate(TaobaoSubuserInfoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.info.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????
    **/
    public function taobaoTmcUserCancel(TaobaoTmcUserCancelRequest $request) {
        return $this->client->execute("taobao.tmc.user.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        ???????????????????????????????????????
    **/
    public function taobaoTmcUserPermit(TaobaoTmcUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        ???????????????????????????????????????????????????
    **/
    public function taobaoSellercenterSubusersPage(TaobaoSellercenterSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
}