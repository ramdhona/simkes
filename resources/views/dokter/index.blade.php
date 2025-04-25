@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Dashboard Dokter')

{{-- Content body: main page content --}}

@section('content_body')
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempus Dominus Bootstrap 4 (DateTime Picker) -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" />

    <h2 class="mb-3 pt-5">Dashboard Dokter</h2>
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box for jumlah pemeriksaan pasien -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Jumlah Pemeriksaan Pasien</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-clipboard"></i> <!-- Ikon pemeriksaan -->
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box for tingkat keberhasilan pemeriksaan -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>85<sup style="font-size: 20px">%</sup></h3>
                            <p>Tingkat Keberhasilan Pemeriksaan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i> <!-- Ikon grafik keberhasilan -->
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box for jumlah obat -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Jumlah Obat Tersedia</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-medkit"></i> <!-- Ikon obat -->
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box for jumlah pasien baru -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Pasien Baru</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i> <!-- Ikon pasien baru -->
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-procedures"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Pasien Perlu Diperiksa</span>
                            <span class="info-box-number">
                                5

                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-pills"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Obat</span>
                            <span class="info-box-number">53</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Pasien terdaftar</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">New Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">

                <!-- Left col -->
                <section class="col-lg-7 connectedSortable ui-sortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-stethoscope mr-1"></i>
                                Statistik Pemeriksaan & Penggunaan Obat
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart"
                                    style="position: relative; height: 300px;">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <canvas id="revenue-chart-canvas" height="450"
                                        style="height: 300px; display: block; width: 777px;" width="1165"
                                        class="chartjs-render-monitor"></canvas>
                                </div>
                                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                    <canvas id="sales-chart-canvas" height="0"
                                        style="height: 0px; display: block; width: 0px;" width="0"
                                        class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">Chat dengan Pasien</h3>

                            <div class="card-tools">
                                <span title="3 New Messages" class="badge badge-primary">3</span>
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" title="Contacts"
                                    data-widget="chat-pane-toggle">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Pasien -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Pasien - Ahmad Rizki</span>
                                        <span class="direct-chat-timestamp float-right">20 Apr 08:30</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user1-128x128.jpg"
                                        alt="user image">
                                    <div class="direct-chat-text">
                                        Dok, saya merasa pusing dan mual sejak tadi malam.
                                    </div>
                                </div>

                                <!-- Dokter -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">dr. Ratna Widyasari</span>
                                        <span class="direct-chat-timestamp float-left">20 Apr 08:35</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user3-128x128.jpg"
                                        alt="doctor image">
                                    <div class="direct-chat-text">
                                        Apakah Anda mengalami demam atau muntah juga, Pak Ahmad?
                                    </div>
                                </div>

                                <!-- Pasien -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Pasien - Ahmad Rizki</span>
                                        <span class="direct-chat-timestamp float-right">20 Apr 08:36</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user1-128x128.jpg"
                                        alt="user image">
                                    <div class="direct-chat-text">
                                        Tidak dok, hanya mual dan kepala berat. Makan pun rasanya tidak enak.
                                    </div>
                                </div>

                                <!-- Dokter -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">dr. Ratna Widyasari</span>
                                        <span class="direct-chat-timestamp float-left">20 Apr 08:38</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user3-128x128.jpg"
                                        alt="doctor image">
                                    <div class="direct-chat-text">
                                        Baik, saya sarankan untuk istirahat cukup dan konsumsi air putih yang banyak.
                                    </div>
                                </div>

                                <!-- Pasien -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Pasien - Ahmad Rizki</span>
                                        <span class="direct-chat-timestamp float-right">20 Apr 08:39</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user1-128x128.jpg"
                                        alt="user image">
                                    <div class="direct-chat-text">
                                        Apakah saya perlu minum obat tertentu dok?
                                    </div>
                                </div>

                                <!-- Dokter -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">dr. Ratna Widyasari</span>
                                        <span class="direct-chat-timestamp float-left">20 Apr 08:41</span>
                                    </div>
                                    <img class="direct-chat-img"
                                        src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user3-128x128.jpg"
                                        alt="doctor image">
                                    <div class="direct-chat-text">
                                        Untuk saat ini cukup minum paracetamol jika terasa sakit kepala. Jika memburuk,
                                        silakan periksa ke klinik.
                                    </div>
                                </div>
                            </div>

                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img"
                                                src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user1-128x128.jpg"
                                                alt="User Avatar">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    Count Dracula
                                                    <small class="contacts-list-date float-right">2/28/2015</small>
                                                </span>
                                                <span class="contacts-list-msg">How have you been? I
                                                    was...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img"
                                                src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user7-128x128.jpg"
                                                alt="User Avatar">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    Sarah Doe
                                                    <small class="contacts-list-date float-right">2/23/2015</small>
                                                </span>
                                                <span class="contacts-list-msg">I will be waiting for...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img"
                                                src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user3-128x128.jpg"
                                                alt="User Avatar">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    Nadia Jolie
                                                    <small class="contacts-list-date float-right">2/20/2015</small>
                                                </span>
                                                <span class="contacts-list-msg">I'll call you back at...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img"
                                                src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user5-128x128.jpg"
                                                alt="User Avatar">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    Nora S. Vans
                                                    <small class="contacts-list-date float-right">2/10/2015</small>
                                                </span>
                                                <span class="contacts-list-msg">Where is your new...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img"
                                                src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user6-128x128.jpg"
                                                alt="User Avatar">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    John K.
                                                    <small class="contacts-list-date float-right">1/27/2015</small>
                                                </span>
                                                <span class="contacts-list-msg">Can I take a look at...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img"
                                                src="https://sismenkes.wibowomulyoo.my.id/lte/dist/img/user8-128x128.jpg"
                                                alt="User Avatar">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    Kenneth M.
                                                    <small class="contacts-list-date float-right">1/4/2015</small>
                                                </span>
                                                <span class="contacts-list-msg">Never mind I found...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                </ul>
                                <!-- /.contacts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="Type Message ..."
                                        class="form-control">
                                    <span class="input-group-append">
                                        <button type="button" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->


                </section>
                <!-- /.Left col -->

                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable ui-sortable">


                    <!-- solid sales graph -->
                    <div class="card bg-gradient-info">
                        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-th mr-1"></i>
                                Sales Graph
                            </h3>

                            <div class="card-tools">
                                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas class="chart chartjs-render-monitor" id="line-chart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 539px;"
                                width="808" height="375"></canvas>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <div style="display:inline;width:60px;height:60px;"><canvas width="90"
                                            height="90" style="width: 60px; height: 60px;"></canvas><input
                                            type="text" class="knob" data-readonly="true" value="20"
                                            data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly"
                                            style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                    </div>

                                    <div class="text-white">Mail-Orders</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-4 text-center">
                                    <div style="display:inline;width:60px;height:60px;"><canvas width="90"
                                            height="90" style="width: 60px; height: 60px;"></canvas><input
                                            type="text" class="knob" data-readonly="true" value="50"
                                            data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly"
                                            style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                    </div>

                                    <div class="text-white">Online</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-4 text-center">
                                    <div style="display:inline;width:60px;height:60px;"><canvas width="90"
                                            height="90" style="width: 60px; height: 60px;"></canvas><input
                                            type="text" class="knob" data-readonly="true" value="30"
                                            data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly"
                                            style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                    </div>

                                    <div class="text-white">In-Store</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->

                    <!-- Calendar -->
                    <div class="card bg-gradient-success">
                        <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                            <h3 class="card-title">
                                <i class="far fa-calendar-alt"></i>
                                Calendar
                            </h3>
                            <!-- tools card -->
                            <div class="card-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                        data-toggle="dropdown" data-offset="-52">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a href="#" class="dropdown-item">Add new event</a>
                                        <a href="#" class="dropdown-item">Clear events</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">View calendar</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pt-0">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%">
                                <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                    <ul class="list-unstyled">
                                        <li class="show">
                                            <div class="datepicker">
                                                <div class="datepicker-days" style="">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Month"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Month">April 2025</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Month"></span></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="dow">Su</th>
                                                                <th class="dow">Mo</th>
                                                                <th class="dow">Tu</th>
                                                                <th class="dow">We</th>
                                                                <th class="dow">Th</th>
                                                                <th class="dow">Fr</th>
                                                                <th class="dow">Sa</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="03/30/2025"
                                                                    class="day old weekend">30</td>
                                                                <td data-action="selectDay" data-day="03/31/2025"
                                                                    class="day old">31</td>
                                                                <td data-action="selectDay" data-day="04/01/2025"
                                                                    class="day">1</td>
                                                                <td data-action="selectDay" data-day="04/02/2025"
                                                                    class="day">2</td>
                                                                <td data-action="selectDay" data-day="04/03/2025"
                                                                    class="day">3</td>
                                                                <td data-action="selectDay" data-day="04/04/2025"
                                                                    class="day">4</td>
                                                                <td data-action="selectDay" data-day="04/05/2025"
                                                                    class="day weekend">5</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="04/06/2025"
                                                                    class="day weekend">6</td>
                                                                <td data-action="selectDay" data-day="04/07/2025"
                                                                    class="day">7</td>
                                                                <td data-action="selectDay" data-day="04/08/2025"
                                                                    class="day">8</td>
                                                                <td data-action="selectDay" data-day="04/09/2025"
                                                                    class="day">9</td>
                                                                <td data-action="selectDay" data-day="04/10/2025"
                                                                    class="day">10</td>
                                                                <td data-action="selectDay" data-day="04/11/2025"
                                                                    class="day">11</td>
                                                                <td data-action="selectDay" data-day="04/12/2025"
                                                                    class="day weekend">12</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="04/13/2025"
                                                                    class="day weekend">13</td>
                                                                <td data-action="selectDay" data-day="04/14/2025"
                                                                    class="day">14</td>
                                                                <td data-action="selectDay" data-day="04/15/2025"
                                                                    class="day">15</td>
                                                                <td data-action="selectDay" data-day="04/16/2025"
                                                                    class="day">16</td>
                                                                <td data-action="selectDay" data-day="04/17/2025"
                                                                    class="day">17</td>
                                                                <td data-action="selectDay" data-day="04/18/2025"
                                                                    class="day">18</td>
                                                                <td data-action="selectDay" data-day="04/19/2025"
                                                                    class="day weekend">19</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="04/20/2025"
                                                                    class="day weekend">20</td>
                                                                <td data-action="selectDay" data-day="04/21/2025"
                                                                    class="day ">21</td>
                                                                <td data-action="selectDay" data-day="04/22/2025"
                                                                    class="day">22</td>
                                                                <td data-action="selectDay" data-day="04/23/2025"
                                                                    class="day">23</td>
                                                                <td data-action="selectDay" data-day="04/24/2025"
                                                                    class="day">24</td>
                                                                <td data-action="selectDay" data-day="04/25/2025"
                                                                    class="day  active today">25</td>
                                                                <td data-action="selectDay" data-day="04/26/2025"
                                                                    class="day weekend">26</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="04/27/2025"
                                                                    class="day weekend">27</td>
                                                                <td data-action="selectDay" data-day="04/28/2025"
                                                                    class="day">28</td>
                                                                <td data-action="selectDay" data-day="04/29/2025"
                                                                    class="day">29</td>
                                                                <td data-action="selectDay" data-day="04/30/2025"
                                                                    class="day">30</td>
                                                                <td data-action="selectDay" data-day="05/01/2025"
                                                                    class="day new">1</td>
                                                                <td data-action="selectDay" data-day="05/02/2025"
                                                                    class="day new">2</td>
                                                                <td data-action="selectDay" data-day="05/03/2025"
                                                                    class="day new weekend">3</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="05/04/2025"
                                                                    class="day new weekend">4</td>
                                                                <td data-action="selectDay" data-day="05/05/2025"
                                                                    class="day new">5</td>
                                                                <td data-action="selectDay" data-day="05/06/2025"
                                                                    class="day new">6</td>
                                                                <td data-action="selectDay" data-day="05/07/2025"
                                                                    class="day new">7</td>
                                                                <td data-action="selectDay" data-day="05/08/2025"
                                                                    class="day new">8</td>
                                                                <td data-action="selectDay" data-day="05/09/2025"
                                                                    class="day new">9</td>
                                                                <td data-action="selectDay" data-day="05/10/2025"
                                                                    class="day new weekend">10</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-months" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Year"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Year">2025</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Year"></span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectMonth"
                                                                        class="month">Jan</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Feb</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Mar</span><span
                                                                        data-action="selectMonth"
                                                                        class="month active">Apr</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">May</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Jun</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Jul</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Aug</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Sep</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Oct</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Nov</span><span
                                                                        data-action="selectMonth"
                                                                        class="month">Dec</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-years" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Decade"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5" title="Select Decade">2020-2029</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Decade"></span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectYear"
                                                                        class="year old">2019</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2020</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2021</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2022</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2023</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2024</span><span
                                                                        data-action="selectYear"
                                                                        class="year active">2025</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2026</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2027</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2028</span><span
                                                                        data-action="selectYear"
                                                                        class="year">2029</span><span
                                                                        data-action="selectYear"
                                                                        class="year old">2030</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="datepicker-decades" style="display: none;">
                                                    <table class="table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th class="prev" data-action="previous"><span
                                                                        class="fa fa-chevron-left"
                                                                        title="Previous Century"></span></th>
                                                                <th class="picker-switch" data-action="pickerSwitch"
                                                                    colspan="5">2000-2090</th>
                                                                <th class="next" data-action="next"><span
                                                                        class="fa fa-chevron-right"
                                                                        title="Next Century"></span></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td colspan="7"><span data-action="selectDecade"
                                                                        class="decade old"
                                                                        data-selection="2006">1990</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2006">2000</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2016">2010</span><span
                                                                        data-action="selectDecade" class="decade active"
                                                                        data-selection="2026">2020</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2036">2030</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2046">2040</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2056">2050</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2066">2060</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2076">2070</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2086">2080</span><span
                                                                        data-action="selectDecade" class="decade"
                                                                        data-selection="2096">2090</span><span
                                                                        data-action="selectDecade" class="decade old"
                                                                        data-selection="2106">2100</span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="picker-switch accordion-toggle"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </section>
                <section class=" col-lg-12 connectedSortable">
                    <!-- TO DO List -->
                    <div class="card ">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                Todo List – Tugas Dokter
                            </h3>

                            <div class="card-tools">

                                <ul class="pagination pagination-sm">
                                    <li class="page-item"><a href="#" class="page-link">«</a>
                                    </li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">»</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="todo-list ui-sortable" data-widget="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle ui-sortable-handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <!-- checkbox -->
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo1" id="todoCheck1">
                                        <label for="todoCheck1"></label>
                                    </div>
                                    <!-- todo text -->
                                    <span class="text">Periksa pasien: Budi Santoso</span>
                                    <!-- Emphasis label -->
                                    <small class="badge badge-danger"><i class="far fa-clock"></i> 10:00 WIB</small>
                                    <!-- General tools -->
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </li>

                                <li class="done">
                                    <span class="handle ui-sortable-handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                                        <label for="todoCheck2"></label>
                                    </div>
                                    <span class="text">Update catatan medis: Ani Yuliani</span>
                                    <small class="badge badge-success"><i class="far fa-clock"></i> Selesai</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </li>

                                <li>
                                    <span class="handle ui-sortable-handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo3" id="todoCheck3">
                                        <label for="todoCheck3"></label>
                                    </div>
                                    <span class="text">Tulis resep untuk pasien: Siti Aminah</span>
                                    <small class="badge badge-warning"><i class="far fa-clock"></i> 12:30 WIB</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </li>

                                <li>
                                    <span class="handle ui-sortable-handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo4" id="todoCheck4">
                                        <label for="todoCheck4"></label>
                                    </div>
                                    <span class="text">Konsultasi pasien via telemedis: Rudi Hartono</span>
                                    <small class="badge badge-info"><i class="far fa-clock"></i> 15:00 WIB</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </li>

                                <li>
                                    <span class="handle ui-sortable-handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo5" id="todoCheck5">
                                        <label for="todoCheck5"></label>
                                    </div>
                                    <span class="text">Review hasil lab pasien: Dewi Anggraini</span>
                                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 Hari</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </li>

                                <li>
                                    <span class="handle ui-sortable-handle">
                                        <i class="fas fa-ellipsis-v"></i>
                                        <i class="fas fa-ellipsis-v"></i>
                                    </span>
                                    <div class="icheck-primary d-inline ml-2">
                                        <input type="checkbox" value="" name="todo6" id="todoCheck6">
                                        <label for="todoCheck6"></label>
                                    </div>
                                    <span class="text">Koordinasi dengan apotek tentang stok obat</span>
                                    <small class="badge badge-secondary"><i class="far fa-clock"></i> Minggu ini</small>
                                    <div class="tools">
                                        <i class="fas fa-edit"></i>
                                        <i class="fas fa-trash"></i>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Tambah
                                Data</button>
                        </div>
                    </div>
                    <!-- /.card -->

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </div>

@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
@endpush
