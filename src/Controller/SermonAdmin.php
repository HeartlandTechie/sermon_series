<?php
namespace HearlandTechie\SermonSeries\Controller;

use HearlandTechie\SermonSeries\Model\Sermon;
use SilverStripe\Admin\ModelAdmin;
use HearlandTechie\SermonSeries\Model\Series;

class SermonAdmin extends ModelAdmin
{

private static $menu_title = 'Sermons';


private static $url_segment = 'sermons';

private static $managed_models = [
Sermon::class,
];
}
