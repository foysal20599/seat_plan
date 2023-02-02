@extends('admin.master')
@section('content')
    <style>
        .download.d-flex.text-center {
            margin-left: 100px;
        }

        i.font_size {
            font-size: 25px;
        }
    </style>
    @include('admin.leftmenu')
    <div class="content-page">
        <div class="content">

            @include('admin.navmenu')

            <div class="container-fluid mt-3 mb-3">
                <div class="col-10 offset-1">

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
                            <div class="col-xl-4">
                                <div class="text-xl-end mt-xl-0 mt-2">
                                    <a href="{{ route('export.seatplan') }}" class="btn btn-primary mb-2">
                                        Export</a>
                                </div>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-3 mb-3">
                                        <label class="form-label">Select Batch <span class="text-danger">*</span></label>
                                        <select name="" id="batch" class="form-control">
                                            <option value="">Select One</option>
                                            @foreach (App\Models\Batch::all() as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label class="form-label">Select Section <span class="text-danger">*</span> </label>
                                        <select name="" id="section" class="form-control">
                                            <option value="">Select One</option>
                                        </select>
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label class="form-label">Select Course <span class="text-danger">*</span></label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select One</option>
                                            @foreach (\App\Models\Course::all() as $item)
                                                <option value="{{ $item->id }}">{{ $item->course_code }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3 mb-3">
                                        <label class="form-label">Student Sheet</label>
                                        <input id="" type="file" class="form-control" type="text"
                                            placeholder="">
                                    </div>

                                    <div>
                                        <button type="button" class="btn btn-sm btn-info"><small>Add more</small> </button>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label for=""> Room:</label>
                                        <br>
                                        @foreach (\App\Models\Room::all() as $item)
                                            <div class="form-check form-check-inline mt-2">
                                                <input type="radio" id="customRadio{{ $item->id }}" name="customRadio"
                                                    value="{{ $item->id }}" class="form-check-input">
                                                <label class="form-check-label"
                                                    for="customRadio{{ $item->id }}">{{ $item->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                                <div class="mt-2">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for=""> Date:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control date" id="birthdatepicker"
                                                    data-toggle="date-picker" data-single-date-picker="true">
                                                <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for=""> Start Time:</label>
                                            <div class="input-group" id="timepicker-input-group1">
                                                <input id="timepicker" type="text" class="form-control"
                                                    data-provide="timepicker">
                                                <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <label for=""> End Time:</label>
                                            <div class="input-group" id="timepicker-input-group3">
                                                <input id="timepicker3" type="text" class="form-control"
                                                    data-provide='timepicker' data-minute-step="5">
                                                <span class="input-group-text"><i class="dripicons-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <div class="mb-3 mt-3 m-1">
                                        <button type="submit" class="btn btn-primary">Generate Plan</button>
                                    </div>
                                    <div class="download d-flex text-center">
                                        <div class="mb-3 mt-3 m-2">
                                            <a href=""> <i class="dripicons-download font_size"
                                                    title="Seat plan"></i></a>
                                        </div>
                                        <div class="mb-3 mt-3 m-2">
                                            <a href=""> <i class="dripicons-to-do font_size"
                                                    title="Student score sheet"></i></a>
                                        </div>
                                        <div class="mb-3 mt-3 m-2">
                                            <a href=""> <i class="dripicons-document font_size"
                                                    title="Attendence sheet"></i></a>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        </form>
                    </div>

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

@push('script')
    <script>
        var section_id = '{{ old('section_id') }}'
        $('#batch').on('change', function() {
            var batch_id = $(this).val();
            $('#section').html('<option value="">Select one</option>');
            $.ajax({
                method: "GET",
                url: '{{ route('get.section') }}',
                data: {
                    batch_id: batch_id,
                }
            }).done(function(data) {
                console.log(data);
                $.each(data, function(index, item) {
                    if (section_id == item.id) {
                        $('#section').append('<option selected value="' + item.id +
                            '" selected>' + item.name + '</option>');
                    } else {
                        $('#section').append('<option value="' + item.id + '">' + item
                            .name + '</option>');
                    }
                });
            });
        });
    </script>
@endpush
