<?php

trait Loggable
{
    public function log($message) {
        echo "Logging: $message";
    }
}