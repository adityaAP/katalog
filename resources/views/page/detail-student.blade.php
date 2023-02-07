@extends('app')
@section('head')
    @include('partial.header')
@endsection
@section('content')	
    <!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    @include('partial.topbar')
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Student</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="#" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Layout-->
								<div class="d-flex flex-column flex-xl-row">
									<!--begin::Sidebar-->
									<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
										<!--begin::Card-->
										<div class="card mb-5 mb-xl-8">
											<!--begin::Card body-->
											<div class="card-body pt-15">
												<!--begin::Summary-->
												<div class="d-flex flex-center flex-column mb-5">
													<!--begin::Avatar-->
													<div class="symbol symbol-150px symbol-circle mb-7">
														<img src="{{ asset('home')}}/assets/media/avatars/300-1.jpg" alt="image" />
													</div>
													<!--end::Avatar-->
													<!--begin::Name-->
													<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">Max Smith</a>
													<!--end::Name-->
													<!--begin::Email-->
													<a href="#" class="fs-5 fw-bold text-muted text-hover-primary mb-6">max@kt.com</a>
													<!--end::Email-->
												</div>
												<!--end::Summary-->
												<!--begin::Details toggle-->
												<div class="d-flex flex-stack fs-4 py-3">
													<div class="fw-bolder">Details</div>
													<!--begin::Badge-->
													<div class="badge badge-light-info d-inline">Premium user</div>
													<!--begin::Badge-->
												</div>
												<!--end::Details toggle-->
												<div class="separator separator-dashed my-3"></div>
												<!--begin::Details content-->
												<div class="pb-5 fs-6">
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Account ID</div>
													<div class="text-gray-600">ID-45453423</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Billing Email</div>
													<div class="text-gray-600">
														<a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
													</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Delivery Address</div>
													<div class="text-gray-600">101 Collin Street,
													<br />Melbourne 3000 VIC
													<br />Australia</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Language</div>
													<div class="text-gray-600">English</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Latest Transaction</div>
													<div class="text-gray-600">
														<a href="../../demo1/dist/apps/ecommerce/sales/details.html" class="text-gray-600 text-hover-primary">#14534</a>
													</div>
													<!--begin::Details item-->
												</div>
												<!--end::Details content-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end::Sidebar-->
									<!--begin::Content-->
									<div class="flex-lg-row-fluid ms-lg-15">
										<!--begin:::Tabs-->
										<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
											<!--begin:::Tab item-->
											<li class="nav-item">
												<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_customer_overview">Overview</a>
											</li>
											<!--end:::Tab item-->
										</ul>
										<!--end:::Tabs-->
										<!--begin:::Tab content-->
										<div class="tab-content" id="myTabContent">
											<!--begin:::Tab pane-->
											<div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
												<div class="row row-cols-1 row-cols-md-3 mb-6 mb-xl-9">
													<div class="col">
														<img style="max-width:300px;" src="{{ asset('home/assets/media/avatars/300-1.jpg') }}">
													</div>
													<div class="col">
														<img style="max-width:300px;" src="{{ asset('home/assets/media/avatars/300-2.jpg') }}">
													</div>
													<div class="col">
														<img style="max-width:300px;" src="{{ asset('home/assets/media/avatars/300-3.jpg') }}">
													</div>
												</div>
												<!--begin::Card-->
												<div class="row row-cols-1 row-cols-md-1 mb-6 mb-xl-9">
													<img style="width:900px;" src="{{ asset('asset/1.jpeg') }}">
												</div>
												<!--end::Card-->
											</div>
											<!--end:::Tab pane-->
											<!--end:::Tab pane-->
										</div>
										<!--end:::Tab content-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Layout-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
@endsection
@section('footer')
    @include('partial.footer')
    @include('partial.script')
@endsection
