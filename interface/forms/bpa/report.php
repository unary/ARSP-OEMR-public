<?php
include_once("../../globals.php");
include_once($GLOBALS["srcdir"]."/api.inc");
function bpa_report( $pid, $encounter, $cols, $id) {
$count = 0;
$obj = formFetch("form_bpa", $id);
?>

<html><head>
<? html_header_show();?>
<link rel=stylesheet href="<?echo $css_header;?>" type="text/css">
</head>
<body <?echo $top_bg_line;?> topmargin=0 rightmargin=0 leftmargin=2 bottommargin=0 marginwidth=2 marginheight=0>

<span class="title"><center><b>Bio-Psychosocial Assessment: H0031 HN</b></center></span>
<br></br>

<?php $res2 = sqlStatement("SELECT fname,mname,lname FROM patient_data WHERE pid = $pid");
$result = SqlFetchArray($res2); ?>
<b><u>Client and Service Information</u></b>
<br><br>
<b>Name:</b>&nbsp; <?php echo $result['fname'] . '&nbsp' . $result['mname'] . '&nbsp;' . $result['lname'];?>
<br /><br />

<b>Reason for Seeking Treatment/Treatment Status:</b><br />
<? echo stripslashes($obj{"reason_seeking"}); ?>
<br /><br />

<b>Presenting Problems/Symptoms:</b><br />
<? echo stripslashes($obj{"presenting_problem"}); ?>
<br /><br />

<b>Personal and Family History</b><br />
<? echo stripslashes($obj{"personal_family_history"}); ?>
<br /><br />

<b><u>Mental Status</u></b><br><br>

<b>Appearance:&nbsp;&nbsp;&nbsp;&nbsp;</b>
<? if ($obj{"appearance_age"} == "on") {echo "Stated Age&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"appearance_younger"} == "on") {echo "Younger than Stated Age&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"appearance_older"} == "on") {echo "Older than Stated Age&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"appearance_underweight"} == "on") {echo "Underweight&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"appearance_petite"} == "on") {echo "Petite&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"appearance_average"} == "on") {echo "Average Size&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"appearance_overweight"} == "on") {echo "Overweight";}?>
<br><br>

<b>Coordination/Gait:&nbsp;&nbsp;&nbsp;&nbsp;</b>
<? if ($obj{"coordination_good"} == "on") {echo "No Difficulty&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"coordination_staggered"} == "on") {echo "Staggered&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"coordination_shuffled"} == "on") {echo "Shuffled&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"coordination_clumsy"} == "on") {echo "Clumsy&nbsp;&nbsp;&nbsp;&nbsp;";}?>
<br><br>

<b>Eye Contact:&nbsp;&nbsp;&nbsp;&nbsp;</b>
<? if ($obj{"eye_good"} == "on") {echo "Good&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"eye_brief"} == "on") {echo "Brief/Fleeting&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"eye_avoid"} == "on") {echo "Avoided";}?>
<br><br>

<b>Affect (Observed):&nbsp;&nbsp;&nbsp;&nbsp;</b>
<? if ($obj{"affect_normal"} == "on") {echo "Normal/appropriate&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"affect_euthymic"} == "on") {echo "Euthymic&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"affect_dysthymic"} == "on") {echo "Dysthymic&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"affect_flat"} == "on") {echo "Flat&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"affect_labile"} == "on") {echo "Vacilating/Labile&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"affect_superficial"} == "on") {echo "Superficial/Inconsistent with Mood";}?>
<br><br>

<b>Mood (Client's Description):&nbsp;&nbsp;&nbsp;&nbsp;</b>
<? if ($obj{"mood_calm"} == "on") {echo "Calm&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"mood_happy"} == "on") {echo "Happy&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"mood_irritated"} == "on") {echo "Irritated&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"mood_anxious"} == "on") {echo "Anxious&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"mood_sad"} == "on") {echo "Sad&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"mood_angry"} == "on") {echo "Angry&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"mood_excited"} == "on") {echo "Excited";}
 if ($obj{"mood_appropriate_to_topic"} == "on") {echo "Appropriate to Topic of Conversation";}
if ($obj{"mood_inappropriate_to_topic"} == "on") {echo "Inappropriate to Topic of Conversation";}?>
 <br><br>

<b>Speech/Stream of Thought:&nbsp;&nbsp;&nbsp;&nbsp;</b>
<? if ($obj{"speech_clear"} == "on") {echo "Clear&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"speech_articulate"} == "on") {echo "Articulate&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"speech_unclear"} == "on") {echo "Unclear&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"speech_slow"} == "on") {echo "Slow&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"speech_soft"} == "on") {echo "Soft Spoken&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"speech_soft"} == "on") {echo "Mumbled&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"speech_excessive"} == "on") {echo "Excessive/Rapid&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"speech_negative"} == "on") {echo "Negative/Critical&nbsp;&nbsp;&nbsp;&nbsp;";}?>
<br><br>

<b>Thought Content:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"thought_content"});?>
<br><br>
<b>Intellectual Ability:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"intellectual_ability"});?>
<br><br>
<b>Attention/Concentration:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"attention_concentration"});?>
<br><br>
<b>Recall:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"recall"});?>
<br><br>
<b>Memory:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"memory"});?>
<br><br>
<b>Insight:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"insight"});?>
<br><br>
<b>Judgment:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"judgment"});?>
<br><br>
<b>Impulse Control:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"impulse_control"});?>
<br><br>
<b>Risk Assessment:&nbsp;&nbsp;&nbsp;&nbsp;</b><?echo stripslashes($obj{"risk_assessment"});?>
<br><br>


<b>Risk Factors:</b>
<? if ($obj{"risk_compliance"} == "on") {echo "Hx of Tx Non-Compliance&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_elope"} == "on") {echo "Hx/Px of Elopement&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_multi"} == "on") {echo "Hx of Multiple Dx&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_inpatient"} == "on") {echo "Prior Inpatient Treatment&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_hxsuicide"} == "on") {echo "Prior Homicide or Suicide Attempt&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_injury"} == "on") {echo "Self Injurious&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_suicide"} == "on") {echo "Current Suicide Ideation&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_self"} == "on") {echo "Imminent Risk of Harm to Self&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_threat"} == "on") {echo "Threats to Harm Others&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_aggression"} == "on") {echo "Aggression&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_homicide_ideation"} == "on") {echo "Current Homicidal Ideation&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_harm"} == "on") {echo "Imminent Risk of Harm to Others&nbsp;&nbsp;&nbsp;&nbsp;";}
 if ($obj{"risk_other"} == "on") {echo "Other Risks Noted&nbsp;&nbsp;&nbsp;&nbsp;";}?>
<br><br>

<b><u>Risk Management</u></b><br>
<? echo stripslashes($obj{"risk_management"});?><br><br>

<b><u>Diagnostic Impressions</u></b><br>
<? echo stripslashes($obj{"diagnostic_impressions"});?><br><br>



<b><u>Findings:</u></b>
<br><br>
<b>Axis I:  </b>
<? echo stripslashes($obj{"axis1"});?><br><br>
<b>Axis II:  </b>
<? echo stripslashes($obj{"axis2"});?><br><br>
<b>Axis III:  </b>
<? echo stripslashes($obj{"axis3"});?><br><br>
<b>Axis IV:  </b>
<? echo stripslashes($obj{"axis4"});?><br><br>
<b>Axis V/CGAS:  </b>
<? echo stripslashes($obj{"axis5"});?><br><br>

<b>Eligibility Criteria</b><br><br>
<? if ($obj{"criteria1"} == "on") {echo 'Client has an ICD-9-CM diagnosis in the following range: 294.80, 294.90, 300.00 through 305.90, 307.10, 307.23, 307.50 through 307.70, 308.00 through 312.40, 312.81 through 314.90.';}?>
<br>
<? if ($obj{"criteria2"} == "on") {echo 'Client is enrolled in Special Education for Seriously Emotionally Disturbed (SED) or Emotionally Handicapped (EH) School Placement.';}?>
<br>
<? if ($obj{"criteria3"} == "on") {echo 'Client has scored a 60 or below on the Axis V Children\'s Global Assessment of Functioning Scale within the last 6 months.';}?>
<br>
<? if ($obj{"criteria4"} == "on") {echo 'Client has an ICD-9-CM diagnosis of 295.00 through 298.90 (schizophrenia or other psychotic disorders, major depression or bipolar disorder) or 303.00 through 305.90 (substance abuse).';}?>
<br>
<? if ($obj{"criteria5"} == "on") {echo 'Certification: There is adequate evidence to indicate that the client is AT RISK for a more intensive, restrictive and costly behavioral health placement and the client\'s condition and functional level cannot be improved with a less intensive service such as individual or family therapy or group therapy.';}?>
<br><br>

<b>Recommendation/Plan:</b>
<img src="../../../images/space.gif" width="12" height="1">
<? echo stripslashes($obj{"recommendation"});?>
<br><br>
<b>Digital Signature:</b>&nbsp; <?php echo $providerNameRes;}?>
