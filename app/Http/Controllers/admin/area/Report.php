<?php

namespace App\Http\Controllers\admin\area;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Http\Requests\admin\area\createRequest;
use App\Http\Requests\admin\area\editRequest;
use Session;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


use App\Models\Area as mArea;
use App\Repositories\admin\area\AreaContract as rArea;

use App\Repositories\admin\governorate\GovernorateContract as rGovernorate;
use App\Repositories\admin\shop\ShopContract as rShop;
use App\Repositories\admin\shop_area\ShopAreaContract as rShopArea;
use App\Repositories\admin\address\AddressContract as rAddress;

class Report extends Controller
{
    private $rArea;
private  $rGovernorate;
    public function __construct(rArea $rArea,rGovernorate $rGovernorate)
    {
        $this->rArea=$rArea;
        $this->rGovernorate=$rGovernorate;
    }

public function getMain(Request $request){


    $this->rArea->reportExportExcel($request);

    $oResults=$this->rArea->getMainReport($request);
    $governorateList= $this->rGovernorate->getAllList($request);

    return view('admin.area.report.main', compact('oResults','request','governorateList'));
}

}
