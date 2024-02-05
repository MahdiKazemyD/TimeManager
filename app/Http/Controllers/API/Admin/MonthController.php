<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Month;
use App\Models\Year;
use App\Repositories\Month\MonthRepositoryInterface;
use App\Service\MonthService;

class MonthController extends Controller
{
    public function __construct(
        readonly protected MonthRepositoryInterface $monthRepository,
        readonly protected MonthService $monthService
    )
    {
    }

    public function createMonths()
    {
        $years = Year::all()->toArray();

        foreach ($years as $year){
            for ($i = 1; $i <= 12; $i++){
                $this->monthRepository->create([
                    'year_id' => $year['id'],
                    'number' => $i
                ]);
            }
        }

        if (Month::query()->where('year_id', 1)->count() == 12){
            return response([
                'massage' => 'عملیات با موفقیت انجام شد',
                'status'  => 'successes'
            ]);
        }
    }
}
