<?php

class MyLogger
{
    public $standaardtekst1 = "INFO";
    public $standaardtekst2 = "ERROR";
    function log($message)
    {
        return ("Result " . $this->standaardtekst1 . " : " . $message);
    }
    function error($message)
    {
        return ("Result " . $this->standaardtekst2 . " : " .  $message);
    }
}
$logger = new MyLogger();
$antwoord1 = $logger->log('hello world', 'INFO'); // Result: 'INFO: hello world'
print_r($antwoord1 . PHP_EOL);
$antwoord2 = $logger->error('dit is een error'); // Result: 'ERROR: dit is een error'
print_r($antwoord2);

?>