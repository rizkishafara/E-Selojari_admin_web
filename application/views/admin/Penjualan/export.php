<h4>Data Penjualan</h4>
<table border="1" cellpadding="8">
<tr>
    <th>No Nota</th>
    <th>Kode Konsumen</th>
    <th>Tanggal Jual</th>
    <th>Total beli</th>
    <th>Pembayaran</th>
    <th>Kembalian</th>
    <th>Status</th>
    <th>Bukti Tf</th>
</tr>
<?php
if( ! empty($jual)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($jual as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->no_nota."</td>";
    echo "<td>".$data->kd_kons."</td>";
    echo "<td>".$data->tgl_jual."</td>";
    echo "<td>".$data->total_biaya."</td>";
    echo "<td>".$data->pembayaran."</td>";
    echo "<td>".$data->kembalian."</td>";
    echo "<td>".$data->status."</td>";
    echo "<td>".$data->bukti_tf."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>