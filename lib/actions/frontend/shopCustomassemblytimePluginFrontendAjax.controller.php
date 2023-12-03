<?php

class shopCustomassemblytimePluginFrontendAjaxController extends waJsonController
{
    // возвращаем данные на сайт по Ajax
    // при запросе по ссылке /cartadded/ajax
    public function execute()
    {
        $class = new shopCustomassemblytimePluginBase();
        $result = $class->getData();
        return $this->response = ['status_text' => $result];
    }
}