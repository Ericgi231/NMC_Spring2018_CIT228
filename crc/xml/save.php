<?php
    session_start();
    ob_start();
    include "../connect.php";

    $query = mysqli_query($dat, "SELECT * FROM address") or die(mysqli_error($dat));

    $xml = "<addresses>";
    while($r = mysqli_fetch_array($query)){
        $xml .= "<address>";
            $xml .= "<zip>".$r['zip']."</zip>";
            $xml .= "<add>".$r['address']."</add>";
            $xml .= "<cit>".$r['city']."</cit>";
            $xml .= "<sta>".$r['state']."</sta>";
        $xml .= "</address>";
    }
    $xml .= "</addresses>";

    $sxe = new SimpleXMLElement($xml);
    $sxe->asXML("addresses.xml");

    $_SESSION['saved'] = true;
    header("Location: ../index.php");
?>