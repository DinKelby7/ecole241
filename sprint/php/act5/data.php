<?php
$okacode = array(
    1 => array(
        'nom' => 'Kelby', 
        'prenom' => 'Din', 
        'age' => 21,
        'profil' => 'dinkelby7.github.io/ecole241/profil/'
    ),
    2 => array(
        'nom' => 'John', 
        'prenom' => 'Hamilton', 
        'age' => 25,
        'profil' =>'hamiltondarryl.github.io/ecole241/profil/'
    ),
    3
    => array(
        'nom' => 'Tef', 
        'prenom' => 'Ivan', 
        'age' => 26,
        'profil' => 'iavich.github.io/ecole241/profil/'
    ),
    4 => array(
        'nom' => 'Atol', 
        'prenom' => 'Boumys', 
        'age' => 28,'profil' => 'jboumys.github.io/ecole241/profil/'
    ),
    5 => array(
        'nom' => 'Tefl', 
        'prenom' => 'Laurion', 
        'age' => 24,
        'profil' => 'TEFL'
    ),
    6 => array(
        'nom' => 'Tchop', 
        'prenom' => 'Falana', 
        'age' => 19,
        'profil' => 'Fapeterie'
    ),
    7 => array(
        'nom' => 'dodo', 
        'prenom' => 'Kevin', 
        'age' => 21,
        'profil' => 'mbela-kevinn98.github.io/ecole241/profil/'
    ),
    8 => array(
        'nom' => 'Boulengibindza',
        'prenom' => 'Axel', 
        'age' => 28,
        'profil' => 'mlraleader.github.io/ecole241/profil/index.html'),
    9 => array(
        'nom' => 'Git', 
        'prenom' => 'Francois', 
        'age' => 21,
        'profil' => 'bernyfrancois.github.io/ecole241/profil/'
    ),
    10 => array(
        'nom' => 'Kog',
        'prenom' => 'Darel', 
        'age' => 20,
        'profil' =>'darel14.github.io/ecole241/profil/'
    )
);

?> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Age</th>
            <th scope="col">Profil</th>

        </tr>
    </thead>
    <tbody>
        <?php for($i = 1;$i < count($okacode); $i++): ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $okacode[$i]['prenom']?></td>
            <td><?= $okacode[$i]['nom'] ?></td>
            <td><?= $okacode[$i]['age'] ?> ans</td>
            <td><a href="<?= $okacode[$i]['profil'] ?>" target="_blank" class="btn btn-primary">Consulter</a></td>
        </tr>
        <?php endfor; ?>
    </tbody>
</table> 

