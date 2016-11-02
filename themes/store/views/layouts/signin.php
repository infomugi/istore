<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Design Template YII by Mugi Rachmat - www.infomugi.com">
    <meta name="author" content="Mugi Rachmat - infomugi@gmail.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/css/colors.css" rel="stylesheet" type="text/css">

    <body class="login">
        <?php echo $content; ?>
    </body>
    
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/js/plugins/loaders/blockui.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/f2c7ee45/js/core/app.js"></script>

</html>


<SCRIPT>
function jumpTo (link){
   var new_url=link;
   if ((new_url != "")  &&  (new_url != null))
   window.location=new_url;
}

jQuery(document).ready(function(){
  jQuery("#LoginForm_username").keyup(function(event){
    if(event.keyCode == 13){
      jQuery("#LoginForm_password").focus();
    }
  });
  
  jQuery("#LoginForm_password").keyup(function(event){   
    if(event.keyCode == 13){      
      jQuery('#frm').submit();
    }
  });
});
</script>



  
