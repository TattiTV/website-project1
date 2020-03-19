<?php
// onko action asetettu
if(isset($_POST['action'])) {
    if ($_POST['action'] == 'edits') {
        // hakee jsonfilun mihin tiedot tallennetaan
        $jsonString = file_get_contents('content.json');
        $data = json_decode($jsonString, true);
        
        // muokkaa jsoniin uudet tiedot
        $data["introduction"]["cont"] = $_POST['post1'];
        $data["info"]["cont"] = $_POST['post2'];
        $data["person1"]["name"] = $_POST['post3'];
        $data["person1"]["cont"] = $_POST['post4'];
        $data["person2"]["name"] = $_POST['post5'];
        $data["person2"]["cont"] = $_POST['post6'];
        $data["footer1"]["cont"] = $_POST['post7'];
        $data["footer2"]["cont"] = $_POST['post8'];
        $data["turva"]["title"] = $_POST['post9'];
        $data["turva"]["des"] = $_POST['post10'];
        $data["turva"]["title2"] = $_POST['post11'];
        $data["turva"]["cont1"] = $_POST['post12'];
        $data["turva"]["title3"] = $_POST['post13'];
        $data["turva"]["title4"] = $_POST['post14'];
        $data["tuli"]["title"] = $_POST['post15'];
        $data["tuli"]["des"] = $_POST['post16'];
        $data["tuli"]["title2"] = $_POST['post17'];
        $data["tuli"]["des2"] = $_POST['post18'];
        $data["tuli"]["title3"] = $_POST['post19'];
        $data["tuli"]["des3"] = $_POST['post20'];
        $data["tuli"]["title4"] = $_POST['post21'];
        $data["sammutus"]["title"] = $_POST['post22'];
        $data["sammutus"]["title2"] = $_POST['post23'];
        $data["sammutus"]["des"] = $_POST['post24'];
        $data["sammutus"]["title3"] = $_POST['post25'];
        $data["sammutus"]["des2"] = $_POST['post26'];
        $data["sammutus"]["title4"] = $_POST['post27'];
        $data["sammutus"]["des3"] = $_POST['post28'];
        $data["yhteystiedot"]["title"] = $_POST['post29'];
        $data["yhteystiedot"]["title2"] = $_POST['post30'];
        $data["yhteystiedot"]["cont"] = $_POST['post31'];
        $data["yhteystiedot"]["title3"] = $_POST['post32'];
        $data["yhteystiedot"]["cont2"] = $_POST['post33'];
        
        // json takaisin oikeaan muotoon ja palvelimelle
        $newJson = json_encode($data);
        file_put_contents('content.json', $newJson);
        
        // logi onnistuneesta tallennuksesta
        $response = array('Muutokset tallennettu');
        echo json_encode($response);
    }
}

?>
