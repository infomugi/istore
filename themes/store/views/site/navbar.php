    <header id="header" class="header-2 header-3">

      <div class="cp-burger-nav">


        <div class="container">

          <div class="navigation-col">
            <nav class="navbar navbar-inverse">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="nav">

                <?php

if(YII::app()->user->getLevel()==2){

 $this->widget('zii.widgets.CMenu',array(
  'htmlOptions'=>array('class'=>'nav'),
  'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
  'itemCssClass'=>'item-test',
  'encodeLabel'=>false,
  'items'=>array(

    array('label'=>'Home', 'url'=>array('/site/index')),
    array('label'=>'UMPI', 'url'=>array('/umpi/tambah')),
    array('label'=>'Kelola UMPI', 'url'=>array('/umpi/daftar')),

    array('label'=>'Master <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Agama <span class="label label-info">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM agama")->queryScalar().'</span>','url'=>array('/agama/daftar')),
        array('label'=>'Desa <span class="label label-info">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM desa")->queryScalar().'</span>','url'=>array('/desa/daftar')),
        array('label'=>'Kecamatan <span class="label label-info">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM kecamatan")->queryScalar().'</span>','url'=>array('/kecamatan/daftar')),
        array('label'=>'Pekerjaan <span class="label label-info">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM pekerjaan")->queryScalar().'</span>','url'=>array('/pekerjaan/daftar')),
        array('label'=>'Pendidikan <span class="label label-info">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM pendidikan")->queryScalar().'</span>','url'=>array('/pendidikan/daftar')),
        array('label'=>'Saudara <span class="label label-info">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM sdrt")->queryScalar().'</span>','url'=>array('/sdrt/daftar')),
        array('label'=>'Status Nikah <span class="label label-info">'.Yii::app()->db->createCommand("SELECT COUNT(ID) FROM statusnikah")->queryScalar().'</span>','url'=>array('/statusnikah/daftar')),
        ),'visible'=>Yii::app()->user->getLevel()==1),                     

    array('label'=>'Akun <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"), 
      'items'=>array(
        array('label'=>'Pengguna','url'=>array('/user/kelola')),
        array('label'=>'Bagian','url'=>array('/bagian/admin')),
        array('label'=>'Level','url'=>array('/level/admin')),
        ),'visible'=>Yii::app()->user->getLevel()==1),                                      


    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
    ),
  )); 

}else{

 $this->widget('zii.widgets.CMenu',array(
  'htmlOptions'=>array('class'=>'nav'),
  'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
  'itemCssClass'=>'item-test',
  'encodeLabel'=>false,
  'items'=>array(

    array('label'=>'Home', 'url'=>array('/site/index')),
    array('label'=>'Profile', 'url'=>array('/user/view')),
    array('label'=>'Isi Data', 'url'=>array('/umpi/tambah')),
    array('label'=>'Kelola Data', 'url'=>array('/umpi/kelola')),
    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
    ),
  )); 

}
?>
                  </ul>
                </div>
              </nav>
            </div>

          </div>

        </header>