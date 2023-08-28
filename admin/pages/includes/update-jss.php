<?php
require_once('db.php');

$term= $_POST['term'];
$class=$_POST['class'];
$cardpin=$_POST['cardpin'];

$result = mysqli_query($con,"SELECT * FROM $class WHERE cardpin = '$cardpin' HAVING term = '$term'");
if (mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{
    
  
$name = (empty($_POST['name'])) ? $row['name'] : $_POST['name'];
$class_no=(empty($_POST['class_no'])) ? $row['class_no'] : $_POST['class_no'];
$session=(empty($_POST['session'])) ? $row['session'] : $_POST['session'];
$year=(empty($_POST['year'])) ? $row['year'] : $_POST['year'];
$admno=(empty($_POST['admno'])) ? $row['admno'] : $_POST['admno'];
$sex=(empty($_POST['sex'])) ? $row['sex'] : $_POST['sex'];
$nxt_term_begins=(empty($_POST['nxt_term_begins'])) ? $row['nxt_term'] : $_POST['nxt_term'];
$max_obt=(empty($_POST['max_obt'])) ? $row['max_obt'] : $_POST['max_obt'];
$position=(empty($_POST['position'])) ? $row['position'] : $_POST['position'];
$teacher_com=(empty($_POST['teacher_com'])) ? $row['teacher_com'] : $_POST['teacher_com'];
$principal_com=(empty($_POST['principal_com'])) ? $row['principal_com'] : $_POST['principal_com'];
$no_punctual=(empty($_POST['no_punctual'])) ? $row['no_punctual'] : $_POST['no_punctual'];
$no_absent=(empty($_POST['no_absent'])) ? $row['no_absent'] : $_POST['no_absent'];
$no_present=(empty($_POST['no_present'])) ? $row['no_present'] : $_POST['no_present'];
$self_ctrl=(empty($_POST['self_ctrl'])) ? $row['self_ctrl'] : $_POST['self_ctrl'];
$obd=(empty($_POST['obd'])) ? $row['obd'] : $_POST['obd'];
$honesty=(empty($_POST['honesty'])) ? $row['honesty'] : $_POST['honesty'];
$self_rely=(empty($_POST['self_rely'])) ? $row['self_rely'] : $_POST['self_rely'];
$intiative=(empty($_POST['intiative'])) ? $row['initiative'] : $_POST['initiative'];
$puntual=(empty($_POST['puntual'])) ? $row['puntual'] : $_POST['puntual'];
$neat=(empty($_POST['neat'])) ? $row['neat'] : $_POST['neat'];
$diligence=(empty($_POST['diligence'])) ? $row['diligence'] : $_POST['diligence'];
$class_attend=(empty($_POST['class_attend'])) ? $row['class_attend'] : $_POST['class_attend'];
$attent=(empty($_POST['attent'])) ? $row['attent'] : $_POST['attent'];
$polite=(empty($_POST['polite'])) ? $row['polite'] : $_POST['polite'];
$cons_other=(empty($_POST['cons_other'])) ? $row['cons_other'] : $_POST['cons_other'];
$relation_staff=(empty($_POST['relation_staff'])) ? $row['relation_staff'] : $_POST['relation_staff'];
$organise=(empty($_POST['organise'])) ? $row['organise'] : $_POST['organise'];
$respect=(empty($_POST['respect'])) ? $row['respect'] : $_POST['respect'];
$handwriting=(empty($_POST['handwriting'])) ? $row['handwriting'] : $_POST['handwriting'];
$fluency=(empty($_POST['fluency'])) ? $row['fluency'] : $_POST['fluency'];
$sports=(empty($_POST['sports'])) ? $row['sports'] : $_POST['sports'];
$skills=(empty($_POST['skills'])) ? $row['skills'] : $_POST['skills'];
$music_skill=(empty($_POST['music_skill'])) ? $row['music_skill'] : $_POST['music_skill'];
$no_opened=(empty($_POST['no_opened'])) ? $row['no_opened'] : $_POST['no_opened'];
$english_test1=(empty($_POST['english_test1'])) ? $row['english_test1'] : $_POST['english_test1'];
$english_test2=(empty($_POST['english_test2'])) ? $row['english_test2'] : $_POST['english_test2'];
$english_exam=(empty($_POST['english_exam'])) ? $row['english_exam'] : $_POST['english_exam'];
$english_total1=(empty($_POST['english_total1'])) ? $row['english_total1'] : $_POST['english_total1'];
$english_total2=(empty($_POST['english_total2'])) ? $row['english_total2'] : $_POST['english_total2'];
$math_test1=(empty($_POST['math_test1'])) ? $row['math_test1'] : $_POST['math_test1'];
$math_test2=(empty($_POST['math_test2'])) ? $row['math_test2'] : $_POST['math_test2'];
$math_exam=(empty($_POST['math_exam'])) ? $row['math_exam'] : $_POST['math_exam'];
$math_total1=(empty($_POST['math_total1'])) ? $row['math_total1'] : $_POST['math_total1'];
$math_total2=(empty($_POST['math_total2'])) ? $row['math_total2'] : $_POST['math_total2'];
$basic_sci_test1=(empty($_POST['basic_sci_test1'])) ? $row[' basic_sci_test1'] : $_POST[' basic_sci_test1'];
$basic_sci_test2=(empty($_POST['basic_sci_test2'])) ? $row[' basic_sci_test2'] : $_POST[' basic_sci_test2'];
$basic_sci_exam=(empty($_POST['basic_sci_exam'])) ? $row[' basic_sci_exam'] : $_POST[' basic_sci_exam'];
$basic_sci_total1=(empty($_POST['basic_sci_total1'])) ? $row[' basic_sci_total1'] : $_POST[' basic_sci_total2'];
$basic_sci_total2=(empty($_POST['basic_sci_total2'])) ? $row[' basic_sci_total2'] : $_POST[' basic_sci_total2'];
$social_std_test1=(empty($_POST['social_std_test1'])) ? $row[' social_std_test1'] : $_POST[' social_std_test1'];
$social_std_test2=(empty($_POST['social_std_test2'])) ? $row[' social_std_test2'] : $_POST[' social_std_test2'];
$social_std_exam=(empty($_POST['social_std_exam'])) ? $row[' social_std_exam'] : $_POST[' social_std_exam'];
$social_std_total1=(empty($_POST['social_std_total1'])) ? $row[' social_std_total1'] : $_POST[' social_std_total1'];
$social_std_total2=(empty($_POST['social_std_total2'])) ? $row[' social_std_total2'] : $_POST[' social_std_total2'];
$crs_irs_test1=(empty($_POST['crs_irs_test1'])) ? $row['crs_irs_test1'] : $_POST['crs_irs_test1'];
$crs_irs_test2=(empty($_POST['crs_irs_test2'])) ? $row['crs_irs_test2'] : $_POST['crs_irs_test2'];
$crs_irs_exam=(empty($_POST['crs_irs_exam'])) ? $row['crs_irs_exam'] : $_POST['crs_irs_exam'];
$crs_irs_total1=(empty($_POST['crs_irs_total1'])) ? $row['crs_irs_total1'] : $_POST['crs_irs_total1'];
$crs_irs_total2=(empty($_POST['crs_irs_total2'])) ? $row['crs_irs_total2'] : $_POST['crs_irs_total2'];
$basic_tech_test1=(empty($_POST['basic_tech_test1'])) ? $row['basic_tech_test1'] : $_POST['basic_tech_test1'];
$basic_tech_test2=(empty($_POST['basic_tech_test2'])) ? $row['basic_tech_test2'] : $_POST['basic_tech_test2'];
$basic_tech_exam=(empty($_POST['basic_tech_exam'])) ? $row['basic_tech_exam'] : $_POST['basic_tech_exam'];
$basic_tech_total1=(empty($_POST['basic_tech_total1'])) ? $row['basic_tech_total1'] : $_POST['basic_tech_total1'];
$basic_tech_total2=(empty($_POST['basic_tech_total2'])) ? $row['basic_tech_total2'] : $_POST['basic_tech_total2'];
$phe_test1=(empty($_POST['phe_test1'])) ? $row['phe_test1'] : $_POST['phe_test1'];
$phe_test2=(empty($_POST['phe_test2'])) ? $row['phe_test2'] : $_POST['phe_test2'];
$phe_exam=(empty($_POST['phe_exam'])) ? $row['phe_exam'] : $_POST['phe_exam'];
$phe_total1=(empty($_POST['phe_total1'])) ? $row['phe_total1'] : $_POST['phe_total1'];
$phe_total2=(empty($_POST['phe_total2'])) ? $row['phe_total2'] : $_POST['phe_total2'];
$agric_sci_test1=(empty($_POST['agric_sci_test1'])) ? $row['agric_sci_test1'] : $_POST['agric_sci_test1'];
$agric_sci_test2=(empty($_POST['agric_sci_test2'])) ? $row['agric_sci_test2'] : $_POST['agric_sci_test2'];
$agric_sci_exam=(empty($_POST['agric_sci_exam'])) ? $row['agric_sci_exam'] : $_POST['agric_sci_exam'];
$agric_sci_total1=(empty($_POST['agric_sci_total1'])) ? $row['agric_sci_total1'] : $_POST['agric_sci_total1'];
$agric_sci_total2=(empty($_POST['agric_sci_total2'])) ? $row['agric_sci_total2'] : $_POST['agric_sci_total2'];
$bus_stud_test1=(empty($_POST['bus_stud_test1'])) ? $row['bus_stud_test1'] : $_POST['bus_stud_test1'];
$bus_stud_test2=(empty($_POST['bus_stud_test2'])) ? $row['bus_stud_test2'] : $_POST['bus_stud_test2'];
$bus_stud_exam=(empty($_POST['bus_stud_exam'])) ? $row['bus_stud_exam'] : $_POST['bus_stud_exam'];
$bus_stud_total1=(empty($_POST['bus_stud_total1'])) ? $row['bus_stud_total1'] : $_POST['bus_stud_total1'];
$bus_stud_total2=(empty($_POST['bus_stud_total2'])) ? $row['bus_stud_total2'] : $_POST['bus_stud_total2'];
$yih_test1=(empty($_POST['yih_test1'])) ? $row['yih_test1'] : $_POST['yih_test1'];
$yih_test2=(empty($_POST['yih_test2'])) ? $row['yih_test2'] : $_POST['yih_test2'];
$yih_exam=(empty($_POST['yih_exam'])) ? $row['yih_exam'] : $_POST['yih_exam'];
$yih_total1=(empty($_POST['yih_total1'])) ? $row['yih_total1'] : $_POST['yih_total1'];
$yih_total2=(empty($_POST['yih_total2'])) ? $row['yih_total2'] : $_POST['yih_total2'];
$french_test1=(empty($_POST['french_test1'])) ? $row['french_test1'] : $_POST['french_test1'];
$french_test2=(empty($_POST['french_test2'])) ? $row['french_test2'] : $_POST['french_test2'];
$french_exam=(empty($_POST['french_exam'])) ? $row['french_exam'] : $_POST['french_exam'];
$french_total1=(empty($_POST['french_total1'])) ? $row['french_total1'] : $_POST['french_total1'];
$french_total2=(empty($_POST['french_total2'])) ? $row['french_total2'] : $_POST['french_total2'];
$fine_art_test1=(empty($_POST['fine_art_test1'])) ? $row['fine_art_test1'] : $_POST['fine_art_test1'];
$fine_art_test2=(empty($_POST['fine_art_test2'])) ? $row['fine_art_test2'] : $_POST['fine_art_test2'];
$fine_art_exam=(empty($_POST['fine_art_exam'])) ? $row['fine_art_exam'] : $_POST['fine_art_exam'];
$fine_art_total1=(empty($_POST['fine_art_total1'])) ? $row['fine_art_total1'] : $_POST['fine_art_total1'];
$fine_art_total2=(empty($_POST['fine_art_total2'])) ? $row['fine_art_total2'] : $_POST['fine_art_total2'];
$comp_test1=(empty($_POST['comp_test1'])) ? $row['comp_test1'] : $_POST['comp_test1'];
$comp_test2=(empty($_POST['comp_test2'])) ? $row['comp_test2'] : $_POST['comp_test2'];
$comp_exam=(empty($_POST['comp_exam'])) ? $row['comp_exam'] : $_POST['comp_exam'];
$comp_total1=(empty($_POST['comp_total1'])) ? $row['comp_total1'] : $_POST['comp_total1'];
$comp_total2=(empty($_POST['comp_total2'])) ? $row['comp_total2'] : $_POST['comp_total2'];
$phone_test1=(empty($_POST['phone_test1'])) ? $row['phone_test1'] : $_POST['phone_test1'];
$phone_test2=(empty($_POST['phone_test2'])) ? $row['phone_test2'] : $_POST['phone_test2'];
$phone_exam=(empty($_POST['phone_exam'])) ? $row['phone_exam'] : $_POST['phone_exam'];
$phone_total1=(empty($_POST['phone_total1'])) ? $row['phone_total1'] : $_POST['phone_total1'];
$phone_total2=(empty($_POST['phone_total2'])) ? $row['phone_total2'] : $_POST['phone_total2'];
$music_test1=(empty($_POST['music_test1'])) ? $row['music_test1'] : $_POST['music_test1'];
$music_test2=(empty($_POST['music_test2'])) ? $row['music_test2'] : $_POST['music_test2'];
$music_exam=(empty($_POST['music_exam'])) ? $row['music_exam'] : $_POST['music_exam'];
$music_total1=(empty($_POST['music_total1'])) ? $row['music_total1'] : $_POST['music_total1'];
$music_total2=(empty($_POST['music_total2'])) ? $row['music_total2'] : $_POST['music_total2'];
$h_econs_test1=(empty($_POST['h_econs_test1'])) ? $row['h_econs_test1'] : $_POST['h_econs_test1'];
$h_econs_test2=(empty($_POST['h_econs_test2'])) ? $row['h_econs_test2'] : $_POST['h_econs_test2'];
$h_econs_exam=(empty($_POST['h_econs_exam'])) ? $row['h_econs_exam'] : $_POST['h_econs_exam'];
$h_econs_total1=(empty($_POST['h_econs_total1'])) ? $row['h_econs_total1'] : $_POST['h_econs_total1'];
$h_econs_total2=(empty($_POST['h_econs_total2'])) ? $row['h_econs_total2'] : $_POST['h_econs_total2'];
$lit_test1=(empty($_POST['lit_test1'])) ? $row['lit_test1'] : $_POST['lit_test1'];
$lit_test2=(empty($_POST['lit_test2'])) ? $row['lit_test2'] : $_POST['lit_test2'];
$lit_exam=(empty($_POST['lit_exam'])) ? $row['lit_exam'] : $_POST['lit_exam'];
$lit_total1=(empty($_POST['lit_total1'])) ? $row['lit_total1'] : $_POST['lit_total1'];
$lit_total2=(empty($_POST['lit_total2'])) ? $row['lit_total2'] : $_POST['lit_total2'];
$civic_test1=(empty($_POST['civic_test1'])) ? $row['civic_test1'] : $_POST['civic_test1'];
$civic_test2=(empty($_POST['civic_test2'])) ? $row['civic_test2'] : $_POST['civic_test2'];
$civic_exam=(empty($_POST['civic_exam'])) ? $row['civic_exam'] : $_POST['civic_exam'];
$civic_total1=(empty($_POST['civic_total1'])) ? $row['civic_total1'] : $_POST['civic_total1'];
$civic_total2=(empty($_POST['civic_total2'])) ? $row['civic_total2'] : $_POST['civic_total2'];
   
$sql = "UPDATE $class
SET cardpin='$cardpin', name='$name', class='$class', class_no='$class_no', term='$term', session='$session', year='$year', admno='$admno', sex='$sex', nxt_term_begins='$nxt_term_begins', max_obt='$max_obt', position='$position', teacher_com='$teacher_com', principal_com='$principal_com', no_punctual='$no_punctual', no_absent='$no_absent', no_present='$no_present', self_ctrl='$self_ctrl', obd='$obd', honesty='$honesty', self_rely='$self_rely', intiative='$intiative', puntual='$puntual', neat='$neat', diligence='$diligence', class_attend='$class_attend', attent='$attent', polite='$polite', cons_other='$cons_other', relation_staff='$relation_staff', organise='$organise', respect='$respect', handwriting='$handwriting', fluency='$fluency', sports='$sports', skills='$skills', music_skill='$music_skill', no_opened='$no_opened', english_test1 = '$english_test1', english_test2 = '$english_test2', english_exam = '$english_exam', english_total1 = '$english_total1', english_total2 = '$english_total2', math_test1 = '$math_test1', math_test2 = '$math_test2', math_exam = '$math_exam', math_total1 = '$math_total1', math_total2 = '$math_total2', basic_sci_test1 = '$basic_sci_test1', basic_sci_test2 = '$basic_sci_test2', basic_sci_exam = '$basic_sci_exam', basic_sci_total1 = '$basic_sci_total1', basic_sci_total2 = '$basic_sci_total2', social_std_test1 = '$social_std_test1', social_std_test2 = '$social_std_test2', social_std_exam = '$social_std_exam', social_std_total1 = '$social_std_total1', social_std_total2 = '$social_std_total2', crs_irs_test1 = '$crs_irs_test1', crs_irs_test2 = '$crs_irs_test2', crs_irs_exam = '$crs_irs_exam', crs_irs_total1 = '$crs_irs_total1', crs_irs_total2 = '$crs_irs_total2', basic_tech_test1 = '$basic_tech_test1', basic_tech_test2 = '$basic_tech_test2', basic_tech_exam = '$basic_tech_exam', basic_tech_total1 = '$basic_tech_total1', basic_tech_total2 = '$basic_tech_total2', phe_test1 = '$phe_test1', phe_test2 = '$phe_test2', phe_exam = '$phe_exam', phe_total1 = '$phe_total1', phe_total2 = '$phe_total2', agric_sci_test1 = '$agric_sci_test1', agric_sci_test2 = '$agric_sci_test2', agric_sci_exam = '$agric_sci_exam', agric_sci_total1 = '$agric_sci_total1', agric_sci_total2 = '$agric_sci_total2', bus_stud_test1 = '$bus_stud_test1', bus_stud_test2 = '$bus_stud_test2', bus_stud_exam = '$bus_stud_exam', bus_stud_total1 = '$bus_stud_total1', bus_stud_total2 = '$bus_stud_total2', yih_test1 = '$yih_test1', yih_test2 = '$yih_test2', yih_exam = '$yih_exam', yih_total1 = '$yih_total1', yih_total2 = '$yih_total2', french_test1 = '$french_test1', french_test2 = '$french_test2', french_exam = '$french_exam', french_total1 = '$french_total1', french_total2 = '$french_total2', fine_art_test1 = '$fine_art_test1', fine_art_test2 = '$fine_art_test2', fine_art_exam = '$fine_art_exam', fine_art_total1 = '$fine_art_total1', fine_art_total2 = '$fine_art_total2', comp_test1 = '$comp_test1', comp_test2 = '$comp_test2', comp_exam = '$comp_exam', comp_total1 = '$comp_total1', comp_total2 = '$comp_total2', phone_test1 = '$phone_test1', phone_test2 = '$phone_test2', phone_exam = '$phone_exam', phone_total1 = '$phone_total1', phone_total2 = '$phone_total2', music_test1 = '$music_test1', music_test2 = '$music_test2', music_exam = '$music_exam', music_total1 = '$music_total1', music_total2 = '$music_total2', h_econs_test1 = '$h_econs_test1', h_econs_test2 = '$h_econs_test2', h_econs_exam = '$h_econs_exam', h_econs_total1 = '$h_econs_total1', h_econs_total2 = '$h_econs_total2', lit_test1 = '$lit_test1', lit_test2 = '$lit_test2', lit_exam = '$lit_exam', lit_total1 = '$lit_total1', lit_total2 = '$lit_total2', civic_test1 = '$civic_test1', civic_test2 = '$civic_test2', civic_exam = '$civic_exam', civic_total1 = '$civic_total1', civic_total2 = '$civic_total2'

    WHERE cardpin = '$cardpin'";

if(mysqli_query($con, $sql)){
require_once('success.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}}
?>