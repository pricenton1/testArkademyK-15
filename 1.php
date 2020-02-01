<?php
//Menggunakan php untuk output data dapat dibaca dengan format json 
//Untuk membuat tampilan format ke Json
header('Content-type: application/json; charset=utf-8');

//Buat variable data dan array
//String data php
$name = 'Antony Mirasandy';
$address = 'Jl. Sd Inpres Pabuaran Barat No. 14A , Pondok Karya , Pondok Aren, Tangerang Selatan';
//Array PHP
$hobies =  array('Design','Reading', 'Programming', 'Gaming');
//fungsi school pada PHP
    function highSchool(){
        return 'SMK YADIKA 5 Pondok Aren';
    }
    function university(){
        return 'STMIK Nusa Mandiri';
    }

$highSchool = highSchool();
$university = university();
//Obj Array pada PHP
$skillArr = array('0'=>'HTML5, Javascript, CSS, PHP,');
$skill = new ArrayObject($skillArr);

function myBio($Name, $Address, $Hobies, $Married, $HighSchool,$University, $Skill){
    $json = array(
        'Name' => $Name,
        'Address' => $Address,
        'Hobies' => $Hobies,
        'Married' => ($Married =FALSE)? 'Menikah': 'Belum menikah',
        'HighSchool' => $HighSchool,
        'University' => $University,
        'Skill' => $Skill
    );
    return json_encode($json);
}

echo myBio($name, $address, $hobies,FALSE, $highSchool,$university, $skill[0]);