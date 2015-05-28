<?php

namespace Truelab\KottiCalendarBundle\Model;

use Truelab\KottiModelBundle\Model\Document;
use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * @TypeInfo({
 *   "table" = "events",
 *   "type"  = "event",
 *   "fields" = {"start", "end", "all_day", "link_to_file"},
 *   "associated_table" = "documents",
 *   "association" = "events.id = documents.id"
 * })
 */
class Event extends Document implements EventInterface
{
    use EventTrait;
}
