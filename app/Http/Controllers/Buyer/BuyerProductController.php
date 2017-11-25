<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerProductController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('scope:read-general')->only('index');
        $this->middleware('can:view,buyer')->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Buyer $buyer)
    {
        //$products = $buyer->transactions->product;//Property [product] does not exist on this collection instance
        $products = $buyer->transactions()->with('product')->get()
            ->pluck('product');//use eager loading and pluck to ignore the collection and get only the p
        return $this->showAll($products);
    }
}
