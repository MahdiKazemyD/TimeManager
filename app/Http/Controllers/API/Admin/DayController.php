<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Day\StoreDayRequest;
use App\Http\Requests\Day\UpdateDayRequest;
use App\Models\Month;
use App\Repositories\Day\DayRepositoryInterface;
use App\Service\DayService;
use Illuminate\Http\Request;

class DayController extends Controller
{

    public function __construct(
        readonly protected DayRepositoryInterface $dayRepository,
        readonly protected DayService $dayService
    )
    {
    }

    public function createDays(StoreDayRequest $request)
    {
        $months = Month::all()->toArray();

        foreach ($months as $month){
            $day = 30;
            if ($month['number'] >= 6){
                $day = 31;
            } elseif ( $month['number'] == 12){
                $day = 29;
            }

            for ($i = 1; $i <= $day ;$i++){
                $this->dayRepository->create([
                    'month_id' => $month['id'],
                    'number' => $i ,
                ]);
            }
        }
    }

}
