<body class="nav-md">
    <div class="container body">
      <div class="main_container">

<div class="right_col" role="main">
          <div class="">
    
          <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Leave Management</h2>
                    <div class="clearfix"></div>

</div>

<!--first panel (TABLE) -->                      
<div class="col-md-12 col-sm-12 col-xs-12" style="top:10px;" >
                <div class="x_panel">
      <!--xcontent--> <div class="x_content" id="leaveform">
                    <table id="" class="table table-striped table-bordered" >
                      <thead>
                          <tr id="trHead">
                            <th colspan="5" style="font-size: 30px;"><img src="<?php echo base_url('assets/css/build/images/lbplogo.png'); ?>" alt="LOGO" class="img-circle profile_img" style="width: 5%; height: 70%; margin-left: 25%; margin-bottom: 2%;"> APPLICATION FOR LEAVE</th>          
                          </tr>

                           <tr id="trHead">
                            <th colspan="5" style="text-align: right;"><small>LBP-21-0002-93.2 (Rev.8/p6)</small></th>
                          </tr>


                            <tr id="trHead">
                            <th colspan="4">Employee Name: </th>  
                             <th colspan="4">Date: </th>         
                          </tr>

                          <tr id="trHead">
                            <th colspan="2">Office/Department: </th>  
                            <th rowspan="">Position: </th>          
                            <th rowspan="">ID NO.: </th>
                            <th colspan="">PG: </th>
                          </tr>

                            <tr id="trHead">
                            <th colspan="5" style="text-align: center;">DETAILS OF ACTION PLAN</th>          
                            </tr>

                            <tr id="trHead">
                            <th colspan="1" >Type of Leave: </th>  
                            <th colspan="4" >Where will leave be spent</th>                 
                            </tr>

                             <tr id="trHead">
                              <th colspan="1" >No. of working days applied for: </th>  
                              <th colspan="4" >INCASE</th>                 
                            </tr>

                              <tr id="trHead">
                              <th colspan="1" >Inclusive Dates: </th>  
                              <th colspan="4" >INCASE</th>                 
                            </tr>

                            <tr id="trHead">
                            <th colspan="5" style="text-align: center;">DETAILS OF ACTION ON APPLICATION</th> </tr>

                            <tr id="trHead">
                            <th colspan="1.5" >Balance of Leave as of: (date)</th>  
                            <th colspan="4" >Recommendation: </th>   

                            </tr>

                          <tr id="trHead">    
                            <th colspan="" >VL: </th>  
                            <th rowspan="3" colspan="6">Supervisor: </th> 
                             </tr>

                            <tr id="trHead">
                            <th colspan="" >SL: </th>  
                          </tr>

                           <tr id="trHead">
                            <th colspan="" >Total Days: </th>  
                          </tr>

                          <tr id="trHead">
                          <th colspan="1" style="text-align: center;">APPPROVED FOR</th> 
                          <th colspan="4" style="text-align: center;">DISAPPROVED (Reason/s)</th>
                          </tr>


                         <tr id="trHead">
                              <th colspan="1" >Days with pay/ ML with full pay: </th>   
                              <th colspan="6" rowspan="3"></th>  
                          </tr>
                        

                          <tr id="trHead">
                            <th colspan="1" >Days witohout pay/ ML with proportionate pay: </th>    
                          </tr>

                             <tr id="trHead">
                              <th colspan="1" >Others: </th>  
                            </tr>

                          <tr id="trHead" >

                           <th colspan="5" rowspan="2" style="text-align: center;">GRACE OFELIA LOVELY VA. DAYO<br/><small>VP/HEAD, RBSD</small></th>
                         </tr>

                      </thead>

                      <tbody>
                       
                      </tbody>
                     </table>
                
      <!--/xcontent--></div>
          <!--/panel--></div>

<div style="float: right; margin-top: 10px;">
               <button class="btn btn-success"><a href="<?php echo base_url('process_improvement/viewLeave')?>">BACK</a></button>
                <button class="btn btn-success"  onclick="printContent('leaveform')">PRINT</button>
</div>

            
     
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  function printContent(el){
  var restorepage = document.body.innerHTML;
  var printcontent = document.getElementById(el).innerHTML;
  document.body.innerHTML = printcontent;
  window.print();
 document.body.innerHTML = restorepage;
}
</script>