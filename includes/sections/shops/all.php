<?php
$allShopsHtml = '';

foreach($shops as $shop) {
$allShopsHtml .= '

<section id="' . $shop['id'] . '">
	<div class="container">
		<div class="row shop-content">
			<div class="col-lg-12 shop-content-header">
				<span class="shop-content-header-text">
					<h1>' . $texts[$shop['dataname'].'.title'] . '</h1>
				</span>
			</div>
			<div class="col-lg-12 shop-content-content">
				<div class="col-lg-6 col-xs-12 col-sm-12 shop-content-image-slider">
					<div class="slider" href="' . $shop['image'] . '" data-featherlight="image" style="cursor:pointer;background-image: url(' . $shop['image'] . '); background-size:cover; background-position: center center; height:244px">
					</div>
				</div>
				<div class="col-lg-6 col-xs-12 col-sm-12 shop-content-details" style="margin-left: 2%;">
					<div class="row">
						<div class="col-lg-12 col-xs-12 col-sm-12">
							<h3 style="margin-top:10px;margin-bottom:10px;">' . $texts['Shops.details'] . '</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-xs-12 col-sm-12">
							<div class="row">
								<div class="col-lg-12 col-xs-12 col-sm-12">
									<img class="detail-icon" src="img/shop/address.png" alt="" title="' . $texts['Contact.address'] .'" />
									<p style="margin-bottom:0px;">' . $texts[$shop['dataname'].'.address1'] . ' - ' . $texts[$shop['dataname'].'.address2'] . '</p>
								</div>	
							</div>	
							<div class="row">
								<div class="col-lg-12 col-xs-12 col-sm-12">
									<img class="detail-icon" src="img/shop/work_time.png" alt="" title="' . $texts['Magazin1.hours.title'] .'" />
									<p style="margin-bottom:0px;">' . $texts[$shop['dataname'].'.hours'] . '</p>
								</div>
							</div>	
							<div class="row">
								<div class="col-lg-12 col-xs-12 col-sm-12">
									<img class="detail-icon" src="img/shop/phone.png" alt="" title="' . $texts['Contact.phone'] .'" />
									<p style="margin-bottom:0px;">' . $texts[$shop['dataname'].'.telephone'] . '</p>
								</div>
							</div>	
							<div class="row">
								<div class="col-lg-12 col-xs-12 col-sm-12">
									<img class="detail-icon" src="img/shop/email.png" alt="" title="' . $texts['Contact.email'] .'"/>
									<p style="margin-bottom:0px;">
									' . $texts[$shop['dataname'].'.email'] . ' - <a style="color:#2c3e50;text-decoration:underline;" target="_blank" href="' . $texts[$shop['dataname'].'.Facebook.Link'] . '">' . $texts[$shop['dataname'].'.Facebook.Text'] . '</a> 
									</p>
								</div>
							</div>	
							<div class="row">
								<div class="col-lg-12 col-xs-12 col-sm-12">
									<img class="detail-icon" src="img/shop/language.png" alt="" title="' . $texts['ProductsPanel.Title'] . '"/>
									<p style="margin-bottom:0px;" class="shop-details-variety-flags">
										<!-- <img class="img-responsive img-circle country-flag" src="img/flags/dk.png" alt=""> -->
										<img class="img-responsive img-circle country-flag" src="img/flags/bg.png" alt="' . $texts['Flags.Bulgaria'] . '" title="' . $texts['Flags.Bulgaria'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/ru.png" alt="' . $texts['Flags.Russia'] . '" title="' . $texts['Flags.Russia'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/lt.png" alt="' . $texts['Flags.Lithuania'] . '" title="' . $texts['Flags.Lithuania'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/en.png" alt="' . $texts['Flags.UK'] . '" title="' . $texts['Flags.UK'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/lv.png" alt="' . $texts['Flags.Latvia'] . '" title="' . $texts['Flags.Latvia'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/pl.png" alt="' . $texts['Flags.Poland'] . '" title="' . $texts['Flags.Poland'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/ro.png" alt="' . $texts['Flags.Romania'] . '" title="' . $texts['Flags.Romania'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/hu.png" alt="' . $texts['Flags.Hungary'] . '" title="' . $texts['Flags.Hungary'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/by.png" alt="' . $texts['Flags.Belarus'] . '" title="' . $texts['Flags.Belarus'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/ge.png" alt="' . $texts['Flags.Georgia'] . '" title="' . $texts['Flags.Georgia'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/ua.png" alt="' . $texts['Flags.Ukraine'] . '" title="' . $texts['Flags.Ukraine'] . '">
										<img class="img-responsive img-circle country-flag" src="img/flags/ar.png" alt="' . $texts['Flags.Armenia'] . '" title="' . $texts['Flags.Armenia'] . '">
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			' . showPromotions($promotions, $shop, $languageSelected, $texts) . '
			<div class="col-lg-12 col-xs-12 col-sm-12 variety-flags">
				<p class="description" style="margin-top:30px">
					' . $texts[$shop['dataname'].'.description']. '
				</p>
				<a href="' . $texts[$shop['dataname'].'.maps_link']. '" target="_blank"><img src="img/maps/'. strtolower($shop['shop_name']) .'.png" class="" style="
				width:100%;
				-webkit-box-shadow: 11px 10px 22px 0px rgba(153,153,153,1);
			    -moz-box-shadow: 11px 10px 22px 0px rgba(153,153,153,1);
			    box-shadow: 11px 10px 22px 0px rgba(153,153,153,1);
				border-radius: 10px;
				" alt="' . $shop['shop_name'] . '"></a>
			</div>
		</div>
	</div>
</section>
';
}

//#83 <div id="' . $shop['mapId'] . '" class="map"></div>
//#78 ' . showPromotions($promotions, $shop, $languageSelected, $texts) . '
echo $allShopsHtml;

?>