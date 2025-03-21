<?php 
class JenisKunjungan {
    public $id;
    public $name;
    public $display_name;

    private static function connect() {
        $conn = mysqli_connect('localhost', 'root', '', 'bukutamu');
        //alamat, username, password, nama database

        if(!$conn) {
            die('Connection Failed: ' . mysqli_connect_error());
        }

        return $conn;

    }
    public static function getAll() {
        $conn = self::connect();
        $query = 'SELECT * FROM jenis_kunjungan';

        // Eksekusi Query 
        $result = mysqli_query($conn, $query);

        // Close Connection
        mysqli_close($conn);

        $entries = [];
        while($row = mysqli_fetch_assoc($result)) {
            $entry = new JenisKunjungan();
            $entry->id = $row['id'];            
            $entry->name = $row['name'];
            $entry->display_name = $row['display_name'];

            array_push($entries, $entry);
        }

        return $entries;
    }
}