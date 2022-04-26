<?php

    function get_genre_by_id($id){
        include "data/genres_data.php";
        foreach ($genres as $value){
            if($value["id"]==$id){
                return $value;
            }
        }return false
    }

?>