<?php

use App\Models\Category;
use App\Models\Categorydetails;
use App\Models\Menudetails;
use App\Models\MenuModal;
use App\Models\User;

function getMenuName($id){
    $menuName = MenuModal::where('id',$id)->first(); 
    return $menuName->heading;
}

function logo(){   
    $username = User::where('is_Admin',1)->first();
   if ($username && $username->user_images) {
        echo '<img src="' . asset('upload/admin_images/' . $username->user_images) . '" >';
    }
   }


function mobile(){   
    $username = User::where('is_Admin',1)->first();
    echo $username->mobile;
    //return $username;
}


function employeeName($id){   
    $username = User::where('id',$id)->first();
    echo @$username->name;
}


function contact(){   
    $username = User::where('is_Admin',1)->first();?>
   
<div class="inner">
<div class="widget-information">
    <ul class="information-list">
        <li><span>Add:</span><?= $username->address?></li>
        <li><span>Mobile No:</span> <a href="tel:+91<?= $username->phone?>">+91 <?= $username->mobile?></a></li>
        <li><span>Email:</span><a href="mailto:<?= $username->email?>" target="_blank"><?= $username->email?></a></li>
    </ul>
</div>
<ul class="social-share icon-transparent">
    <li><a href="<?= $username->facebook?>" class="color-fb"><i class="icon-facebook"></i></a></li>

    <li><a href="<?= $username->instagram?>" class="color-ig"><i class="icon-instagram"></i></a></li>

    <li><a href="<?= $username->youtube?>" class="color-yt"><i class="icon-youtube"></i></a></li>
</ul>
</div>
<?php }



function login(){
    $menuName = Menudetails::where('menu_id',38)->get(); 
    foreach($menuName as $val){?>
          <li><a target="_blank" href="<?= $val->content?>"><?= $val->heading?></a></li>
    <?php }
}

function service(){
    $menuName = Menudetails::where('menu_id',27)->get(); 
    foreach($menuName as $val){?>
          <li><a href="#"><?= $val->heading?></a></li>
    <?php }
}

function policyList(){
    $menuName = Menudetails::where('menu_id',28)->get();
    foreach($menuName as $val){?>
        <li class="menu-item"><a href="<?= url('page/'.str_replace(' ','-',$val->heading))?>"><?= $val->heading?></a></li>
  <?php }
    ?>
   
<?php }




?>