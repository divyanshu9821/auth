<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Taxation_Controller extends Controller
{

    public function calculate_percentage($value, $precent)
    {
        return $value * $precent / 100;
    }

    public function pre_process_slabs($tax_slabs){
        if(!isset($tax_slabs['amount']) || !isset($tax_slabs['percentage'])){
            return false;
        }


    }

    public function calculate_tax($income)
    {
        $tax = 0;
        // $slabs = [300000, 500000, 600000, 900000, 1000000, 1200000, 1500000];
        // $percentage = [5, 5, 10, 15, 15, 20, 30];
        $slabs = [300000, 200000, 100000, 300000, 100000, 200000, 300000];
        $percentage = [5, 5, 10, 15, 15, 20, 30];
        
        $slabs_index = 0;
        $income-=$slabs[$slabs_index++];
        while($income > 0 && $slabs_index < count($slabs)){
            if($income>$slabs[$slabs_index]){
                $tax+=self::calculate_percentage($slabs[$slabs_index],$percentage[$slabs_index-1]);
            }
            else{
                $tax+=self::calculate_percentage($income,$percentage[$slabs_index-1]);
            }
            $income-=$slabs[$slabs_index++];
        }

        if($income>0){
            $tax+=self::calculate_percentage($income,array_pop($percentage));
        }



        return $tax;
    }


    
}