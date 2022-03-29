<?php defined('BASEPATH') OR exit('No direct script access is allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset ="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Risk Assessment Tool</title> 
			
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/citheme.css"/><!-- Ensure to connect the autoload['helper'] in the autolaod file to 'url'
		 -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.mim.js"></script>
		<link rel="index" title="Index" href="genindex.html"/>
		
		<link rel="top" title="" href="#"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src=https://www.jqueryscript.net/demo/jQuery-Extension-To-Add-Ken-Burns-Effect-To-Bootstrap-Carousel/></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudfare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>	
		
	</head>
	<body>
	 			
	 
	 		<div class="col-sm-6 float-left"  role="document" style="">
				<div id="nav">
					<div id="nav_inner">
						<div id="pulldown-menu" class="ciNav"></div>
					</div>
				</div>
			
      <div class="wy-side-nav-search">
          <a href="<?php echo base_url();?>" class=""><b>Covid-19 Risk Assessment Tool.</b></a>      

      </div>
      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation"> 
      	 <ul>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('about')?>">About this tool</a></li>
            <p>This tool can help you to quantify your biological risk and should be used to facilitate your work based risk assessment. It will also assist team leaders when allocating roles within clinical departments and GP practices.</p>
      	 	<li class="tcotree-11"><a class="reference internal" href="<?php echo site_url('pregnancy')?>">Pregnancy</a></li>
            <p>There is currently insufficient data to make any meaningful assessment about the risk of COVID-19 to either the mother or the unborn child.</p>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('To do')?>">What you should do</a></li>
      	 	<li class="toctree-11"><a class="reference internal" href="<?php echo site_url('legal')?>">Legal Disclaimer</a></li>
      	</ul>                      
      </div>
    		</nav>
    <!-- Here is for creating header title -->
    	
    				<div role="main" class="document">
						<div class="section" id="newly reported cases">
							<h5><b>Objective risk stratification(ORS) tool for individuals not already identified as "vulnerable" by the NHS Digital Shielded Patient List</b><a class="headerlink" href="#reported cases" title=""></a></h5>

								<input id ="case" type="number" class= "form-control shiny-bound-input" value ="100" min="0">

								<br><b> Individual's Age</b><a class="headerlink" href="#reported cases" title=""></a></br>

								<input id ="pop" type="number" class= "form-control shiny-bound-input" value ="150" min="0">

								<span class ="help-block"> The age should be atleast 50 years old.</span>

            </div>

                      
								
								<br><b>Sex at Birth</b></br>

								<span class ="help-block">What is the gender of the Covid victim?</span>
								
								<label>
								<input type = "radio" name="screen" value="1" checked = "checked">
								<span>Male</span>
								
								<input type = "radio" name="screen" value="1" checked = "checked">
								<span>Female</span>
								</label>

								<label>
                  <br><label><b>Ethinicity</b></label>
                  <select id = "ethinicity">
                    <option value = "1">Caucasian</option>
                    <option value = "2">Black African descent</option>
                    <option value = "3">Indian Asian descent</option>
                    <option value = "4">Filipino</option>
                     <option value = "3">Others</option>
                  </select></br>
							
								
                  <label>
                  <br><label><b>Diabetes and Obesity</b></label>
                  <select id = "obesity">
                    <option value = "1">Type 1</option>
                    <option value = "2">Type 2</option>
                  </select></br>
                
              
                  <label>
                  <br><label><b>Cardiovascular disease</b></label>
                  <select id = "Cardiovascular">
                    <option value = "1">Angina</option>
                    <option value = "2">Previous MI</option>
                    <option value = "3">Stroke</option>
                    <option value = "4">Cardiac intervention</option>
                    <option value = "5">Heart failure</option>
                  </select></br>
                  
                  <label>
                  <br><label><b>Pulmonary disease</b></label>
                  <select id = "Pulmonary">
                    <option value = "1">Asthma</option>
                    <option value = "2">Non Asthma chronic pulmonary disease</option>

                    <option value = "3">Either of above</option>
                    
                  </select></br>
                  <input id ="case" type="number" class= "form-control shiny-bound-input" value ="3" min="1">

                <label>
                  <br><label><b>Malignant neoplasm</b></label>
                  <select id = "Malignant">
                    <option value = "1">Active malignancy</option>
                    <option value = "2">Malignancy in remmission</option>
                    
                  </select></br>
								
								<p><b>Rheumatological conditions</b></p>
								<input id ="case" type="number" class= "form-control shiny-bound-input" value ="2" min="1">
								
                <p><b>Immunosuppressant therapy</b></p>
								<input id ="case" type="number","text" class= "form-control shiny-bound-input" value ="2" min="1">





								<h5><b>Interpretation and Score</b></h5>

								<p>Low Risk</p>
								<input id ="case" type="number" class= "form-control shiny-bound-input" value ="3" min="0">
								<span class = "help-block">Low Risk.</span>

								<input id ="case" type="number" class= "form-control shiny-bound-input" value ="5" min="3">
								<span class = "help-block">Medium Risk.</span>

								<input id ="case" type="number" class= "form-control shiny-bound-input" value ="100" min='6'>
								<span class = "help-block">High Risk .</span>
            						
									
								</ul>		
						</div>
					</div>
			
				
			
				<div class="container">
					<div class= "col-sm-6 float-right">
      			
        		<form name="calculator" >
              <form method="post" attribute="post" action="covid_form.php">
        					<input type="button" value="50" onClick="document.calculator.ans.value+='1'">
        					<input type="button" value="60" onClick="document.calculator.ans.value+='2'">
        					<input type="button" value="70" onClick="document.calculator.ans.value+='4'"><br>
        					<input type="button" value="80" onClick="document.calculator.ans.value+='6'">
        					<input type="button" value="1" onClick="document.calculator.ans.value+=''">
        					<input type="button" value="2" onClick="document.calculator.ans.value+=''">
        					<input type="button" value="3" onClick="document.calculator.ans.value+=''"><br>
        					<input type="button" value="4" onClick="document.calculator.ans.value+=''">
        					<input type="button" value="5" onClick="document.calculator.ans.value+=''">
      
        					<input type="reset" value="Reset">
        					<br><input type="button" value="=" onClick="document.calculator.ans.value=eval(document.calculator.ans.value)"></br>
                  <br><input type="textfield"  value="female", onClick="document.calculator.ans.value+='0'"></br>
                  <br><input type="textfield"  value="male", onClick="document.calculator.ans.value+='1'"></br>
                  <br><input type="textfield"  value="Cardiovascular", onClick="document.calculator.ans.value+='1'"></br>
                  <br><input type="textfield"  value="Pulmonary asthma", onClick="document.calculator.ans.value+='1'"></br>
                  <br><input type="textfield"  value="rheumatological conditions", onClick="document.calculator.ans.value+='2'"></br>
                  <br><input type="textfield"  value="Immunosuppressant therapy", onClick="document.calculator.ans.value+='2'"></br>


        				  <br><label> Select list</label>
                  
                  <select id = "ethinicity">
                    <option value = "1">Caucasian</option>
                    <option value = "2">Black African descent</option>
                    <option value = "3">Indian Asian descent</option>
                    <option value = "4">Filipino</option>
                     <option value = "3">Others</option>
                  </select></br>

                	<br><b>Adjustment value is</b><input type="textfield" name="ans" value="">
                  
					</form>
          

      
</body>
</html>
					