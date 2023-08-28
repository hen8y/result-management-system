<?php
require_once('includes/loggedin.php');

require_once('header.html');
?>


        <style>
           form{
               width: 70%;
               padding: 4em;
               background-color: #fff;
               margin-left: 25%;
               border: solid 1px #ddd;
           }
            
            .head{
                text-align: center;
            
            }
            .add{
                margin-top: -17px;
            }
            
          .termin{
                background: #fff;
                width: 14%;
                font-weight: bold;
                border-radius: 5px;
                text-align: center;
                margin-left:10px;
                height:25px;
                border:1px #666666 solid;
                color:#666666;

            
            }
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;

            }
            .table{
                border: solid 2px #666666;
                border-collapse: collapse;
                width: 85%;
            }
            .subtable{
                width:55%;
                float: left;
                border: 2px solid #666666;
            }

            .table td{
              text-align: left;
              font-size: 90%;
              text-transform:capitalize;
            
            }
            .table th {
            border: #666666 solid 1px;
            text-align: left;
              
            
            }
            
            .subtable td{
              border: 1px solid #050505;
              text-align: left;
              height: 20px;
              text-transform: uppercase;
              font-size: 77%;
            
            }
            .subtable th{
              border: 1px solid #050505;
              vertical-align: bottom;
              text-transform: uppercase;
              font-size: 92%;
              text-align: left;
            
            }
            td{
                height:11px;
            
            }

            .subject{
                width:30% ;
                font-size: 130%;
            }

            .li-remark{
                width:10% ;
            }
            .li-sub{
                font-weight:bold;
                width:30% ;
            }
            .li-test{
                width: 10%;
            }
            .logo{
                width: 200px;
                margin: auto;
            }
            .col{
                text-align: center;
            }
            .comment{
                width:auto;
                float:left;
                margin-top:-110px ;
            }
            .table input{
    	 		width:100%;
    	 		float:right;
                height: 30px;
    	 	}
    	 	.table select{
    	 		width:100%;
    	 		float:right;
                height: 30px;
    	 	}
            .key{
                width:30%;
                margin-left:75%;
                font-size:80%;
                margin-top:-10px;
                font-weight:bold;
            }
            .key h5{
                padding-left:20px;
            }
            input{
                width:100%;
                margin: auto;
            }
            .subtable input{
                width:100%;
                margin: auto;
                border: none;
            }
            .GeneratedTable input{
                border: none;
            }
            .sign{
                width: 100px;
            }
            .GeneratedTable {
            width:100%;
            background-color: #ffffff;
            border-collapse: collapse;
            color: #666666;
            
            }
            .assess{
            margin-left:57% ;
            border: solid 1px #666666;
            width:28%;

            }
            .assess1{
            border: solid 1px #666666;
            width:100%;
            text-align: center;
            height: 47px;

            }
            
            .GeneratedTable td,.GeneratedTable th {
            border-width: 1px;
            border-color: #666666;
            border-style: solid;
            padding-left:px;
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
              background-color: #666666;
              border-radius: 50%;
              display: inline-block;
            }
        </style>
<div class="content-wrapper ">

<form method="post" class="" action="includes/update-jss.php">
    <div id="body">

        
                <center>            
                    <span class="display-3 text-center" > EDIT   RESULTS JSS </span>
                    <span style="margin-left: 50px;"> <button type="submit" class="btn btn-info font-weight-bold"> <i class="icon-check"></i> Submit</button> </span>
                </center>
                 <br><br>
                 <div>
                    <span >  <input class=" termin" placeholder="year" name="year" type="text" value="" required /> </span>
                    <span >  <input class=" termin" placeholder="Card Pin" name="cardpin" type="text" value="" required /> </span>
                     <span class=" term">
                         <select name="sex" class=" termin">
                            <option value="select">Sex </option>
                            <option value="male">Male</option>
                            <option value="female"> Female</option> 
                        </select>
                    </span>
                    <span >  <input class=" termin" placeholder="NO" name="no" type="text" value=""  required/></span>
                    
                    <span class=" term">
                         <select name="term" class=" termin" required>
                             <option value="select">Term</option>
                             <option value="1st"> 1st Term</option>
                            <option value="2nd"> 2nd Term</option>
                            <option value="3rd"> 3rd Term</option>
                         </select>
                    </span>
                </div>
                <br />
                 <table class="table">
                    <tr >
                        <td><b>NAME: <br /><br></b> <input name="name" type="text" value="" required/></td>
                        <td><b>ADMISSION NO: </b> <br /><br><input name="admno" type="text" value="" /></td>
            
                    </tr>
                    <tr >
                        <td><b>CLASS: <br /><br> </b>
                        	<select name="class" required>
            					<option value="select"></option>
            					<option value="jss1">JSS 1</option>
            					<option value="jss2">JSS 2</option>
            					<option value="jss3">JSS 3</option>
            				</select>
            			</td>
                        <td><b>NO IN CLASS:</b> <br /><br> <input name="class_no" type="text" value="" /></td>
            
                    </tr>
                    <tr >
                        <td><b>MAX.OBTAINABLE MARK:</b>  <br /><br> <input name="max_obt" type="text" value="" /></td>
                        <td><b>POSITION IN CLASS: </b>  <br /><br><input name="position" type="text" value="" /></td>


                    </tr>
                    <tr >
                        <td><b>SESSION:</b> <br /><br>  <input name="session" type="text" value="" /></td>
                        <td><b>NEXT TERM BEGINS: </b> <br /><br> <input name="nxt_term_begins" type="text" value="" /></td>
            
                    </tr>
                     <tr >
                        <td><b>NO OF TIMES PRESENT:</b>   <br /><br> <input name="no_present" type="text" value="" /></td>
                        <td><b>NO OF TIMES ABSENT: </b>  <br /><br> <input name="no_absent" type="text" value="" /></td>
            
                    </tr>
            
                </table>
                 <br /><br />
                <table class="subtable">
                    <tr>
                        <th class="subject">SUBJECTS</th>
                        <th class="test">Test</th>
                        <th class="test">Test</th>
                        <th class="test">Exam </th>
                        <th class="test">Total Ist Term</th>
                        <th class="test">Total 2nd Term </th>
                    </tr>
                    <tr>
                        <td class="li-sub">English</td>
                        <td class="li-test"> <input name="english_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="english_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="english_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="english_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="english_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">Mathematics</td>
                        <td class="li-test"> <input name="math_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="math_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="math_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="math_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="math_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Basic Science</td>
                        <td class="li-test"> <input name="basic_sci_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="basic_sci_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="basic_sci_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="basic_sci_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="basic_sci_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Social Studies</td>
                        <td class="li-test"> <input name="social_std_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="social_std_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="social_std_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="social_std_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="social_std_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">C.R.S / I.R.S</td>
                        <td class="li-test"> <input name="crs_irs_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="crs_irs_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="crs_irs_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="crs_irs_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="crs_irs_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">Basic Tech</td>
                        <td class="li-test"> <input name="basic_tech_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="basic_tech_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="basic_tech_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="basic_tech_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="basic_tech_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">P. H. E.</td>
                        <td class="li-test"> <input name="phe_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="phe_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="phe_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="phe_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="phe_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Agric Science</td>
                        <td class="li-test"> <input name="agric_sci_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="agric_sci_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="agric_sci_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="agric_sci_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="agric_sci_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Business Studies</td>
                        <td class="li-test"> <input name="bus_stud_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="bus_stud_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="bus_stud_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="bus_stud_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="bus_stud_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">Yoruba</td>
                        <td class="li-test"> <input name="yih_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="yih_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="yih_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="yih_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="yih_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">French</td>
                        <td class="li-test"> <input name="french_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="french_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="french_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="french_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="french_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">Fine Art</td>
                        <td class="li-test"> <input name="fine_art_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="fine_art_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="fine_art_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="fine_art_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="fine_art_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                    <td class="li-sub">Computer Studies</td>
                        <td class="li-test"> <input name="comp_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="comp_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="comp_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="comp_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="comp_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Phonetics</td>
                        <td class="li-test"> <input name="phone_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="phone_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="phone_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="phone_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="phone_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Music</td>
                        <td class="li-test"> <input name="music_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="music_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="music_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="music_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="music_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">Home Economics</td>
                        <td class="li-test"> <input name="h_econs_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="h_econs_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="h_econs_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="h_econs_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="h_econs_total2" type="text" value=""  /></td>
                
                    </tr>
                    <tr>
                        <td class="li-sub">Literature</td>
                        <td class="li-test"> <input name="lit_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="lit_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="lit_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="lit_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="lit_total2" type="text" value=""  /></td>
                    </tr>
                    <tr>
                        <td class="li-sub">Civic Education</td>
                        <td class="li-test"> <input name="civic_test1" type="text" value=""  /></td>
                        <td class="li-test"> <input name="civic_test2" type="text" value=""  /></td>
                        <td class="li-test"> <input name="civic_exam" type="text" value=""  /></td>                         <td class="li-test"> <input name="civic_total1" type="text" value=""  /></td>                        <td class="li-test"> <input name="civic_total2" type="text" value=""  /></td>
                
                    </tr>
                
                </table>  
                <div class="assess"> 
                    <div class="assess1">
                        <h6>AFFECTIVE/PAYCHOMOTOR ASSESSMENT</h6>
                    </div>
                    <div>
                        <table class="GeneratedTable">
                            <thead style="font-size:90%">
                                <tr>
                                <th style="width:70%">Personal Development</th>
                                <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Obedience</td>
                                <td><input name="obd" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>honesty</td>
                                <td><input name="honesty" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>self-control</td>
                                <td><input name="self_ctrl" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>initiative</td>
                                <td><input name="intiative" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>Punctuality</td>
                                <td><input name="puntual" type="text" value=""  />
                                </tr> 
                                <tr>
                                <td>Self- Reliance</td>
                                <td><input name="self_rely" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>SENSE OF RESPONSIBILITY</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>neatness</td>
                                <td><input name="neat" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>diligence</td>
                                <td><input name="diligence" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>class attendance</td>
                                <td><input name="class_attend" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>attentiveness</td>
                                <td><input name="attent" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>SOCIAL DEVELOPMENT</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>politeness</td>
                                <td><input name="polite" type="text" value=""  />
                                <tr>
                                <td>consideration for others</td>
                                <td><input name="cons_other" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>relationship with staff</td>
                                <td><input name="relation_staff" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>organisational ability</td>
                                <td><input name="organise" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>respect for common property</td>
                                <td><input name="respect" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>PHYSCHOMOTOR SKILLS</td>
                                <td></td>
                                </tr>
                                <tr>
                                <td>handwriting</td>
                                <td><input name="handwriting" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>verbal fluency</td>
                                <td><input name="fluency" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>sports & games</td>
                                <td><input name="sports" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>manual skills in handling tools</td>
                                <td><input name="skills" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>musical artistics skill</td>
                                <td><input name="music_skill" type="text" value=""  />
                                </tr>
                                <tr>
                                <td>no. of times school opened</td>
                                <td><input name="no_opened" type="text" value=""  />
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <div class="comment">
                	 <div>
                        <b>Teacher's Comment:</b><input name="teacher_com" type="text" value=""  /><br /><br />
                        <b>Principal's Comment:</b><input name="principal_com" type="text" value=""  /> <br /><br />
                    </div>
                	<div>
                        <span>
                                <span><b>Teacher's signature:</b> </span>
                                <span><b>Principal's signature:</b> </span>
                        </span>
                        
                    </div> 
                </div>
                
    
    </div>
    </form></div>

  <script src="../vendors/base/vendor.bundle.base.js"></script>
  <script src="../js/off-canvas.js"></script>
  <script src="../js/hoverable-collapse.js"></script>
  <script src="../js/template.js"></script>
  <script src="../vendors/chart.js/Chart.min.js"></script>
  <script src="../vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <script src="../js/dashboard.js"></script>
</body>

</html>
