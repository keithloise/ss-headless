<?php

namespace Guide\GraphQL;

use SilverStripe\ORM\DataObject;

class BlogPost extends DataObject
{
    private static $db = [
        "Title" => "Varchar(255)",
        "Content" => "HTMLText"
    ];

    private static $table_name = "BlogPost";
}