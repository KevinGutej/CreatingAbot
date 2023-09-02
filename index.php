<?php

$QuestionsAndAnswers = [
    "What is your name?" => "I am a PHP chatbot.",
    "How are you?" => "I'm just a program, so I don't have feelings, but thanks for asking!",
    "Who created you?" => "I was created by a developer by the name of Kevin.",
    "What can you do?" => "I can answer basic questions so far, hopefully my devoloper will make me better soon.",
    "Goodbye" => "Goodbye! Have a great day!",
];

$userInput = strtolower($_POST['userInput']);
$answer = $QuestionsAndAnswers[$userInput];

if ($answer) {
    echo "Bot: " . $answer;
} else {
    echo "Bot: Sorry, I don't understand that question, please ask another one.";
}
?>