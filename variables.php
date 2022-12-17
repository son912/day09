<?php
global $questions, $choices, $answers;

$questions = array(
    "ques1" => array("1+1=?", array(
        "choice1" => "1",
        "choice2" => "2",
        "choice3" => "3",
        "choice4" => "4",
    )),
    "ques2" => array("2+5=?", array(
        "choice1" => "6",
        "choice2" => "7",
        "choice3" => "8",
        "choice4" => "9",
    )),
    "ques3" => array("5-3=?", array(
        "choice1" => "2",
        "choice2" => "3",
        "choice3" => "4",
        "choice4" => "5",
    )),
    "ques4" => array("2x2=?", array(
        "choice1" => "2",
        "choice2" => "4",
        "choice3" => "6",
        "choice4" => "8",
    )),
    "ques5" => array("2x2+2=?", array(
        "choice1" => "2",
        "choice2" => "4",
        "choice3" => "6",
        "choice4" => "8",
    )),
    "ques6" => array("6/3=?", array(
        "choice1" => "5",
        "choice2" => "4",
        "choice3" => "3",
        "choice4" => "2", //d
    )),
    "ques7" => array("(8/4)+1=?", array(
        "choice1" => "1",
        "choice2" => "2",
        "choice3" => "3",
        "choice4" => "4", //c
    )),
    "ques8" => array("2^3=?", array(
        "choice1" => "6",
        "choice2" => "8",
        "choice3" => "16",
        "choice4" => "20", //b
    )),
    "ques9" => array("sqrt(16)=?", array(
        "choice1" => "4",
        "choice2" => "5",
        "choice3" => "6",
        "choice4" => "7", //a
    )),
    "ques10" => array("2/0=?", array(
        "choice1" => "1",
        "choice2" => "2",
        "choice3" => "3",
        "choice4" => "Không thể chia cho 0", //d
    )),
);

$answers = array(
    "ans1" => "b",
    "ans2" => "b",
    "ans3" => "a",
    "ans4" => "b",
    "ans5" => "c",
    "ans6" => "d",
    "ans7" => "c",
    "ans8" => "b",
    "ans9" => "a",
    "ans10" => "d",
);
