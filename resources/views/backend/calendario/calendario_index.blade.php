@extends('admin.admin_master')
@section('admin')

 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Calendar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Calendar</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card text-sm">
                <div class="card-header">
                  <h4 class="card-title">Nuevo Evento</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <form method="post" action=" {{ route('calendario.store')}} " enctype="multipart/form-data">
                    @csrf                                                                        
                      <div class="form-group">
                        <label>Titulo Evento </label>                        
                        <input class="form-control" type="text" name="title"  value="" >                        
                      </div>                                       
                      {{-- <div class="form-group">
                        <label>Descripcion</label>                          
                        <input type="text" name="descripcion" class="form-control" value="">                           
                      </div>                                 --}}
                      <div class="form-group">
                        <label>Fecha Inicio</label>                          
                        <input type="text" name="inicio" id="start" class="form-control" value="">                           
                      </div>                                
                      <div class="form-group">
                        <label>Fecha Fin</label>                          
                        <input type="text" name="fin" id="end" class="form-control" value="">                           
                      </div>                                
                      <div class="form-group">
                        <label>Todo el Dia</label>                            
                          <input type="checkbox" name="allDay" value="1"> Si                           
                          <input type="checkbox" name="allDay" value="0"> No                                                  
                      </div>                                
                      <div class="form-group">
                        <label>Color Fondo</label>                          
                        <input type="color" name="backgroundColor" class="form-control" value="">                           
                      </div>                                
                      <div class="form-group">
                        <label>Color Texto</label>                          
                        <input type="color" name="textColor" class="form-control" value="">                           
                      </div>                                
                      <div class="text-xs-right">
                        <input type="submit"  class="btn btn-rounded btn-primary mb-5" value="Crear">
                      </div>
                    </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Event</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection

@section('scripts')
@parent
<script> 
// $(document).ready(function() {

// // page is now ready, initialize the calendar...

// function convert(str){
//   str = moment().format('YYYY-MM-DD HH:mm:ss');
//   return str;
// }

// var calendar = $('#calendar').fullCalendar({
//   // put your options and callbacks here
//   header: {
//     left: 'prev,next today',
//     center: 'title',
//     right: 'year,month,basicWeek,basicDay'

//   },  
//   dayClick:function(date,event,view){
//     $('#start').val(convert(date));     
  
//   },
//   locale:'es',
//   timezone: 'local',
//   height: "auto",
//   selectable: true,
//   dragabble: true,
//   defaultView: 'month',
//   yearColumns: 3,

//   durationEditable: true,


// })
// });
  $(function () {

    function convert(str){
      str = moment().format('YYYY-MM-DD HH:mm:ss');
      return str;
    }

    var Calendar = FullCalendar.Calendar;
    var calendarEl = document.getElementById('calendar');

    var calendar = new Calendar(calendarEl, {     
      locale: 'es',
      selectable: true,
      headerToolbar: {
        left  : 'prev,next today',
        center: 'title',
        right : 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      // eventClick:function(date,event,view){
      //   $('#start').val(convert(date));
      // },
      
      dateClick: function(info) {
        $('#start').val(convert(info));
        // alert('Clicked on: ' + info.dateStr);
        // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
        // alert('Current view: ' + info.view.type);
        // // change the day's background color just for fun
        info.dayEl.style.backgroundColor = '#99b9d1';
      },
      themeSystem: 'bootstrap',     
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }
    });

    calendar.render();

})
</script>    
@endsection