<?
namespace HearlandTechie\SermonSeries;

use Page;

class SeriesPage extends Page
{

    private static $db = [
        'Date' => 'Date',
        'Teaser' => 'Text',
        'Author' => 'Varchar',
    ];


}
