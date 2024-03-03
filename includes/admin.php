<?php
require("../includes/config.php");
if (isset($_POST['update-section'])) {
    $home = $_POST['home'] ?? 0;
    $about = $_POST['about'] ?? 0;
    $skill = $_POST['skill'] ?? 0;
    $project = $_POST['project'] ?? 0;
    $contact = $_POST['contact'] ?? 0;

    $query = "UPDATE section_control SET ";
    $query .= "home_section='$home',";
    $query .= "about_section='$about',";
    $query .= "skill_section='$skill',";
    $query .= "project_section='$project',";
    $query .= "contact_section='$contact' WHERE id=1";

    $run = mysqli_query($db, $query);
    if ($run) {
        echo "<script>window.location.href = '../admin/index.php';</script>";
    }
}

if (isset($_POST['update-home'])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $subtitle = mysqli_real_escape_string($db, $_POST['subtitle']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $showicons = $_POST['showicons'];

    $imagename = time() . $_FILES['pro']['name'];
    $imgtemp = $_FILES['pro']['tmp_name'];

    if ($imgtemp == '') {
        $q = "SELECT * FROM home WHERE 1";
        $r = mysqli_query($db, $q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['pro_pic'];
    }

    move_uploaded_file($imgtemp, "../packages/images/$imagename");

    $query = "UPDATE home SET ";
    $query .= "title='$title',";
    $query .= "subtitle='$subtitle',";
    $query .= "pro_pic='$imagename',";
    $query .= "description='$description',";
    $query .= "showicons='$showicons' WHERE id=1";

    $run = mysqli_query($db, $query);
    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?homesetting=true';</script>";
    }
}

if (isset($_POST['update-about'])) {
    $title = mysqli_real_escape_string($db, $_POST['abouttitle']);
    $subtitle = mysqli_real_escape_string($db, $_POST['aboutsubtitle']);
    $desc = mysqli_real_escape_string($db, $_POST['aboutdesc']);
    $imagename = time() . $_FILES['profile']['name'];
    $imgtemp = $_FILES['profile']['tmp_name'];

    if ($imgtemp == '') {
        $q = "SELECT * FROM about WHERE 1";
        $r = mysqli_query($db, $q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile_pic'];
    }

    move_uploaded_file($imgtemp, "../packages/images/$imagename");

    $query = "UPDATE about SET ";
    $query .= "about_title='$title',";
    $query .= "about_subtitle='$subtitle',";
    $query .= "profile_pic='$imagename',";
    $query .= "about_desc='$desc' WHERE id=1";

    $run = mysqli_query($db, $query);
    if ($run) {
        echo "<script>window.location.href = '../admin/index.php?aboutsetting=true';</script>";
    }
}
