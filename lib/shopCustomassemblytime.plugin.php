<?php

class shopCustomassemblytimePlugin extends shopPlugin
{
    // заполняем данные в хуке frontend_order_cart_vars
    // в переменную after_items
    public function frontendCustomAssemblyTime()
    {
        $class = new shopCustomassemblytimePluginBase();
        $result = $class->getData();

        if ($result) {
            return [
                'bottom' => $result
            ];
        }
    }

    // добавялем загрузку JS файла на сайте
    public function frontendFoot()
    {
        $view = wa()->getView();
        return $view->fetch($this->path . '/templates/frontend/script.html');
    }

    public function orderActionCreate($params)
    {
        //waLog::dump($params, 'orderActionCreate.log');
    }
}