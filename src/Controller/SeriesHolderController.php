<?
namespace HearlandTechie\SermonSeries\Controller;

use PageController;

class SeriesHolderController extends PageController
{

    private static $allowed_children = [
        SeriesPage::class
    ];

}
