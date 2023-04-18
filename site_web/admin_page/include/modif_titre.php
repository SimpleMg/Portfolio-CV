<?php
$query = "SELECT titre FROM titre";
$stmt = $db->prepare($query);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
if ($user) {
    $titre = $user["titre"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['submit'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $titre = cleanInput($_POST["titre"]);
        $titre = mysqli_real_escape_string($db, $_POST["titre"]);
        $query = "UPDATE titre SET titre = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('s', $titre);
        $stmt->execute();
        header('Location: index.php');
        exit();
    }
}
?>
<h1>modif titre</h1>
<form action="" method="POST">
    <div class="mb-3">
        <label for="titre">titre</label>
        <input type="text" name="titre" id="titre" value="<?= $titre ?>">
    </div>
    <button type="submit" class="btn btn-primary w-10">Modifier Titre</button>
</form>
