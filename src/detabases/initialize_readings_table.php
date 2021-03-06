<?php

require __DIR__ . '/lib/mysql.php';

function dropTable($link)
{
$dropTableSql = "DROP TABLE IF EXISTS readings;";
  $result = mysqli_query($link, $dropTableSql);
  if ($result) {
    echo 'テーブルの削除が完了しました' . PHP_EOL . PHP_EOL;
  } else {
    echo 'Error.テーブルの削除に失敗しました' . PHP_EOL;
    echo 'debugging error' . mysqli_error($link) . PHP_EOL;
  }
}

function createTable($link)
{
$createTableSql = <<<EOT
CREATE TABLE readings (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    creator VARCHAR(100),
    situation VARCHAR(10),
    points INTEGER,
    impression VARCHAR(1000),
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) DEFAULT CHARACTER SET=utf8mb4;
EOT;
  $result = mysqli_query($link, $createTableSql);
  if ($result) {
    echo 'テーブルの作成が完了しました' . PHP_EOL . PHP_EOL;
  } else {
    echo 'テーブルの作成に失敗しました' . PHP_EOL;
    echo 'debugging error' . mysqli_error($link) . PHP_EOL;
  }
}

$link = dbConnect();
dropTable($link);
createTable($link);
mysqli_close($link);
