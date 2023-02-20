<?php

require_once './interface/CampaignInterface.php';

class EmailCampaign implements CampaignInterface
{

    public function start(array $data): string
    {
        return '=== return EmailCampaign start ==== name= ' . $data['name'] . '=====<br>';
    }
}