<?php

require_once('../../app/controllers/UserController.php');

//initialize Class to Object
$user = new UserController();

//get add data
echo "Fungsi Index (SELECT *) : ". $user->index();
echo '<br>';
//get one data by id
echo "Fungsi Read By ID : ".$user->read(11);

//add Data
$data = array(
    'first_name' => 'Muhammad',
    'last_name' => 'Irfan',
    'username' => 'irffg',
    'email' => 'dfhjgh4@gmail.com'
);
echo '<br> Berhasil Insert '.$user->add($data);

// //update data
$data1 = array(
    'first_name' => 'Irfan',
    'last_name' => 'Firdaus',
    'username' => 'danis24',
    'email' => 'suckhack24@gmail.com'
);
echo '<br> Berhasil Update '.$user->update(11,$data1);

//
// //delete Data
echo '<br> Berhasil Delete'.$user->delete(12);
