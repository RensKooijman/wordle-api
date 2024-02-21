<?php

require_once 'vendor/autoload.php';

use Models\Woorden;

class GetRequestHandler
{
    public array $responseData;
    public string $acceptType = 'succes';
    
    public function processRequest(): void
    {
        $obj = new Woorden();
        $arrResults = $obj->getAll();
        $result = [];
        foreach ($arrResults as $objResult) {
            $result[] = $objResult->getColumns();
        }

        $this->responseData['result'] = $result;
    }

    public function sendResponse(): string
    {
        $this->processRequest();
        header("Content-type: $this->acceptType; charset=UTF-8");
        return json_encode($this->responseData['result']);
    }
}
$object = new GetRequestHandler();
echo var_dump($object->sendResponse());
?>