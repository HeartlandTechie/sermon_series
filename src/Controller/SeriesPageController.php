<?php
namespace HearlandTechie\SermonSeries\Controller;

use PageController;

class SeriesPageController extends PageController
{

    private static $allowed_actions = [
        'testing'
    ];

    public function test()
    {
        die('it works');

    }
}
