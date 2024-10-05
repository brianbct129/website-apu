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
Create Categories
@endsection

@section('content')
<form id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/categories.html">
    <!--begin::Aside column-->
    <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
        <!--begin::Thumbnail settings-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Thumbnail</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body text-center pt-0">
                <!--begin::Image input-->
                <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(assets/media/svg/files/blank-image.svg)">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-150px h-150px"></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                        <!--begin::Icon-->
                        <i class="bi bi-pencil-fill fs-7"></i>
                        <!--end::Icon-->
                        <!--begin::Inputs-->
                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                        <input type="hidden" name="avatar_remove" />
                        <!--end::Inputs-->
                    </label>
                    <!--end::Label-->
                    <!--begin::Cancel-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Cancel-->
                    <!--begin::Remove-->
                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                    <!--end::Remove-->
                </div>
                <!--end::Image input-->
                <!--begin::Description-->
                <div class="text-muted fs-7">Set the category thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                <!--end::Description-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Thumbnail settings-->
        <!--begin::Status-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Status</h2>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                </div>
                <!--begin::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Select2-->
                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                    <option></option>
                    <option value="published" selected="selected">Published</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="unpublished">Unpublished</option>
                </select>
                <!--end::Select2-->
                <!--begin::Description-->
                <div class="text-muted fs-7">Set the category status.</div>
                <!--end::Description-->
                <!--begin::Datepicker-->
                <div class="d-none mt-10">
                    <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select publishing date and time</label>
                    <input class="form-control" id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date &amp; time" />
                </div>
                <!--end::Datepicker-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Status-->
        <!--begin::Template settings-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Store Template</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Select store template-->
                <label for="kt_ecommerce_add_category_store_template" class="form-label">Select a store template</label>
                <!--end::Select store template-->
                <!--begin::Select2-->
                <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_store_template">
                    <option></option>
                    <option value="default" selected="selected">Default template</option>
                    <option value="electronics">Electronics</option>
                    <option value="office">Office stationary</option>
                    <option value="fashion">Fashion</option>
                </select>
                <!--end::Select2-->
                <!--begin::Description-->
                <div class="text-muted fs-7">Assign a template from your current theme to define how the category products are displayed.</div>
                <!--end::Description-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Template settings-->
    </div>
    <!--end::Aside column-->
    <!--begin::Main column-->
    <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
        <!--begin::General options-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>General</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10 fv-row">
                    <!--begin::Label-->
                    <label class="required form-label">Category Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="category_name" class="form-control mb-2" placeholder="Product name" value="" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label">Description</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div id="kt_ecommerce_add_category_description" name="kt_ecommerce_add_category_description" class="min-h-200px mb-2"></div>
                    <!--end::Editor-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card header-->
        </div>
        <!--end::General options-->
        <!--begin::Meta options-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Meta Options</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label">Meta Tag Title</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="mb-10">
                    <!--begin::Label-->
                    <label class="form-label">Meta Tag Description</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <div id="kt_ecommerce_add_category_meta_description" name="kt_ecommerce_add_category_meta_description" class="min-h-100px mb-2"></div>
                    <!--end::Editor-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set a meta tag description to the category for increased SEO ranking.</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label">Meta Tag Keywords</label>
                    <!--end::Label-->
                    <!--begin::Editor-->
                    <input id="kt_ecommerce_add_category_meta_keywords" name="kt_ecommerce_add_category_meta_keywords" class="form-control mb-2" />
                    <!--end::Editor-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set a list of keywords that the category is related to. Separate the keywords by adding a comma
                    <code>,</code>between each keyword.</div>
                    <!--end::Description-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card header-->
        </div>
        <!--end::Meta options-->
        <!--begin::Automation-->
        <div class="card card-flush py-4">
            <!--begin::Card header-->
            <div class="card-header">
                <div class="card-title">
                    <h2>Automation</h2>
                </div>
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div>
                    <!--begin::Label-->
                    <label class="form-label mb-5">Product assignment method</label>
                    <!--end::Label-->
                    <!--begin::Methods-->
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::Radio-->
                        <div class="form-check form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="method" type="radio" value="0" id="kt_ecommerce_add_category_automation_0" checked='checked' />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                <div class="fw-bolder text-gray-800">Manual</div>
                                <div class="text-gray-600">Add products to this category one by one by manually selecting this category during product creation or update.</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::Radio-->
                    </div>
                    <!--end::Input row-->
                    <div class='separator separator-dashed my-5'></div>
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::Radio-->
                        <div class="form-check form-check-custom form-check-solid">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="method" type="radio" value="1" id="kt_ecommerce_add_category_automation_1" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                <div class="fw-bolder text-gray-800">Automatic</div>
                                <div class="text-gray-600">Products matched with the following conditions will be automatically assigned to this category.</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::Radio-->
                    </div>
                    <!--end::Input row-->
                    <!--end::Methods-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="d-none mt-10" data-kt-ecommerce-catalog-add-category="auto-options">
                    <!--begin::Label-->
                    <label class="form-label">Conditions</label>
                    <!--end::Label-->
                    <!--begin::Conditions-->
                    <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                        <span>Products must match:</span>
                        <!--begin::Radio-->
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="conditions" value="" id="all_conditions" checked="checked" />
                            <label class="form-check-label" for="all_conditions">All conditions</label>
                        </div>
                        <!--end::Radio-->
                        <!--begin::Radio-->
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" name="conditions" value="" id="any_conditions" />
                            <label class="form-check-label" for="any_conditions">Any conditions</label>
                        </div>
                        <!--end::Radio-->
                    </div>
                    <!--end::Conditions-->
                    <!--begin::Repeater-->
                    <div id="kt_ecommerce_add_category_conditions">
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div data-repeater-list="kt_ecommerce_add_category_conditions" class="d-flex flex-column gap-3">
                                <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                    <!--begin::Select2-->
                                    <div class="w-100 w-md-200px">
                                        <select class="form-select" name="condition_type" data-placeholder="Select an option" data-kt-ecommerce-catalog-add-category="condition_type">
                                            <option></option>
                                            <option value="title">Product Title</option>
                                            <option value="tag" selected="selected">Product Tag</option>
                                            <option value="price">Prodict Price</option>
                                        </select>
                                    </div>
                                    <!--end::Select2-->
                                    <!--begin::Select2-->
                                    <div class="w-100 w-md-200px">
                                        <select class="form-select" name="condition_equals" data-placeholder="Select an option" data-kt-ecommerce-catalog-add-category="condition_equals">
                                            <option></option>
                                            <option value="equal" selected="selected">is equal to</option>
                                            <option value="notequal">is not equal to</option>
                                            <option value="greater">is greater than</option>
                                            <option value="less">is less than</option>
                                            <option value="starts">starts with</option>
                                            <option value="ends">ends with</option>
                                        </select>
                                    </div>
                                    <!--end::Select2-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mw-100 w-200px" name="condition_label" placeholder="" />
                                    <!--end::Input-->
                                    <!--begin::Button-->
                                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
                                                <rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Button-->
                                </div>
                            </div>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group mt-5">
                            <!--begin::Button-->
                            <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                    <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Add another condition</button>
                            <!--end::Button-->
                        </div>
                        <!--end::Form group-->
                    </div>
                    <!--end::Repeater-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card header-->
        </div>
        <!--end::Automation-->
        <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
            <!--end::Button-->
            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                <span class="indicator-label">Save Changes</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
        </div>
    </div>
    <!--end::Main column-->
</form>
@endsection

@section('third_script')
<!--begin::Page Vendors Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('dashboard/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript (used by this page)-->
<script src="{{ asset('dashboard/assets/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.bundle.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/create-app.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/custom/modals/users-search.js') }}"></script>
@endsection



