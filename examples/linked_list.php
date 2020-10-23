<?php
include_once "../vendor/autoload.php";

use App\LinkedList\LinkedList;

$names = ["Smantha", "Suzy", "Krystal", "Justine"];

$list = new LinkedList();

foreach ($names as $name) {
    $list->push($name);
}

echo "Append/push<br>";
$list->append("John");
$list->printList("<br>");

echo "<br>Prepend/unshift<br>";
$list->prepend("Micheal");
$list->printList("<br>");

echo "<br>Insert After<br>";
$list->insertAfter("Sam", "Suzy");
$list->printList("<br>");

echo "<br>Insert Before<br>";
$list->insertBefore("Lilly", "Suzy");
$list->printList("<br>");

echo "<br>Delete<br>";
$list->delete("Sam");
$list->printList("<br>");

echo "<br>Delete First/Shift<br>";
$list->deleteFirst();
$list->printList("<br>");

echo "<br>Delete Last/pop<br>";
$list->deleteLast();
$list->printList("<br>");


