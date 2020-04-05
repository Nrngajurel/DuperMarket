<?php

    function is_assoc(array $data){
        return array_keys($data) !== range(0,count($data)-1);
    }
    ?>
