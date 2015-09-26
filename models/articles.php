<?php

    function articles_all($link){

        //Request

        $query = "SELECT * FROM articles ORDER BY id DESC";
        $result = mysqli_query($link, $query);

        if(!$result)
            die(mysqli_error($link));

        //Take from DB

        $n = mysqli_num_rows($result);
        $articles = array();

        for ($i = 0; $i < $n; $i++) {
            $row = mysqli_fetch_assoc($result);
            $articles[] = $row;
        }

        return $articles;
    };

/**
 * @param $link
 * @param $id_article
 * @return array|null
 */
function articles_get($link, $id_article){

        //Request

        $query = sprintf("SELECT FROM articles WHERE id=%id", (int)$id_article);
        $result = mysqli_query($link, $query);
            if(!$result)
            die(mysqli_error($link));
        $article = mysqli_fetch_assoc($result);

        return $article;
    };

    function articles_new($title, $date, $content){

    };

    function articles_edit($id, $title, $date, $content){

    };

    function articles_delete($id){

    }
