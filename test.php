<?php
include('SCRIPT/conn.php');

$query = "SELECT * FROM users";
$result = mysqli_query($mysqli, $query);
?>

<style>
th {
    border: 1px solid black;
    align-content: center;
    width: 250px;
}
</style>

<table style="border: 1px solid black; width: auto;">
<tr>
    <th>
        ID
    </th>
    <th>
        NICK
    </th>
    <th>
        EMAIL
    </th>
    <th>
        akcje
    </th>
</tr>
<?php
while($info = mysqli_fetch_array($result)) {
    echo '
    <tr>
        <th>
            '.$info['ID_US'].'
        </th>
        <th>
            '.$info['user_US'].'
        </th>
        <th>
            '.$info['email_US'].'
        </th>
        <th>
            edytuj / usuń
        </th>
    </tr>';
}
?>
</table>