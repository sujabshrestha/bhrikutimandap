@extends('layouts.admin.master')

@section('title', 'All Wards')
@section('breadcrumb', 'All Wards')

@push('css')
<style>
    td{
        cursor: all-scroll;
    }
</style>

@endpush


@section('content')
    <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-md-10">
                                <h4>Approval Lists</h4>
                            </div>
                            {{-- <div class="col-md-2">
                                <a href="{{ route('backend.ward.add') }}" type="button"
                                    class="btn btn-primary mt-3 mb-3">Add</a>
                                <a href="{{ route('backend.ward.trashed.index') }}" type="button"
                                    class="btn btn-danger mt-3 mb-3">Trash</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">
                @if (isset($approvallists) && !empty($approvallists))
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr>
                                    <th>S.no</th>
                                    <th style="width: 40%;">Start Date</th>
                                    <th class="text-center">End Date</th>
                                    <th class="text-center">Vendor</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Pending Status</th>
                                    <th class="text-center">Venue</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="row_position">
                                @foreach ($approvallists as $item)
                                    <tr id="{{ $ward->id }}">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ward->title }}</td>

                                        <td class="text-center">

                                            <button data-status="{{ $ward->status }}" data-url="{{ route('backend.ward.changeStatus', ':id') }}" data-id="{{ $ward->id }}"  id="statusChangeGlobal"
                                                class="btn btn-sm statusChangeGlobal @if ($ward->status == 'Active')
                                                btn-success
                                                @else
                                                btn-danger @endif ">
                                            {{ $ward->status }}
                                            </button>
                                        </td>
                                        <td>
                                            {{ isset($ward->wardInfo) ? $ward->wardInfo->population : 'N/A'}}
                                        </td>
                                        <td>
                                            {{ isset($ward->wardInfo) ? $ward->wardInfo->area : 'N/A'}}
                                        </td>
                                        <td>
                                            <a href="{{ route('backend.ward.edit', $ward->slug) }}"
                                                class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('backend.ward.delete', $ward->slug) }}" class="btn btn-danger btn-sm"><i
                                                    class="fa-solid fa-trash"></i></a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="pagination d-flex justify-content-center">
                            {!! $wards->links('vendor.pagination.bootstrap-4') !!}
                        </div>


                    </div>
                @else
                    <h1 class="text-center text-danger">No any wards found!!!</h1>
                @endif

            </div>

        </div>
    </div>
@endsection


@push('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">


    $( ".row_position" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            console.log(selectedData);
            updateOrder(selectedData);
        }
    });

    function updateOrder(data) {
        console.log(data);
        var myUrl = "#";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: myUrl,
            data: {position:data},
            beforeSend: function (result) {
                $('#order-btn').hide();
            },
            success: function (result) {
                $('#order-btn').show();
            },
            error: function (result) {
                $('#order-btn').show();
            }
        });
    }





</script>

@endpush
