<?php
include_once('constants.php');
include_once('singleton.class.php');
include_once('model.class.php');
Singleton::setConfiguration(HOST, 3306, DB, USER, PASS);
$menu = new Model(HOST, 3306, DB, USER, PASS, 'menu');
$list = Singleton::getAllData('SELECT menu_id FROM menu WHERE menu_jour IS NOT NULL');
foreach ($list as $key => $value) {
    $menu->update(array('menu_jour' => null), 'menu_id', $value['menu_id']);
}
$menu->update(array('menu_jour' => 1), 'menu_id', $_POST['menu_id']);
header('location:back_office.php#menu');
