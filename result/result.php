
<?php
require_once('../db/database.php');

if (mysqli_num_rows($result) > 0)
while($row = mysqli_fetch_array($result))
{
    if($class >=ss1)
{
 header('HTTP/1.1 307 Temporary Redirect');
    header('Location: sss_class.php');
} else{ 
    
?>
<?php
if ($term == '3rd'){
     header('HTTP/1.1 307 Temporary Redirect');
    header('Location: jss3rd_class.php');
} else{ 
    
$english_total= $row['english_test1'] + $row['english_test2'] + $row['english_exam'];
$math_total= $row['math_test1'] + $row['math_test2'] + $row['math_exam'];
$basic_sci_total= $row['basic_sci_test1'] + $row['basic_sci_test2'] + $row['basic_sci_exam'];
$phone_total= $row['phone_test1'] + $row['phone_test2'] + $row['phone_exam'];
$yih_total= $row['yih_test1'] + $row['yih_test2'] + $row['yih_exam'];
$french_total= $row['french_test1'] + $row['french_test2'] + $row['french_exam'];
$lit_total= $row['lit_test1'] + $row['lit_test2'] + $row['lit_exam'];
$crs_irs_total= $row['crs_irs_test1'] + $row['crs_irs_test2'] + $row['crs_irs_exam'];
$social_std_total= $row['social_std_test1'] + $row['social_std_test2'] + $row['social_std_exam'];
$basic_tech_total= $row['basic_tech_test1'] + $row['basic_tech_test2'] + $row['basic_tech_exam'];
$h_econs_total= $row['h_econs_test1'] + $row['h_econs_test2'] + $row['h_econs_exam'];
$phe_total= $row['phe_test1'] + $row['phe_test2'] + $row['phe_exam'];
$bus_stud_total= $row['bus_stud_test1'] + $row['bus_stud_test2'] + $row['bus_stud_exam'];
$fine_art_total= $row['fine_art_test1'] + $row['fine_art_test2'] + $row['fine_art_exam'];
$music_total= $row['music_test1'] + $row['music_test2'] + $row['music_exam'];
$agric_sci_total= $row['agric_sci_test1'] + $row['agric_sci_test2'] + $row['agric_sci_exam'];
$food_nu_total= $row['food_nu_test1'] + $row['food_nu_test2'] + $row['food_nu_exam'];
$comp_total= $row['comp_test1'] + $row['comp_test2'] + $row['comp_exam'];
$civic_total= $row['civic_test1'] + $row['civic_test2'] + $row['civic_exam'];

$exam_total= $english_total + $math_total + $basic_sci_total + $phone_total + $yih_total + $french_total + $lit_total + $crs_irs_total + $social_std_total + $basic_tech_total + $h_econs_total + $phe_total + $bus_stud_total + $fine_art_total + $music_total + $agric_sci_total + $food_nu_total + $comp_total + $civic_total;
$percent= $exam_total/$row['max_obt'] * 100;


$a='EXCELLENT';
$b='VERY GOOD';
$c='GOOD';
$p ='PASS';
$f='FAIL';
?>
<!DOCTYPE html>
<html>
    <head>

        <title>Results</title>
        <style>
           body{
               
                margin: auto;
                font-family: arial, sans-serif;


            }
            #body{
                clear:both;
                margin: auto;
                height:297mm;
                width:210mm;

            }
            
            .head{
                text-align: center;
            
            }
            .add{
                margin-top: -17px;
            }
            .term{
                background: #000;
                color: white;
                width: 80px;
                font-weight: bold;
                border-radius: 5px;
                margin: auto;
                text-align: center;
                clear: both;
            
            }
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
            width: 100%;

            }
            .table{
                border: 2px;
                border-collapse: collapse;
                width: 100%;
            }
            .subtable{
                width:510px;
                float: left;
            }

            .table td{
              border:none;
              text-align: left;
              padding-left: px;
              font-size: 90%;
              text-transform:capitalize;
            
            }
            .table th {
              border: none;
              text-align: left;
              
            
            }
            
            .subtable td{
              border: 2px solid #050505;
              text-align: left;
              padding-left: 10px;
              height: 20px;
              text-transform: uppercase;
              font-size: 77%;
            
            }
            .subtable th{
              border: 2px solid #050505;
              vertical-align: bottom;
              text-transform: uppercase;
              font-size: 92%;
              text-align: left;
            
            }
            .test1{
                padding-left: 4px;

            }
            td{
                height:11px;
            
            }

            .subject{
                width:30% ;
                font-size: 130%;
                padding-left: 10px;
            }

            .li-remark{
                width:10% ;
            }
            .li-sub{
                font-weight:bold;
                width:30% ;
            }
            .li-test1{
                width: 10%;
            }
            .logo{
                width: 200px;
                margin: auto;
            }
            .col{
                float: right;
                clear: both;

            }
            .comment{
                width:70%;
                float:left;
            }
            .key{
                width:30%;
                margin-left:75%;
                font-size:80%;
                margin-top:-10px;
                font-weight:bold;
            }
            .key h3{
                padding-left:20px;
            }
 
            .sign{
                width: 100px;
            }
            .GeneratedTable {
            width:280px;
            background-color: #ffffff;
            border-collapse: collapse;
            color: #000000;
            
            }
            .assess{
            margin-left:515px ;
            border: solid 1px #000;
            width:280px;

            }
            .assess1{
            border: solid 1px #000;
            width:99%;
            text-align: center;
            height: 45px;

            }
            .assess1 h3{
                margin-top: -1px;
            }
            .GeneratedTable td,.GeneratedTable th {
            border-width: 1px;
            border-color: #000000;
            border-style: solid;
            padding-left: 8px;
            font-size: 77%;
            text-transform: capitalize;
            text-align: left;
            
            }

            .GeneratedTable thead {
            background-color: #ffffff;
            }
            .dot {
              height:8px;
              width:8px;
              background-color: #000;
              border-radius: 50%;
              display: inline-block;
            }
        </style>
        <script>
            function printDiv(body)
            {
            var printContents = document.getElementById(body).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
            }
        </script>
    </head>
    <body >
        <div>
        <div style="float:right"> 
           <button type="button" value="click" onclick="printDiv('body')" style="color:white;background-color:#3794fc;width:100px;border-radius:5px;border:solid #000 2px;height:40px;margin-right:110px;margin-top:40px;" >print </button>
        </div>
        <div id="body">
                <div style="clear: both;">
                        <img src="../img/logo.png" class="logo" alt="">

                <div class="col">
                    <h1 class="head">HENRY COMPREHENSIVE COLLEGE</h1>

                    <p class="add">14,Oremeji Street, Off Agunbiade, Oke-koto, Agege Lagos</p>
                    <p class="add"> 25/30 Ojekunle Street, Agege, Lagos.</p>
                    <p class="add">Tel: 09099329192, 07025994280</p>
                </div>
                </div>
                <div>
                    <p class="term"> <?php echo $row['term']?> Term</p>
                </div>
            
                <br />
               <table class="table">
                    <tr >
                        <td><b>NAME: </b> <?php echo $row['name']?></td>
                        <td><b>ADMISSION NO: </b> <?php echo $row['admno']?></td>
            
                    </tr>
                    <tr >
                        <td><b>CLASS: </b> <?php echo $row['class']?></td>
                        <td><b>NO IN CLASS:</b>  <?php echo $row['class_no']?></td>
            
                    </tr>
                    <tr >
                        <td><b>MAX.OBTAINABLE MARK:</b>   <?php echo $row['max_obt']?></td>
                        <td><b>TOTAL MARK SCORED:  </b> <?php echo $exam_total;?></td>
            
                    </tr>
                    <tr >
                        <td><b>POSITION IN CLASS: </b>  <?php echo $row['position']?></td>
                        <td><b>OVERALL PERCENTAGE:  </b> <?php echo (int)$percent ?></td>
            
                    </tr>
                    <tr >
                        <td><b>SESSION:</b>   <?php echo $row['session']?></td>
                        <td><b>NEXT TERM BEGINS: </b>  <?php echo $row['nxt_term_begins']?></td>
            
                    </tr>
                     <tr >
                        <td><b>NO OF TIMES PRESENT:</b>    <?php echo $row['no_present']?></td>
                        <td><b>NO OF TIMES ABSENT: </b>   <?php echo $row['no_absent']?></td>
            
                    </tr>
            
                </table>
                 <br /><br />
                <table class="subtable">
                    <tr>
                        <th class="subject">SUBJECTS</th>
                        <th class="test1">test1</th>
                        <th class="test1">test1</th>
                        <th class="test1">Exam </th>
                        <th class="test1">Total</th>
                        <th class="test1">Grade</th>
                        <th class="test1"> Teacher's Remark</th>
                    </tr>
                    <tr>
                        <td class="li-sub">English</td>
                        <td class="li-test1"><?php echo $row['english_test1']?></td>
                        <td class="li-test1"><?php echo $row['english_test2']?></td>
                        <td class="li-test1"><?php echo $row['english_exam']?></td>
                       <td class="li-test1"><?php 
                        if($english_total== 0){echo null;} else{echo $english_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($english_total >= '70'){echo "A";} else{
                               if('69' >= $english_total && $english_total >= '60'){echo "B";} else{
                                if('59' >= $english_total && $english_total >= '50'){echo "C";} else{
                                if('49' >= $english_total && $english_total >= '45'){echo "P";} else{
                                    if('44' >= $english_total && $english_total >= '1'){echo "F";} else{
                                if($english_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($english_total >= '70'){echo "$a";} else{
                               if('69' >= $english_total && $english_total >= '60'){echo "$b";} else{
                                if('59' >= $english_total && $english_total >= '50'){echo "$c";} else{
                                if('49' >= $english_total && $english_total >= '45'){echo "$p";} else{
                                    if('44' >= $english_total && $english_total >= '1'){echo "$f";} else{
                                        if($english_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Mathematics</td>
                        <td class="li-test1"><?php echo $row['math_test1']?></td>
                        <td class="li-test1"><?php echo $row['math_test2']?></td>
                        <td class="li-test1"><?php echo $row['math_exam']?></td>
                        <td class="li-test1"><?php 
                        if($math_total== 0){echo null;} else{echo $math_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($math_total >= '70'){echo "A";} else{
                               if('69' >= $math_total && $math_total >= '60'){echo "B";} else{
                                if('59' >= $math_total && $math_total >= '50'){echo "C";} else{
                                if('49' >= $math_total && $math_total >= '45'){echo "P";} else{
                                    if('44' >= $math_total && $math_total >= '1'){echo "F";} else{
                                if($math_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($math_total >= '70'){echo "$a";} else{
                               if('69' >= $math_total && $math_total >= '60'){echo "$b";} else{
                                if('59' >= $math_total && $math_total >= '50'){echo "$c";} else{
                                if('49' >= $math_total && $math_total >= '45'){echo "$p";} else{
                                    if('44' >= $math_total && $math_total >= '1'){echo "$f";} else{
                                        if($math_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Basic Science</td>
                        <td class="li-test1"><?php echo $row['basic_sci_test1']?></td>
                        <td class="li-test1"><?php echo $row['basic_sci_test2']?></td>
                        <td class="li-test1"><?php echo $row['basic_sci_exam']?></td>
                      <td class="li-test1"><?php 
                        if($basic_sci_total== 0){echo null;} else{echo $basic_sci_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($basic_sci_total >= '70'){echo "A";} else{
                               if('69' >= $basic_sci_total && $basic_sci_total >= '60'){echo "B";} else{
                                if('59' >= $basic_sci_total && $basic_sci_total >= '50'){echo "C";} else{
                                if('49' >= $basic_sci_total && $basic_sci_total >= '45'){echo "P";} else{
                                    if('44' >= $basic_sci_total && $basic_sci_total >= '1'){echo "F";} else{
                                if($basic_sci_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($basic_sci_total >= '70'){echo "$a";} else{
                               if('69' >= $basic_sci_total && $basic_sci_total >= '60'){echo "$b";} else{
                                if('59' >= $basic_sci_total && $basic_sci_total >= '50'){echo "$c";} else{
                                if('49' >= $basic_sci_total && $basic_sci_total >= '45'){echo "$p";} else{
                                    if('44' >= $basic_sci_total && $basic_sci_total >= '1'){echo "$f";} else{
                                        if($basic_sci_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                    <tr>
                        <td class="li-sub">C.R.S / I.R.S</td>
                        <td class="li-test1"><?php echo $row['crs_irs_test1']?></td>
                        <td class="li-test1"><?php echo $row['crs_irs_test2']?></td>
                        <td class="li-test1"><?php echo $row['crs_irs_exam']?></td>
                       <td class="li-test1"><?php 
                        if($crs_irs_total== 0){echo null;} else{echo $crs_irs_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($crs_irs_total >= '70'){echo "A";} else{
                               if('69' >= $crs_irs_total && $crs_irs_total >= '60'){echo "B";} else{
                                if('59' >= $crs_irs_total && $crs_irs_total >= '50'){echo "C";} else{
                                if('49' >= $crs_irs_total && $crs_irs_total >= '45'){echo "P";} else{
                                    if('44' >= $crs_irs_total && $crs_irs_total >= '1'){echo "F";} else{
                                if($crs_irs_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($crs_irs_total >= '70'){echo "$a";} else{
                               if('69' >= $crs_irs_total && $crs_irs_total >= '60'){echo "$b";} else{
                                if('59' >= $crs_irs_total && $crs_irs_total >= '50'){echo "$c";} else{
                                if('49' >= $crs_irs_total && $crs_irs_total >= '45'){echo "$p";} else{
                                    if('44' >= $crs_irs_total && $crs_irs_total >= '1'){echo "$f";} else{
                                        if($crs_irs_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                    <tr>
                        <td class="li-sub">Basic Tech</td>
                        <td class="li-test1"><?php echo $row['basic_tech_test1']?></td>
                        <td class="li-test1"><?php echo $row['basic_tech_test2']?></td>
                        <td class="li-test1"><?php echo $row['basic_tech_exam']?></td>
                        <td class="li-test1"><?php 
                        if($basic_tech_total== 0){echo null;} else{echo $basic_tech_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($basic_tech_total >= '70'){echo "A";} else{
                               if('69' >= $basic_tech_total && $basic_tech_total >= '60'){echo "B";} else{
                                if('59' >= $basic_tech_total && $basic_tech_total >= '50'){echo "C";} else{
                                if('49' >= $basic_tech_total && $basic_tech_total >= '45'){echo "P";} else{
                                    if('44' >= $basic_tech_total && $basic_tech_total >= '1'){echo "F";} else{
                                if($basic_tech_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($basic_tech_total >= '70'){echo "$a";} else{
                               if('69' >= $basic_tech_total && $basic_tech_total >= '60'){echo "$b";} else{
                                if('59' >= $basic_tech_total && $basic_tech_total >= '50'){echo "$c";} else{
                                if('49' >= $basic_tech_total && $basic_tech_total >= '45'){echo "$p";} else{
                                    if('44' >= $basic_tech_total && $basic_tech_total >= '1'){echo "$f";} else{
                                        if($basic_tech_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                    <tr>
                        <td class="li-sub">P. H. E.</td>
                        <td class="li-test1"><?php echo $row['phe_test1']?></td>
                        <td class="li-test1"><?php echo $row['phe_test2']?></td>
                        <td class="li-test1"><?php echo $row['phe_exam']?></td>
                        <td class="li-test1"><?php 
                        if($phe_total== 0){echo null;} else{echo $phe_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($phe_total >= '70'){echo "A";} else{
                               if('69' >= $phe_total && $phe_total >= '60'){echo "B";} else{
                                if('59' >= $phe_total && $phe_total >= '50'){echo "C";} else{
                                if('49' >= $phe_total && $phe_total >= '45'){echo "P";} else{
                                    if('44' >= $phe_total && $phe_total >= '1'){echo "F";} else{
                                if($phe_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($phe_total >= '70'){echo "$a";} else{
                               if('69' >= $phe_total && $phe_total >= '60'){echo "$b";} else{
                                if('59' >= $phe_total && $phe_total >= '50'){echo "$c";} else{
                                if('49' >= $phe_total && $phe_total >= '45'){echo "$p";} else{
                                    if('44' >= $phe_total && $phe_total >= '1'){echo "$f";} else{
                                        if($phe_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Agric Science</td>
                        <td class="li-test1"><?php echo $row['agric_sci_test1']?></td>
                        <td class="li-test1"><?php echo $row['agric_sci_test2']?></td>
                        <td class="li-test1"><?php echo $row['agric_sci_exam']?></td>
                        <td class="li-test1"><?php 
                        if($agric_sci_total== 0){echo null;} else{echo $agric_sci_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($agric_sci_total >= '70'){echo "A";} else{
                               if('69' >= $agric_sci_total && $agric_sci_total >= '60'){echo "B";} else{
                                if('59' >= $agric_sci_total && $agric_sci_total >= '50'){echo "C";} else{
                                if('49' >= $agric_sci_total && $agric_sci_total >= '45'){echo "P";} else{
                                    if('44' >= $agric_sci_total && $agric_sci_total >= '1'){echo "F";} else{
                                if($agric_sci_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($agric_sci_total >= '70'){echo "$a";} else{
                               if('69' >= $agric_sci_total && $agric_sci_total >= '60'){echo "$b";} else{
                                if('59' >= $agric_sci_total && $agric_sci_total >= '50'){echo "$c";} else{
                                if('49' >= $agric_sci_total && $agric_sci_total >= '45'){echo "$p";} else{
                                    if('44' >= $agric_sci_total && $agric_sci_total >= '1'){echo "$f";} else{
                                        if($agric_sci_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Business Studies</td>
                        <td class="li-test1"><?php echo $row['bus_stud_test1']?></td>
                        <td class="li-test1"><?php echo $row['bus_stud_test2']?></td>
                        <td class="li-test1"><?php echo $row['bus_stud_exam']?></td>
                       <td class="li-test1"><?php 
                        if($bus_stud_total== 0){echo null;} else{echo $bus_stud_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($bus_stud_total >= '70'){echo "A";} else{
                               if('69' >= $bus_stud_total && $bus_stud_total >= '60'){echo "B";} else{
                                if('59' >= $bus_stud_total && $bus_stud_total >= '50'){echo "C";} else{
                                if('49' >= $bus_stud_total && $bus_stud_total >= '45'){echo "P";} else{
                                    if('44' >= $bus_stud_total && $bus_stud_total >= '1'){echo "F";} else{
                                if($bus_stud_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($bus_stud_total >= '70'){echo "$a";} else{
                               if('69' >= $bus_stud_total && $bus_stud_total >= '60'){echo "$b";} else{
                                if('59' >= $bus_stud_total && $bus_stud_total >= '50'){echo "$c";} else{
                                if('49' >= $bus_stud_total && $bus_stud_total >= '45'){echo "$p";} else{
                                    if('44' >= $bus_stud_total && $bus_stud_total >= '1'){echo "$f";} else{
                                        if($bus_stud_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                    <tr>
                        <td class="li-sub">Yoruba</td>
                        <td class="li-test1"><?php echo $row['yih_test1']?></td>
                        <td class="li-test1"><?php echo $row['yih_test2']?></td>
                        <td class="li-test1"><?php echo $row['yih_exam']?></td>
                       <td class="li-test1"><?php 
                        if($yih_total== 0){echo null;} else{echo $yih_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($yih_total >= '70'){echo "A";} else{
                               if('69' >= $yih_total && $yih_total >= '60'){echo "B";} else{
                                if('59' >= $yih_total && $yih_total >= '50'){echo "C";} else{
                                if('49' >= $yih_total && $yih_total >= '45'){echo "P";} else{
                                    if('44' >= $yih_total && $yih_total >= '1'){echo "F";} else{
                                if($yih_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($yih_total >= '70'){echo "$a";} else{
                               if('69' >= $yih_total && $yih_total >= '60'){echo "$b";} else{
                                if('59' >= $yih_total && $yih_total >= '50'){echo "$c";} else{
                                if('49' >= $yih_total && $yih_total >= '45'){echo "$p";} else{
                                    if('44' >= $yih_total && $yih_total >= '1'){echo "$f";} else{
                                        if($yih_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">French</td>
                        <td class="li-test1"><?php echo $row['french_test1']?></td>
                        <td class="li-test1"><?php echo $row['french_test2']?></td>
                        <td class="li-test1"><?php echo $row['french_exam']?></td>
                       <td class="li-test1"><?php 
                        if($french_total== 0){echo null;} else{echo $french_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($french_total >= '70'){echo "A";} else{
                               if('69' >= $french_total && $french_total >= '60'){echo "B";} else{
                                if('59' >= $french_total && $french_total >= '50'){echo "C";} else{
                                if('49' >= $french_total && $french_total >= '45'){echo "P";} else{
                                    if('44' >= $french_total && $french_total >= '1'){echo "F";} else{
                                if($french_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($french_total >= '70'){echo "$a";} else{
                               if('69' >= $french_total && $french_total >= '60'){echo "$b";} else{
                                if('59' >= $french_total && $french_total >= '50'){echo "$c";} else{
                                if('49' >= $french_total && $french_total >= '45'){echo "$p";} else{
                                    if('44' >= $french_total && $french_total >= '1'){echo "$f";} else{
                                        if($french_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                        <td class="li-sub">Fine Art</td>
                        <td class="li-test1"><?php echo $row['fine_art_test1']?></td>
                        <td class="li-test1"><?php echo $row['fine_art_test2']?></td>
                        <td class="li-test1"><?php echo $row['fine_art_exam']?></td>
                        <td class="li-test1"><?php 
                        if($fine_art_total== 0){echo null;} else{echo $fine_art_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($fine_art_total >= '70'){echo "A";} else{
                               if('69' >= $fine_art_total && $fine_art_total >= '60'){echo "B";} else{
                                if('59' >= $fine_art_total && $fine_art_total >= '50'){echo "C";} else{
                                if('49' >= $fine_art_total && $fine_art_total >= '45'){echo "P";} else{
                                    if('44' >= $fine_art_total && $fine_art_total >= '1'){echo "F";} else{
                                if($fine_art_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($fine_art_total >= '70'){echo "$a";} else{
                               if('69' >= $fine_art_total && $fine_art_total >= '60'){echo "$b";} else{
                                if('59' >= $fine_art_total && $fine_art_total >= '50'){echo "$c";} else{
                                if('49' >= $fine_art_total && $fine_art_total >= '45'){echo "$p";} else{
                                    if('44' >= $fine_art_total && $fine_art_total >= '1'){echo "$f";} else{
                                        if($fine_art_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                    <tr>
                    <td class="li-sub">Computer Studies</td>
                        <td class="li-test1"><?php echo $row['comp_test1']?></td>
                        <td class="li-test1"><?php echo $row['comp_test2']?></td>
                        <td class="li-test1"><?php echo $row['comp_exam']?></td>
                       <td class="li-test1"><?php 
                        if($comp_total== 0){echo null;} else{echo $comp_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($comp_total >= '70'){echo "A";} else{
                               if('69' >= $comp_total && $comp_total >= '60'){echo "B";} else{
                                if('59' >= $comp_total && $comp_total >= '50'){echo "C";} else{
                                if('49' >= $comp_total && $comp_total >= '45'){echo "P";} else{
                                    if('44' >= $comp_total && $comp_total >= '1'){echo "F";} else{
                                if($comp_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($comp_total >= '70'){echo "$a";} else{
                               if('69' >= $comp_total && $comp_total >= '60'){echo "$b";} else{
                                if('59' >= $comp_total && $comp_total >= '50'){echo "$c";} else{
                                if('49' >= $comp_total && $comp_total >= '45'){echo "$p";} else{
                                    if('44' >= $comp_total && $comp_total >= '1'){echo "$f";} else{
                                        if($comp_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Phonetics</td>
                        <td class="li-test1"><?php echo $row['phone_test1']?></td>
                        <td class="li-test1"><?php echo $row['phone_test2']?></td>
                        <td class="li-test1"><?php echo $row['phone_exam']?></td>
                        <td class="li-test1"><?php 
                        if($phone_total== 0){echo null;} else{echo $phone_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($phone_total >= '70'){echo "A";} else{
                               if('69' >= $phone_total && $phone_total >= '60'){echo "B";} else{
                                if('59' >= $phone_total && $phone_total >= '50'){echo "C";} else{
                                if('49' >= $phone_total && $phone_total >= '45'){echo "P";} else{
                                    if('44' >= $phone_total && $phone_total >= '1'){echo "F";} else{
                                if($phone_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($phone_total >= '70'){echo "$a";} else{
                               if('69' >= $phone_total && $phone_total >= '60'){echo "$b";} else{
                                if('59' >= $phone_total && $phone_total >= '50'){echo "$c";} else{
                                if('49' >= $phone_total && $phone_total >= '45'){echo "$p";} else{
                                    if('44' >= $phone_total && $phone_total >= '1'){echo "$f";} else{
                                        if($phone_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Music</td>
                        <td class="li-test1"><?php echo $row['music_test1']?></td>
                        <td class="li-test1"><?php echo $row['music_test2']?></td>
                        <td class="li-test1"><?php echo $row['music_exam']?></td>
                        <td class="li-test1"><?php 
                        if($music_total== 0){echo null;} else{echo $music_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($music_total >= '70'){echo "A";} else{
                               if('69' >= $music_total && $music_total >= '60'){echo "B";} else{
                                if('59' >= $music_total && $music_total >= '50'){echo "C";} else{
                                if('49' >= $music_total && $music_total >= '45'){echo "P";} else{
                                    if('44' >= $music_total && $music_total >= '1'){echo "F";} else{
                                if($music_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($music_total >= '70'){echo "$a";} else{
                               if('69' >= $music_total && $music_total >= '60'){echo "$b";} else{
                                if('59' >= $music_total && $music_total >= '50'){echo "$c";} else{
                                if('49' >= $music_total && $music_total >= '45'){echo "$p";} else{
                                    if('44' >= $music_total && $music_total >= '1'){echo "$f";} else{
                                        if($music_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                    <tr>
                        <td class="li-sub">Home Economics</td>
                        <td class="li-test1"><?php echo $row['h_econs_test1']?></td>
                        <td class="li-test1"><?php echo $row['h_econs_test2']?></td>
                        <td class="li-test1"><?php echo $row['h_econs_exam']?></td>
                       <td class="li-test1"><?php 
                        if($h_econs_total== 0){echo null;} else{echo $h_econs_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($h_econs_total >= '70'){echo "A";} else{
                               if('69' >= $h_econs_total && $h_econs_total >= '60'){echo "B";} else{
                                if('59' >= $h_econs_total && $h_econs_total >= '50'){echo "C";} else{
                                if('49' >= $h_econs_total && $h_econs_total >= '45'){echo "P";} else{
                                    if('44' >= $h_econs_total && $h_econs_total >= '1'){echo "F";} else{
                                if($h_econs_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($h_econs_total >= '70'){echo "$a";} else{
                               if('69' >= $h_econs_total && $h_econs_total >= '60'){echo "$b";} else{
                                if('59' >= $h_econs_total && $h_econs_total >= '50'){echo "$c";} else{
                                if('49' >= $h_econs_total && $h_econs_total >= '45'){echo "$p";} else{
                                    if('44' >= $h_econs_total && $h_econs_total >= '1'){echo "$f";} else{
                                        if($h_econs_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Literature</td>
                        <td class="li-test1"><?php echo $row['lit_test1']?></td>
                        <td class="li-test1"><?php echo $row['lit_test2']?></td>
                        <td class="li-test1"><?php echo $row['lit_exam']?></td>
                        <td class="li-test1"><?php 
                        if($lit_total== 0){echo null;} else{echo $lit_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($lit_total >= '70'){echo "A";} else{
                               if('69' >= $lit_total && $lit_total >= '60'){echo "B";} else{
                                if('59' >= $lit_total && $lit_total >= '50'){echo "C";} else{
                                if('49' >= $lit_total && $lit_total >= '45'){echo "P";} else{
                                    if('44' >= $lit_total && $lit_total >= '1'){echo "F";} else{
                                if($lit_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($lit_total >= '70'){echo "$a";} else{
                               if('69' >= $lit_total && $lit_total >= '60'){echo "$b";} else{
                                if('59' >= $lit_total && $lit_total >= '50'){echo "$c";} else{
                                if('49' >= $lit_total && $lit_total >= '45'){echo "$p";} else{
                                    if('44' >= $lit_total && $lit_total >= '1'){echo "$f";} else{
                                        if($lit_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Civic Education</td>
                        <td class="li-test1"><?php echo $row['civic_test1']?></td>
                        <td class="li-test1"><?php echo $row['civic_test2']?></td>
                        <td class="li-test1"><?php echo $row['civic_exam']?></td>
                       <td class="li-test1"><?php 
                        if($civic_total== 0){echo null;} else{echo $civic_total;} ?></td>
                        <td class="li-test1">
                             <?php
                            
                            if($civic_total >= '70'){echo "A";} else{
                               if('69' >= $civic_total && $civic_total >= '60'){echo "B";} else{
                                if('59' >= $civic_total && $civic_total >= '50'){echo "C";} else{
                                if('49' >= $civic_total && $civic_total >= '45'){echo "P";} else{
                                    if('44' >= $civic_total && $civic_total >= '1'){echo "F";} else{
                                if($civic_total== 0){echo null;}
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                        
                        
                        </td>
                        <td class="li-remark">
                            <?php
                            
                            if($civic_total >= '70'){echo "$a";} else{
                               if('69' >= $civic_total && $civic_total >= '60'){echo "$b";} else{
                                if('59' >= $civic_total && $civic_total >= '50'){echo "$c";} else{
                                if('49' >= $civic_total && $civic_total >= '45'){echo "$p";} else{
                                    if('44' >= $civic_total && $civic_total >= '1'){echo "$f";} else{
                                        if($civic_total== 0){echo null;}

                                
                                ;}
                                
                                ;}
                                ;}
                                ;} 
                                ;}
                            
                            ?>
                            </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 
                    
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> 
                
                </table>   
                <div class="assess"> 
                    <div class="assess1">
                        <h3>AFFECTIVE/PAYCHOMOTOR ASSESSMENT</h3>
                    </div>
                    <div>
                        <table class="GeneratedTable">
                            <thead style="font-size:90%">
                                <tr>
                                <th style="width:70%">Personal Development</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Obedience</td>
                                <td><?php if ($row['obd']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['obd']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['obd']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['obd']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <tr>
                                <td>honesty</td>
                                <td><?php if ($row['honesty']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['honesty']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['honesty']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['honesty']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>self-control</td>
                                <td><?php if ($row['self_ctrl']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_ctrl']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_ctrl']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_ctrl']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>initiative</td>
                                <td><?php if ($row['intiative']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['intiative']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['intiative']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['intiative']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>Punctuality</td>
                                <td><?php if ($row['puntual']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['puntual']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['puntual']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['puntual']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr> 
                                <tr>
                                <td>Self- Reliance</td>
                                <td><?php if ($row['self_rely']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_rely']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_rely']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['self_rely']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>SENSE OF RESPONSIBILITY</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>neatness</td>
                                <td><?php if ($row['neat']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['neat']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['neat']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['neat']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>diligence</td>
                                <td><?php if ($row['diligence']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['diligence']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['diligence']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['diligence']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>class attendance</td>
                                <td><?php if ($row['class_attend']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['class_attend']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['class_attend']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['class_attend']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>attentiveness</td>
                                <td><?php if ($row['attent']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['attent']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['attent']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['attent']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>SOCIAL DEVELOPMENT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>politeness</td>
                                <td><?php if ($row['polite']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['polite']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['polite']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['polite']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>consideration for others</td>
                                <td><?php if ($row['cons_other']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['cons_other']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['cons_other']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['cons_other']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>relationship with staff</td>
                                <td><?php if ($row['relation_staff']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['relation_staff']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['relation_staff']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['relation_staff']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>organisational ability</td>
                                <td><?php if ($row['organise']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['organise']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['organise']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['organise']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>respect for common property</td>
                                <td><?php if ($row['respect']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['respect']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['respect']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['respect']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>PHYSCHOMOTOR SKILLS</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>handwriting</td>
                                <td><?php if ($row['handwriting']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['handwriting']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['handwriting']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['handwriting']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>verbal fluency</td>
                                <td><?php if ($row['fluency']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['fluency']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['fluency']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['fluency']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>sports & games</td>
                                <td><?php if ($row['sports']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['sports']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['sports']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['sports']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>manual skills in handling tools</td>
                                <td><?php if ($row['skills']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['skills']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['skills']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['skills']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>musical artistics skill</td>
                                <td><?php if ($row['music_skill']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['music_skill']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['music_skill']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['music_skill']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                                <tr>
                                <td>no. of times school opened</td>
                                <td><?php if ($row['no_opened']==1){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['no_opened']==2){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['no_opened']==3){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                <td><?php if ($row['no_opened']==4){ ?> 
                                <span class="dot"></span>
                                <?php ;} else{ }?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <div class="comment">
                	 <div>
                        <b>Teacher's Comment:</b><?php echo $row['teacher_com']?> <br /><br />
                        <b>Principal's Comment:</b><?php echo $row['principal_com']?> <br /><br />
                    </div>
                	<div>
                        <span>
                                <span><b>Teacher's signature:</b> </span>
                                <span><b>Principal's signature:</b> </span>
                        </span>
                        
                    </div>
                </div>
                <div class="key">
                    <h3>KEY TO RATING</h3>
                    <ol type="A">
                      <li>EXCELLENT LEVEL</li>
                      <li>HIGH LEVEL</li>
                      <li>ACCEPTABLE FOR TRAIT</li>
                      <li>NO REGARD FOR TRAIT</li>

                    </ol>
                </div>
    
    	
        </div>
    </body>
</html>
<?php 
 
} }  }else {
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sorry, your Result was not found. Check your details');
    window.location.href='https://henrycollege.hrmsystems.com.ng/';
    </script>");
}
?>

