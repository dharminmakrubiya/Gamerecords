<?php

    // web-scraper-order
    // web-scraper-start-url
    // items
    // items-href
    // name
    // prise
    // owner

    // class GameDetails
    // {
    //     public $web_scrapper_order;
    //     public $web_scrapper_start_url;
    //     public $items;
    //     public $items_href;
    //     public $name;
    //     public $price;
    //     public $owner;
    // }

    // $game_array = array();

    //$bike1 = new Motorcycle();

    //echo "Hey, it's working!";

    $csv_file_path = 'C:\Users\Vimal Gorvadia\Downloads\axies1.csv';
    $file_handler = fopen($csv_file_path, 'r');

    while(

        list(
            $c1, $c2, $c3, $c4, $c5, $c6, $c7 
        ) = fgetcsv (
            $file_handler,
            1024,
            ','
        )

    ) {

        // $one_game_object = new GameDetails();
        // $one_game_object->$web_scrapper_order = $c1;
        // $one_game_object->$web_scrapper_start_url = $c2;
        // $one_game_object->$items = $c3;
        // $one_game_object->$items_href = $c4;
        // $one_game_object->$name = $c5;
        // $one_game_object->$price = $c6;
        // $one_game_object->$owner = $c7;

        // array_push($game_array, $one_game_object);

        printf(

            "<table border='1'>
                <tr>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                    <td> %s </td>
                </tr>
            </table>",

            $c1, $c2, $c3, $c4, $c5, $c6, $c7
        );
   
    }

    // function printAllGames() {

    //     echo($game_array);

    // }

    // printAllGames();

?>