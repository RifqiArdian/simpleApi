<?php

require_once('../../app/controllers/CategoryController.php');

//initialize Class to Object
$category = new CategoryController();

//get add data
echo "index function : ". $category->index();
echo '<br>';
// //get one data by id
echo "read function : ".$category->read(1);

//add Data
$data = array(
    'name' => 'book',
    'description' => 'book'
);
echo '<br> insert succes '.$category->add($data);

// //update data
$data1 = array(
    'name' => 'book',
    'description' => 'book'
);
echo '<br> update succes '.$category->update(1,$data1);
//
// //
// // //delete Data
echo '<br> delete succes'.$category->delete(3);
