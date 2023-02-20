<?php

require_once 'Campaign.php';
require_once 'EmailCampaignFactory.php';
require_once 'SmsCampaignFactory.php';

$campaign = new Campaign('email');
echo $campaign->run(new EmailCampaignFactory());

$campaign = new Campaign('sms');
echo $campaign->run(new SmsCampaignFactory());
echo "end";