@extends('layouts.admin.app')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Room List <small class="font-size-base font-w400 text-muted"></small>
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Layout</li>
                    <li class="breadcrumb-item">Header</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Fixed - Dark</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-content text-center">
            <p>
                Manage rooms from below
            </p>
        </div>
    </div>

    <!-- Dummy content -->
    <div class="block block-rounded">
        <div class="block-content">
            Table
        </div>
    </div>


    <!-- END Dummy content -->
</div>
<!-- END Page Content -->
@endsection