<?php
// Connects to MySQL. These are the default XAMPP settings for a local test.
// Change them if your setup is different, and never upload real passwords.
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli('localhost', 'root', '', 'vibify');
