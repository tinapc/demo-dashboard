<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>        
    <title>Maps</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="icon" type="image/ico" href="favicon.html"/>
    
    <?php include_once('partials/head.php') ?>
    
    <style type="text/css">
	    .gm-style .gm-style-iw{
	    	color:#000;
	    }
    </style>

</head>
<body class="bg-img-num1" data-settings="open"> 
    
    <div class="container">        
        <?php include_once ('partials/main_navigation.php') ?>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Components</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Default</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="block block-drop-shadow">
                    <div class="header">
                        <h2>CUSTOMER</h2>
                    </div>
                    <div class="content np">
                        <div id="maps_customer" style="width: 100%; height: 600px;"></div>
                    </div>
                </div>

                <div class="block block-drop-shadow">
                    <div class="header">
                        <h2>SHIPPER</h2>
                    </div>
                    <div class="content np">
                        <div id="maps_shipper" style="width: 100%; height: 600px;"></div>
                    </div>
                </div>

            </div>           
        </div>

        <?php include_once('partials/footer.php') ?>
    </div>

    <script type="text/javascript">  
	    $(document).ready(function() {
	    	buildCustomerMap();
	    	buildShipperMap();
	    });

	    function buildCustomerMap(){
	    	var locations = [
			      ['COMPANY A', 32.788637, -96.804944, '1717 McKinney Avenue, Suite 700 Dallas, TX 75205', 'John Doe', 'Logistics Manager', '123-456-789', 'email@company.com'],
			      ['COMPANY B', 32.939482, -96.904803, '1875 Monetary Lane Carrollton, TX 75006', 'Jane Doe','Logistics Director','123-456-790',	'email@company.com'],
			      ['COMPANY C', 32.747383, -97.068042, '2300 E Randol Mill Road Arlington, TX 76011','Peter Doe','Supply chain Director','123-456-791','email@company.com'],
			      ['COMPANY D', 32.893051, -96.886157, '11262 Leo Lane Dallas, TX 75229','July Doe','VP Supply chain','123-456-792', 'email@company.com'],
			      ['COMPANY E', 32.789863, -96.317921, '15731 Nike Drive Terrell, TX 75160','Rudy Doe',	'Shipping clerk','123-456-793','email@company.com']
			    ];

		    var map = new google.maps.Map(document.getElementById('maps_customer'), {
		    	zoom: 10,
		      	center: new google.maps.LatLng(32.776664, -96.796988),
		      	mapTypeId: google.maps.MapTypeId.ROADMAP
		    });

		    var infowindow = new google.maps.InfoWindow();
		    var marker, i;
		    var markers = new Array();

		    for (i = 0; i < locations.length; i++) { 
		    	marker = new google.maps.Marker({
		        	position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		        	map: map,
		        	title: locations[i][0]
		      	});

		      	markers.push(marker);

		      	google.maps.event.addListener(marker, 'click', (function(marker, i) {
		        	return function() {
			        	infowindow.setContent("<div class='map-info'><h2>" + locations[i][0] + "</h2><p class='position'>Position: " + locations[i][5] + "</p><p>Address: " + locations[i][3] + "</p><p>Contact: " + locations[i][4] + "</p><p>Phone: " + locations[i][6] + "</p><p>Email: " + locations[i][7] + "</p></div>");
			          	infowindow.open(map, marker);
		        	}

		      	})(marker, i));
		      	google.maps.event.addListener(map, 'click', function() {
				    infowindow.close();
				});
		    }

		    //  Create a new viewpoint bound
	    	var bounds = new google.maps.LatLngBounds();
	      	//  Go through each...
	      	$.each(markers, function (index, marker) {
	      		bounds.extend(marker.position);
	      	});
		    //  Fit these bounds to the map
		    map.fitBounds(bounds);
	    }

	    function buildShipperMap(){
	    	var locations = [
			      ['Shipper 1', 22.355525, 114.126016, 'Rm 401-2, 4 / F. , Fook Yip Building, 53-57 Kwai Fung Crescent'],
			      ['Shipper 2', 22.311466, 114.189839, 'Unit 908, Peninsula Square, No.18 Sung On Street, Hunghom, Kowloon'],
			      ['Shipper 3', 22.496090, 114.142704, '39, Wu Ku Industrial District'],
			      ['Shipper 4', 22.285086, 114.155771, 'Rm 1401, Crocodile House Phase 1, 50 Connaught Road, Central, Hong Kong'],
			      ['Shipper 5', 23.523136, 120.434313, 'No. 8, Gongye 3rd Rd. , Minxiong Township'],
			      ['Shipper 6', 25.032969, 121.565418, 'No179 Lane 75 Sec.3 Nei Hu. Taipei Taiwan'],
			    ];

		    var map = new google.maps.Map(document.getElementById('maps_shipper'), {
		    	zoom: 5,
		      	center: new google.maps.LatLng(32.776664, -96.796988),
		      	mapTypeId: google.maps.MapTypeId.ROADMAP
		    });

		    var infowindow = new google.maps.InfoWindow();
		    var marker, i;
		    var markers = new Array();

		    for (i = 0; i < locations.length; i++) { 
		    	marker = new google.maps.Marker({
		        	position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		        	map: map,
		        	title: locations[i][0]
		      	});

		      	markers.push(marker);

		      	google.maps.event.addListener(marker, 'click', (function(marker, i) {
		        	return function() {
			        	infowindow.setContent("<div class='map-info'><h2>" + locations[i][0] + "</h2><p class='position'>Address: " + locations[i][3] + "</p></div>");
			          	infowindow.open(map, marker);
		        	}

		      	})(marker, i));
		      	google.maps.event.addListener(map, 'click', function() {
				    infowindow.close();
				});
		    }

		    //  Create a new viewpoint bound
	    	var bounds = new google.maps.LatLngBounds();
	      	//  Go through each...
	      	$.each(markers, function (index, marker) {
	      		bounds.extend(marker.position);
	      	});
		    //  Fit these bounds to the map
		    map.fitBounds(bounds);
	    }

    </script>

</body>
</html>