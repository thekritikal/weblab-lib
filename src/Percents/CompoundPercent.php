<?php

namespace App\Percents;

use App\Exceptions\CustomException;

class CompoundPercent implements PercentInterface
{
    /**
     * @param $sumDebt
     * @param $rateForPeriod
     * @param $accrualPeriod
     * @return float|int|mixed
     * @throws CustomException
     */
    public function amountOfDebt($sumDebt, $rateForPeriod, $accrualPeriod)
    {
        if (gettype ($sumDebt) === 'string' || gettype ($rateForPeriod) === 'string' || gettype ($accrualPeriod) === 'string') {
            throw new CustomException('Please provide integer or float argument');
        }
        return $sumDebt * (pow((1 + ($rateForPeriod / 100)), $accrualPeriod));
    }
}
