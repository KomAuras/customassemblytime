<?php

class shopCustomassemblytimePluginBase
{
    // получает текст предупреждения для корзины
    public function getData()
    {
        $code = waRequest::cookie('shop_cart');
        if (!$code) {
            return '';
        }
        $cart = new shopCart($code);

        $showWarning = false;
        $text = "";

        foreach ($cart->items() as $item) {
            // если в корзине присутствует бренд Соколов
            // присутствие определяем по первым буквам sku_code
            if (preg_match('/^sk_/is', $item['sku_code'])) {
                $showWarning = true;
                $text = 'В корзине присутствует товар бренда "Соколов", срок доставки будет увеличен на 48 часов от текущего срока!';
                break;
            }
            //$text .= "<pre>".print_r($item,true);
        }

        if ($showWarning) {

            $template = wa()->getView();
            $template->assign(array(
                'text' => $text
            ));

            $view = wa()->getView();
            $view->assign(array(
                'text' => $template->fetch(wa()->getAppPath('plugins/customassemblytime/templates/hooks/warningTemplate.html'))
            ));

            return $view->fetch(wa()->getAppPath('plugins/customassemblytime/templates/hooks/frontendTimeAdded.html'));
        }

        return '';
    }
}