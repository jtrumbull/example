<!doctype html>
<html lang="en">    
<head>

<!-- Meta
---------------------------------------------------------------------->

<title>Hello, world!</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSS
---------------------------------------------------------------------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
<table class="table">
    <thead>
        <tr>
            <th>client_id</th>
            <th>req_api_key</th>
            <th>req_zpid</th>
            <th>req_count</th>
            <th>req_rentzestimate</th>
            <th>comp1</th>
        </tr>
    </thead>
    <tbody>
<?php

include '../lib/bootstrap.php';

$file = $_FILES['file'];
$path = $file['tmp_name'];

$default = [
    'client_id' => null,
    'api_key' => null,
    'zpid' => null,
    'count' => 10,
    'rentzestimate' => 'false'
];
$header = null;
$handle = fopen($path, 'r');
if (!$handle) die('No file was supplied');

while(($row = fgetcsv($handle)) !== false){
    if (!$header) {
        $header = $row;
        continue;
    }
    $row = array_combine($header, $row);
    $row = array_merge($default, $row);
    $row['response'] = getDeepComps($row['api_key'], $row['zpid'], $row['count'], $row['rentzestimate']);
    echo "<tr>";
    echo "<td>". $row['client_id'] ."</td>";
    echo "<td>". $row['api_key'] ."</td>";
    echo "<td>". $row['zpid'] ."</td>";
    echo "<td>". $row['count'] ."</td>";
    echo "<td>". $row['rentzestimate'] ."</td>";
    echo "<td>". $row['response']['comp1'] ."</td>";
    echo "</tr>";
}

?>
    </tbody>
</table>
</body>
</html>