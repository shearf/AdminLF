<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/5
 * Time: 11:00
 */

return [


    'fields' => [
        'page' => env('PAGINATION_PAGE_FIELD', '_page'),
        'pagesize' => env('PAGINATION_PAGESIZE_FIELD', '_pagesize'),
        'orderby' => env('PAGINATION_ORDER_FIELD', '_orderby'),
    ],

    'page' => env('PAGINATION_PAGE', 1),

    'pagesize' => env('PAGINATION_PAGESIZE', 20),

];