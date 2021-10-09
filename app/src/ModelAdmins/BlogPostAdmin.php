<?php

namespace Guide\GraphQL;

use Guide\GraphQL\BlogPost;
use SilverStripe\Admin\ModelAdmin;

class BlogPostAdmin extends ModelAdmin {

    private static $managed_models = [
        BlogPost::class
    ];

    private static $url_segment = 'blogposts';

    private static $menu_title = 'Blogposts';

    private static $menu_icon_class = 'font-icon-clipboard-pencil';
}
