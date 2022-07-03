@extends('layouts.admin.app')

@section('content')
<div id="delete-category">
<!-- breadcumb -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Booking List<small class="font-size-base font-w400 text-muted">
                </small>
            </h1>
        </div>
    </div>
</div>
<!-- END breadcumb-->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Booking List</h3>
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
                            <th class="d-none d-sm-table-cell">Udpate Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookingList as $key=> $booking)
                        <tr>
                            <td class="text-center font-size-sm"><strong>{{ $key+1}}</strong></td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $booking->booking_number }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $booking->room_id }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $booking->from_date }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $booking->to_date }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $booking->total }}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $booking->payment_method}}</td>
                            <td class="d-none d-sm-table-cell font-size-sm font-w600 text-muted">{{ $booking->status }}</td>
                            <td class="">
                                <a href="#modal-block-edit{{$booking->id}}" data-toggle="modal" data-target="#modal-block-edit{{$booking->id}}"><i class="fa fa-fw fa-pencil-alt text-primary"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@foreach($bookingList as $key=> $booking)
<!-- -- edit modal -- -->
<div class="modal" id="modal-block-edit{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
 
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Update Status of Booking ID : {{$booking->id}} </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form action="{{route('updateBookingStatus')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="block-content font-size-sm">
                        <div class="form-group">
                            <label>Update Status</label>
                            <select class="form-control is-valid" name="status">
                                <option value="">select status ...</option>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="booking_id" value="{{$booking->id}}">
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-danger btn-square mb-1" data-dismiss="modal"><i class="fa fa-fw fa-plus-circle mr-1"></i> Cancel</button>
                        <button type="submit" class="btn btn-success btn-square mb-1"><i class="fa fa-fw fa-check-circle mr-1"></i> submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection