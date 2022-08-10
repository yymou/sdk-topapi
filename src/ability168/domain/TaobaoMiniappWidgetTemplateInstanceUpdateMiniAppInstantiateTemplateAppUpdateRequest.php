<?php
namespace Topsdk\Topapi\Ability168\Domain;

class TaobaoMiniappWidgetTemplateInstanceUpdateMiniAppInstantiateTemplateAppUpdateRequest {

    /**
        小部件实例id
     **/
    private $entity_id;

    /**
        小部件模版id
     **/
    private $template_id;

    /**
        小部件模版版本
     **/
    private $template_version;


    public function getEntityId() : string{
        return $this->entity_id;
    }

    public function setEntityId(string $entityId){
        $this->entity_id = $entityId;
    }

    public function getTemplateId() : string{
        return $this->template_id;
    }

    public function setTemplateId(string $templateId){
        $this->template_id = $templateId;
    }

    public function getTemplateVersion() : string{
        return $this->template_version;
    }

    public function setTemplateVersion(string $templateVersion){
        $this->template_version = $templateVersion;
    }


}

