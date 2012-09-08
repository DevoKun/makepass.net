<?php

function makepass() {

  $makepass_lst = file_get_contents("makepass.lst");

  $words = explode("\n", $makepass_lst);
  #print_r($words);
  shuffle($words);
  $word_count = count($words);
  $word1 = $words[rand(0, $word_count)];
  $word2 = $words[rand(0, $word_count)];
  $word3 = $words[rand(0, $word_count)];

  return ucfirst($word1) . "-" . $word2 . rand(0,9) . $word3;
  } ### makepass

$i = 0;
echo "<h2><u>Random Passwords</u></h2><ul>\n";
echo "<i>refresh the page to generate another set of 10 random passwords</i><p />";
while ($i < 10) {
  echo "<li><b><span style=\"font-family:monospace; font-size:21pt;\">" . makepass() . "</span></b></li>\n";
  $i++;
  }
echo "</ul>";

