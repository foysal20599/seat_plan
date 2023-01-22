@extends('admin.master')
@section('content')

<!-- Start Content-->
<div class="container-fluid mt-3 mb-3">

   <div class="col-10 offset-1">

    <div class="card">
        <div class="logo">
            <img src="" alt="">
        </div>
        <div class="card-body">
            <div class="row">
                                                        
            <div class="col-6 mb-3">
                <label class="form-label">Student information upload</label>
                <input type="file" class="form-control" data-provide="typeahead" id="the-basics" placeholder="Basic Example">
            </div>
            
            <div class="col-6 mb-3">
                <label class="form-label">Bloodhound (Suggestion Engine)</label>
                <input id="bloodhound" class="form-control" type="text" placeholder="States of USA">
            </div>
            
            <div class="col-6 mb-3">
                <label class="form-label">Exam Attendance sheet</label>
                <input type="file" class="form-control" data-provide="typeahead" id="prefetch" placeholder="States of USA">
            </div>
            
            <div class="col-6 mb-3">
                <label class="form-label">Remote</label>
                <input type="text" class="form-control" data-provide="typeahead" id="remote" placeholder="States of USA">
            </div>
            
            <div class="col-6 mb-3">
                <label class="form-label">Custom Templates</label>
                <input id="custom-templates" class="form-control" type="text" placeholder="States of USA">
            </div>
            
            <div class="col-6 mb-3">
                <label class="form-label">Default Suggestions</label>
                <input type="text" class="form-control" data-provide="typeahead" id="default-suggestions">
            </div>
            
            <div class="col-6 mb-3">
                <label class="form-label">Multiple Datasets</label>
                <input type="text" class="form-control" data-provide="typeahead" id="multiple-datasets">
            </div>
            </div>
        </div>
    </div>
   </div>


</div>
<!-- container -->
@endsection
                   

            