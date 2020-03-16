<?php $__env->startSection('content'); ?>


<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-3">
  <form> <center>
<select class="custom-select custom-select-lg mb-3" class="election" name="election"onChange >
<option value="0" disabled="true" selected="true">Select Election</option> 
    <?php $__currentLoopData = $Fdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($data->id); ?>"><?php echo e($data->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="col col-lg-3">

<select class="custom-select custom-select-lg mb-3" class="district" name="district" >
    <option value="0" disabled="true" selected="true">Select District</option> 
</select>

</div>
</div>  </div> 
<center>
<Button type="button" class="btn btn-primary" id="bellot">Generate Report </Button>
</center>
</form>
  </center>
 </div>
  <section class="page-section clearfix">
    <div class="container" id="example">
      
       
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        
          <h6 class="section-heading mb-10" align="left">
            <span>30(1)(2) ආ වගන්තිය <br>
            30(1)(2) ஆம் பிரிவு <br>
            Section Under 30(1)(2) </span>
            
          </h6>
         
          <h2 class="section-heading mb-4">
            <span>PARLIAMENTARY ELECTIONS 2020 <br>පාර්ලිමේන්තු මැතිවරණය 2020</span>
            
          </h2>
          <h5 class="section-heading mb-4">
            <span>
            බැලට් පේපර්<br> பாலோட் பேப்பர்<br>Ballot Paper<br>
             </span>
            
          </h5>
         <p> Ballot Paper No:...............................................................................................................................................................................</p>
         <table align="center" border="1" cellpadding="5" width="80%" id="tblBellot">
         <thead>
         	<tr>
             <th align="right"> Party Name</th>
             <th align="left"> Symbol</th>
             <th align="left"> No</th>
          </tr>
          </thead>
          <tbody>
          
         </tbody>
            
             </table >
             <table align="center" border="1" cellpadding="5" width="80%">
             <tr>
             <td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td><td>10</td>
             </tr>
             <tr>
             <td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td><td>19</td><td>20</td>
             </tr>
             <tr>
             <td>21</td><td>22</td>
             </tr>
             </table>
         <br>
        
        <br><br>
        
            
            
          </div>

        </div>

      
    </div><br> 
    <center>  <input class="btn btn-primary" type="button" onclick="printDiv('example')" value="Print Data" /> </center>
  </section>

  <?php $__env->startPush('scripts'); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  
//  $(document).ready(function(){

// -------------------------Get District----------------------------------
  $("select[name='election']").change(function () {
      $("#tblBellot tbody").empty();
      var elec_id=$(this).val();
      var op=" ";

      $.ajax({
        type:'GET',
        url:'<?php echo URL::to('getDistrict'); ?>',
        data:{'id':elec_id},
        success:function(data){

          op+='<option value="0" disabled="true" >Select District</option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
          
          }
          $("select[name='district']").html("");
          $("select[name='district']").append(op);

        },
        error:function(){

        }
      });
    });

// -------------------------Get Bellot----------------------------------
$("#bellot").click(function () {
  var elec_id = $("select[name='election']").val();
  var dist_id = $("select[name='district']").val();
  var op=" ";

$.ajax({
  type:'GET',
  url:'<?php echo URL::to('getBallot'); ?>',
  data:{'id':dist_id},
  success:function(data){

    for(var i=0;i<data.length;i++){

      op+='<tr>';
      op+='<td>'+data[i].id+'</td><td>'+data[i].name+'</td><td>'+data[i].id+'</td>';
      op+='</tr>';
    
    }
    $("#tblBellot tbody").empty();
    $("#tblBellot tbody").append(op);

  },
  error:function(){

  }
});
});

// ---------------------------------------------------------------------
$("select[name='district']").change(function () {
      $("#tblBellot tbody").empty();
});



// });

</script>

  

  <?php $__env->stopPush(); ?>

 

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>