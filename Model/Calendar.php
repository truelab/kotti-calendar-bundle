<?php

namespace Truelab\KottiCalendarBundle\Model;

use Truelab\KottiModelBundle\Model\Document;
use Truelab\KottiModelBundle\TypeInfo\TypeInfo;

/**
 * @TypeInfo({
 *   "table" = "calendars",
 *   "type"  = "calendar",
 *   "associated_table" = "documents",
 *   "association" = "calendars.id = documents.id"
 * })
 */
class Calendar extends Document
{

}
