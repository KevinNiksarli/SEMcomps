<?php
/*global $wpdb;
 $table_name = $wpdb->prefix . 'chatit';
$results = $wpdb->get_results( 'SELECT * FROM '.$table_name.'WHERE assigned = 1', OBJECT );
 * 
 */
 //add_option("rush_api_default",0);
if(isset($_POST['latency'])){
	//print_r($_POST);die;
	  update_option("rush_latency",$_POST['latency']);
	 
}
if(isset($_POST['call'])){
	//print_r($_POST);die;
	  update_option("rush_api_call",$_POST['call']);
	 
}
if(isset($_POST['api'])){
    update_option("rush_api",$_POST['api']);
	//update_option("rush_start_date",date("Y-m-d"));
   // print_r($_POST);
}
if(isset($_POST['limit'])){
    update_option("rush_limit",$_POST['limit']);
	//update_option("rush_start_date",date("Y-m-d"));
   // print_r($_POST);
}
 $api = get_option("rush_api");
 $call= get_option("rush_api_call");
 $latency= get_option("rush_latency");
  $limit = get_option("rush_limit");
 //print_r(array($call,$latency));
 if($api==0){
     echo "<h3 class='warning'>Please Set Your SEMrush API Key!</h3>";
 }else{
   //  print_r($api);
 }
 ?>
<style>
  .mycolor{
      background-color:#a1d36e;
      }  
      .itab > li > i{
         color:#FFFFFF;
      }
      .itab > active > i{
         color:#a1d36e;
      }
</style>
<!-- Main -->
<div class="container" style="width:100%;">
  
 <form class="form-horizontal" role="form" method="post">
    <fieldset>
      <legend>Settings</legend>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="api">SEMrush API Key:</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="api" id="api" placeholder="Enter Your API Key" value="<?php if($api!=0){echo $api;} ?>">
        </div>
      </div>
     
      <div class="form-group">
        <label class="col-sm-3 control-label" for="api">Latency:</label>
        <div class="col-sm-9">
           <select name="latency" >
           	<?php if($latency==6){?>
  <option value="6" selected="selected">Realtime</option>
  <option value="1">One hour</option>
   	<option value="2">Two hour</option>
   	<option value="3">Three hour</option>
   	<option value="4">Four hour</option>
   	<option value="5">Five hour</option>
   	<option value="6" selected="selected">Realtime</option>
  <?php }elseif($latency==1){?>
  <option value="1" selected="selected">One hour</option>
     	<option value="2">Two hour</option>
   	<option value="3">Three hour</option>
   	<option value="4">Four hour</option>
   	<option value="5">Five hour</option>
   	<option value="6">RealTime</option>
  <?php }elseif($latency==2){?>
  	    	<option value="1">One hour</option>
  <option value="2" selected="selected">Two hour</option>
   	<option value="3">Three hour</option>
   	<option value="4">Four hour</option>
   	<option value="5">Five hour</option>
   	<option value="6">RealTime</option>
   <?php }elseif($latency==3){?>
	    	<option value="2">One hour</option>
  <option value="2" >Two hour</option>
  <option value="3" selected="selected">Three hour</option>
     	<option value="4">Four hour</option>
   	<option value="5">Five hour</option>
   	<option value="6">RealTime</option>
   <?php }elseif($latency==4){?>
   	    	<option value="2">One hour</option>
  <option value="2" >Two hour</option>
  <option value="3">Three hour</option>
  <option value="4" selected="selected">Four hour</option>
  	<option value="5">Five hour</option>
   	<option value="6">RealTime</option>
 <?php }elseif($latency==5){?>
   	<option value="2">One hour</option>
  <option value="2" >Two hour</option>
  <option value="3">Three hour</option>
  <option value="4">Four hour</option>
  <option value="5" selected="selected">Five hour</option>
   	<option value="6">RealTime</option>	
   <?php }else{?>
   	<option value="1">One hour</option>
   	<option value="2">Two hour</option>
   	<option value="3">Three hour</option>
   	<option value="4">Four hour</option>
   	<option value="5">Five hour</option>
   	<option value="6">RealTime</option>
   	<?php }?>
</select> 
        </div>
      </div>
       
          
         <div class="form-group">
        <label class="col-sm-3 control-label" for="api">Limit:</label>
        <div class="col-sm-9">
           <select name="limit" >
           	<?php if($limit==10){?>
           	<option value="10" selected="selected" >10</option>
           	<option value="30" >30</option>
  <option value="50" >50</option>
  <option value="100" >100</option>	
           	<?php }elseif($limit==30){?>
           	<option value="10" >10</option>
           	<option value="30" selected="selected" >30</option>
             <option value="50" >50</option>
  <option value="100" >100</option>
           	<?php }elseif($limit==50){?>
           		  <option value="10" >10</option>
  				<option value="30" >30</option>
           	<option value="50" selected="selected">50</option>
           	  <option value="100" >100</option>	
           	<?php }elseif($limit==100){?>
           		 <option value="10" >10</option>
  <option value="30" >30</option>
  <option value="50" >50</option>
           	<option selected="selected" value="100" >100</option>	
           	<?php }else{?>			
  <option value="10" >10</option>
  <option value="30" >30</option>
  <option value="50" >50</option>
  <option value="100" >100</option>
  	<?php }?>
</select> 
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Save Changes</button>
        </div>
      </div>
    </fieldset>
  </form>

</div>