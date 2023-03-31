<?php
namespace HearlandTechie\SermonSeries\Controller;

use SilverStripe\Admin\ModelAdmin;
use HearlandTechie\SermonSeries\Model\Series;

class SeriesAdmin extends ModelAdmin
{

private static $menu_title = 'Series';


private static $url_segment = 'series';

private static $managed_models = [
Series::class,
];
}
