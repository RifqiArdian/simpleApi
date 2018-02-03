<?php

require_once('../../app/controllers/BookController.php');

//initialize Class to Object
$book = new BookController();

//get add data
echo "index function : ". $book->index();
echo '<br>';
// //get one data by id
echo "read function : ".$book->read(1);

//add Data
$data = array(
    'serial' => 'KYH787JYU87',
    'title' => 'Books about PHP Native',
    'author' => 'Danis Yogaswara',
    'id_books_categories' => '2'
);
echo '<br> insert succes '.$book->add($data);

// //update data
$data1 = array(
    'serial' => 'KYH787JYU87',
    'title' => 'Books about PHP Native',
    'author' => 'Danis Yogaswara',
    'id_books_categories' => '2'
);
echo '<br> update succes '.$book->update(1,$data1);
//
// //
// // //delete Data
echo '<br> delete succes'.$book->delete(3);
