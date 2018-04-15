<?php
/**
 * Created by PhpStorm.
 * User: phuocnt
 * Date: 4/15/18
 * Time: 6:30 AM
 */

namespace App\Actions\PreOrders;

use App\Actions\BaseAction;
use App\Tasks\PreOrders\GetDetailPageTask;
use App\Tasks\PreOrders\GetOrderPlaces;

class GetDetailPage extends BaseAction
{
    /**
     * @var GetDetailPageTask
     */
    private $getDetailPageTask;
    /**
     * @var GetOrderPlaces
     */
    private $getOrderPlaces;

    public function __construct(GetDetailPageTask $getDetailPageTask, GetOrderPlaces $getOrderPlaces)
    {
        $this->getDetailPageTask = $getDetailPageTask;
        $this->getOrderPlaces    = $getOrderPlaces;
    }

    public function run($preOrderId, $title = null)
    {
        $preOrder    = $this->getDetailPageTask->run($preOrderId);
        $orderPlaces = $this->getOrderPlaces->run($preOrder->purchase_from_id, $preOrder->deal_in_id);
        return array_merge($preOrder->toArray(), $orderPlaces);
    }
}
