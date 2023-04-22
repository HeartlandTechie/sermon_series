<?
namespace HearlandTechie\SermonSeries;

use PageController;

class SeriesHolderController extends PageController
{

    private static $allowed_actions = [
        'test'
    ];

    public function test()
    {
        die('it works');

    }
}
