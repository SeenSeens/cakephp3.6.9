<?php
namespace App\Controller;
use Cake\Validation\Validator; // trình xác thực
class UsersController extends AppController
{
    /**
     * User Login
     */
    public function login()
    {
        $this->set('title', 'User Login');
    }

    /**
     * User Registration
     */
    public function registration()
    {
        # Set Page Title
        $this->set('title', 'User Register');
        ////$this->Flash->error(__('Unable to add your users.'));
        /**
         * Xác thực ko csdl
         */
        // $validator = new Validator();
        // $validator ->notEmpty('fullname', 'Please fill this field')
        //            ->notEmpty('confirmpassword', 'Please fill this field');
        // $errors = $validator->errors($this->request->getData());
        // print_r($errors);

        /**
         * Xác thực có csdl
         */
        # Using A Different Validation Set
        $users = $this->Users->newEntity($this->request->getData(), ['validate' => 'register']);

        // if ($article->getErrors()) {
        //     // Entity failed validation.
        // }
        //print_r($article->getErrors());

        // Set this errors in fields
        //$this->set('users', $users);

        //$users = $this->Users->newEntity();
        if ($this->request->is('post')) {
            if (empty($users->getErrors())) {
                $users = $this->Users->patchEntity($users, $this->request->getData(), ['validate' => 'register']);

                // Hardcoding the user_id is temporary, and will be removed later
                // when we build authentication out.

                # Set Data in Table
                $users->is_active = 1;

                # Save data
                if ($this->Users->save($users)) {
                    $this->Flash->success(__('User has been saved.'));
                    return $this->redirect(['action' => 'registration']);
                }
                $this->Flash->error(__('Unable to add your users.'));
            } else {

            }
            
        }
        // Set this error in fields
        $this->set('users', $users);
    }

}
