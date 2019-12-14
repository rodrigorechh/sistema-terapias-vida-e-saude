
<?php
/**
 * @author Cesar Szpak - Celke - cesar@celke.com.br
 * @pagina desenvolvida usando FullCalendar e Bootstrap 4,
 * o código é aberto e o uso é free,
 * porém lembre-se de conceder os créditos ao desenvolvedor.
 */
include 'conexao.php';

$query_events = "SELECT id, title, color, start, id_cpf, valor, end FROM events";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $id = $row_events['id_cpf'];
    $title = $row_events['title'];
    $color = $row_events['color'];
    $start = $row_events['start'];
    $valor = $row_events['valor'];
    $end = $row_events['end'];
    
    $eventos[] = [
        'id' => $id, //para o cpf
        'title' => $title, 
        'color' => $color, 
        'start' => $start, 
        'valor' => $valor,
        'end' => $end
        ];
}

echo json_encode($eventos);