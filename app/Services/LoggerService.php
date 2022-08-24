<?php

namespace App\Services;

use App\Contracts\LoggerInterface;
use Illuminate\Support\Facades\Log;

class LoggerService implements LoggerInterface
{

    public function bubbleSort():void
    {
        $array=[1,5,8,4,11,50,89,46,79,86,8,79];
        echo ("Начальный массив<br/>");
        echo implode(' ', $array);

        $time_start = new \DateTime();
        Log::info('Начало: '. $time_start->format('Y-m-d H:i:s.v'));

        for ($j = 0; $j < count($array) - 1; $j++){
            for ($i = 0; $i < count($array) - $j - 1; $i++){
                if ($array[$i] > $array[$i + 1]){
                    $tmp_var = $array[$i + 1];
                    $array[$i + 1] = $array[$i];
                    $array[$i] = $tmp_var;
                }
            }
        }
        Log::debug(memory_get_usage());
        $time_end = new \DateTime();
        Log::info('Конец: '. $time_end->format('Y-m-d H:i:s.v'));

        echo ("<br/>Конечный массив<br/>");
        echo implode(' ', $array);
    }
}
