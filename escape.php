<?php

    function h($s){
        if (is_array($s)) {
          return array_map("h", $s);
        } else {
          return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
        }
    }