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
Dashboard
@endsection

@section('content')
<!--begin::Products-->
<div class="card card-flush">
	<!--begin::Card header-->
	<div class="card-header align-items-center py-5 gap-2 gap-md-5">
		<!--begin::Card title-->
		<div class="card-title">
			<!--begin::Search-->
			<div class="d-flex align-items-center position-relative my-1">
				<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
				<span class="svg-icon svg-icon-1 position-absolute ms-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
						<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
				<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Order" />
			</div>
			<!--end::Search-->
		</div>
		<!--end::Card title-->
		<!--begin::Card toolbar-->
		<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
			<!--begin::Flatpickr-->
			<div class="input-group w-250px">
				<input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
				<button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
					<span class="svg-icon svg-icon-2">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
							<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</button>
			</div>
			<!--end::Flatpickr-->
			<div class="w-100 mw-150px">
				<!--begin::Select2-->
				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
					<option></option>
					<option value="all">All</option>
					<option value="Cancelled">Cancelled</option>
					<option value="Completed">Completed</option>
					<option value="Denied">Denied</option>
					<option value="Expired">Expired</option>
					<option value="Failed">Failed</option>
					<option value="Pending">Pending</option>
					<option value="Processing">Processing</option>
					<option value="Refunded">Refunded</option>
					<option value="Delivered">Delivered</option>
					<option value="Delivering">Delivering</option>
				</select>
				<!--end::Select2-->
			</div>
			
		</div>
		<!--end::Card toolbar-->
	</div>
	<!--end::Card header-->
	<!--begin::Card body-->
	<div class="card-body pt-0">
		<!--begin::Table-->
		<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
			<!--begin::Table head-->
			<thead>
				<!--begin::Table row-->
				<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
					<th class="w-10px pe-2">
						<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
							<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
						</div>
					</th>
					<th class="min-w-100px">Order ID</th>
					<th class="min-w-175px">Customer</th>
					<th class="text-end min-w-70px">Status</th>
					<th class="text-end min-w-100px">Total</th>
					<th class="text-end min-w-100px">Date Added</th>
					<th class="text-end min-w-100px">Date Modified</th>
					<th class="text-end min-w-100px">Actions</th>
				</tr>
				<!--end::Table row-->
			</thead>
			<!--end::Table head-->
			<!--begin::Table body-->
			<tbody class="fw-bold text-gray-600">
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14459</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Emma Bold</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$278.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-23">
						<span class="fw-bolder">23/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-29">
						<span class="fw-bolder">29/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14460</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Brian Cox</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Cancelled">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Cancelled</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$262.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-25">
						<span class="fw-bolder">25/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-28">
						<span class="fw-bolder">28/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14461</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Ethan Wilder</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Denied">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Denied</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$85.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-24">
						<span class="fw-bolder">24/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-27">
						<span class="fw-bolder">27/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14462</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Olivia Wild</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Expired">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Expired</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$90.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-25">
						<span class="fw-bolder">25/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-26">
						<span class="fw-bolder">26/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14463</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Sean Bean</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$348.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-22">
						<span class="fw-bolder">22/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-25">
						<span class="fw-bolder">25/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14464</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Olivia Wild</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Cancelled">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Cancelled</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$415.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-22">
						<span class="fw-bolder">22/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-24">
						<span class="fw-bolder">24/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14465</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Neil Owen</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$115.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-16">
						<span class="fw-bolder">16/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-23">
						<span class="fw-bolder">23/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14466</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-13.jpg" alt="John Miller" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">John Miller</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$70.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-15">
						<span class="fw-bolder">15/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-22">
						<span class="fw-bolder">22/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14467</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Emma Smith</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$34.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-19">
						<span class="fw-bolder">19/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-21">
						<span class="fw-bolder">21/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14468</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Max Smith</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$65.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-13">
						<span class="fw-bolder">13/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-20">
						<span class="fw-bolder">20/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14469</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Francis Mitcham</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$190.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-18">
						<span class="fw-bolder">18/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-19">
						<span class="fw-bolder">19/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14470</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Ethan Wilder</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$347.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-13">
						<span class="fw-bolder">13/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-18">
						<span class="fw-bolder">18/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14471</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-1.jpg" alt="Max Smith" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Max Smith</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Refunded">
						<!--begin::Badges-->
						<div class="badge badge-light-info">Refunded</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$108.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-11">
						<span class="fw-bolder">11/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-17">
						<span class="fw-bolder">17/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14472</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-info text-info">A</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Robert Doe</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$176.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-12">
						<span class="fw-bolder">12/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-16">
						<span class="fw-bolder">16/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14473</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Brian Cox</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$430.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-10">
						<span class="fw-bolder">10/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-15">
						<span class="fw-bolder">15/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14474</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Dan Wilson</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$378.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-10">
						<span class="fw-bolder">10/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-14">
						<span class="fw-bolder">14/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14475</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Olivia Wild</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Delivering">
						<!--begin::Badges-->
						<div class="badge badge-light-primary">Delivering</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$47.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-06">
						<span class="fw-bolder">06/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-13">
						<span class="fw-bolder">13/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14476</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Neil Owen</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Pending">
						<!--begin::Badges-->
						<div class="badge badge-light-warning">Pending</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$496.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-08">
						<span class="fw-bolder">08/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-12">
						<span class="fw-bolder">12/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14477</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Sean Bean</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Expired">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Expired</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$234.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-06">
						<span class="fw-bolder">06/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-11">
						<span class="fw-bolder">11/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14478</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Sean Bean</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$151.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-04">
						<span class="fw-bolder">04/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-10">
						<span class="fw-bolder">10/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14479</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Brian Cox</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$324.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-06">
						<span class="fw-bolder">06/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-09">
						<span class="fw-bolder">09/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14480</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-25.jpg" alt="Brian Cox" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Brian Cox</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Delivered">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Delivered</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$101.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-01">
						<span class="fw-bolder">01/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-08">
						<span class="fw-bolder">08/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14481</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Emma Smith</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Pending">
						<!--begin::Badges-->
						<div class="badge badge-light-warning">Pending</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$151.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-28">
						<span class="fw-bolder">28/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-07">
						<span class="fw-bolder">07/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14482</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Mikaela Collins</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Delivering">
						<!--begin::Badges-->
						<div class="badge badge-light-primary">Delivering</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$83.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-04">
						<span class="fw-bolder">04/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-06">
						<span class="fw-bolder">06/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14483</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Francis Mitcham</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$209.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-27">
						<span class="fw-bolder">27/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-05">
						<span class="fw-bolder">05/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14484</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Dan Wilson</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Denied">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Denied</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$208.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-02">
						<span class="fw-bolder">02/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-04">
						<span class="fw-bolder">04/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14485</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-success text-success">L</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Lucy Kunic</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Pending">
						<!--begin::Badges-->
						<div class="badge badge-light-warning">Pending</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$159.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-03-02">
						<span class="fw-bolder">02/03/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-03">
						<span class="fw-bolder">03/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14486</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Sean Bean</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$283.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-28">
						<span class="fw-bolder">28/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-02">
						<span class="fw-bolder">02/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14487</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Francis Mitcham</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$10.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-24">
						<span class="fw-bolder">24/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-03-01">
						<span class="fw-bolder">01/03/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14488</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Dan Wilson</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$27.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-25">
						<span class="fw-bolder">25/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-28">
						<span class="fw-bolder">28/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14489</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Melody Macy</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$361.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-23">
						<span class="fw-bolder">23/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-27">
						<span class="fw-bolder">27/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14490</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Emma Smith</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$351.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-25">
						<span class="fw-bolder">25/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-26">
						<span class="fw-bolder">26/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14491</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Melody Macy</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Failed">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Failed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$355.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-19">
						<span class="fw-bolder">19/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-25">
						<span class="fw-bolder">25/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14492</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Francis Mitcham</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$343.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-21">
						<span class="fw-bolder">21/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-24">
						<span class="fw-bolder">24/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14493</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Neil Owen</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Failed">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Failed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$86.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-18">
						<span class="fw-bolder">18/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-23">
						<span class="fw-bolder">23/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14494</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Sean Bean</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$277.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-15">
						<span class="fw-bolder">15/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-22">
						<span class="fw-bolder">22/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14495</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Dan Wilson</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Refunded">
						<!--begin::Badges-->
						<div class="badge badge-light-info">Refunded</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$33.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-16">
						<span class="fw-bolder">16/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-21">
						<span class="fw-bolder">21/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14496</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Dan Wilson</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$345.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-16">
						<span class="fw-bolder">16/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-20">
						<span class="fw-bolder">20/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14497</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Dan Wilson</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$21.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-13">
						<span class="fw-bolder">13/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-19">
						<span class="fw-bolder">19/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14498</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Emma Bold</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Pending">
						<!--begin::Badges-->
						<div class="badge badge-light-warning">Pending</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$354.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-12">
						<span class="fw-bolder">12/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-18">
						<span class="fw-bolder">18/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14499</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Ethan Wilder</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$376.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-14">
						<span class="fw-bolder">14/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-17">
						<span class="fw-bolder">17/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14500</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-success text-success">L</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Lucy Kunic</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Refunded">
						<!--begin::Badges-->
						<div class="badge badge-light-info">Refunded</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$173.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-14">
						<span class="fw-bolder">14/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-16">
						<span class="fw-bolder">16/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14501</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-success text-success">L</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Lucy Kunic</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$294.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-08">
						<span class="fw-bolder">08/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-15">
						<span class="fw-bolder">15/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14502</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Melody Macy</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Failed">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Failed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$166.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-13">
						<span class="fw-bolder">13/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-14">
						<span class="fw-bolder">14/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14503</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Emma Bold</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Processing">
						<!--begin::Badges-->
						<div class="badge badge-light-primary">Processing</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$189.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-07">
						<span class="fw-bolder">07/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-13">
						<span class="fw-bolder">13/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14504</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Francis Mitcham</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$393.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-10">
						<span class="fw-bolder">10/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-12">
						<span class="fw-bolder">12/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14505</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Francis Mitcham</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Refunded">
						<!--begin::Badges-->
						<div class="badge badge-light-info">Refunded</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$116.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-05">
						<span class="fw-bolder">05/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-11">
						<span class="fw-bolder">11/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14506</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Francis Mitcham</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Processing">
						<!--begin::Badges-->
						<div class="badge badge-light-primary">Processing</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$90.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-07">
						<span class="fw-bolder">07/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-10">
						<span class="fw-bolder">10/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14507</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-23.jpg" alt="Dan Wilson" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Dan Wilson</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Failed">
						<!--begin::Badges-->
						<div class="badge badge-light-danger">Failed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$40.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-08">
						<span class="fw-bolder">08/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-09">
						<span class="fw-bolder">09/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
				<!--begin::Table row-->
				<tr>
					<!--begin::Checkbox-->
					<td>
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</td>
					<!--end::Checkbox-->
					<!--begin::Order ID=-->
					<td data-kt-ecommerce-order-filter="order_id">
						<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bolder">14508</a>
					</td>
					<!--end::Order ID=-->
					<!--begin::Customer=-->
					<td>
						<div class="d-flex align-items-center">
							<!--begin:: Avatar -->
							<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
								<a href="../../demo1/dist/apps/user-management/users/view.html">
									<div class="symbol-label">
										<img src="assets/media/avatars/300-21.jpg" alt="Ethan Wilder" class="w-100" />
									</div>
								</a>
							</div>
							<!--end::Avatar-->
							<div class="ms-5">
								<!--begin::Title-->
								<a href="../../demo1/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Ethan Wilder</a>
								<!--end::Title-->
							</div>
						</div>
					</td>
					<!--end::Customer=-->
					<!--begin::Status=-->
					<td class="text-end pe-0" data-order="Completed">
						<!--begin::Badges-->
						<div class="badge badge-light-success">Completed</div>
						<!--end::Badges-->
					</td>
					<!--end::Status=-->
					<!--begin::Total=-->
					<td class="text-end pe-0">
						<span class="fw-bolder">$312.00</span>
					</td>
					<!--end::Total=-->
					<!--begin::Date Added=-->
					<td class="text-end" data-order="2022-02-04">
						<span class="fw-bolder">04/02/2022</span>
					</td>
					<!--end::Date Added=-->
					<!--begin::Date Modified=-->
					<td class="text-end" data-order="2022-02-08">
						<span class="fw-bolder">08/02/2022</span>
					</td>
					<!--end::Date Modified=-->
					<!--begin::Action=-->
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
						<span class="svg-icon svg-icon-5 m-0">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon--></a>
						<!--begin::Menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="../../demo1/dist/apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu-->
					</td>
					<!--end::Action=-->
				</tr>
				<!--end::Table row-->
			</tbody>
			<!--end::Table body-->
		</table>
		<!--end::Table-->
	</div>
	<!--end::Card body-->
</div>
<!--end::Products-->
@endsection

@section('third_script')
<!--begin::Page Vendors Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/js/custom/apps/ecommerce/sales/listing.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.bundle.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/users-search.js') }}"></script>
@endsection



