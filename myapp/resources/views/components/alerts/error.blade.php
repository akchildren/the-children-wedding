@if(Session::has('error'))
    <div class="container-fluid">
        <div class="row alert alert-danger text-center" style="padding-bottom: 0;margin-bottom: 0 !important;">
            <p>{{Session::get('error')}}</p>
        </div>
    </div>
@endif
