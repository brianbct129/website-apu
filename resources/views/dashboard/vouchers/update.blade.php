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
Vouchers
@endsection

@section('content')
<div class="card card-flush">
	<div class="card-header align-items-center py-5 gap-2 gap-md-5">
		<div class="card-title">
			<!--begin::Title-->
			<h2>Vouchers</h2>
			<!--end::Title-->
		</div>
	</div>
	<div class="card-body pt-0">
		<form id="kt_ecommerce_add_vouchers_form" class="form" data-kt-redirect="/vouchers">
			<!--begin::Input group-->
			<div class="row mb-10">
				<div class="col-12 col-lg-6">
					<!--begin::Input-->
					<input type="text" name="vouchers_name" class="form-control mb-2" placeholder="Code" value="" />
					<!--end::Input-->
					<!--begin::Description-->
					<div class="text-muted fs-7">A Code is required and recommended to be unique.</div>
					<!--end::Description-->
				</div>
				<div class="col-12 col-lg-6">
					<div class="input-group mb-2">
						<span class="input-group-text" id="basic-addon1">
							<!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil002.svg-->
						<span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
							<path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor"/>
							<path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor"/>
							</svg></span>
							<!--end::Svg Icon-->
						</span>
						<input class="form-control" placeholder="Pick date range" id="valid_date"/>
					</div>
					<!--begin::Description-->
					<div class="text-muted fs-7">A Date is required and recommended to be Fill.</div>
					<!--end::Description-->
				</div>
			</div>
			<!--end::Input group-->
			<div class="mb-10 fv-row">
				<!--begin::Label-->
				<label class="form-label">Set Usage Limit</label>
				<!--end::Label-->
				<!--begin::Slider-->
				<div class="d-flex flex-column text-center mb-5">
					<div class="d-flex align-items-start justify-content-center mb-7">
						<span class="fw-bolder fs-3x" id="kt_ecommerce_add_usage_limit_label">42</span>
						<span class="fw-bolder fs-4 mt-1 ms-2">Use</span>
					</div>
					<div id="kt_ecommerce_add_usage_limit" class="noUi-sm"></div>
					<input type="hidden" class="required" id="usage_limit" name="usage_limit" value="42">
				</div>
				<!--end::Slider-->
			</div>
			<!--begin::Input group-->
			<div class="fv-row mb-10">
				<!--begin::Row-->
				<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-2 g-5" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
					<!--begin::Col-->
					<div class="col">
						<!--begin::Option-->
						<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 active" data-kt-button="true">
							<!--begin::Radio-->
							<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
								<input class="form-check-input" type="radio" name="discount_option" value="3" checked />
							</span>
							<!--end::Radio-->
							<!--begin::Info-->
							<span class="ms-5">
								<span class="fs-4 fw-bolder text-gray-800 d-block">Fixed Price</span>
							</span>
							<!--end::Info-->
						</label>
						<!--end::Option-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col">
						<!--begin::Option-->
						<label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
							<!--begin::Radio-->
							<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
								<input class="form-check-input" type="radio" name="discount_option" value="2"/>
							</span>
							<!--end::Radio-->
							<!--begin::Info-->
							<span class="ms-5">
								<span class="fs-4 fw-bolder text-gray-800 d-block">Percentage %</span>
							</span>
							<!--end::Info-->
						</label>
						<!--end::Option-->
					</div>
					<!--end::Col-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="d-none mb-10 fv-row" id="kt_ecommerce_add_vouchers_discount_percentage">
				<!--begin::Label-->
				<label class="form-label">Set Discount Percentage</label>
				<!--end::Label-->
				<!--begin::Slider-->
				<div class="d-flex flex-column text-center mb-5">
					<div class="d-flex align-items-start justify-content-center mb-7">
						<span class="fw-bolder fs-3x" id="kt_ecommerce_add_vouchers_discount_label">0</span>
						<span class="fw-bolder fs-4 mt-1 ms-2">%</span>
					</div>
					<div id="kt_ecommerce_add_vouchers_discount_slider" class="noUi-sm"></div>
				</div>
				<!--end::Slider-->
				<input type="hidden" class="form-control" id="precentage_amount" name="precentage_amount" value="10">
				<!--begin::Description-->
				<div class="text-muted fs-7">Set a percentage discount to be applied on this vouchers.</div>
				<!--end::Description-->
			</div>
			<!--end::Input group-->
			<!--begin::Input group-->
			<div class="mb-10 fv-row" id="kt_ecommerce_add_vouchers_discount_fixed">
				<!--begin::Input-->
				<input type="text" name="discounted_price" id="discounted_price" class="form-control mb-2" placeholder="Discounted price" value=""/>
				<!--end::Input-->
				<!--begin::Description-->
				<div class="text-muted fs-7">Set the discounted vouchers price. The vouchers will be reduced at the determined fixed price</div>
				<!--end::Description-->
			</div>
			<!--end::Input group-->
			<div class="d-flex justify-content-end">
				<!--begin::Button-->
				<a href="/vouchers" id="kt_ecommerce_add_vouchers_cancel" class="btn btn-light me-5">Cancel</a>
				<!--end::Button-->
				<!--begin::Button-->
				<button type="submit" id="kt_ecommerce_add_vouchers_submit" class="btn btn-primary">
					<span class="indicator-label">Save Changes</span>
					<span class="indicator-progress">Please wait...
					<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
				</button>
				<!--end::Button-->
			</div>
		</form>
	</div>
</div>
@endsection

@section('third_script')
<!--begin::Page Vendors Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/js/custom/apps/ecommerce/catalog/save-vouchers.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.bundle.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/users-search.js') }}"></script>
@endsection



