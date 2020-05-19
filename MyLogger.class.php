<?php
class MyLogger
{
    public function log($message, $type)
    {
        switch ($type) {
            case 'INFO':
                $this->info($message);
                break;
            case 'ERROR':
                $this->error($message);
                break;
            case 'WARNING':
                $this->warning($message);
                break;
            case 'DEBUG':
                $this->debug($message);
                break;
            default:
                echo $message;
                break;
        }
    }

    private function logWithTime($message)
    {
        echo '[' . date('H:i:s') . '] ' . $message;
    }

    public function error($message)
    {
        $this->logWithTime('ERROR: ' . $message . "\n");
    }

    public function info($message)
    {
        $this->logWithTime('INFO: ' . $message . "\n");
    }

    public function warning($message)
    {
        $this->logWithTime('WARNING: ' . $message . "\n");
    }

    public function debug($message)
    {
        $this->logWithTime('DEBUG: ' . $message . "\n");
    }
}


$logger = new MyLogger();
$logger->log('Hey! :)', 'INFO');
$logger->error('This is an error!');
$logger->warning('warning test');