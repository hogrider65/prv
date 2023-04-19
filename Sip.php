<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["audio"]) && $_FILES["audio"]["error"] == 0){
        $estensioni_permesse = array("mp3" => "audio/mp3", "ogg" => "audio/ogg" , "mpeg" => "audio/mpeg");
        $nome_file = $_FILES["audio"]["name"];
        $tipo_file = $_FILES["audio"]["type"];

        //estensione file
        $estensione = pathinfo($nome_file, PATHINFO_EXTENSION);
        if(!array_key_exists($estensione, $estensioni_permesse)) die("Errore: Seleziona un formato valido");

        //tipo MIME
        if(in_array($tipo_file, $estensioni_permesse)){
            if(file_exists("load/" . $nome_file)){
                echo $nome_file . " esiste già.";
            }else{
                move_uploaded_file($_FILES["audio"]["tmp_name"], "load/" . $nome_file);
                echo "IL tuo file è stato caricato con successo";   
            }
        }else{
            echo "C'é stato un errore col caricamento Riprova";
        }

    }else{
        echo "Errore: " . $_FILES["audio"]["error"];
    }
}



?>