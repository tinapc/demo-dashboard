<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>        
    <title>Pick up Scheduling</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="icon" type="image/ico" href="favicon.html"/>
    
    <?php include_once('partials/head.php') ?>
    
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
            
            <div class="col-md-6">
                               
                <div class="block">
                    <div class="header">
                        <h2>Pick Up Scheduling</h2>
                    </div>
                    <div class="content controls">
                        <div class="form-row">
                            <div class="col-md-3">Type of movement:</div>
                            <div class="col-md-9">
                            	<select class="form-control">
                            		<option value=""></option>
                            		<option value="Domestic">Domestic</option>
                            		<option value="import">Import</option>
                            		<option value="export">Export</option>
                            		<option value="local">Local</option>
                            	</select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Mode of transportation:</div>
                            <div class="col-md-9">
                            	<select class="form-control">
                            		<option value=""></option>
                            		<option value="Sea FCL">Sea FCL</option>
                            		<option value="Sea LCL">Sea LCL</option>
                            		<option value="Air">Air</option>
                            		<option value="Road FTL">Road FTL</option>
                            		<option value="Road FTL">Road FTL</option>
                            		<option value="Intermodal">Intermodal</option>
                            	</select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Pick up date:</div>
                            <div class="col-md-9">
                            	<div class="input-group">
                                    <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
                                    <input type="text" class="datepicker form-control" value="<?php echo date('m/d/Y')?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Shipper:</div>
                            <div class="col-md-9"><input type="text" class="form-control" value=""/></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Origin:</div>
                            <div class="col-md-9"><input type="text" class="form-control" value=""/></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Carrier:</div>
                            <div class="col-md-9"><input type="text" class="form-control" value=""/></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Consignee:</div>
                            <div class="col-md-9"><input type="text" class="form-control" value=""/></div>
                        </div>                        
                        <div class="form-row">
                            <div class="col-md-3">Destination:</div>
                            <div class="col-md-9"><input type="text" class="form-control" value=""/></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">ETA:</div>
                            <div class="col-md-9">
                                <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
                                    <input type="text"<div class="input-group">
                                    <div class="input-group-addon"><span class="icon-calendar-empty"></span></div>
                                    <input type="text" class="datepicker form-control" value="<?php echo date('m/d/Y')?>"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Incoterm:</div>
                            <div class="col-md-9">
                            	<select class="form-control">
                            		<option value=""></option>
                            		<option value="EXW">EXW</option>
                            		<option value="FOB">FOB</option>
                            		<option value="CIF">CIF</option>
                            		<option value="CFR">CFR</option>
                            		<option value="DAP">DAP</option>
                            		<option value="DDU">DDU</option>
                            	</select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Reference (PO):</div>
                            <div class="col-md-9"><input type="text" class="form-control" value=""/></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Comments:</div>
                            <div class="col-md-9"><input type="text" class="form-control" value=""/></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                            	<input type="submit" class="btn btn-primary" value="Submit"/>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
                          
        </div>

        <?php include_once('partials/footer.php') ?>
    </div>

    <script type="text/javascript">
    </script>

</body>
</html>