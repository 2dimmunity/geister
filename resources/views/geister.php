<!doctype html>
<html>
<head>
    <title>Sample</title>
    <style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
    <h1>ガイスター </h1>
    <p><?php echo $message; ?></p>
    <p><?php echo $kas; ?></p>

<table border="1">
<?php 
$board = array();
$board[] = [-1, -1, -1, -1, -1, -1, -1, -1];
for ($i = 0; $i < 6; ++$i) {
    $board[] = [-1, 0, 0, 0, 0, 0, 0, -1];
}
$board[] = [-1, -1, -1, -1, -1, -1, -1, -1];
?>

<?php for ($i = 0; $i < 8; ++$i) : ?>
    <tr border="1">
        <?php for ($j = 0; $j < 8; ++$j) : ?>
        <td>
        <?php $stone = ($i == 0 || $i == 7 || $j == 0 || $j == 7) ? -1 : 0; ?>
            <div><?php echo $board[$i][$j]; ?></div>
        </td>
        <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>
    
<p>
<input id="game_start" type="button" value="ゲーム開始" onclick="game_start()">
</p>

<p id="message">
ここは進行のためのメッセージが表示される場所です
</p>

</body>

<script>
function game_start(){
    4
}

</script>