<?php
namespace HearlandTechie\SermonSeries\Controller;

use PageController;

class SeriesPageController extends PageController
{

    private static $allowed_actions = [
        'testing'
    ];

    public function testing()
    {
        die('it works');

    }

    public function SeriesInfo()
    {
        return HeartlandTechie\SermonSeries\Model\Series::get()->filter(array('FeaturedOnHomePage' => true));
    }
}
