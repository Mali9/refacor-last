<?php

interface SendNotificationInterface
{
    function sendNotification($job,$data = [], $string = null);
}
