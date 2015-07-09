<?php
    $fn = $_POST['txtFN'];
    $ln = $_POST['txtLN'];
    $major = $_POST['txtMajor'];
    $secMajor = $_POST['txtSecMajor'];
    $minor = $_POST['txtMinor'];
    $class = $_POST['class'];
    $nsbeid = $_POST['txtID'];
    $email = $_POST['txtEmail'];
    $phone = $_POST['txtPN'];


    if(isset($fn) && !empty($fn) AND isset($ln) && !empty($ln) AND isset($major) && !empty($major) 
        AND isset($secMajor) && !empty($secMajor) AND isset($minor) && !empty($minor) AND isset($class) && !empty($class)
        AND isset($nsbeid) && !empty($nsbeid) AND isset($email) && !empty($email) AND isset($phone) && !empty($phone)) {

        $m = new MongoClient();
        $db = $m->NSBEDir;
        $coll = $db->EBoard;

        $member = array("fn"=>$fn, "ln"=>$ln, "major"=>$major, "secMajor"=>$secMajor, "minor"=>$minor, "class"=>$class, "nsbeid"=>$nsbeid, "email"=>$email, "phone"=>$phone);

        $coll->insert($member);
    }

    else
?>