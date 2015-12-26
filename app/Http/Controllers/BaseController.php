<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/4
 * Time: 21:01
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $page;

    protected $pagesize;

    protected $orderBy;

    public function __construct()
    {
        $this->page = config('pagination.page');
        $this->pagesize = config('pagination.pagesize');
        $this->orderBy = '';
    }

    /**
     * @param Request $request
     */
    protected function filterPage(Request $request)
    {
        $page = intval($request->get(config('pagination.fields.page')));
        $pagesize = intval($request->get(config('pagination.fields.pagesize')));
        $this->page = $page > 0 ? $page : $this->page;
        $this->pagesize = $pagesize > 0 ? $pagesize : $this->pagesize;
    }

    protected function filterOrder(Request $request)
    {
        $this->orderBy = $request->get(config('pagination.fields.orderby'));
    }
}