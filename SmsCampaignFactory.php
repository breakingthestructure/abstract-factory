<?php

require_once './SmsCampaign.php';
class SmsCampaignFactory implements CampaignFactoryInterface
{

    public function getCampaign(): CampaignInterface
    {
        return new SmsCampaign();
    }
}