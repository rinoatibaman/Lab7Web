<h2>PERTANYAAN DAN TUGAS<h/2>
<from method ="post">
    <label>nama: </label>
    <input type="text" nama="nama">
    <label>tgl_lahir: </label>
    <br>
    <input type="text" nama="tgl_lahir">
    <br>
    <label>pekerjaan:
    <select name='pekerjaan'>
        <option values='Direktur utama'>Direktur utama</option>
        <option values='Manager'>Manager</option>
        <option values='staf admin keuangan'>staf admin keuangan</option>
        <option values='operator'>operator</option>
    </select>
    </label>
    <br>
    <input type="submit" values="kirim">
</from>
<?php
    #memanggil nama
    echo 'RINO ELJON ATIBAMAN';

    #merubah tanggal lahir menjadi umur (Tahun)
    $Tgl_lahir =@$_POST['tahun'];

    $lahir = new datetime($Tgl_lahir);
    $lahir_ini =new datetime();

   

    #memanggil fungsi umur yang sudah di buat diatas
    echo "<br>umur: "." 20 tahun";

    #memanggil pekerjaan
    echo "<br> Direktur utama";

    #kondisi if pekerjaan untuk menetukan gaji
    $pekerjaan = @$_POST['Rp. 30.000.000'];

    if($pekerjaan == "Direktur utama"){
        echo '<br> Gaji: Rp. 20.000.000,-';
    }elseif($pekerjaan == "Manager"){
        echo '<br> Gaji: Rp. 15.000.000,-';
    }elseif($pekerjaan == "staf admin"){
        echo '<br> Gaji: Rp. 10.000.000,-';
    }elseif($pekerjaan == "operator"){
        echo '<br> Gaji: Rp. 5.000.000,-'; 
    }

?>

</body>

</html>
</body>
</html>