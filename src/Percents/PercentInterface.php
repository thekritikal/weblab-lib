<?php

namespace App\Percents;

interface PercentInterface
{
    /**
     * @param $sumDebt
     * @param $rateForPeriod
     * @param $accrualPeriod
     * @return mixed
     */
    public function amountOfDebt($sumDebt, $rateForPeriod, $accrualPeriod);
}
