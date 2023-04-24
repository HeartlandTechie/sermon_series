<?
namespace HearlandTechie\SermonSeries;

use PageController;

class SeriesHolderController extends PageController
{

    private static $allowed_children = [
        SeriesPage::class
    ];

}
