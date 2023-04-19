<?php
$query = "SELECT id, description, img_profile FROM cv WHERE id = ?";
$id = 1; // Remplacez cette valeur par l'ID du projet que vous souhaitez modifier.
$stmt = $db->prepare($query);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$project = $result->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $description = cleanInput($_POST["description"]);
        $img_profile = cleanInput($_POST["img_profile"]);
        $description = mysqli_real_escape_string($db, $_POST["description"]);
        $img_profile = mysqli_real_escape_string($db, $_POST["img_profile"]);
        $query = "UPDATE cv SET description = ?, img_profile = ? WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('ssi', $description, $img_profile, $id);
        $stmt->execute();
        header('Location: index.php');
        exit();
    }
}

?>
<h1>Modifier le cv</h1>
<form action="" method="POST">
    <div class="mb-3">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="150" rows="10"><?= cleanInput($project['description']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="img">Image Profile</label>
        <input type="text" name="img_profile" id="img_profile" value="<?= $project['img_profile'] ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary w-10">Modifier Projet</button>
</form>




