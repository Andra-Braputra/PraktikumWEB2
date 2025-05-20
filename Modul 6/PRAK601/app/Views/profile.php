<h1>Profil Praktikan</h1>
<div>
    <p><strong>Nama Lengkap:</strong> <?= $profile['nama'] ?></p>
    <p><strong>NIM:</strong> <?= $profile['nim'] ?></p>
    <p><strong>Program Studi:</strong> <?= $profile['prodi'] ?></p>
    <p><strong>Hobi:</strong> 
        <?php foreach($profile['hobi'] as $hobi): ?>
            <?= $hobi ?>, 
        <?php endforeach ?>
    </p>
    <p><strong>Skill:</strong> 
        <?php foreach($profile['skill'] as $skill): ?>
            <?= $skill ?>, 
        <?php endforeach ?>
    </p>
</div>