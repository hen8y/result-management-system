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
$geo_test1=(empty($_POST['geo_test1'])) ? $row['geo_test1'] : $_POST['geo_test1'];
$geo_test2=(empty($_POST['geo_test2'])) ? $row['geo_test2'] : $_POST['geo_test2'];
$geo_exam=(empty($_POST['geo_exam'])) ? $row['geo_exam'] : $_POST['geo_exam'];
$geo_total1=(empty($_POST['geo_total1'])) ? $row['geo_total1'] : $_POST['geo_total1'];
$geo_total2=(empty($_POST['geo_total2'])) ? $row['geo_total2'] : $_POST['geo_total2'];
$yih_test1=(empty($_POST['yih_test1'])) ? $row['yih_test1'] : $_POST['yih_test1'];
$yih_test2=(empty($_POST['yih_test2'])) ? $row['yih_test2'] : $_POST['yih_test2'];
$yih_exam=(empty($_POST['yih_exam'])) ? $row['yih_exam'] : $_POST['yih_exam'];
$yih_total1=(empty($_POST['yih_total1'])) ? $row['yih_total1'] : $_POST['yih_total1'];
$yih_total2=(empty($_POST['yih_total2'])) ? $row['yih_total2'] : $_POST['yih_total2'];
$crs_irs_test1=(empty($_POST['crs_irs_test1'])) ? $row['crs_irs_test1'] : $_POST['crs_irs_test1'];
$crs_irs_test2=(empty($_POST['crs_irs_test2'])) ? $row['crs_irs_test2'] : $_POST['crs_irs_test2'];
$crs_irs_exam=(empty($_POST['crs_irs_exam'])) ? $row['crs_irs_exam'] : $_POST['crs_irs_exam'];
$crs_irs_total1=(empty($_POST['crs_irs_total1'])) ? $row['crs_irs_total1'] : $_POST['crs_irs_total1'];
$crs_irs_total2=(empty($_POST['crs_irs_total2'])) ? $row['crs_irs_total2'] : $_POST['crs_irs_total2'];
$history_test1=(empty($_POST['history_test1'])) ? $row['history_test1'] : $_POST['history_test1'];
$history_test2=(empty($_POST['history_test2'])) ? $row['history_test2'] : $_POST['history_test2'];
$history_exam=(empty($_POST['history_exam'])) ? $row['history_exam'] : $_POST['history_exam'];
$history_total1=(empty($_POST['history_total1'])) ? $row['history_total1'] : $_POST['history_total1'];
$history_total2=(empty($_POST['history_total2'])) ? $row['history_total2'] : $_POST['history_total2'];
$govt_test1=(empty($_POST['govt_test1'])) ? $row['govt_test1'] : $_POST['govt_test1'];
$govt_test2=(empty($_POST['govt_test2'])) ? $row['govt_test2'] : $_POST['govt_test2'];
$govt_exam=(empty($_POST['govt_exam'])) ? $row['govt_exam'] : $_POST['govt_exam'];
$govt_total1=(empty($_POST['govt_total1'])) ? $row['govt_total1'] : $_POST['govt_total1'];
$govt_total2=(empty($_POST['govt_total2'])) ? $row['govt_total2'] : $_POST['govt_total2'];
$econs_test1=(empty($_POST['econs_test1'])) ? $row['econ_test1'] : $_POST['econ_test1'];
$econs_test2=(empty($_POST['econs_test2'])) ? $row['econ_test2'] : $_POST['econ_test2'];
$econs_exam=(empty($_POST['econs_exam'])) ? $row['econ_exam'] : $_POST['econ_exam'];
$econs_total1=(empty($_POST['econs_total1'])) ? $row['econ_total1'] : $_POST['econ_total1'];
$econs_total2=(empty($_POST['econs_total2'])) ? $row['econ_total2'] : $_POST['econ_total2'];
$f_maths_test1=(empty($_POST['f_maths_test1'])) ? $row['f_maths_test1'] : $_POST['f_maths_test1'];
$f_maths_test2=(empty($_POST['f_maths_test2'])) ? $row['f_maths_test2'] : $_POST['f_maths_test2'];
$f_maths_exam=(empty($_POST['f_maths_exam'])) ? $row['f_maths_exam'] : $_POST['f_maths_exam'];
$f_maths_total1=(empty($_POST['f_maths_total1'])) ? $row['f_maths_total1'] : $_POST['f_maths_total1'];
$f_maths_total2=(empty($_POST['f_maths_total2'])) ? $row['f_maths_total2'] : $_POST['f_maths_total2'];
$phy_test1=(empty($_POST['phy_test1'])) ? $row['phy_test1'] : $_POST['phy_test1'];
$phy_test2=(empty($_POST['phy_test2'])) ? $row['phy_test2'] : $_POST['phy_test2'];
$phy_exam=(empty($_POST['phy_exam'])) ? $row['phy_exam'] : $_POST['phy_exam'];
$phy_total1=(empty($_POST['phy_total1'])) ? $row['phy_total1'] : $_POST['phy_total1'];
$phy_total2=(empty($_POST['phy_total2'])) ? $row['phy_total2'] : $_POST['phy_total2'];
$chem_test1=(empty($_POST['chem_test1'])) ? $row['chem_test1'] : $_POST['chem_test1'];
$chem_test2=(empty($_POST['chem_test2'])) ? $row['chem_test2'] : $_POST['chem_test2'];
$chem_exam=(empty($_POST['chem_exam'])) ? $row['chem_exam'] : $_POST['chem_exam'];
$chem_total1=(empty($_POST['chem_total1'])) ? $row['chem_total1'] : $_POST['chem_total1'];
$chem_total2=(empty($_POST['chem_total2'])) ? $row['chem_total2'] : $_POST['chem_total2'];
$bio_test1=(empty($_POST['bio_test1'])) ? $row['bio_test1'] : $_POST['bio_test1'];
$bio_test2=(empty($_POST['bio_test2'])) ? $row['bio_test2'] : $_POST['bio_test2'];
$bio_exam=(empty($_POST['bio_exam'])) ? $row['bio_exam'] : $_POST['bio_exam'];
$bio_total1=(empty($_POST['bio_total1'])) ? $row['bio_total1'] : $_POST['bio_total1'];
$bio_total2=(empty($_POST['bio_total2'])) ? $row['bio_total2'] : $_POST['bio_total2'];
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
$tech_draw_test1=(empty($_POST['tech_draw_test1'])) ? $row['tech_draw_test1'] : $_POST['tech_draw_test1'];
$tech_draw_test2=(empty($_POST['tech_draw_test2'])) ? $row['tech_draw_test2'] : $_POST['tech_draw_test2'];
$tech_draw_exam=(empty($_POST['tech_draw_exam'])) ? $row['tech_draw_exam'] : $_POST['tech_draw_exam'];
$tech_draw_total1=(empty($_POST['tech_draw_total1'])) ? $row['tech_draw_total1'] : $_POST['tech_draw_total1'];
$tech_draw_total2=(empty($_POST['tech_draw_total2'])) ? $row['tech_draw_total2'] : $_POST['tech_draw_total2'];
$commerce_test1=(empty($_POST['commerce_test1'])) ? $row['commerce_test1'] : $_POST['commerce_test1'];
$commerce_test2=(empty($_POST['commerce_test2'])) ? $row['commerce_test2'] : $_POST['commerce_test2'];
$commerce_exam=(empty($_POST['commerce_exam'])) ? $row['commerce_exam'] : $_POST['commerce_exam'];
$commerce_total1=(empty($_POST['commerce_total1'])) ? $row['commerce_total1'] : $_POST['commerce_total1'];
$commerce_total2=(empty($_POST['commerce_total2'])) ? $row['commerce_total2'] : $_POST['commerce_total2'];
$acc_test1=(empty($_POST['acc_test1'])) ? $row['acc_test1'] : $_POST['acc_test1'];
$acc_test2=(empty($_POST['acc_test2'])) ? $row['acc_test2'] : $_POST['acc_test2'];
$acc_exam=(empty($_POST['acc_exam'])) ? $row['acc_exam'] : $_POST['acc_exam'];
$acc_total1=(empty($_POST['acc_total1'])) ? $row['acc_total1'] : $_POST['acc_total1'];
$acc_total2=(empty($_POST['acc_total2'])) ? $row['acc_total2'] : $_POST['acc_total2'];
$agric_sci_test1=(empty($_POST['agric_sci_test1'])) ? $row['agric_sci_test1'] : $_POST['agric_sci_test1'];
$agric_sci_test2=(empty($_POST['agric_sci_test2'])) ? $row['agric_sci_test2'] : $_POST['agric_sci_test2'];
$agric_sci_exam=(empty($_POST['agric_sci_exam'])) ? $row['agric_sci_exam'] : $_POST['agric_sci_exam'];
$agric_sci_total1=(empty($_POST['agric_sci_total1'])) ? $row['agric_sci_total1'] : $_POST['agric_sci_total1'];
$agric_sci_total2=(empty($_POST['agric_sci_total2'])) ? $row['agric_sci_total2'] : $_POST['agric_sci_total2'];
$food_nu_test1=(empty($_POST['food_nu_test1'])) ? $row['food_nu_test1'] : $_POST['food_nu_test1'];
$food_nu_test2=(empty($_POST['food_nu_test2'])) ? $row['food_nu_test2'] : $_POST['food_nu_test2'];
$food_nu_exam=(empty($_POST['food_nu_exam'])) ? $row['food_nu_exam'] : $_POST['food_nu_exam'];
$food_nu_total1=(empty($_POST['food_nu_total1'])) ? $row['food_nu_total1'] : $_POST['food_nu_total1'];
$food_nu_total2=(empty($_POST['food_nu_total2'])) ? $row['food_nu_total2'] : $_POST['food_nu_total2'];
$b_keep_test1=(empty($_POST['b_keep_test1'])) ? $row['b_keep_test1'] : $_POST['b_keep_test1'];
$b_keep_test2=(empty($_POST['b_keep_test2'])) ? $row['b_keep_test2'] : $_POST['b_keep_test2'];
$b_keep_exam=(empty($_POST['b_keep_exam'])) ? $row['b_keep_exam'] : $_POST['b_keep_exam'];
$b_keep_total1=(empty($_POST['b_keep_total1'])) ? $row['b_keep_total1'] : $_POST['b_keep_total1'];
$b_keep_total2=(empty($_POST['b_keep_total2'])) ? $row['b_keep_total2'] : $_POST['b_keep_total2'];
$c_c_test1=(empty($_POST['c_c_test1'])) ? $row['c_c_test1'] : $_POST['c_c_test1'];
$c_c_test2=(empty($_POST['c_c_test2'])) ? $row['c_c_test2'] : $_POST['c_c_test2'];
$c_c_exam=(empty($_POST['c_c_exam'])) ? $row['c_c_exam'] : $_POST['c_c_exam'];
$c_c_total1=(empty($_POST['c_c_total1'])) ? $row['c_c_total1'] : $_POST['c_c_total1'];
$c_c_total2=(empty($_POST['c_c_total2'])) ? $row['c_c_total2'] : $_POST['c_c_total2'];
$basic_elect_test1=(empty($_POST['basic_elect_test1'])) ? $row['basic_elect_test1'] : $_POST['basic_elect_test1'];
$basic_elect_test2=(empty($_POST['basic_elect_test2'])) ? $row['basic_elect_test2'] : $_POST['basic_elect_test2'];
$basic_elect_exam=(empty($_POST['basic_elect_exam'])) ? $row['basic_elect_exam'] : $_POST['basic_elect_exam'];
$basic_elect_total1=(empty($_POST['basic_elect_total1'])) ? $row['basic_elect_total1'] : $_POST['basic_elect_total1'];
$basic_elect_total2=(empty($_POST['basic_elect_total2'])) ? $row['basic_elect_total2'] : $_POST['basic_elect_total2'];
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
$home_mgt_test1=(empty($_POST['home_mgt_test1'])) ? $row['home_mgt_test1'] : $_POST['home_mgt_test1'];
$home_mgt_test2=(empty($_POST['home_mgt_test2'])) ? $row['home_mgt_test2'] : $_POST['home_mgt_test2'];
$home_mgt_exam=(empty($_POST['home_mgt_exam'])) ? $row['home_mgt_exam'] : $_POST['home_mgt_exam'];
$home_mgt_total1=(empty($_POST['home_mgt_total1'])) ? $row['home_mgt_total1'] : $_POST['home_mgt_total1'];
$home_mgt_total2=(empty($_POST['home_mgt_total2'])) ? $row['home_mgt_total2'] : $_POST['home_mgt_total2'];
$arabic_test1=(empty($_POST['arabic_test1'])) ? $row['arabic_test1'] : $_POST['arabic_test1'];
$arabic_test2=(empty($_POST['arabic_test2'])) ? $row['arabic_test2'] : $_POST['arabic_test2'];
$arabic_exam=(empty($_POST['arabic_exam'])) ? $row['arabic_exam'] : $_POST['arabic_exam'];
$arabic_total1=(empty($_POST['arabic_total1'])) ? $row['arabic_total1'] : $_POST['arabic_total1'];
$arabic_total2=(empty($_POST['arabic_total2'])) ? $row['arabic_total2'] : $_POST['arabic_total2'];
$sql = "UPDATE $class
SET cardpin='$cardpin', name='$name', class='$class', class_no='$class_no', term='$term', session='$session', year='$year', admno='$admno', sex='$sex', nxt_term_begins='$nxt_term_begins', max_obt='$max_obt', position='$position', teacher_com='$teacher_com', principal_com='$principal_com', no_punctual='$no_punctual', no_absent='$no_absent', no_present='$no_present', self_ctrl='$self_ctrl', obd='$obd', honesty='$honesty', self_rely='$self_rely', intiative='$intiative', puntual='$puntual', neat='$neat', diligence='$diligence', class_attend='$class_attend', attent='$attent', polite='$polite', cons_other='$cons_other', relation_staff='$relation_staff', organise='$organise', respect='$respect', handwriting='$handwriting', fluency='$fluency', sports='$sports', skills='$skills', music_skill='$music_skill', no_opened='$no_opened', english_test1 = '$english_test1', english_test2 = '$english_test2', english_exam = '$english_exam', english_total1 = '$english_total1', english_total2 = '$english_total2', math_test1 = '$math_test1', math_test2 = '$math_test2', math_exam = '$math_exam', math_total1 = '$math_total1', math_total2 = '$math_total2', geo_test1 = '$geo_test1', geo_test2 = '$geo_test2', geo_exam = '$geo_exam', geo_total1 = '$geo_total1', geo_total2 = '$geo_total2', phone_test1 = '$phone_test1', phone_test2 = '$phone_test2', phone_exam = '$phone_exam', phone_total1 = '$phone_total1', phone_total2 = '$phone_total2', yih_test1 = '$yih_test1', yih_test2 = '$yih_test2', yih_exam = '$yih_exam', yih_total1 = '$yih_total1', yih_total2 = '$yih_total2', french_test1 = '$french_test1', french_test2 = '$french_test2', french_exam = '$french_exam', french_total1 = '$french_total1', french_total2 = '$french_total2', lit_test1 = '$lit_test1', lit_test2 = '$lit_test2', lit_exam = '$lit_exam', lit_total1 = '$lit_total1', lit_total2 = '$lit_total2', crs_irs_test1 = '$crs_irs_test1', crs_irs_test2 = '$crs_irs_test2', crs_irs_exam = '$crs_irs_exam', crs_irs_total1 = '$crs_irs_total1', crs_irs_total2 = '$crs_irs_total2', history_test1 = '$history_test1', history_test2 = '$history_test2', history_exam = '$history_exam', history_total1 = '$history_total1', history_total2 = '$history_total2', govt_test1 = '$govt_test1', govt_test2 = '$govt_test2', govt_exam = '$govt_exam', govt_total1 = '$govt_total1', govt_total2 = '$govt_total2', econs_test1 = '$econs_test1', econs_test2 = '$econs_test2', econs_exam = '$econs_exam', econs_total1 = '$econs_total1', econs_total2 = '$econs_total2', f_maths_test1 = '$f_maths_test1', f_maths_test2 = '$f_maths_test2', f_maths_exam = '$f_maths_exam', f_maths_total1 = '$f_maths_total1', f_maths_total2 = '$f_maths_total2', phy_test1 = '$phy_test1', phy_test2 = '$phy_test2', phy_exam = '$phy_exam', phy_total1 = '$phy_total1', phy_total2 = '$phy_total2', chem_test1 = '$chem_test1', chem_test2 = '$chem_test2', chem_exam = '$chem_exam', chem_total1 = '$chem_total1', chem_total2 = '$chem_total2', bio_test1 = '$bio_test1', bio_test2 = '$bio_test2', bio_exam = '$bio_exam', bio_total1 = '$bio_total1', bio_total2 = '$bio_total2', fine_art_test1 = '$fine_art_test1', fine_art_test2 = '$fine_art_test2', fine_art_exam = '$fine_art_exam', fine_art_total1 = '$fine_art_total1', fine_art_total2 = '$fine_art_total2', music_test1 = '$music_test1', music_test2 = '$music_test2', music_exam = '$music_exam', music_total1 = '$music_total1', music_total2 = '$music_total2', tech_draw_test1 = '$tech_draw_test1', tech_draw_test2 = '$tech_draw_test2', tech_draw_exam = '$tech_draw_exam', tech_draw_total1 = '$tech_draw_total1', tech_draw_total2 = '$tech_draw_total2', commerce_test1 = '$commerce_test1', commerce_test2 = '$commerce_test2', commerce_exam = '$commerce_exam', commerce_total1 = '$commerce_total1', commerce_total2 = '$commerce_total2', acc_test1 = '$acc_test1', acc_test2 = '$acc_test2', acc_exam = '$acc_exam', acc_total1 = '$acc_total1', acc_total2 = '$acc_total2', agric_sci_test1 = '$agric_sci_test1', agric_sci_test2 = '$agric_sci_test2', agric_sci_exam = '$agric_sci_exam', agric_sci_total1 = '$agric_sci_total1', agric_sci_total2 = '$agric_sci_total2', food_nu_test1 = '$food_nu_test1', food_nu_test2 = '$food_nu_test2', food_nu_exam = '$food_nu_exam', food_nu_total1 = '$food_nu_total1', food_nu_total2 = '$food_nu_total2', comp_test1 = '$comp_test1', comp_test2 = '$comp_test2', comp_exam = '$comp_exam', comp_total1 = '$comp_total1', comp_total2 = '$comp_total2', b_keep_test1 = '$b_keep_test1', b_keep_test2 = '$b_keep_test2', b_keep_exam = '$b_keep_exam', b_keep_total1 = '$b_keep_total1', b_keep_total2 = '$b_keep_total2', c_c_test1 = '$c_c_test1', c_c_test2 = '$c_c_test2', c_c_exam = '$c_c_exam', c_c_total1 = '$c_c_total1', c_c_total2 = '$c_c_total2', basic_elect_test1 = '$basic_elect_test1', basic_elect_test2 = '$basic_elect_test2', basic_elect_exam = '$basic_elect_exam', basic_elect_total1 = '$basic_elect_total1', basic_elect_total2 = '$basic_elect_total2', civic_test1 = '$civic_test1', civic_test2 = '$civic_test2', civic_exam = '$civic_exam', civic_total1 = '$civic_total1', civic_total2 = '$civic_total2', home_mgt_test1 = '$home_mgt_test1', home_mgt_test2 = '$home_mgt_test2', home_mgt_exam = '$home_mgt_exam', home_mgt_total1 = '$home_mgt_total1', home_mgt_total2 = '$home_mgt_total2', arabic_test1 = '$arabic_test1', arabic_test2 = '$arabic_test2', arabic_exam = '$arabic_exam', arabic_total1 = '$arabic_total1', arabic_total2 = '$arabic_total2'


    WHERE cardpin = '$cardpin'";

if(mysqli_query($con, $sql)){
require_once('success.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}}
?>