<?php
/**
 * Created by PhpStorm.
 * User: phuocnt
 * Date: 4/15/18
 * Time: 9:40 AM
 */

namespace App\Tasks\PreOrders;

use App\Repositories\PreOrderRepo;
use App\Tasks\BaseTask;

class GetDetailPageTask extends BaseTask
{
    /**
     * @var PreOrderRepo
     */
    private $preOrderRepo;

    public function __construct(PreOrderRepo $preOrderRepo)
    {
        $this->preOrderRepo = $preOrderRepo;
    }

    public function run($preOrderId)
    {
        return $this->preOrderRepo->with(['category', 'comments', 'medias', 'variants', 'deliveryOptions'])
                                  ->find($preOrderId); //Find or fail
    }
}