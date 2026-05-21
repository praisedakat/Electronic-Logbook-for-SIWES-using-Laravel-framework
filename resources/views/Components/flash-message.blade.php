@if(session()->has('message'))
    <div class="alert alert-success" style="position: fixed; top: 50%; left:50%; transform: translate(-50%,-50%0; z-index: 1050;" role="alert">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif    