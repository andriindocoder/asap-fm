@extends('layouts.frontend')

@section('judul', 'BUILDING ABC')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color: rgb(210, 243, 254); min-height: 609px;">
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
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Current Alarms</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Closed Alarms</a>
                  </li>
                </ul>
              </div>

              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
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
                                <button class="btn btn-sm btn-danger">Disarm</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div> 
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
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
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
<!-- /.content-wrapper -->
@endsection