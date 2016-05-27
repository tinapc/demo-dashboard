<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>        
    <title>Calendar</title>
    
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
            <div class="col-md-10">
              	<div id='calendar'></div>
            </div>
            <div class="col-md-2">
                <div class="block block-transparent">
                    <div class="header">
                        <h2>External events</h2>
                    </div>
                    <div class="content np">
                        <div class="list list-default" id="external-events">
                            <a href="#" class="list-item external-event">                                
                                <div class="list-text">Lorem ipsum dolor</div>                                
                            </a>
                            <a href="#" class="list-item external-event">                                
                                <div class="list-text">Nam a nisi et nisi</div>                                
                            </a>                            
                            <a href="#" class="list-item external-event">
                                <div class="list-text">Donec tristique eu</div>                                
                            </a>                            
                            <a href="#" class="list-item external-event">
                                <div class="list-text">Vestibulum cursus</div>                                
                            </a>                              
                            <a href="#" class="list-item external-event">
                                <div class="list-text">Etiam euismod</div>                                
                            </a>  
                            <a href="#" class="list-item external-event">
                                <div class="list-text">Sed pharetra dolor</div>                                
                            </a>                              
                        </div>
                    </div>
                </div>
                <div class="block block-transparent">
                    <div class="content np">
                        <div class="checkbox">
                            <label><input type="checkbox" id="drop-remove"/> Remove after drop</label>
                        </div>
                    </div>
                </div>
        </div>

        <?php include_once('partials/footer.php') ?>
    </div>

    <script type="text/javascript">
    	jQuery(document).ready(function($) {
            if($("#calendar").length > 0){

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                
                
                $('#external-events .external-event').each(function() {
                        var eventObject = {title: $.trim($(this).text())};

                        $(this).data('eventObject', eventObject);
                        $(this).draggable({
                                zIndex: 99999,
                                revert: true,
                                revertDuration: 0
                        });
                });        
                
                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    editable: true,
                    events: [{title: 'All Day Event',start: new Date(y, m, 1)},
                             {title: 'Needs assesment',start: '2016/05/26',end: '2016/05/27'},
                             {id: 999,title: 'Solution presentation',start: new Date(y, m, d-3, 16, 0),allDay: false},
                             {id: 999,title: 'Follow up meeting',start: new Date(y, m, d+4, 16, 0),allDay: false},
                             {title: 'First approach, introduction',start: new Date(y, m, d, 10, 30),allDay: false},
                             {title: 'Send last meeting details',start: new Date(y, m, d, 12, 0),end: new Date(y, m, d, 14, 0),allDay: false},
                             {title: 'Follow up on last meeting',start: new Date(y, m, d+1, 19, 0),end: new Date(y, m, d+1, 22, 30),allDay: false},
                             {title: 'Click for Google',start: new Date(y, m, 28),end: new Date(y, m, 29),url: 'http://google.com/'}],
                    droppable: true,
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true
                            );
                        }
                        calendar.fullCalendar('unselect');
                    },
                    drop: function(date, allDay) {

                        var originalEventObject = $(this).data('eventObject');

                        var copiedEventObject = $.extend({}, originalEventObject);

                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;

                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);


                        if ($('#drop-remove').is(':checked')) {
                            $(this).remove();
                        }

                    }
                });        
                
                
            }    
        });
    </script>

</body>
</html>