<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

/*
- Mendefinisikan Variabel
- Nilai Akhir
- Status
- Grade
- Predikat
*/

$nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
$status = '';
$grade = '';
$predikat = '';

/* - MENENTUKAN LULUS ATAU TIDAK MENGGUNAKAN IF ELSE
- SISWA DINYATAKAN LULUS JIKA NILAI TOTAL dengan presentase 30% UTS, 35% UAS dan TUGAS 35% melebihi 55
*/ 
if ($nilai_akhir >= 55) {
    $status = 'LULUS';
} else {
    $status = 'TIDAK LULUS';
}


// MENENTUKAN GRADE NILAI MENGGUNAKAN SYNTAX IF ELSEIF MULTIKONDISI
/*
- Grade E : Jika Nilai Akhir 0-35
- Grade D : Jika Nilai Akhir 36-55
- Grade C : Jika Nilai Akhir 56-69
- Grade B : Jika Nilai Akhir 70-84
- Grade A : Jika Nilai Akhir 85-100
- Grade I : Jika Nilai Akhir < 0 atau Nilai Akhir > 100
*/
if ($nilai_akhir <=35 ) {
    $grade = 'E';
} elseif ($nilai_akhir <= 55) {
    $grade = 'D';
} elseif ($nilai_akhir <= 69) {
    $grade = 'C';
} elseif ($nilai_akhir <= 84) {
    $grade = 'B';
} elseif ($nilai_akhir <= 100) {
    $grade = 'A';
} else {
    $grade = 'I';
}

// MENENTUKAN PREDIKAT NILAI MENGGUNAKAN SYNTAX SWITCH
/*
- Predikat Sangat Kurang : Jika Grade E
- Predikat Kurang : Jika Grade D
- Predikat Cukup : Jika Grade C
- Predikat Memuaskan : Jika Grade B
- Predikat Sangat Memuaskan : Jika Grade A
- Predikat Tidak Ada : Jika Grade I
*/
switch ($grade) {
    case 'E':
        $predikat = 'Sangat Kurang';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'B':
        $predikat = 'Memuaskan';
        break;
    case 'A':
        $predikat = 'Sangat Memuaskan';
        break;
    default:
        $predikat = 'Tidak Ada';
}

// MENCETAK HASIL
if (!empty($proses)) {
    echo 'Proses : ' . $proses;
    echo '<br/>Nama : ' . $nama_siswa;
    echo '<br/>Mata Kuliah : ' . $mata_kuliah;
    echo '<br/>Nilai UTS : ' . $nilai_uts;
    echo '<br/>Nilai UAS : ' . $nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
    // Mencetak Nilai Akhir, Status, Grade, dan Predikat
    echo '<br/>Nilai Akhir : ' . $nilai_akhir;
    echo '<br/>Status : ' . $status;
    echo '<br/>Grade : ' . $grade;
    echo '<br/>Predikat : ' . $predikat;
}