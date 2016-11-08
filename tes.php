        <?php
        $serverName = "CODAXFAMILY\SQL2014"; //nama server\nama instant, nomor port
        $connectionInfo = array( "UID"=>"sa", "PWD"=>"1234", "Database"=>"RSLANGSA");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        if( $conn === false ){
                echo "Koneksi gagal</br>";
        die( print_r( sqlsrv_errors(), true));
