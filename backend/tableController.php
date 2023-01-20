$table = '<table>';
$table .= '<tr>';
$table .= '<th>Datum</th>';
$table .= '<th>Team 1</th>';
$table .= '<th>Team 2</th>';
$table .= '<th>Uitslag</th>';
$table .= '<th>Scheidsrechter</th>';
$table .= '<th>Overtredingen</th>';
$table .= '</tr>';

$games = array(
    array("Datum" => "28-12-2022", "Team 1" => "Golden State Warriors", "Team 2" => "Maccabi Electra Tel Aviv BC", "Uitslag" => "164-95", "Scheidsrechter" => "van der Flaas", "Overtredingen" => "96"),
    array("Datum" => "07-01-2023", "Team 1" => "Boston Celtics", "Team 2" => "NY Knicks", "Uitslag" => "51-138", "Scheidsrechter" => "Janssen", "Overtredingen" => "96"),
  // add more games here
);

foreach($games as $game) {
    $table .= "<tr>";
    $table .= "<td>".$game["Datum"]."</td>";
    $table .= "<td>".$game["Team 1"]."</td>";
    $table .= "<td>".$game["Team 2"]."</td>";
    $table .= "<td>".$game["Uitslag"]."</td>";
    $table .= "<td>".$game["Scheidsrechter"]."</td>";
    $table .= "<td>".$game["Overtredingen"]."</td>";
    $table .= "</tr>";
}
$table .= '</table>';

echo $table;
