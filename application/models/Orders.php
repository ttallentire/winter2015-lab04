<?php

/**
 * Data access wrapper for "orders" table.
 *
 * @author jim
 */
class Orders extends MY_Model {

    // constructor
    function __construct() {
        parent::__construct('orders', 'num');
    }

    // add an item to an order
    function add_item($num, $code) {
        
    }

    // calculate the total for an order
    function total($num) {
        $order = $this->orderitems->some('order', 'num');
        $total = 0;
        /*foreach($order->$items as $item)
        {       
            $total += $item->;
        }*/
        return $total;
    }

    // retrieve the details for an order
    function details($num) {
        
    }

    // cancel an order
    function flush($num) {
        
    }

    // validate an order
    // it must have at least one item from each category
    function validate($num) {
        return false;
    }

}
