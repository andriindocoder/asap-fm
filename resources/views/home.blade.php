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
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
<!-- /.content-wrapper -->
@endsection