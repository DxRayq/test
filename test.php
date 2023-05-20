<?php
$response = file_get_contents("https://www.google.com");
if ($response !== false) {
  echo "Funkcja file_get_contents() działa.";
} else {
  echo "Funkcja file_get_contents() nie działa.";
}
?>
