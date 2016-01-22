<?
require_once("/etc/apache2/capstone-mysql/encrypted-config.php");
require_once("your-class-file.php");
$pdo = connectToEncryptedMySQL("/etc/apache2/data-design/dfontaine1.ini");
// now procede to PDO normally

$team = new Team(null, 1,"this is from PHP");
$team->insert($pdo);
$team->setTeamContent("now I change the message");
$team->update($pdo);
$team->delete($pdo);