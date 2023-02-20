<?php

require_once 'interface/CampaignFactoryInterface.php';
require_once 'EmailCampaign.php';

class EmailCampaignFactory implements CampaignFactoryInterface
{

    public function getCampaign(): CampaignInterface
    {
        return new EmailCampaign();
    }
}