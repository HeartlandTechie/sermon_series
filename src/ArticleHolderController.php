<?php

namespace HeartlandTechie\SermonSeries;

use PageController;

class ArticleHolderController extends PageController
{
    private static $allowed_children = [
        ArticlePage::class
    ];
}
