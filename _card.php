<?php
$profils = [
    ['prenom' => 'jimmy', 'nom' => 'Achour', 'langage' => 'PHP'],
    ['prenom' => 'guillaume', 'nom' => 'Loup', 'langage' => 'JS'],
    ['prenom' => 'maxime', 'nom' => 'Vasseur', 'langage' => 'PHP'],
    ['prenom' => 'maxime', 'nom' => 'Vasseur', 'langage' => 'PHP'],
    ['prenom' => 'maxime', 'nom' => 'Vasseur', 'langage' => 'PHP'],
    ['prenom' => 'florent', 'nom' => 'Duval', 'langage' => 'PHP'],

];

foreach ($profils as $student) {
?>
    <div class="trombi-box-pict col-12 col-md-4">
        <a href="profil-<?php echo $student ['prenom']; ?>.html"><img class="trombi-pict" src="images/<?php echo $student['prenom']; ?>.jpg" alt="photo de profil 1"></a>
        <div class="trombi-bloc-text col-12">
            <p class="trombi-text-title"><?php echo $student ['prenom'] . ' ' .  $student ['nom']; ?> </p>
            <p class="trombi-text-subtitle"><?php echo $student ['langage']; ?></p>
        </div>
    </div>
<?php
}
?>
