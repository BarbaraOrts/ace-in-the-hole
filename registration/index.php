<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=barbarao_ace', 'barbarao_ace_user', 'acepassword');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include '../includes/error.inc.html.php';
    echo $e;
    echo 'workkkkk';
    exit();
}

if (isset($_POST['fullname'])) {

    $fullname = $_POST['fullname'];
    $role = $_POST['role'];
    $DOB = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ername = $_POST['ername'];
    $erphone = $_POST['erphone'];
    $tshirtsize = $_POST['tshirtsize'];
    $specialreqs = $_POST['specialreqs'];

     try {
        $sql = 'INSERT INTO registration SET
            
            registration_fullname = :registration_fullname,
            registration_role = :registration_role,
            registration_DOB = :registration_DOB,
            registration_gender = :registration_gender,
            registration_email = :registration_email,
            registration_phone = :registration_phone,
            registration_ername = :registration_ername,
            registration_erphone = :registration_erphone,
            registration_tshirtsize = :registration_tshirtsize,
            registration_specialreqs = :registration_specialreqs';

        $s = $pdo->prepare($sql);
        $s->bindValue(':registration_fullname', $fullname);
        $s->bindValue(':registration_role', $role);
        $s->bindValue(':registration_DOB', $DOB);
        $s->bindValue(':registration_gender', $gender);
        $s->bindValue(':registration_email', $email);
        $s->bindValue(':registration_phone', $phone);
        $s->bindValue(':registration_ername', $ername);
        $s->bindValue(':registration_erphone', $erphone);
         $s->bindValue(':registration_tshirtsize', $tshirtsize);
         $s->bindValue(':registration_specialreqs', $specialreqs);
        $s->execute();
    }
    catch (PDOException $e)
    {
        $error = 'Error submitting your registration: ' . $e->getMessage();
        include '../includes/error.inc.html.php';
        echo $e;
        exit();
    }

    include 'success.html.php';

} else {

include 'registration.html.php';
}

?>
