<?php
use Jin\Database;
$globalConfigs = [
    'database' => [
        'user' => 'jin',
        "password" => 'motherload',
        'host' => 'localhost',
        'port' => '3306',
        'db_name' => 'cours2'
    ]
];

$dsn = 'mysql:host=' . $globalConfigs["database"]['host'] . ';port=' . $globalConfigs['database']["port"] . ';dbname=' . $globalConfigs['database']["db_name"] . '';

$connection = new PDO($dsn, $globalConfigs['database']['user'], $globalConfigs['database']['password']);
$db = new Database($connection);
?>
<h1>Laissez moi un message</h1>
<?php
if (isset($_POST) && count($_POST) && isset($_POST["message"]) && isset($_POST["name"])) {
    $db->table("contacts")->post(["post" => ["message" => htmlspecialchars($_POST["message"]), "name" => $_POST['name'], "status" => "online"]])->do();
}
?>
<form action="#" method="post">

    <div>
        <label for="message">Votre message</label>
        <input type="text" name="message" required>
    </div>
    <div>
        <label for="name">
            Votre nom
        </label>
        <input type="text" name="name" required>
    </div>

    <div>
        <input type="submit" value="Envoyer">
    </div>
</form>


<?php

// var_dump($db->get(["filters" => ["status" => 'online']])->getQuery());

// die();
$stmt = $db->table('contacts')->get(["filters" => ["status" => 'online']])->do();

foreach ($stmt->fetchAll() as $message) {

    echo "</br>";
    echo htmlspecialchars($message["name"]) . " a écrit :";
    echo "</br>";
    echo $message["message"];
    echo "</br>";
    echo "</br>";
}

//Afficher tous les messages

