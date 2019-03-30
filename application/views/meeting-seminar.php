<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="">
	<meta name="keywords" content="" /> 
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/fancybox/jquery.fancybox.css');?>">
<?=load_view('header-link');?>
<style type="text/css">
		#conference {
			background: #F6F6F6;
		    overflow: hidden;
		    padding: 30px 0 50px;
		}
		#about-us h4 {color: #0176ae;}
.scheduleleft{left: 199px;!important}
	</style>
</head><!--/head-->

<body>
  <?=load_view('preloader');?>
  <?=load_view('header');?>
	<section id="conference">
		<div class="container">
			<div class="row">
						<div class="col-sm-8 col-sm-offset-2  text-center">
							<h2 class="title-one">Meeting and Seminar</h2>
						</div>
						<div class="col-md-8 col-md-offset-3">
						
                    <dl class="dl-horizontal">
                        <dt>Dates : </dt>
                        <dd>23rd September, Saturday, 2017</dd>
                        <dt>Venue : </dt>
                        <dd>KLSIMER, Belgaum, Karnataka</dd>
                        <dt>Participants </dt>
                        <dd>Universities, Development organizations, social entrepreneurs, students, incubators</dd>
                        <!--<dt>NOTE : </dt>
                        <dd><strong>Registration is now closed.</strong></dd>-->
                    </dl>
                </div>
				<div class="col-md-6 col-md-offset-2">
                        <div class="row tag-box tag-box-v5">

                            <div class="col-md-8 scheduleleft">
                                <a href="http://ukiseen.org/assets/images/seminar/UKISEEN-Meeting-And-Seminar.jpg" class="btn btn-lg btn-primary btn-block" target="_alt">Schedule</a>
                            </div>

                        </div>
                    </div>
					</div>
			<div class="about-us">
				<h4>PICTURES </h4>
				<div class="row">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-1.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-1.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-2.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-2.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-3.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-3.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-5.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-5.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-6.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-6.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-7.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-7.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-9.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-9.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-10.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-10.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-11.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-11.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-13.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-13.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-14.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-14.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-15.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-15.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-17.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-17.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-18.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-18.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-19.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-19.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-21.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-21.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-22.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-22.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-23.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-23.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-25.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-25.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-26.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-26.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-27.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-27.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-29.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-29.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-30.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-30.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-31.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-31.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-33.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-33.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-34.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-34.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-35.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-35.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-37.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-37.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-38.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-38.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-39.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-39.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-41.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-41.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-42.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-42.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-43.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-43.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-45.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-45.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-46.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-46.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-47.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-47.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-49.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-49.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-50.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-50.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-51.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-51.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-53.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-53.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-54.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-54.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-55.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-55.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-57.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-57.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-58.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-58.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				    <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-59.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-59.jpg');?>" alt=""/></a>
				    </div>
				</div>
				<div class="row mr-top-20">
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-61.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-61.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4">
				        <a class="fancybox-button" rel="fancybox-button" href="<?=base_url('assets/images/seminar/seminar-62.jpg');?>"><img src="<?=base_url('assets/images/seminar/seminar-62.jpg');?>" alt=""/></a>
				    </div>
				    <div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</section>

<?=load_view('footer-script');?>
	<script type="text/javascript" src="<?=base_url('assets/fancybox/jquery.fancybox.pack.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/fancybox/helpers/jquery.fancybox-buttons.js');?>"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	$(".fancybox-button").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: true,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
});
</script>

</body>

</html>