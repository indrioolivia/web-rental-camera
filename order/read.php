<table class="table table-dark mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
    <tbody>

<?php
$files = file('list.txt');
$i = 1;

foreach ($files as $read) {
    $dataSplit = explode(',', $read);
    $nama = isset($dataSplit[0]) ? trim($dataSplit[0]) : '';
    $harga = isset($dataSplit[1]) ? trim($dataSplit[1]) : '';

    echo '<tr>';
    echo '<td>' . $i . '</td>';
    echo '<td>' . $nama . '</td>';
    echo '<td>' . $harga . '</td>';
    echo '</tr>';

    $i++;
}
?>

    </tbody>
</table>