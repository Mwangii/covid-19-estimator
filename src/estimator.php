<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Covid-19 Infections Estimator</title>

         <form name = "myForm"   action="https://github.com/Mwangii/covid-19-estimator/blob/assessment/src/estimator.php" method="post" >
                <div class="form-group">
                <label for="age">Choose Region</label>
          <div class="input-group">
                        <select class="form-control" name="region" id="region" required>
                            <option value="Africa">Africa</option>
                            <option value="Asia">Asia</option>
                            <option value="Australia">Australia</option>
                            <option value="Europe">Europe</option>
                            <option value="Middle East">Middle East</option>
                            <option value="North America">North America</option>
                            <option value="South America">South America</option>
                           
                        </select>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
                </div>
              
                <div class="form-group">
                <label>Average Age(Years)</label>
          <div class="input-group" >
            <input type="number" class="form-control" name="age" id="age" placeholder="(yrs)" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
            <div class="form-group">
                <label>Average Daily Income(USD)</label>
          <div class="input-group" data-validate="number">
            <input type="number" class="form-control" name="income" id="income" placeholder="($)" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
            <div class="form-group">
                <label>Average Daily Income(Population)</label>
          <div class="input-group" data-validate="number">
            <input type="number" class="form-control" name="data-population" id="data-population" placeholder="($)" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
        </div>
        <div class="form-group">
                <label for="age">Choose Period Type</label>
          <div class="input-group">
                        <select class="form-control" name="data-period-type" id="data-period-type" required>
                            <option value="days">Days</option>
                            <option value="weeks">Weeks</option>
                            <option value="months">Months</option>
                          
                           
                        </select>
              <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>
                </div>
         
       
        
         
        </div>

          <div class="row">
               <div class="form-group">
                  <label>Time to Elapse</label>
          <div class="input-group" data-validate="number">
            <input type="number" class="form-control" name="data-time-to-elapse" id="data-time-to-elapse" placeholder="(days/months/weeks)" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>

        </div>
           <div class="form-group">
                  <label>Total Reported Cases</label>
          <div class="input-group" data-validate="number">
            <input type="number" class="form-control" name="data-reported-cases" id="data-reported-cases" placeholder="(total reported cases)" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>

        </div>
           <div class="form-group">
                  <label>Total Population</label>
          <div class="input-group" data-validate="number">
            <input type="number" class="form-control" name="total_population" id="total_population" placeholder="(total population)" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>

        </div>
           <div class="form-group">
                  <label>Total Hospital Beds</label>
          <div class="input-group" data-validate="number">
            <input type="number" class="form-control" name="data-total-hospital-beds" id="data-total-hospital-beds" placeholder="(total beds)" required>
            <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
          </div>

        </div>

        
         
            <div class="form-group">
                         
    
                    <div class="form-group">
                     <div class="modal-footer">
                        <button class="btn btn-danger" type="reset">Reset</button>
                        <button type="submit" id="calculate" name="calculate" class="btn btn-primary">Calculate</button>
                     </div>
                    </div>
                
        </div>  
            </form> 

      <form name = "myForm"   action="https://github.com/Mwangii/covid-19-estimator/blob/assessment/src/estimator.php" method="post" >

  <table bgcolor="#C4C4C4" align="center" width="380" border="0">  
<tr>    
<td  align="center"colspan="2"><font color="#0000FF">Your Data Inputs/Entries</font></td>  
</tr>    
<tr>    
<td>Region</td>    
<td><input type="text"  value="<?php echo $_POST['region']; ?>" readonly="" /></td>  
</tr>  
<tr>    
<td>Average Age</td>   
<td><input type="number" value="<?php echo $_POST['age']; ?>" readonly="" /></td>  
</tr>  
<tr>    
<td>Average Daily Income in USD</td>    
<td><input type="number" value="<?php echo $_POST['income']; ?>" readonly=""  /></td>  
</tr>
    
<td>Average Daily Income per Population</td>    
<td><input type="number" value="<?php echo $_POST['data-population']; ?>" readonly=""  /></td>  
</tr>  
<tr>  
<tr>    
<td>Period Type</td>    
<td><input type="text" value="<?php echo $_POST['data-period-type']; ?>" readonly=""  /></td>  
</tr>
<tr>  
<td>Time to Elapse</td>    
<td><input type="number" value="<?php echo $_POST['data-time-to-elapse']; ?>" readonly=""  /></td>  
</tr>  
  <tr>  
<td>Total Reported Cases</td>    
<td><input type="Total Reported Cases" value="<?php echo $_POST['data-reported-cases']; ?>" readonly=""  /></td>  
</tr>  
  
  <tr>  
<td>Total Population</td>    
<td><input type="number" value="<?php echo $_POST['total_population']; ?>" readonly=""  /></td>  
</tr>  
  
  <tr>  
<td>Total Hospital Beds</td>    
<td><input type="number" value="<?php echo $_POST['data-total-hospital-beds']; ?>" readonly=""  /></td>  
</tr>  
  <tr>  
<td><a href="covid-19-estimator/index.html" target="_parent">Back To Covid 19 Estimator</a></td>    

</tr>    
</tr>  
 
     


</table>

 
   </form> 

   </html>
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
   //convert months to days()
   if($isValid && ($period== 'months') ){
         $days = $elapse*30;
       
   echo "Study Now " . $truncated . "<br>"; 
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
    
   
      echo "" . $impact. "<br>"; 
      
       echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Estimation of Currently Infected is</td> <td>$currentlyInfected</font></td></tr> 
<tr> <td><font color=blue>Estimation  by requested time for currently infected</td> <td>$impactinfectionsByRequestedTime</font></td></tr>
<tr> <td><font color=blue>Estimation of Monentary value likely to be lost in USD  is</td> <td>$dollarsInFlight$ </font></td></tr>
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

 
