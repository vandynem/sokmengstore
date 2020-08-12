<?php

require_once(DIR_SYSTEM . 'engine/restcontroller.php');

class ControllerRestLocalisation extends RestController {

    public function index()
    {
        $this->checkPlugin();

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $this->json["data"] = $this->load->language("");
        } else {
            $this->statusCode = 405;
            $this->allowedHeaders = array("GET");
        }

        $this->sendResponse();
    }

}
