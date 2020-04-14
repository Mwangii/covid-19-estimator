 <?php 





covid19ImpactEstimator();  


//function to perfom the estimations

function covid19ImpactEstimator()
{
  $error_message = "";$success_message = "";
 $days= ""; $increase= "";  $newIncrease= "";  $truncated= "";
 $currentlyInfected= "";$severeImpact= "";$impactinfectionsByRequestedTime= "";$severeinfectionsByRequestedTime= "";
 $severeCasesByRequestedTime = "";$totalAvailableBedsforOccupacy = "";
 $casesForICUByRequestedTime= ""; $casesForVentilatorsByRequestedTime= "";  $dollarsInFlight= "";  $svimpact= "Severe Impact Estimation";$impact= " Impact Estimation";$input= " Inputs"; $hospitalBedsByRequestedTime= "";

// Register  data
if(isset($_POST['calculate'])){
   $region = trim($_POST['region']);
   $age = trim($_POST['age']);
   $income = trim($_POST['income']);
   $population = trim($_POST['data-population']);
   $period = trim($_POST['data-period-type']);
   $elapse = trim($_POST['data-time-to-elapse']);
   $reported= trim($_POST['data-reported-cases']);
   $total_population= trim($_POST['total_population']);
   $hospital= trim($_POST['data-total-hospital-beds']); 
  
  }


     $isValid = true;

   // Check fields are empty or not
   if($age == '' || $income== '' || $population== '' || $elapse== '' || $reported== ''|| $total_population== ''|| $hospital== ''){
     $isValid = false;
     $error_message = "Please fill all fields.";
   }
   //convert months to days()
   if($isValid && ($period== 'months') ){
         $days = $elapse*30;
       
   
   }
  // convert weeks to days
     if($isValid && ($period== 'weeks') ){
         $days = $elapse*7;
       
   }
   // convert weeks to days
     if($isValid && ($period== 'days') ){
         $days = $elapse;
       
   }



       

 if($isValid ){

   $currentlyInfected=$reported*10; 
  $severeImpact=$reported*50;
         
   $increase = floor($days/3);
   $newIncrease = floor(2 ** $increase);


    $impactinfectionsByRequestedTime = floor($currentlyInfected*$newIncrease);
     $severeinfectionsByRequestedTime = floor($severeImpact*$newIncrease);
      $severeCasesByRequestedTime = floor(0.15*$severeinfectionsByRequestedTime);
       $totalAvailableBedsforOccupacy= floor($hospital*0.35);
        $hospitalBedsByRequestedTime = floor($totalAvailableBedsforOccupacy-$severeCasesByRequestedTime);
         $casesForICUByRequestedTime = floor(0.05*$severeinfectionsByRequestedTime);
          $casesForVentilatorsByRequestedTime = floor(0.02*$severeinfectionsByRequestedTime);
           $dollarsInFlight = floor($impactinfectionsByRequestedTime*0.65*$income*$days);
    
   }
    
       echo "" . $input. "<br>"; 
      
       echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Region</td> <td>$region</font></td></tr> 
<tr> <td><font color=blue>Average Age</td> <td>$age</font></td></tr>
<tr> <td><font color=blue>Average Daily Income</td> <td>$income </font></td></tr>
<tr> <td><font color=blue>Average Daily Income Per Population</td> <td>$population </font></td></tr>
<tr> <td><font color=blue>Period Type</td> <td>$period </font></td></tr>
<tr> <td><font color=blue>Time to Elapse</td> <td>$elapse </font></td></tr>
<tr> <td><font color=blue> Total Reported Cases</td> <td>$reported </font></td></tr>

<tr> <td><font color=blue>Total Population</td> <td>$total_population</font></td></tr>

<tr> <td><font color=blue>Hospital Beds</td> <td>$hospital </font></td></tr>

</table>";
   
      echo "" . $impact. "<br>"; 
      
       echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Estimation of Currently Infected is</td> <td>$currentlyInfected</font></td></tr> 
<tr> <td><font color=blue>Estimation  by requested time for currently infected</td> <td>$impactinfectionsByRequestedTime</font></td></tr>
<tr> <td><font color=blue>Estimation of Monentary value likely to be lost in USD  is</td> <td>$hospital$ </font></td></tr>
</table>";

echo "" . $svimpact. "<br>"; 
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>The Estimation of Severe Impacts</td> <td>$severeImpact</font></td></tr> 
<tr> <td><font color=blue>Estimation  by requested time for Severly infected</td> <td>$severeinfectionsByRequestedTime</font></td></tr>
<tr> <td><font color=blue>Available beds for patients with Severe Cases</td> <td>$hospitalBedsByRequestedTime</font></td></tr>
<tr> <td><font color=blue>Severe Cases that requires hospitalization</td> <td>$severeCasesByRequestedTime</font></td></tr>

</table>";



}


 ?>

 
