<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='/lib/main.css' rel='stylesheet' />
<script src='/lib/main.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialDate: <?php echo $date; ?>,
      editable: true,
      selectable: true,
      businessHours: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        <?php foreach($events as $event){
          echo $event.',';
        } ?>
      ]
    });

    calendar.render();
  });

</script>
<style>

  body {
    
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1400px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
