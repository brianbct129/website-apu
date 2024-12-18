@extends('layouts.dashboard')

@section('description')
<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
	<!--begin::Item-->
	<li class="breadcrumb-item text-muted">
		<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
	</li>
	<!--end::Item-->
	<!--begin::Item-->
	<li class="breadcrumb-item">
		<span class="bullet bg-gray-300 w-5px h-2px"></span>
	</li>
	<!--end::Item-->
	<!--begin::Item-->
	<li class="breadcrumb-item text-muted">Toolbars</li>
	<!--end::Item-->
	<!--begin::Item-->
	<li class="breadcrumb-item">
		<span class="bullet bg-gray-300 w-5px h-2px"></span>
	</li>
	<!--end::Item-->
	<!--begin::Item-->
	<li class="breadcrumb-item text-dark">Toolbar 2</li>
	<!--end::Item-->
</ul>
@endsection

@section('title')
title
@endsection

@section('content')
<div class="card card-flush">
	<div class="card-header align-items-center py-5 gap-2 gap-md-5"></div>
	<div class="card-body pt-0"></div>
</div>
@endsection

@section('third_script')
<!--begin::Page Vendors Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.bundle.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/users-search.js') }}"></script>
@endsection



