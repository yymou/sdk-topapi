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
use Topsdk\Topapi\Defaultability\Request\TaobaoSellercenterSubusersPageRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        查询指定账户的子账号列表
    **/
    public function taobaoSellercenterSubusersGet(TaobaoSellercenterSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        分页获取指定账户的子账号简易信息列表（新isv建议使用taobao.sellercenter.subusers.page接口）
    **/
    public function taobaoSubusersPage(TaobaoSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定用户的权限集合
    **/
    public function taobaoSellercenterUserPermissionsGet(TaobaoSellercenterUserPermissionsGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.user.permissions.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取标准类目属性值
    **/
    public function taobaoItempropvaluesGet(TaobaoItempropvaluesGetRequest $request) {
        return $this->client->execute("taobao.itempropvalues.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取用户已开通消息
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取SKU
    **/
    public function taobaoItemSkuGet(TaobaoItemSkuGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.sku.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询appstore应用订购关系
    **/
    public function taobaoAppstoreSubscribeGet(TaobaoAppstoreSubscribeGetRequest $request) {
        return $this->client->execute("taobao.appstore.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        根据商品ID列表获取SKU信息
    **/
    public function taobaoItemSkusGet(TaobaoItemSkusGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.item.skus.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定卖家的角色列表
    **/
    public function taobaoSellercenterRolesGet(TaobaoSellercenterRolesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.roles.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        子账号角色的新增（指定卖家）
    **/
    public function taobaoSellercenterRoleAdd(TaobaoSellercenterRoleAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.role.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        订购关系查询
    **/
    public function taobaoVasSubscribeGet(TaobaoVasSubscribeGetRequest $request) {
        return $this->client->execute("taobao.vas.subscribe.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订单记录导出
    **/
    public function taobaoVasOrderSearch(TaobaoVasOrderSearchRequest $request) {
        return $this->client->execute("taobao.vas.order.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        订购记录导出
    **/
    public function taobaoVasSubscSearch(TaobaoVasSubscSearchRequest $request) {
        return $this->client->execute("taobao.vas.subsc.search", $request->toMap(), $request->toFileParamMap());
    }
    /**
        服务平台评价查询接口
    **/
    public function taobaoFuwuScoresGet(TaobaoFuwuScoresGetRequest $request) {
        return $this->client->execute("taobao.fuwu.scores.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝短信签名创建接口
    **/
    public function taobaoJstSmsSignnameCreate(TaobaoJstSmsSignnameCreateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.create", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝短信签名查询
    **/
    public function taobaoJstSmsSignnameQuery(TaobaoJstSmsSignnameQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝短信签名删除
    **/
    public function taobaoJstSmsSignnameDelete(TaobaoJstSmsSignnameDeleteRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.delete", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝短信签名修改
    **/
    public function taobaoJstSmsSignnameModify(TaobaoJstSmsSignnameModifyRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.jst.sms.signname.modify", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝短信模板创建
    **/
    public function taobaoJstSmsTemplateCreate(TaobaoJstSmsTemplateCreateRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝短信模板查询
    **/
    public function taobaoJstSmsTemplateQuery(TaobaoJstSmsTemplateQueryRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.query", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝短信模板删除
    **/
    public function taobaoJstSmsTemplateDelete(TaobaoJstSmsTemplateDeleteRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.delete", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝短信模板修改
    **/
    public function taobaoJstSmsTemplateModify(TaobaoJstSmsTemplateModifyRequest $request) {
        return $this->client->execute("taobao.jst.sms.template.modify", $request->toMap(), $request->toFileParamMap());
    }
    /**
        获取后台供卖家发布商品的标准商品类目
    **/
    public function taobaoItemcatsGet(TaobaoItemcatsGetRequest $request) {
        return $this->client->execute("taobao.itemcats.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        根据当前子账号登陆态，获取该子账号基本信息
    **/
    public function taobaoSubusersInfoQuery(TaobaoSubusersInfoQueryRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.info.query", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        根据外部ID取商品SKU
    **/
    public function taobaoSkusCustomGet(TaobaoSkusCustomGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.skus.custom.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户的子账号简易信息列表
    **/
    public function taobaoSubusersGet(TaobaoSubusersGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subusers.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取指定账户子账号的详细信息
    **/
    public function taobaoSubuserFullinfoGet(TaobaoSubuserFullinfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.fullinfo.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        修改指定账户子账号的基本信息
    **/
    public function taobaoSubuserInfoUpdate(TaobaoSubuserInfoUpdateRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.subuser.info.update", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        通过主账号登陆态分页查询子账号列表
    **/
    public function taobaoSellercenterSubusersPage(TaobaoSellercenterSubusersPageRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.sellercenter.subusers.page", $request->toMap(), $request->toFileParamMap(), $session);
    }
}