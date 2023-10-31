<?php
    $Slider = new \Library\plugins('Slider','owl');
    $plugin_css .= $Slider->css();
    $plugin_js .= $Slider->js();

    $Search = new \Library\plugins('Search','type1');
    $plugin_css .= $Search->css();
    $plugin_js .= $Search->js();

    $Class = new \Library\plugins('News','type1');
    $plugin_css .= $Class->css();

    $Listgs = new \Library\plugins('News','type2');
    //$plugin_css .= $Listgs->css();

    $giasu = new \Library\plugins('News','owl');
    $plugin_css .= $giasu->css();
    $plugin_js .= $giasu->js();

    $doitac = new \Library\plugins('doitac','type1');
    $plugin_css .= $doitac->css();
    $plugin_js .= $doitac->js();

    $News = new \Library\plugins('News','runtop');
    $plugin_css .= $News->css();
    $plugin_js .= $News->js();

    $Album = new \Library\plugins('Album','owl');
    $plugin_css .= $Album->css();
    $plugin_js .= $Album->js();

    $Customers = new \Library\plugins('khachhang','runtop');
    $plugin_css .= $Customers->css();
    $plugin_js .= $Customers->js();

    $About = new \Library\plugins('About','type1');
    $plugin_css .= $About->css();
?>

