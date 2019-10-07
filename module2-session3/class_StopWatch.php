
<?php
class StopWatch
{
    private $startTime;
    private $endTime;
    function __construct()
    {
        $this->startTime;
        $this->endTime;
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function start()
    {
        $this->startTime = "2019-10-03 10:44:00";
    }
    public function end()
    {
        $this->endTime = date("y-m-d H:i:s");
    }
    public function getElapsedTime()
    {
        $this->startTime = date_parse_from_format('Y-m-d H:i:s', $this->startTime);
        $time_stamp1 = mktime($this->endTime['hour'], $this->endTime['minute'], $this->endTime['second'], $this->endTime['month']
            , $this->endTime['day'], $this->endTime['year']);
        echo $time_stamp1."<br>";
        echo $this->endTime;
        return ($this->end() - $time_stamp1);
    }
}
$objStopWatch = new StopWatch();
echo $objStopWatch->getElapsedTime();