<?php

//TASK 1
session_start();

$GLOBALS['users'] = ["alice", "bob", "charlie"];
$_SESSION['users'] = $GLOBALS['users'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    echo 'Username: ' . htmlspecialchars($username) . '<br>';
}

$selected = isset($_POST['username']) ? $_POST['username'] : '';

//TASK 2 





calculateCircleArea();


///TASK 3 


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Formulari</title>
</head>

<body>
    <h1>Formulari</h1>
    <form action="Level1.php" method="post">
        <label for="username">Nom d'usuari:</label>
        <select name="username" id="username" required>
            <option value="">-- selecciona --</option>
            <?php foreach ($GLOBALS['users'] as $user): ?>
                <option value="<?php echo htmlspecialchars($user); ?>" <?php echo ($user === $selected) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($user); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>