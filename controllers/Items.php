<?php

namespace Adrenth\RssFetcher\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Class Items
 *
 * @package Adrenth\RssFetcher\Controllers
 */
class Items extends Controller
{
    /**
     * {@inheritdoc}
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    /**
     * @type string
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @type string
     */
    public $listConfig = 'config_list.yaml';

    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Adrenth.RssFetcher', 'rssfetcher', 'items');
    }
}
