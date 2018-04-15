<?php

namespace App\Http\Controllers\Api\V1;

use App\Actions\PreOrders\GetDetailPage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class PreOrderController extends Controller
{
    private $getDetailPage;

    public function __construct(GetDetailPage $getDetailPage)
    {
        $this->getDetailPage = $getDetailPage;
    }

    public function show($id, $title = null)
    {
        $res = $this->getDetailPage->run($id, $title);

        // Transform response here if you want to...

        return $this->responseSuccess($res, Response::HTTP_OK, 'data');
    }
}
