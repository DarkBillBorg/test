<?php
namespace Odl\BjNumberValidation;

final class BjNumberValidation 
{
    public function verifyNumber(int $number) {
        $response = false;
        
        if (strlen($number) != 8) {

            $response = false;

        }else{

            $twoFirstNumber = substr((string)$number, 0, 2);

            $prefixlIST = ['40','41','50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65',
                            '66','67','68','69','90','91','94','95','96','97','98','99'];

            if(in_array($twoFirstNumber,$prefixlIST)) {

                $response = true;

            }else {

                $response = false;

            }
        }

        return $response;
    }
}
