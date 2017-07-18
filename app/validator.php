<?php
namespace PMAN;

use Respect\Validation\Validator as Valid;

class Validator
{
    public function isValid($validation_data)
    {
        $errors = [];

        foreach ($validation_data as $name => $value) {
            if (isset($_REQUEST[$name])) {
                
                //$value can have one or more rules
                $rules = explode("|", $value);

                foreach ($rules as $rule) {
                    $exploded = explode(":", $rule);
                    //$exploded = explode(":", $value);

                    switch ($exploded[0]) {
                        case 'min':
                            $min = $exploded[1];
                            if (Valid::stringType()->length($min)->Validate($_REQUEST[$name]) == false) {
                                $errors[] = $name . " must be at least " . $min . " characters long!";
                            }
                            break;
                        case 'email':
                            if (Valid::email()->Validate($_REQUEST[$name]) == false) {
                                $errors[] = $name . " must be a valid email address!";
                            }
                            break;
                        case 'equalTo':
                            if (Valid::equals($_REQUEST[$name])->Validate($_REQUEST[$exploded[1]]) == false) {
                            //if (Valid::equals($_REQUEST[$name])->Validate($exploded[1]) == false) {
                                // $errors[] = $_REQUEST[$name];
                                // $errors[] = $_REQUEST[$exploded[1]];
                                $errors[] = "Value does not match verification value!";
                            }
                            break;
                        default:
                            //do nothing
                    }
                }
            } else {
                $errors[] = "No value found!";
            }
        }
        return $errors;
        //return false;
    }
}

        // if (Validator::stringType()->length(3, null)->validate($_REQUEST['last_name']) == false) {
        //     $errors[] = "Last name must be at least 3 characters long!";
        // }
