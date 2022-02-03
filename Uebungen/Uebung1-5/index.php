<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $class = $_POST['Auswahl'];
        echo "Hallo {$username} du bist in der Klasse: {$class}!";
    }
?>
<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername">
<br><br>
<select name="Auswahl" id="Auswahl">
    <option value="value1">INF19a</option>
    <option value="value2">INF19b</option>
    <option value="value3">INF19c</option>
    <option value="value4">INF19d</option>
</select>
<br><br>
<input type="submit" value="Absenden"/>
</form>
