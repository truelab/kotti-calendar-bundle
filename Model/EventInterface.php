<?php

namespace Truelab\KottiCalendarBundle\Model;

/**
 * Interface EventInterface
 * @package Truelab\KottiCalendarBundle\Model
 */
interface EventInterface
{
    /**
     * @return mixed
     */
    public function getStart();

    /**
     * @param mixed $start
     */
    public function setStart($start);

    /**
     * @return mixed
     */
    public function getEnd();
    /**
     * @param mixed $end
     */
    public function setEnd($end);

    /**
     * @return mixed
     */
    public function getAllDay();

    /**
     * @param mixed $allDay
     */
    public function setAllDay($allDay);

    /**
     * @return mixed
     */
    public function getLinkToFile();

    /**
     * @param mixed $linkToFile
     */
    public function setLinkToFile($linkToFile);
}
