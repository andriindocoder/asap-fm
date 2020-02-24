@extends('layouts.frontend')

@section('judul', 'BUILDING ABC')

<style>
    .parent {
        position: relative;
        top: 0;
        left: 0;
    }

    .image1 {
        position: relative;
        top: 0;
        left: 0;
    }

    .image2 {
        position: absolute;
        top: 12.5%;
        left: 43%;
    }

    .image3 {
        position: absolute;
        top: 14%;
        left: 30%;
    }

    .image4 {
        position: absolute;
        top: 49%;
        left: 35.5%;
    }

    .image5 {
        position: absolute;
        top: 33%;
        left: 61.5%;
    }

    .toast {
        opacity: 1 !important;
    }
</style>

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-3" style="background-color: rgb(210, 243, 254); min-height: 609px;">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col connectedSortable ui-sortable">
                    <!-- small box -->
                    <div class="infobox">
                        <div class="small-box bg-white card-header ui-sortable-handle" style="cursor: move;">
                            <div class="inner">
                                <p>This Month</p>
                                <h3>3</h3>
                                <p style="padding: 0">Alarms</p>
                                <p>(+ 12%)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col connectedSortable ui-sortable">
                    <div class="infobox">
                        <div class="small-box bg-white card-header ui-sortable-handle" style="cursor: move;">
                            <div class="inner">
                                <p>This Week</p>
                                <h3>23 <sup>o</sup>C</h3>
                                <p>Avg. Temperature</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col connectedSortable ui-sortable">
                    <div class="infobox">
                        <div class="small-box bg-white card-header ui-sortable-handle" style="cursor: move;">
                            <div class="inner">
                                <p>Right Now</p>
                                <h3>760</h3>
                                <h4>Online Devices</h4>
                                <p>(+ 8%)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col connectedSortable ui-sortable">
                    <div class="infobox">
                        <div class="small-box bg-white card-header ui-sortable-handle" style="cursor: move;">
                            <div class="inner">
                                <p>Right Now</p>
                                <h3>3</h3>
                                <h4>Offline Devices</h4>
                                <p>(+ 8%)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col connectedSortable ui-sortable">
                    <div class="infobox">
                        <div class="small-box bg-white card-header ui-sortable-handle" style="cursor: move;">
                            <div class="inner">
                                <p>Right Now</p>
                                <h3>9.7</h3>
                                <h5>Avg. Battery Life</h5>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card card-danger card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                        aria-selected="true">Current Alarms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-three-profile" role="tab"
                                        aria-controls="custom-tabs-three-profile" aria-selected="false">Closed
                                        Alarms</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-home-tab">
                                    <div class="card">
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">Floor</th>
                                                        <th>Wing</th>
                                                        <th>Name</th>
                                                        <th>Timestamp</th>
                                                        <th>Length</th>
                                                        <th style="width: 40px"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td align="center">2</td>
                                                        <td>East</td>
                                                        <td>Conference Room 1</td>
                                                        <td>22.02.2020 10:34</td>
                                                        <td>45s</td>
                                                        <td style="width: 40%;">
                                                            <button
                                                                class="btn btn-sm btn-outline-success activate">Simulate
                                                                Alarm</button>
                                                            <button
                                                                class="btn btn-sm btn-outline-danger disarm">Disarm</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-profile-tab">
                                    <div class="card">
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">Floor</th>
                                                        <th>Wing</th>
                                                        <th>Name</th>
                                                        <th>Timestamp</th>
                                                        <th>Disarmed By</th>
                                                        <th>Length</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td align="center">2</td>
                                                        <td>East</td>
                                                        <td>Conference Room 1</td>
                                                        <td>22.02.2020 10:34</td>
                                                        <td>Arif Mohd. Salleh</td>
                                                        <td>45s</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">3</td>
                                                        <td>North</td>
                                                        <td>Pantry</td>
                                                        <td>22.02.2020 10:34</td>
                                                        <td>Arif Mohd. Salleh</td>
                                                        <td>45s</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">5</td>
                                                        <td>South</td>
                                                        <td>Hall 1</td>
                                                        <td>22.02.2020 10:34</td>
                                                        <td>Arif Mohd. Salleh</td>
                                                        <td>45s</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">2</td>
                                                        <td>West</td>
                                                        <td>Office MD</td>
                                                        <td>22.02.2020 10:34</td>
                                                        <td>Arif Mohd. Salleh</td>
                                                        <td>45s</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">14</td>
                                                        <td>East</td>
                                                        <td>Conference Room 1</td>
                                                        <td>22.02.2020 10:34</td>
                                                        <td>Arif Mohd. Salleh</td>
                                                        <td>45s</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-12 connectedSortable ui-sortable">
                    <div class="card">
                        <div class="card-body" align="center">
                            <div class="parent">
                                <img class="image1" width="740px" height="590px"
                                    src="{{ asset('frontend/images/showroom.jpg') }}" />
                                <img width="5%" class="image2" src="{{ asset('frontend/gifs/greencircle.gif') }}" />
                                <img width="5%" class="image3" src="{{ asset('frontend/gifs/greencircle.gif') }}" />
                                <img width="5%" class="image4" src="{{ asset('frontend/gifs/greencircle.gif') }}" />
                                <img width="5%" class="image5" src="{{ asset('frontend/gifs/greencircle.gif') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-6 connectedSortable ui-sortable">
                    <div class="card" style="border: 1px solid red;">
                        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                            <div class="d-flex justify-content-between">
                            </div>
                        </div>
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="container-today" style="width: 100%"></div>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6 connectedSortable ui-sortable">
                    <div class="card" style="border: 1px solid red;">
                        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                            <div class="d-flex justify-content-between">
                            </div>
                        </div>
                        <div class="card-body">
                            <figure class="highcharts-figure">
                                <div id="container-weekly" style="width: 100%"></div>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
@section('script')

<script>
    Highcharts.chart('container-today', {
      title: {
          text: 'Temperature by Device'
      },
      xAxis: {
          categories: ['8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '8:00 PM']
      },
      yAxis: {
          min: 0,
          title: {
              text: 'Total Visitors'
          },
          stackLabels: {
              enabled: true,
              style: {
                  fontWeight: 'bold',
                  color: ( // theme
                      Highcharts.defaultOptions.title.style &&
                      Highcharts.defaultOptions.title.style.color
                  ) || 'gray'
              }
          }
      },
      series: [{
          type: 'column',
          name: 'Entrance Area',
          data: [5, 6, 10, 12, 11, 18, 21, 22]
      }, {
          type: 'column',
          name: 'Mens Fashion',
          data: [4, 6, 8, 11, 14, 13, 28, 29]
      }, {
          type: 'column',
          name: 'Women Fashion',
          data: [1, 2, 4, 6, 9, 11, 15, 14]
      }, {
          type: 'line',
          name: 'Last Week\'s Average',
          data: [3.33, 4.66, 7.33, 9.66, 11.33, 14, 21.33, 21.66, 25.66, 22.33, 10, 13.33, 10],
          marker: {
              lineWidth: 2,
              lineColor: Highcharts.getOptions().colors[3],
              fillColor: 'white'
          }
      }]
  });
</script>
<script>
    Highcharts.chart('container-weekly', {
      title: {
          text: 'Average Temperature by Wing'
      },
      xAxis: {
          categories: ['8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '8:00 PM']
      },
      yAxis: {
          min: 0,
          title: {
              text: 'Total Visitors'
          },
          stackLabels: {
              enabled: true,
              style: {
                  fontWeight: 'bold',
                  color: ( // theme
                      Highcharts.defaultOptions.title.style &&
                      Highcharts.defaultOptions.title.style.color
                  ) || 'gray'
              }
          }
      },
      series: [{
          type: 'column',
          name: 'Entrance Area',
          data: [15, 16, 20, 22, 21, 28, 31, 32]
      }, {
          type: 'column',
          name: 'Mens Fashion',
          data: [14, 16, 18, 21, 24, 23, 38, 39]
      }, {
          type: 'column',
          name: 'Women Fashion',
          data: [11, 22, 14, 16, 19, 21, 25, 24]
      }, {
          type: 'line',
          name: 'Average',
          data: [13.33, 14.66, 17.33, 19.66, 21.33, 24, 31.33, 31.66, 35.66, 32.33, 20, 23.33, 20],
          marker: {
              lineWidth: 2,
              lineColor: Highcharts.getOptions().colors[3],
              fillColor: 'white'
          }
      }]
  });
</script>
<script>
    var blink = false;
    var x;

    function changecolors(status) {
        x = 1;
        if(status == true) {
        setInterval(change, 1000);
        }
    }

    function change() {
        if (x === 1) {
            color = "blue";
            x = 2;
        } else {
            color = "yellow";
            x = 1;
        }
        document.querySelector('.content-wrapper').style.backgroundColor = color;
        document.querySelector('nav').style.backgroundColor = color;
    }

    const disarmBtn = document.querySelector('.disarm');
    const image3 = document.querySelector('.image3');
    disarmBtn.addEventListener('click', function(){
        toastr.success('Alarm Disarmed!');
        window.location.reload();
    });

    const activateBtn = document.querySelector('.activate');
    activateBtn.addEventListener('click', function() {
        var blink = true;
        changecolors(blink);
        image3.src = 'frontend/gifs/firealarm.gif';
    });
</script>
@endsection
