<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Year\StoreYearRequest;
use App\Http\Requests\Year\UpdateYearRequest;
use App\Repositories\Year\YearRepositoryInterface;
use App\Service\YearService;
use Illuminate\Http\Request;

class YearController extends Controller
{
    public function __construct(
        readonly protected YearRepositoryInterface $yearRepository,
        readonly protected YearService $yearService
    )
    {
    }

    public function index()
    {
//        return $this->yearRepository->all();
        return $this->yearRepository->allMonthByDay();
    }
}
