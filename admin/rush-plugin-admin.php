<?php
/*global $wpdb;
 $table_name = $wpdb->prefix . 'chatit';
$results = $wpdb->get_results( 'SELECT * FROM '.$table_name.'WHERE assigned = 1', OBJECT );
 * 
 */
global $wpdb;
$ex;
 $api = get_option("rush_api");
 $limit = get_option("rush_limit");
 if($api==0){
     echo "<h3 class='warning'>Please Set Your SEMrush API Key!</h3>";
 }else{
   //  print_r($api);
 }
  $to_plugin =  plugins_url( '' , __FILE__ );
 ?>
<script>
function textAreaAdjust(o) {
    o.style.height = "1px";
    o.style.height = (25+o.scrollHeight)+"px";
}
</script>
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
      #cross{
      	   left: 129px;
    width: 43px;
    background: url('<?php echo $to_plugin ;?>/icons/sprites-reports.png') -91px 0;
      }
  
</style>

<!-- Main -->
<div class="container" style="width:100%;">
  
  <!-- upper section -->
  <div class="row">

    <div class="col-lg-12">      
      <!-- column 2 --> 
        
                
                    <div class="row" style="margin-top: 20px; ">
      <div class="col-lg-12">
        
          <form class="form-horizontal" action="" method="post">
         
       <div class="col-lg-6">
             <div class="input-group">
      
                <input class="form-control" id="message1" name="oglink" placeholder="Enter a domain" />
                   <a id="bulk"  href="#" style="margin-top: -10px; top: 20px; z-index: 2; position: absolute; left: 343px; right: 3px; width: 82px;">Bulk Options</a>
                 <span class="input-group-btn">
                <button type="submit" class="btn btn-warning ">SEARCH</button>
                </span>
               
              </div>
          </div>
<div class="col-lg-6"></div>
</form>
  </div>

  </div>
  <div class="row">
  <form class="form-horizontal" action="" method="post">
  		<div id="blk-domain" class="well col-md-7" style="margin-top: 50px;">
            <!-- Message body -->
            <div class="form-group" >
              
              <div class="col-md-9">
                <textarea  onkeyup="textAreaAdjust(this)" class="form-control" id="message" name="oglink" placeholder="Enter or paste up to 100 domains. Each domain must be on a separate line." rows="5" style="width: 550px; overflow:hidden;resize:none;" ></textarea>
              </div>
              <div class="col-md-3">
              	<a class="pull-right" href="#" id="cross1"><img width="18px" src="<?php echo $to_plugin ;?>/icons/cross.png"></a>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-10 text-right" style="margin-top: 5px;">
                <button type="submit" class="btn btn-warning " id="btn">SEARCH</button>
              </div>
               
            </div>
           </div>
         
          <div class="col-md-5"></div>
         </div>
         
          </form>
       <hr style="  display: block;height: 1px;border: 0;border-top: 5px solid blue;
    margin: 1em 0;
    padding: 0;">
    <?php
     if(isset($_POST['oglink'])){
     	//require_once( ABSPATH . 'wp-includes/formatting.php' );
                        	//print_r($_POST);die;
                        	 $latency= get_option("rush_latency");
                        	$dat_val=array();
                                $ex = $_POST['oglink'];
                                $ex = explode("\r\n",$ex);
                                //print_r($ex);die;
                                  foreach ($ex as $key => $value) {
								  
								  }
     
                                }
    ?>
   <!--<div class="row">
    	<div class="col-md-12">
    		<h3>Organic Search</h3>
    		
    		<span>Organic Search Position for google.com database </span>
    		<br />
    		<table class="table table-striped">
    		<th>favicon</th>
    	<th>Domain</th>	
    	<th>Keywords</th>
         <th>Traffic</th>
         <th>Traffic Cost</th>
    			<thead>
    				<tr></tr>
    			</thead>
    		</table>
    	</div>
    	
   </div>-->
    <div class="row">
    	             
                   	<div class="col-md-4 pull-left">
                   		     <div class="input-group"> <span>Organic Search Positions</span>

    <input id="filter" type="text" class="form-control" placeholder="Filter by keyword"/>
</div>
</div>
	<div class="col-md-4">
                   		     <div class="input-group"> 
                   		     	<span>Filter by domain</span>
<br />
  <select class="filter-domain" id="dmn">
  	<option></option>
        <?php foreach ($ex as $key => $value) {?>
        <option value="<?php echo $value;?>"><?php echo $value;?></option>
      <?php }?>
      </select>
      <a class="clear-filter" title="clear filter" href="#clear">[clear]</a>
</div>
</div>
    	<div class="col-md-4 ">
    <div class="btn-group pull-right" style="margin-top: 25px;">
                            <button data-toggle="dropdown" class="btn btn-warning btn-sm dropdown-toggle"><i class="fa fa-share"></i> Export</button>
                            <ul role="menu" class="dropdown-menu ">
                                <li><a onclick="$('#org').tableExport({type:'pdf',pdfFontSize:'6',escape:'false'});" href="#"> <img width="18px" src="<?php echo $to_plugin ;?>/icons/pdf.png"> PDF</a></li>
                                <li><a onclick="$('#org').tableExport({type:'excel',escape:'false'});" href="#"> <img width="18px" src="<?php echo $to_plugin ;?>/icons/xls.png"> XLS</a></li>
                                <li class="divider"></li>              
                            
                                <li><a onclick="$('#org').tableExport({type:'csv',escape:'false'});" href="#"> <img width="18px" src="<?php echo $to_plugin ;?>/icons/csv.png"> CSV</a></li>
                                <li><a onclick="$('#org').tableExport({type:'txt',escape:'false'});" href="#"> <img width="18px" src="<?php echo $to_plugin ;?>/icons/txt.png"> TXT</a></li>                                
                                
                            </ul>
                        </div>
                        </div>
        </div>
        <br/>

          <table  class="footable" id="org" data-filter="#filter" data-filter-text-only="true" >
             <thead>
        <tr>
          <th data-sort-ignore="true">Keyword</th>
          <th data-type="numeric">Pos</th>
          <th data-type="numeric">Volume</th>
          <th data-type="numeric">CPC</th>
          <th data-sort-ignore="true">URL</th>
          <th data-type="numeric">Traffic %</th>
          <th data-type="numeric">Cost %</th>
          <th data-type="numeric">Com</th>
          <th data-type="numeric">Results</th>
          <th data-sort-ignore="true">Trend</th>
          <th style="display: none;">Domain</th>
        </tr>
      </thead>
        <tbody>
       
        
        <?php
                           
//echo "<pre>";
                        if(isset($_POST['oglink'])){
                        	$count=0;
                        	//print_r($_POST);die;
                                $ex = $_POST['oglink'];
                                $ex = explode("\r\n",$ex);
								   foreach ($ex as $key => $value) {
								   	if(!empty($value)){
								   		$query="SELECT * FROM `".$wpdb->prefix."rushlog` Where domain='".$value."' ORDER BY id DESC LIMIT 1";	
								  	$result= $wpdb->get_results($query);
								  	$time1=$result[0]->time;
									//print_r($time1);
                              $timestamp = strtotime($time1);
                             $date      = date('d-m-y' , $timestamp);
                             $time      = date('h:i:s' , $timestamp);
//echo $time;
										$c=date('y-m-d h:i:s ',time());
										

								  	$cdate=strtotime($c);
									$current_date=date('d-m-y' , $cdate);
									$current_time=date('h:i:s',$cdate);
									
								
									if(strcmp($date,$current_date)==0){
										
    								$diff= explode(" ",ago($timestamp));
										//print_r($diff);die;
										if($diff[0]<$latency){
											
										$dat_val= json_decode($result[0]->data);
											
									}
									}
								 	if(!empty($dat_val)){
                              // print_r($ex);die;
                            
                               	$count++;
                                   
                                  
                                   		$nm=$dat_val;
										//echo "i m in <br>";
										 foreach ($nm as $nkey => $nvalue) {
                                             $ndata = explode(";", $nvalue);
											 	//print_r($ndata);
                                             echo '<tr class="'.$value.'">';
                                            
                                             foreach ($ndata as $okey => $ovalue) {
                                             	//print_r($okey);
                                           
                                                 
                                                 		if($okey==1){
                                                 			echo '<td>';
                                                 echo $ovalue.'<span style="color:#CCCFCE;margin-left:2px;">('.$ovalue.')</span>';
                                                 echo '</td>';
													}else
                                                 	if($okey==2){
                                                 			echo '<td>';
                                                 echo number_format($ovalue);
                                                 echo '</td>';
													}else
                                                 	if($okey==4){
                                                 		echo '<td>';
                                                 echo '<i class="fa fa-external-link" style="color:#1AA4E4;margin-right:5px;"></i><a target="_blank" href="'.$ovalue.'">'.$ovalue.'</a>';
                                                 echo '</td>';
                                                 	}else
                                                 	if($okey==8){
														echo '<td>';
                                                 echo number_format($ovalue);
                                                 echo '</td>';
														}else
                                                 	if($okey==9){
                                                 echo '<td>';
                                                 echo '<span class="inlinebar">'.$ovalue.'</span>';
                                                 echo '</td>';
												 echo '<td style="display:none;" data-value="'.$count.'">'.$value.'</td>';
                                                 	}else{
                                                     echo '<td>';
                                                 echo $ovalue;
                                                 echo '</td>';
												}
                                                 
                                             }
                                             echo '</tr>';
                                         }
							
                                        
                                     
                                     
									 
                                   	}else{
                                   		//echo $value;
                                       $url ="http://api.semrush.com/?type=domain_organic&key=".$api."&display_limit=".$limit."&export_columns=Ph,Po,Nq,Cp,Ur,Tr,Tc,Co,Nr,Td&domain=".$value."&display_sort=tr_desc&database=us";
                                      $content = @file_get_contents($url);
                                      if($content!=FALSE){
                                      $nm = explode("\r\n",$content);
                                     if($nm[0]!="ERROR 50 :: NOTHING FOUND" && $nm[0]!="ERROR 403 :: Forbidden"){
                                         unset($nm[0]);
										 //print_r($nm);die;
										$date=date('y-m-d h:i:s a',time());
										 //print_r($date);die;
										 $data= json_encode($nm);
										// print_r($data);die;
										$q = "INSERT INTO `".$wpdb->prefix."rushlog` (`time`, `domain`, `data`) VALUES ('".$date."', '".$value."', '".$data."')";
 											echo $wpdb->query($q);
									 	//print_r($nm);die;
									
                                         foreach ($nm as $nkey => $nvalue) {
                                             $ndata = explode(";", $nvalue);
											 	//print_r($ndata);
                                             echo '<tr class="'.$value.'">';
                                            
                                             foreach ($ndata as $okey => $ovalue) {
                                             	//print_r($okey);
                                           
                                                 
                                                 		if($okey==1){
                                                 			echo '<td>';
                                                 echo $ovalue.'<span style="color:#CCCFCE;margin-left:2px;">('.$ovalue.')</span>';
                                                 echo '</td>';
													}else
                                                 	if($okey==2){
                                                 			echo '<td>';
                                                 echo number_format($ovalue);
                                                 echo '</td>';
													}else
                                                 	if($okey==4){
                                                 		echo '<td>';
                                                 echo '<i class="fa fa-external-link" style="color:#1AA4E4;margin-right:5px;"></i><a target="_blank" href="'.$ovalue.'">'.$ovalue.'</a>';
                                                 echo '</td>';
                                                 	}else
                                                 	if($okey==8){
														echo '<td>';
                                                 echo number_format($ovalue);
                                                 echo '</td>';
														}else
                                                 	if($okey==9){
                                                 echo '<td>';
                                                 echo '<span class="inlinebar">'.$ovalue.'</span>';
                                                 echo '</td>';
												 echo '<td style="display:none;" data-value="'.$count.'">'.$value.'</td>';
                                                 	}else{
                                                     echo '<td>';
                                                 echo $ovalue;
                                                 echo '</td>';
												}
                                                 
                                             }
                                             echo '</tr>';
                                         }
                                        
                                     }
                                     }else{
                                         echo "limit reached";
                                     }
                                     }
						unset($query);
                                     }
                                    }
                                    }
                 ?>
                 </tbody>
                        </table> 
      </div>
    </div>
        </div>        
        

<!-- /Main -->
 <script type="text/javascript">

 </script>
 <?php
 function ago($time) {
    $timediff=time()-$time;

    $days=intval($timediff/86400);
    $remain=$timediff%86400;
    $hours=intval($remain/3600);
    $remain=$remain%3600;
    $mins=intval($remain/60);
    $secs=$remain%60;

    if ($secs>=0) $timestring = "0 h 0 m ".$secs." s";
    if ($mins>0) $timestring = "0 h ".$mins." m ".$secs." s";
    if ($hours>0) $timestring = $hours." h ".$mins." m";
    if ($days>0) $timestring = $days." d ".$hours." h";

    return $timestring;
}
  ?>