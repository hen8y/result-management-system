<?php
require_once('db.php');
$class=$_POST['class'];
    if($class >=ss1)
{
 header('HTTP/1.1 307 Temporary Redirect');
    header('Location:create-table-sss.php');
} else{ 
    
$sql = "CREATE TABLE IF NOT EXISTS $class (
 no int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 cardpin varchar(255) DEFAULT NULL,
 name varchar(255) DEFAULT NULL,
 class varchar(255) DEFAULT NULL,
 class_no varchar(255) DEFAULT NULL,
 term varchar(255) DEFAULT NULL,
 session varchar(255) DEFAULT NULL,
 year varchar(255) DEFAULT NULL,
 admno varchar(255) DEFAULT NULL,
 sex varchar(255) DEFAULT NULL,
 nxt_term_begins varchar(255) DEFAULT NULL,
 max_obt varchar(255) DEFAULT NULL,
 position varchar(255) DEFAULT NULL,
 teacher_com varchar(255) DEFAULT NULL,
 principal_com varchar(255) DEFAULT NULL,
 no_punctual varchar(255) DEFAULT NULL,
 no_absent varchar(255) DEFAULT NULL,
 no_present varchar(255) DEFAULT NULL,
 self_ctrl varchar(255) DEFAULT NULL,
 obd varchar(255) DEFAULT NULL,
 honesty varchar(255) DEFAULT NULL,
 self_rely varchar(255) DEFAULT NULL,
 intiative varchar(255) DEFAULT NULL,
 puntual varchar(255) DEFAULT NULL,
 neat varchar(255) DEFAULT NULL,
 diligence varchar(255) DEFAULT NULL,
 class_attend varchar(255) DEFAULT NULL,
 attent varchar(255) DEFAULT NULL,
 polite varchar(255) DEFAULT NULL,
 cons_other varchar(255) DEFAULT NULL,
 relation_staff varchar(255) DEFAULT NULL,
 organise varchar(255) DEFAULT NULL,
 respect varchar(255) DEFAULT NULL,
 handwriting varchar(255) DEFAULT NULL,
 fluency varchar(255) DEFAULT NULL,
 sports varchar(255) DEFAULT NULL,
 skills varchar(255) DEFAULT NULL,
 music_skill varchar(255) DEFAULT NULL,
 no_opened varchar(255) DEFAULT NULL,
 english_test1 varchar(255) DEFAULT NULL,
 english_test2 varchar(255) DEFAULT NULL,
 english_exam varchar(255) DEFAULT NULL,
 english_total1 varchar(255) DEFAULT NULL,
 english_total2 varchar(255) DEFAULT NULL,
 math_test1 varchar(255) DEFAULT NULL,
 math_test2 varchar(255) DEFAULT NULL,
 math_exam varchar(255) DEFAULT NULL,
 math_total1 varchar(255) DEFAULT NULL,
 math_total2 varchar(255) DEFAULT NULL,
 basic_sci_test1 varchar(255) DEFAULT NULL,
 basic_sci_test2 varchar(255) DEFAULT NULL,
 basic_sci_exam varchar(255) DEFAULT NULL,
 basic_sci_total1 varchar(255) DEFAULT NULL,
 basic_sci_total2 varchar(255) DEFAULT NULL,
 social_std_test1 varchar(255) DEFAULT NULL,
 social_std_test2 varchar(255) DEFAULT NULL,
 social_std_exam varchar(255) DEFAULT NULL,
 social_std_total1 varchar(255) DEFAULT NULL,
 social_std_total2 varchar(255) DEFAULT NULL,
 crs_irs_test1 varchar(255) DEFAULT NULL,
 crs_irs_test2 varchar(255) DEFAULT NULL,
 crs_irs_exam varchar(255) DEFAULT NULL,
 crs_irs_total1 varchar(255) DEFAULT NULL,
 crs_irs_total2 varchar(255) DEFAULT NULL,
 basic_tech_test1 varchar(255) DEFAULT NULL,
 basic_tech_test2 varchar(255) DEFAULT NULL,
 basic_tech_exam varchar(255) DEFAULT NULL,
 basic_tech_total1 varchar(255) DEFAULT NULL,
 basic_tech_total2 varchar(255) DEFAULT NULL,
 phe_test1 varchar(255) DEFAULT NULL,
 phe_test2 varchar(255) DEFAULT NULL,
 phe_exam varchar(255) DEFAULT NULL,
 phe_total1 varchar(255) DEFAULT NULL,
 phe_total2 varchar(255) DEFAULT NULL,
 agric_sci_test1 varchar(255) DEFAULT NULL,
 agric_sci_test2 varchar(255) DEFAULT NULL,
 agric_sci_exam varchar(255) DEFAULT NULL,
 agric_sci_total1 varchar(255) DEFAULT NULL,
 agric_sci_total2 varchar(255) DEFAULT NULL,
 bus_stud_test1 varchar(255) DEFAULT NULL,
 bus_stud_test2 varchar(255) DEFAULT NULL,
 bus_stud_exam varchar(255) DEFAULT NULL,
 bus_stud_total1 varchar(255) DEFAULT NULL,
 bus_stud_total2 varchar(255) DEFAULT NULL,
 yih_test1 varchar(255) DEFAULT NULL,
 yih_test2 varchar(255) DEFAULT NULL,
 yih_exam varchar(255) DEFAULT NULL,
 yih_total1 varchar(255) DEFAULT NULL,
 yih_total2 varchar(255) DEFAULT NULL,
 french_test1 varchar(255) DEFAULT NULL,
 french_test2 varchar(255) DEFAULT NULL,
 french_exam varchar(255) DEFAULT NULL,
 french_total1 varchar(255) DEFAULT NULL,
 french_total2 varchar(255) DEFAULT NULL,
 fine_art_test1 varchar(255) DEFAULT NULL,
 fine_art_test2 varchar(255) DEFAULT NULL,
 fine_art_exam varchar(255) DEFAULT NULL,
 fine_art_total1 varchar(255) DEFAULT NULL,
 fine_art_total2 varchar(255) DEFAULT NULL,
 comp_test1 varchar(255) DEFAULT NULL,
 comp_test2 varchar(255) DEFAULT NULL,
 comp_exam varchar(255) DEFAULT NULL,
 comp_total1 varchar(255) DEFAULT NULL,
 comp_total2 varchar(255) DEFAULT NULL,
 phone_test1 varchar(255) DEFAULT NULL,
 phone_test2 varchar(255) DEFAULT NULL,
 phone_exam varchar(255) DEFAULT NULL,
 phone_total1 varchar(255) DEFAULT NULL,
 phone_total2 varchar(255) DEFAULT NULL,
 music_test1 varchar(255) DEFAULT NULL,
 music_test2 varchar(255) DEFAULT NULL,
 music_exam varchar(255) DEFAULT NULL,
 music_total1 varchar(255) DEFAULT NULL,
 music_total2 varchar(255) DEFAULT NULL,
 h_econs_test1 varchar(255) DEFAULT NULL,
 h_econs_test2 varchar(255) DEFAULT NULL,
 h_econs_exam varchar(255) DEFAULT NULL,
 h_econs_total1 varchar(255) DEFAULT NULL,
 h_econs_total2 varchar(255) DEFAULT NULL,
 lit_test1 varchar(255) DEFAULT NULL,
 lit_test2 varchar(255) DEFAULT NULL,
 lit_exam varchar(255) DEFAULT NULL,
 lit_total1 varchar(255) DEFAULT NULL,
 lit_total2 varchar(255) DEFAULT NULL,
 civic_test1 varchar(255) DEFAULT NULL,
 civic_test2 varchar(255) DEFAULT NULL,
 civic_exam varchar(255) DEFAULT NULL,
 civic_total1 varchar(255) DEFAULT NULL,
 civic_total2 varchar(255) DEFAULT NULL
) ";

if(mysqli_query($con, $sql)){
require_once('success.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}}
?>