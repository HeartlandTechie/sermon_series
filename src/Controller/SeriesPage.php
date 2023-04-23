<?php
namespace HearlandTechie\SermonSeries\Controller;

use Page;

class SeriesPage extends Page
{

    private static $table_name = 'Series';
    private static $db = [
        'Date' => 'Date',
        'Teaser' => 'Text',
        'Author' => 'Varchar',
    ];


}
