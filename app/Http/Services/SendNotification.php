<?php

class SendNotification
{
    private $notify;
    private $job;
    public function __construct(SendNotificationInterface $notify,$job)
    {
        $this->notify = $notify;
        $this->job = $job;
    }
    function send()
    {

        $this->notify->sendNotification($this->job);
    }
}
