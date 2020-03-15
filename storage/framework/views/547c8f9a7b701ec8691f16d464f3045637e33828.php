<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-3">
  <form> <center>
<select class="custom-select custom-select-lg mb-3" id="election" name="election" >
  <option value="pe">Choose The  Election </option>
  <option value="pre">PRE</option>
  <option value="mc">MC</option>
  <option value="r">R</option>
</select>
</div>
<div class="col col-lg-3">
<select class="custom-select custom-select-lg mb-3" id="district" name="district" >
  <option value="pe">Select The  District </option>
  <option value="pre">PRE</option>
  <option value="mc">MC</option>
  <option value="r">R</option>
</select>
</div>
</div>  </div> 
<center>
<button type="button" class="btn btn-primary">Generate Report </button>
</center>
</form>
  </center>
 </div>
  <section class="page-section clearfix">
    <div class="container" id="example">
      
       
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h5 class="section-heading mb-10" align="right">
            <span>PE-11  </span>
            
          </h5>
          <h6 class="section-heading mb-10" align="left">
            <span>24(1) ආ වගන්තිය <br>
            24(1) ஆம் பிரிவு <br>
            Section Under 24(1)(b) </span>
            
          </h6>
         
          <h2 class="section-heading mb-4">
            <span></span>
            
          </h2>
          <h5 class="section-heading mb-4">
            <span> <b>1981 අංක 1 දරණ පාර්ලිමේන්තූ මැතිවරණ පනත <br></b>1981 ஆம் ஆண்டின் 1ஆம் இலக்க பாராளுமன்றத் தேர்தல்கள் சட்டம்
            <br>Parliamentary Elections ACT, No.1of 1981<br><br>
            සිංහල අකාරාදී පිළිවෙලට සකස් කරන ලද අපේක්ෂකයන්ගේ නම්<br>சிங்கள அகர வரிசைப்படி தயாரிக்கப்பட்ட வேட்பாளர்களின் பெயர்கள்<br> Names of the candidates placed in alphabetical order in Sinhala </span>
            
          </h5>
         
         <table border="0" cellpadding="5" width="100%">
         	<tr>
             <td align="Left"> මැතිවරන කොට්ඨාසසඝ :............................</td>
             <td align="center"> යබයාැද පරිපාලන දිස්ත්රික්කය :........................</td>
             </tr>
             <tr>
             <td align="Left"> தேர்தல் மாவட்டம்  :........................</td>
             <td align="center">நிருவாக மாவட்டம் :...............................</td>
             </tr>
             <tr>
             <td align="Left"> Electoral District  :.................................</td>
             <td align="center"> Administrative District :...............................</td>
             </tr>
          
</table>
<br><br>
<table table border="0" cellpadding="5" width="100%">

<tr>
<td>...........................................................................................................................</td><td>.......................................................................................................................... </td>
</tr>

<tr>
<td>(දේශපාලන පක්ෂයේ නම/ස්වාධීන කණ්ඩායමේ අංකය)</td><td>(පක්ෂයට/කණ්ඩායමට වෙන් කරන ලද අනුමත ලකුණ)) </td>
</tr>
<tr>
<td>(அரசியற் கட்சியின் பெயர்கள் / சுயேச்சைக் குழுவின் இலக்கம்) </td><td>(கட்சிக்கு / குழுவிற்கு குறித்தொதுக்கப்பட்ட சின்னம்) </td>
</tr>
<tr>
<td>9Name of the Party/ No of the Ind.Group</td><td>(Symbol allocated to the Party/ Ind.Group) </td>
</tr>
</table >
<br>

<table table border="1" cellpadding="5" width="100%">
<tr>
<td> අනුක්රමික අංකය <br>தொடர் இல <br> Serial No.</td>
<td>අපේක්ෂකයාගේ නම<br>வேட்பாளரின் பெயர்<br> Name of Vandidate
</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>
<br>
<br>
<table table border="0" cellpadding="5" width="100%">
<tr>
<td align="right">.............................................................................................................................</td>
</tr>
<tr>
<td align="right">කේරිම්භාර නිලධාරී/தெரிவத்தாட்சி அலுவலர்/Returning Officer</td>
</tr>
<br>
<tr>
<td align="right">.............................................................................................................................</td>
</tr>
<tr>
<td align="right">කේරිම්භාර නිලධාරී/தேர்தல் மாவட்டம் /Electoral District</td>
</tr>
<tr>
<td align="Left">දිනය/திகதி/Date.....................................</td>
</tr>
<tr>
<td align="Left">මැතිවරණ කාර්යාලය/தேர்தல் அலுவலகம்/Elections Office:...............................................</td>
</tr>
</table>





        
         <br>
        
        <br><br>
        
            
            
          </div>

        </div>

      
    </div>
    <br> 
    <center>  <input class="btn btn-primary" type="button" onclick="printDiv('example')" value="Print Data" /> </center>
  </section>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>