<?php
/**
 * Created by PhpStorm.
 * User: phuocnt
 * Date: 4/15/18
 * Time: 9:40 AM
 */

namespace App\Tasks\PreOrders;

use App\Repositories\CountryRepo;
use App\Tasks\BaseTask;

class GetOrderPlaces extends BaseTask
{
    /**
     * @var CountryRepo
     */
    private $countryRepo;

    public function __construct(CountryRepo $countryRepo)
    {
        $this->countryRepo = $countryRepo;
    }

    public function run($purchaseFromId, $dealInId)
    {
        $orderInCountries = $this->countryRepo->findWhereIn('id', [$purchaseFromId, $dealInId]);
        return [
            'purchase_from' => $orderInCountries->firstWhere('id', $purchaseFromId),
            'deal_in'       => $orderInCountries->firstWhere('id', $dealInId),
        ];
    }
}