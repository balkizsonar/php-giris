<?php

    /*
        func_num_args()
        func_get_args()
        func_get_arg()  

    */



        function test()
        {
            echo func_num_args() . '<br>';
            print_r (func_get_args());
            echo func_get_arg(2);
        }        
            test('tayfun', 'udemy', 'prototürk','93_academy');
        
?>