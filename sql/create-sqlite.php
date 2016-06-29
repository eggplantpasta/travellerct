<?php

$pdo = new PDO('sqlite:travellerct.sqlite3');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// create our tables
$sql =  = <<<'EOD'
create table if not exists character (
  character_id integer primary key autoincrement
, name char(100)
, title char(100)
, strength integer
, dexterity integer
, endurance integer
, intelligence integer
, education integer
, social integer
)
EOD;
$result = $pdo->exec($sql);

// prepare the data and insert it
$sql =  = <<<'EOD'
insert into tt_character (name, title, strength, dexterity, endurance, intelligence, education, social) values
  ('Hoju', 'Count', 8, 15, 8, 12, 12, 14),
  ('Smith', '', 8, 15, 8, 10, 6, 7),
  ('Neo', '', 8, 9, 8, 14, 3, 8)
EOD;
$result = $pdo->exec($sql);

// display the data
foreach ($pdo->query('select * from character') as $row) {
    var_dump($row);
}
