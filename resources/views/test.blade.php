{{-- <!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale-all.min.js"></script>
</head>
<script>
$(document).ready(function(){
        $('#calendar').fullcalendar({
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
        });
});
</script> --}}
<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <!-- full calendar -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.8/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
                initialView: 'resourceTimeGridDay',
                nowIndicator: true,
                slotMinTime: '07:00:00',
                slotMaxTime: '20:00:00',
                slotduration: '00:30:00',
                height: 800,
                datesAboveResources: true,
                headerToolbar: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'resourceTimeGridDay,resourceTimeGridWeek,listWeek'
                },
                views: {
                    resourceTimeGridWeek: {
                        type: 'resourceTimeGridWeek',
                        duration: {
                            days: 7
                        },
                        buttonText: 'week'
                    }
                },
                resources: [{
                        id: 'lab1',
                        title: 'Lab 1'
                    },
                    {
                        id: 'lab2',
                        title: 'Lab 2'
                    }
                ],
                // events: 'https://fullcalendar.io/api/demo-feeds/events.json?with-resources=2',
                editable: true,
                allDaySlot: false,
            });

            calendar.render();
        });
    </script>
    </head>
    <body>
        <div id='calendar'></div>
    </body>
</html>