 <?php 





covid19ImpactEstimator();  
  


//function to perfom the estimations

function covid19ImpactEstimator()
{
  $error_message = "";
  $success_message = "";
 $days= ""; $increase= "";  $newIncrease= "";  $truncated= "";
 $currentlyInfected= "";$severeImpact= "";$impactinfectionsByRequestedTime= "";
 $severeinfectionsByRequestedTime= "";  $hospitalBedsByRequestedTime= ""; 
 $severeCasesByRequestedTime = "";$totalAvailableBedsforOccupacy = "";
 $casesForICUByRequestedTime= ""; $casesForVentilatorsByRequestedTime= ""; 
  $dollarsInFlight= "";  $svimpact= "Severe Impact Estimation";$impact= " Impact Estimation";
   $region= "";
   $age= "age"; $period= ""; $income= ""; $population= ""; $elapse= "";$reported= "";$total_population= "";$hospital= "";

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

       

 if($isValid ){
    
   $currentlyInfected=$reported*10; 
  $severeImpact=$reported*50;
         
   $increase = floor($elapse/3);
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
    
   
      


}


 ?>

 
