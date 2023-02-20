<?php


class Campaign
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run(CampaignFactoryInterface $factory): string {
        $data = $factory->getCampaign();
        return $data->start(['name' => $this->name]);
    }
}