<?php
$siswa = array(
['nama' => 'Syahra Zulya', 'kelas' => 'XI', 'jurusan' => 'RPL'],
['nama' => 'Zulvickar', 'kelas' => 'XII', 'jurusan' => 'RPL'],
['nama' => 'Shania', 'kelas' => 'XI', 'jurusan' => 'TKJ'],
['nama' => 'Achmad Danang', 'kelas' => 'X', 'jurusan' => 'TKJ'],
);

echo $siswa[0]['nama']."<br>";
echo $siswa[0]['kelas']."<br>";
echo $siswa[0]['jurusan']."<br>";

$n = count($siswa);
for($i=0; $i<$n; $i++){
    foreach($siswa[$i] as $key => $value){
        echo $value . "<br>";
        //nama : Syahra Zulya   
    }
}

?>