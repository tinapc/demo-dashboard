<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>        
    <title>Shipper / Consignee</title>
    
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
            
            <div class="col-md-2">
                
                <div class="block block-drop-shadow">
                    <div class="head bg-dot20">
                        <h2>PERFECT SHIPMENTS</h2>
                        <div class="side pull-right">               
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div>                                           
                        <div class="head-panel nm">
                            <div class="hp-info hp-simple pull-left hp-inline">
                                <span class="hp-main">88%</span>
                                <div class="hp-sm">                                    
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%"></div>
                                    </div>                                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block-drop-shadow">
                    <div class="head bg-dot20">
                        <h2>SHIPMENTS ON TIME</h2>
                        <div class="side pull-right">               
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div>                                           
                        <div class="head-panel nm">
                            <div class="hp-info hp-simple pull-left hp-inline">
                                <span class="hp-main">77%</span>
                                <div class="hp-sm">                                    
                                    <div class="progress progress-small">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%"></div>
                                    </div>                                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             
                
            </div>
            
            <div class="col-md-6">
            
                <div class="block">
                    <div class="header">
                        <h2>NEXT ARRIVALS</h2>
                    </div>
                    <div class="content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SHIPPER</th>
                                    <th>MOT</th>
                                    <th>ORIGIN</th>
                                    <th>ETS</th>
                                    <th>DESTINATION</th>
                                    <th>ETA</th>
                                    <th>BL/AWB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Company A</td>   
                                    <td>FCL</td>    
                                    <td>Shanghai</td>
                                    <td>3/24/2016</td>   
                                    <td>Long Beach</td>
                                    <td>6/5/2016</td>
                                    <td>ABC1234</td>
                                </tr>
                                <tr>
                                    <td>Company B</td>
                                    <td>FCL</td>
                                    <td>Nhava Sheva </td>
                                    <td>4/15/2016   </td>
                                    <td>Long Beach  </td>
                                    <td>6/4/2016    </td>
                                    <td>DCE3456</td>
                                </tr>
                                <tr>
                                    <td>Company C </td>  
                                    <td>Air</td>
                                    <td>Tianjin</td>
                                    <td>5/23/2015  </td> 
                                    <td>LAX</td>   
                                    <td>6/3/2016</td>
                                    <td>FRE3456</td>
                                </tr>
                                <tr>
                                    <td>Company A</td>   
                                    <td>LCL</td>
                                    <td>Bremerhaven</td>
                                    <td>4/2/2016 </td>   
                                    <td>Houston </td>
                                    <td>6/2/2016</td>    
                                    <td>GTR3245</td>
                                </tr>
                                <tr>
                                    <td>Company D</td>   
                                    <td>FCL</td> 
                                    <td>Santos</td>
                                    <td>3/30/2016</td>   
                                    <td>Houston</td> 
                                    <td>6/1/2016</td>    
                                    <td>HKT5643</td>
                                </tr>
                                <tr>
                                    <td>Company X</td>   
                                    <td>LCL</td>   
                                    <td>Singapore</td>
                                    <td>4/15/2016</td>   
                                    <td>Houston</td> 
                                    <td>5/31/2016</td>   
                                    <td>RIP8907</td>
                                </tr>
                            </tbody>
                        </table>                       
                    </div>
                </div>               
                
                <div class="block">
                    <div class="header">
                        <h2>NEXT PICK UP</h2>
                    </div>
                    <div class="content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>PICK UP DATE</th>
                                    <th>SHIPPER</th>
                                    <th>ORIGIN</th>
                                    <th>DESTINATION</th>
                                    <th>PO</th>
                                    <th>CARRIER</th>
                                    <th>TT DAYS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6/15/2016</td>   
                                    <td>Shipper A</td>   
                                    <td>Tianjin</td> 
                                    <td>DFW</td> 
                                    <td>12345</td>   
                                    <td>Carrier 1</td>   
                                    <td>4</td>
                                </tr>
                                    <tr>
                                    <td>6/14/2016</td>   
                                    <td>Shipper B</td>   
                                    <td>Qingdao</td> 
                                    <td>Long Beach</td>  
                                    <td>45367</td>   
                                    <td>Carrier 2</td>   
                                    <td>45</td>
                                    </tr>
                                <tr>
                                    <td>6/13/2016</td>   
                                    <td>Shipper C</td>   
                                    <td>Shanghai</td>    
                                    <td>Miami</td>   
                                    <td>45326</td>   
                                    <td>Carrier 3</td>   
                                    <td>65</td>
                                </tr>
                                <tr>
                                    <td>6/12/2016</td>   
                                    <td>Shipper B</td>   
                                    <td>Singapore</td>   
                                    <td>Miami</td>   
                                    <td>75684</td>   
                                    <td>Carrier 1</td>   
                                    <td>65</td>
                                </tr>
                                <tr>
                                    <td>6/11/2016</td>   
                                    <td>Shipper C</td>   
                                    <td>Barcelona</td>   
                                    <td>Miami</td>   
                                    <td>23675</td>   
                                    <td>Carrier 2</td>   
                                    <td>43</td>
                                </tr>
                                <tr>
                                    <td>6/10/2016</td>   
                                    <td>Shipper A</td>   
                                    <td>Morrocco</td>    
                                    <td>DFW</td> 
                                    <td>457632</td>  
                                    <td>Carrier 3</td>   
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>6/9/2016</td>    
                                    <td>Shipper A</td>   
                                    <td>Tianjin</td> 
                                    <td>DFW</td> 
                                    <td>34574</td>   
                                    <td>Carrier 4</td>   
                                    <td>34</td>
                                </tr>
                            </tbody>
                        </table>                       
                    </div>
                </div>

                <div class="block block-drop-shadow">
                    
                    <div class="head bg-dot30">
                        <h2>TOTAL LOGICTICS COST</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-refresh"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div>                        
                        <div class="head-panel">                            
                            <div class="chart" id="total_logictics_cost" style="height: 150px;"></div>
                        </div>                        
                    </div>
                </div>

                <div class="block block-drop-shadow">
                    
                    <div class="head bg-dot30">
                        <h2>COST PER CARRIER</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-refresh"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div>                        
                        <div class="head-panel">                            
                            <div class="chart" id="cost_per_carrier" style="height: 150px;"></div>
                        </div>                        
                    </div>
                </div>

                <div class="block block-drop-shadow">
                    
                    <div class="head bg-dot30">
                        <h2>COST PER MOT</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-refresh"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div>                        
                        <div class="head-panel">                            
                            <div class="chart" id="cost_per_mot" style="height: 150px;"></div>
                        </div>                        
                    </div>
                </div>

                <div class="block block-drop-shadow">
                    
                    <div class="head bg-dot30">
                        <h2>COST PER SKU</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-refresh"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div>                        
                        <div class="head-panel">                            
                            <div class="chart" id="cost_per_sku" style="height: 250px;"></div>
                        </div>                        
                    </div>
                </div>

            </div>
            
            <div class="col-md-4">
                
                <div class="block block-drop-shadow">
                    <div class="head bg-default bg-light-rtl">
                        <h2>Inbox messages</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-plus"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div> 
                        <div class="head-panel nm">
                            <a href="#" class="hp-info pull-left">
                                <div class="hp-icon">
                                    <span class="icon-download-alt"></span>
                                </div>
                                <span class="hp-main">25</span>
                                <span class="hp-sm">recived</span>
                            </a>
                            <a href="#" class="hp-info pull-left">
                                <div class="hp-icon">
                                    <span class="icon-upload-alt"></span>
                                </div>                                
                                <span class="hp-main">10</span>
                                <span class="hp-sm">sent</span>
                            </a>                            
                            <a href="#" class="hp-info hp-one pull-right tip" title="Refresh">
                                <div class="hp-icon">
                                    <span class="icon-refresh"></span>
                                </div>                                                 
                                <span class="hp-main">9:24 am</span>                                
                            </a>                                                 
                        </div>
                    </div>
                    <div class="content list">
                        <div class="list-item">
                            <div class="list-datetime">
                                <div class="time">9:45 am</div>
                            </div>
                            <div class="list-info">
                                <img src="img/example/user/dmitry.jpg" class="img-circle img-thumbnail"/>
                            </div>
                            <div class="list-text">
                                <a href="#" class="list-text-name">John Doe</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit.</p>
                            </div>
                            <div class="list-controls">
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-rotate-right"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-pushpin"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-remove"></span></a>
                            </div>
                        </div>
                        <div class="list-item">
                            <div class="list-datetime">
                                <div class="time">8:16 am</div>
                            </div>
                            <div class="list-info">
                                <img src="img/example/user/alexey.jpg" class="img-circle img-thumbnail"/>
                            </div>
                            <div class="list-text">
                                <a href="#" class="list-text-name">Brad Pitt</a>
                                <p>Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla gravida rutrum neque.</p>
                            </div>
                            <div class="list-controls">
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-rotate-right"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-pushpin"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-remove"></span></a>
                            </div>                            
                        </div>
                        <div class="list-item">
                            <div class="list-datetime">
                                <div class="date">27.08</div>
                                <div class="time">9:59 pm</div>
                            </div>
                            <div class="list-info">
                                <img src="img/example/user/olga.jpg" class="img-circle img-thumbnail"/>
                            </div>
                            <div class="list-text">
                                <a href="#" class="list-text-name">Angelina Jolie</a>
                                <p>Morbi tincidunt, tellus ut fermentum accumsan, est justo pretium enim, eget.</p>
                            </div>
                            <div class="list-controls">
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-rotate-right"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-pushpin"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-remove"></span></a>
                            </div>                            
                        </div>
                        <div class="list-item">
                            <div class="list-datetime">
                                <div class="date">27.08</div>
                                <div class="time">4:34 pm</div>
                            </div>
                            <div class="list-info">
                                <img src="img/example/user/helen.jpg" class="img-circle img-thumbnail"/>
                            </div>
                            <div class="list-text">
                                <a href="#" class="list-text-name">Keira Knightley</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit.</p>
                            </div>
                            <div class="list-controls">
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-rotate-right"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-pushpin"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-remove"></span></a>
                            </div>                            
                        </div>
                        <div class="list-item">
                            <div class="list-datetime">
                                <div class="date">26.08</div>
                                <div class="time">12:12 am</div>
                            </div>
                            <div class="list-info">
                                <img src="img/example/user/dmitry.jpg" class="img-circle img-thumbnail"/>
                            </div>
                            <div class="list-text">
                                <a href="#" class="list-text-name">John Doe</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit.</p>
                            </div>
                            <div class="list-controls">
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-rotate-right"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-pushpin"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-remove"></span></a>
                            </div>                            
                        </div>                        
                    </div>
                    <div class="footer tac">
                        <a href="#">Load more messages...</a>
                    </div>
                </div>                

                <div class="block block-drop-shadow">
                    <div class="header">
                        <h2>Messaging</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-user"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div>                                                
                    </div>
                    <div class="content messages npr npb">                         
                        <div class="scroll oh" style="height: 250px;">
                            <div class="messages-item">
                                <img src="img/example/user/dmitry_s.jpg" class="img-circle img-thumbnail"/>
                                <div class="messages-item-text">Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla gravida rutrum neque</div>
                                <div class="messages-item-date">14:33 30.08.2013</div>
                            </div>
                            <div class="messages-item inbox">
                                <img src="img/example/user/olga_s.jpg" class="img-circle img-thumbnail"/>
                                <div class="messages-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit</div>
                                <div class="messages-item-date">14:32 30.08.2013</div>
                            </div>                                                                                                            
                            <div class="messages-item">
                                <img src="img/example/user/dmitry_s.jpg" class="img-circle img-thumbnail"/>
                                <div class="messages-item-text">Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla gravida rutrum neque</div>
                                <div class="messages-item-date">14:20 30.08.2013</div>
                            </div>                        
                            <div class="messages-item inbox">
                                <img src="img/example/user/olga_s.jpg" class="img-circle img-thumbnail"/>
                                <div class="messages-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit</div>
                                <div class="messages-item-date">14:19 30.08.2013</div>
                            </div>
                            <div class="messages-item">
                                <img src="img/example/user/dmitry_s.jpg" class="img-circle img-thumbnail"/>
                                <div class="messages-item-text">Duis eu libero pellentesque, dapibus ante eu, vehicula leo. Nulla gravida rutrum neque</div>
                                <div class="messages-item-date">14:15 30.08.2013</div>
                            </div>
                            <div class="messages-item inbox">
                                <img src="img/example/user/olga_s.jpg" class="img-circle img-thumbnail"/>
                                <div class="messages-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nisl velit</div>
                                <div class="messages-item-date">14:10 30.08.2013</div>
                            </div>                            
                        </div>
                    </div>
                    <div class="footer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="icon-comment"></i></span>
                            <input type="text" class="form-control" placeholder="message..">
                            <span class="input-group-btn">
                                <button class="btn"><span class="icon-chevron-up"></span></button>
                            </span>
                        </div>                        
                    </div>
                </div>                
            </div>               
        </div>
        <?php include_once('partials/footer.php') ?>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            if($("#total_logictics_cost").length > 0){
        
                var cost  = [ [1,1234890], [2,3456754], [3,2345678], [4,5436784], [5,1345854], [6,2457783], [7,1345245],[8,4567123],[9,1467943],[10,1233890], [11,1890247], [12,1238901] ];
                var budget  = [ [1, 2500000], [2, 2500000], [3, 2500000], [4, 2500000], [5, 2500000], [6, 2500000], [7,2500000], [8,2500000], [9,2500000], [10,2500000], [11,2500000], [12,2500000] ];
                
                var total_logictics_cost = $.plot($("#total_logictics_cost"), [{ data: cost, label: "Cost"},{data: budget, label: "Budget"}],{ 
                                          series: {lines: { show: true }, points: { show: true }},
                                          grid: { hoverable: true, clickable: true},
                                          xaxis: {max: 12,ticks: [[1,'January'],[2,'February'],[3,'March'],[4,'April'],[5,'May'],[6,'June'],[7,'July'],[8,'August'], [9,'September'], [10,'October'], [11,'November'], [12,'December']]}
                                      });          
                
            }

            // Cost per mot chart
            if($("#cost_per_mot").length > 0){
        
                var data  = [ [1, 5789036], [2,1356792], [3,3789046], [4,134678], [5,2134567], [6,432345]];
                
                var cost_per_mot = $.plot(
                                        $("#cost_per_mot"), 
                                        [{ data: data, label: "Cost Per Mot"}],{ 
                                            series: {lines: {show: true},points: { show: true }},
                                            grid: { hoverable: true, clickable: true},
                                            xaxis: {max: 6,ticks: [[1,'Seafreight FCL'],[2,'Seafreight LCL'],[3,'Road FTL'],[4,'Road LTL'],[5,'Intermodal'],[6,'Air freight']]},
                                    });          
                
            }

            // Cost per carrier chart
            if($("#cost_per_carrier").length > 0){
        
                var carrier1 = [ [1, 1000000], [2, 1546000], [3, 2489488], [4, 4119845], [5, 3202000], [6, 5351056], [7,9064624] ];
                var carrier2 = [ [1, 1900000], [2, 1805200], [3, 2937385], [4, 2300000], [5, 3792400], [6, 6371267], [7, 10827549] ];
                var carrier3 = [ [1, 1330000], [2, 2116240], [3, 3474862 ],[4,2710000], [5, 4500880], [6, 7595520], [7, 12943059] ];
                
                
                var chart_bar_1 = $.plot($("#cost_per_carrier"), 
                                        [ 
                                            { data: carrier1, label: "Carrier 1" }, 
                                            { data: carrier2, label: "Carrier 2" }, 
                                            { data: carrier3, label: "Carrier 3" }
                                        ], 
                                        {                                   
                                            series: {lines: {show: true},points: { show: true }
                                        },                                
                                            grid: { 
                                                hoverable: true, clickable: true 
                                            },
                                            xaxis: {max: 7,ticks: [[1,'January'],[2,'February'],[3,'March'],[4,'April'],[5,'May'],[6,'June'],[7,'July']]}
                                        });
                
            }

            // COST PER SKU CHART
            if($("#cost_per_sku").length > 0){
        
                var sku1 = [ [1, 234567], [2, 226061], [3, 218216], [4, 350000], [5, 332532], [6, 316422]];
                var sku2 = [ [1, 232376], [2, 224040], [3, 216351], [4, 345500], [5, 328382], [6, 312593]];
                var sku3 = [ [1, 230228], [2, 222059], [3, 214524 ],[4,341090], [5, 324315], [6, 308841]];
                var sku4 = [ [1, 238124], [2, 220118], [3, 212734 ],[4,336768], [5, 320328], [6, 305165]];
                
                
                var chart_sku = $.plot($("#cost_per_sku"), 
                                        [ 
                                            { data: sku1, label: "SKU 1" }, 
                                            { data: sku2, label: "SKU 2" }, 
                                            { data: sku3, label: "SKU 3" },
                                            { data: sku4, label: "SKU 4" }
                                        ], 
                                        {                                   
                                            series: {lines: {show: true},points: { show: true }
                                        },                                
                                            grid: { 
                                                hoverable: true, clickable: true 
                                            },
                                            xaxis: {max: 7,ticks: [[1,'January'],[2,'February'],[3,'March'],[4,'April'],[5,'May'],[6,'June']]}
                                        });
                
            }


            function showTooltip(x, y, contents) {
                $('<div class="ftooltip">' + contents + '</div>').css({
                    position: 'absolute',
                    'z-index': '10',
                    display: 'none',
                    top: y - 20,
                    left: x,            
                    padding: '3px',
                    'background-color': 'rgba(0,0,0,0.5)',
                    'font-size': '11px',
                    'border-radius': '3px',
                    color: '#FFF'            
                }).appendTo("body").fadeIn(200);
            }    

            var previousPoint = null;
            $("#total_logictics_cost, #cost_per_mot, #cost_per_carrier, #cost_per_sku").bind("plothover", function (event, pos, item) {
                
                $("#x").text(pos.x.toFixed(2));
                $("#y").text(pos.y.toFixed(2));

                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;

                        $(".ftooltip").remove();
                        var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                        showTooltip(item.pageX, item.pageY,
                                    item.series.label + ": $" + y);
                    }
                }else {
                    $(".ftooltip").remove();
                    previousPoint = null;            
                }

            }); 

        });
    </script>

</body>
</html>