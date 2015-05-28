<?php

namespace Truelab\KottiCalendarBundle\Model;

/**
 * Trait EventTrait
 * @package Truelab\KottiCalendarBundle\Model
 */
trait EventTrait
{
    protected $start;

    protected $end;

    protected $allDay;

    protected $linkToFile;

    /**
     * @return mixed
     */
    public function getStart() {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start) {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getEnd() {
        return $this->end;
    }

    /**
     * @param mixed $end
     */
    public function setEnd($end) {
        $this->end = $end;
    }

    /**
     * @return mixed
     */
    public function getAllDay() {
        return $this->allDay;
    }

    /**
     * @param mixed $allDay
     */
    public function setAllDay($allDay) {
        $this->allDay = $allDay;
    }

    /**
     * @return mixed
     */
    public function getLinkToFile() {
        return $this->linkToFile;
    }

    /**
     * @param mixed $linkToFile
     */
    public function setLinkToFile($linkToFile) {
        $this->linkToFile = $linkToFile;
    }
}
