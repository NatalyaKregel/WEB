<?php

$skills = [
   0 => [
        'name' => 'Photoshop',
        'skill' => 95
    ],
   1 => [
        'name' => 'Figma',
        'skill' => 55
    ],
   2 => [
        'name' => 'VSCode',
        'skill' => 100
    ],

];
?>
<body>
<?php foreach ($skills as $key => $skill): ?>
    Скилл <?php echo $key+1?>  <?=$skill['name']?> c уровнем <?=$skill['skill']?><br>
<?php endforeach; ?>
</body>
