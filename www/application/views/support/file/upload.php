<?php echo Form::open('', array('enctype' => 'multipart/form-data', 'name' => 'myForm')); ?>
<?php echo Form::file('myfile') ?>
<?php echo Form::submit('send',__("Upload")); ?>
<?php echo Form::close(); ?>
<SCRIPT>
var error = ""+<?php foreach($errors as $error): ?><?php echo '"'.$error.'"+'; ?><?php endforeach; ?>"";
if(error!="")
{
  alert(error);
}
</SCRIPT>