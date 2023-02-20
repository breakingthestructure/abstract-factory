<?php


class SmsCampaign implements CampaignInterface
{

    public function start(array $data): string
    {
        return '=== return SmsCampaign start ==== name= ' . $data['name'] . '=====<br>';
    }
}