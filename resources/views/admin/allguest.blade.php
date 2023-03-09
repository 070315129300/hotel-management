@include('admin.css')
@include('admin.sidebar')
@include('admin.navbar')
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Order Status</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                            </th>
                            <th> Full Name </th>
                            <th> Phone </th>
                            <th> Email </th>
                            <th>Arrival Date </th>
                            <th> Arrival Time </th>
                            <th> Departure Date </th>
                            <th> Guest </th>
                            <th> Room Type </th>
                            <th> Special Request </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $users)
                        <tr>
                            <td>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                            </td>
                            <td> {{$users->firstname}} {{$users->lasttname}}</td>
                            <td> {{$users->phone}} </td>
                            <td> {{$users->email}} </td>
                            <td> {{$users->arrivaldate}} </td>
                            <td> {{$users->arrivaltime}} </td>
                            <td> {{$users->departuredate}} </td>
                            <td> {{$users->guest}} </td>
                            <td> {{$users->roomtype}} </td>
                            <td> {{$users->specialrequest}} </td>
                            <td>
                                <div class="badge badge-outline-success">Approved</div>
                            </td>
                        </tr>
                        @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
