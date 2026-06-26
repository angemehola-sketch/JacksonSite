<?php
$youtubeur = \App\Models\Youtubeur::find($_GET['id']);
?>

<h2>Description: <?= htmlspecialchars($youtubeur->nom) ?></h2>
<p><?= htmlspecialchars($youtubeur->description) ?></p>