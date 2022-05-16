<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('login'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('main', 'MainCtrl',	['user','admin']);
Utils::addRoute('logout', 'LoginCtrl');
//Utils::addRoute('shop', 'ShopCtrl',	['user','admin']);
//Utils::addRoute('plan', 'PlanCtrl',	['user','admin']);
//Utils::addRoute('calc', 'CalcCtrl',	['user','admin']);
