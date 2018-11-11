<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{
    public function testAction()
    {
        $ans1 = 0;
        $ans2 = 0;        

        //โจทย์ข้อ 1
        $num01 = 3;
        $add01 = 2;
        for ($x = 1; $x < 5; $x++) {
            $num01 = $num01 + $add01;
            $add01 += 2;
            //echo $num01 . " " . $add01 . "<br>";
        } 
        //exit;
        $ans1 = $num01;


        //โจทย์ข้อ 2
        $ans2 = 99 - 24 - (10 * 2);

        //โจทย์ข้อ 3
        $ans3 = "";
        $text01 = "5";
        for ($x = 1; $x <= 5; $x++) {
            if($x == 1){
                $ans3 = $text01;
            }else{
                $ans3 = strval($x) . $ans3;
            }         
            //echo strval($ans3)."<br>";            
        } 
        //exit;

        return new ViewModel([
            'ans1' => $ans1,
            'ans2' => $ans2,
            'ans3' => $ans3,
        ]);
    }
}
