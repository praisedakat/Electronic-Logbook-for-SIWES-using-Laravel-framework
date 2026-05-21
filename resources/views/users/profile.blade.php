<x-layout>
<!--<div class="container custom-form-width">
    
<p class="form-control"><strong>Matric Number: </strong> {{ Auth::user()->mat_number}} </p>
<p class="form-control"><strong>Name: </strong> {{ Auth::user()->name}} </p>
<p class="form-control"><strong>Email: </strong> {{ Auth::user()->email}} </p>
<p class="form-control"><strong>Department: </strong> {{ Auth::user()->department}} </p>
<p class="form-control"><strong>Place of Industrial Attachment: </strong> {{ Auth::user()->address}} </p>

</div> -->

<div class="container d-flex justify-content-center align-item-center" style="min-height: 100vh;">
    <div class="card-header text-center">
        <h3>User Profile</h3>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <h5>Matric Number: </h5>
            <p>{{Auth::user()->mat_number}}</p>
        </div>

        <div class="mb-3">
            <h5>Name: </h5>
            <p>{{ Auth::user()->name}}</p>
        </div>

        <div class="mb-3">
            <h5>Email: </h5>
            <p>{{ Auth::user()->email}}</p>
        </div>

        <div class="mb-3">
            <h5>Department: </h5>
            <p>{{ Auth::user()->department}}</p>
        </div>

        <div class="mb-3">
            <h5>Address of Place of Industrial Training: </h5>
            <p>{{ Auth::user()->address}}</p>
        </div>
    </div>
</div>
</x-layout>