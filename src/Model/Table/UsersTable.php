<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator) { }
    /**
     * User Registration Form Validation
     */
    public function validationRegister(Validator $validator) 
    {
        # Full Name
        $validator->notEmpty('fullname');
            // ->add('fullname', 'valid', [
            //     'rule' => 'fullname',
            //     'message' => 'Please enter valid',
            // ]);

        # Email
        // $validator->notEmpty('email')
        //     ->add('email', 'valid', [
        //         'rule' => 'email',
        //         'message' => 'Please enter valid',
        //     ]);

        # UserName
        // $validator->notEmpty('username') ->lengthBetween('username', [4, 12]);
        //     ->add('username', 'valid', [
        //         'rule' => 'username',
        //         'message' => 'Please enter valid',
        //     ]);

        # Password
        $validator->notEmpty('password');
            // ->add('password', 'valid', [
            //     'rule' => 'password',
            //     'message' => 'Please enter valid',
            // ]);

        # Confirm Password
        // $validator->notEmpty('confirmpassword')
        //     ->add('confirmpassword', 'no-misspelling', [
        //         'rule' => ['compareWith', 'password'],
        //         'message' => 'Passwords are not equal',
        //     ]);
        return $validator;
    }
}