<?php $request = \Config\Services::request(); ?>
<section class="content-header">
    <h1>
        <?php 
            if (
                $request->uri->getSegment(1) == ''
                || $request->uri->getSegment(1) == 'home'
            )
            { 
                echo ucwords('AdminLTE-2.4.5'); 
                echo '<small>Home</small>'; 
            }
        ?>
    </h1>
    <ol class="breadcrumb">
        <?php 
            if ($request->uri->getSegment(1) == '')
            { 
                echo '<li><a href="#"><i class="fa fa-home"></i> Home</a></li>'; 
            }
            else
            { 
                echo '<li><a href="#"><i class="fa fa-home"></i>Home</a></li>'; 
                echo '<li class="active">'.ucwords($request->uri->getSegment(1)).'</li>'; 
            } 
        ?>
    </ol>
</section>