@if(Session::has('success'))
    <div class="container-fluid">
        <div class="row alert alert-success text-center" style="padding-bottom: 0;margin-bottom: 0 !important;">
            <p>{{Session::get('success')}}</p>
        </div>
    </div>
@endif
