@extends('admin.master')
@section('content')
    @include('admin.leftmenu')
    <div class="content-page">
        <div class="content">

            @include('admin.navmenu')

            <div class="container-fluid mt-3 mb-3">
                <div class="col-10 offset-1">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="card">
                            <div class="logo">
                                <img src="" alt="">
                            </div>
                            <div class="card-body">
                                <div class="row justify-between mb-5">
                                    <div class="col-3">
                                        <img src="{{ asset('assets/images/stamford.png') }}" class="img-fluid "
                                            alt="Stamford logo">
                                    </div>
                                    <div class="col-7">
                                        <h3> Prepare The Exam Seat Plan </h3>
                                    </div>
                                    <div class="col-2">
                                        <div class="rounded-1 text-center border-dark">
                                            <a href="">
                                                History
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Student information upload</label>
                                        <input type="file" class="form-control" data-provide="typeahead" id="the-basics"
                                            placeholder="Basic Example">
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label">Course Teacher one</label>
                                        <input id="" class="form-control" type="text" placeholder=""
                                            name="">
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label">Exam Attendance sheet</label>
                                        <input type="file" class="form-control" data-provide="typeahead" id="prefetch"
                                            placeholder="">
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label">Course Teacher Two</label>
                                        <input type="text" class="form-control" data-provide="typeahead" id="remote"
                                            placeholder="">
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label class="form-label">Student Information Sheet</label>
                                        <input id="" type="file" class="form-control" type="text"
                                            placeholder="">
                                    </div>

                                </div>
                                <div class="mt-2">
                                    <label for=""> Room:</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="room6">
                                        <label class="form-check-label" for="room6">506</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="room1">
                                        <label class="form-check-label" for="room1">501</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="room5">
                                        <label class="form-check-label" for="room5">505</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="room2">
                                        <label class="form-check-label" for="room2">502</label>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="row">
                                        <div class="col-3">
                                            <label for=""> Time Slot:</label>
                                        </div>
                                        <div class="col-5">
                                            <div class="input-group" id="timepicker-input-group3">
                                                <input id="timepicker3" type="text" class="form-control"
                                                    data-provide='timepicker' data-minute-step="5">
                                                <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 mb-3 mt-3 justify-content-center">
                                    <button type="submit" class="btn btn-primary">Generate Plan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Seat Plan management
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
    </div>
    </footer>
    <!-- end Footer -->

    </div>
@endsection
