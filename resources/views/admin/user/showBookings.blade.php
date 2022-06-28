@extends('layouts.admin.app')

@section('content')
<div id="delete-category">
<!-- breadcumb -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                My Booking List<small class="font-size-base font-w400 text-muted">
                </small>
            </h1>
        </div>
    </div>
</div>
<!-- END breadcumb-->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Room List</h3>
            <div class="block-options">
                <button type="button" class="btn btn-success btn-square mr-1 mb-3" data-toggle="modal" data-target="#modal-block-create"><i class="fa fa-fw fa-plus-circle mr-1"></i> New</button>
            </div>
        </div>
        <div class="block-content">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 120px;">Index</th>
                            <th class="d-none d-sm-table-cell">Booking Number</th>
                            <th class="d-none d-sm-table-cell">Room No.</th>
                            <th class="d-none d-sm-table-cell">From Date</th>
                            <th class="d-none d-sm-table-cell">To Date</th>
                            <th class="d-none d-sm-table-cell">Total</th>
                            <th class="d-none d-sm-table-cell">Payment Method</th>
                            <th class="d-none d-sm-table-cell">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings_of_user as $key=> $room)
                        <tr>
                            <td class="text-center font-size-sm"><strong>{{ $key+1}}</strong></td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $room->booking_number }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $room->room_id }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $room->from_date }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $room->to_date }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $room->total }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $room->payment_method}}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $room->status }}</td>
                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection