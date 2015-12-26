<?php
/**
 * User: xiahaihu2009@gmail.com
 * Date: 15/12/5
 * Time: 10:53
 */

namespace App\Helpers;

class Pagination
{
    protected $page;
    protected $pagesize;
    protected $total;

    protected static $_property = ['page', 'pagesize', 'total'];

    public function __construct($pagesize, $page = 1, $total = 0)
    {
        $this->page = intval($page) > 0 ? intval($page) : 1;
        $this->pagesize = intval($pagesize) > 0 ? intval($pagesize) : 1;
        $this->total = intval($this->total);
    }

    /**
     * is triggered when invoking inaccessible methods in an object context.
     *
     * @param $name string
     * @param $arguments array
     * @return mixed
     * @link http://php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
     */
    function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        $action = substr($name, 0, 3);
        $method = strtolower(substr($name, 3));
        if ($action == 'get') {
            if (property_exists($this, $method)) {
                return $this->{$method};
            }
        } else if ($action == 'set') {
            if (property_exists($this, $method)) {
                $this->{$method} = $arguments[0];
            }
        }
    }

    public function toArray()
    {
        return [
            'total' => $this->total,
            'page' => $this->page,
            'pagesize' => $this->pagesize,
            'totalpage' => intval(ceil($this->total / $this->pagesize)),
        ];
    }

    public function render()
    {

    }
}