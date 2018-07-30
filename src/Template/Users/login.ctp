
<!-- <div class="container"> Có thể bỏ đi
    <?php
        // $myTemplates = [
        //     'inputContainer' => '<div class="form-group">{{content}}</div>',
        //     'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>'
        // ];
        // $this->Form->setTemplates($myTemplates);
        // echo $this->Form->create();
        // echo $this->Form->controls(
        //     [
        //         'email' => ['placeholder' => "Email Address", 'required' => false],
        //         'password' => ['placeholder' => "Password", 'required' => false],
        //     ],
        //     ['legend' => 'User Login']
        // );
        // echo $this->Form->button('<i class="fa fa-sign-in"></i> Login', [
        //     'class' => 'btn btn-success', 
        //     'type' => 'submit',
        //     'escape' => false
        // ]);
        // echo $this->Form->end();
    ?>
</div> -->

<div class="container">
    <h1>Login pages</h1>
    <?php
        /**
         * https://book.cakephp.org/3.0/en/views/helpers/form.html
         */
        // Tùy biến form
        $myTemplates = [
            'inputContainer' => '<div class="form-group">{{content}}</div>',
            'input' => '<input type="{{type}}" class="form-control" name="{{name}}"{{attrs}}/>'
        ];
        // Form
        $this->Form->setTemplates($myTemplates);
        echo $this->Form->create();
        echo $this->Form->controls ([
            'Email' => [
                'name' => 'Email',
                'placeholder' => "Email",
                'required' => false
            ],
            'Password' => [
                'name' => 'Password',
                'placeholder' => "Password",
                'required' => false
            ]
        ], [
            'legend' => 'User Login'
        ]);
        // echo $this->Form->control('Email', ['placeholder' => "Email", 'required' => false]);
        // echo $this->Form->control('Password', ['placeholder' => "Password", 'required' => false]);
        echo $this->Form->button('<i class="fa fa-sign-in"></i> Login', [ // Cái này thật ra là 1 cái thẻ button thôi
            'class' => 'btn btn-success', // Giống với class của thẻ button trong html thôi
            'type' => 'submit', // Có type là submit
            'escape' => false // Cái này dùng để hiện cái icons của class fa-user để false nó mới hiện
        ]);
        echo $this->Form->end();
    ?>
</div>