<form action="<?= base_url('admin/hallo') ?>" method="POST">
 <select id="sel_id" name="motor"  onchange="this.form.submit();">
<option value="0">Select</option>
<option value="2">Honda</option> 
<option value="3">Kawasaki</option> 
<option value="4">Yamaha</option>                   
</select>
</form>