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
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
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
                            <!--begin::Row-->
                            <div class="row gy-5 g-xl-8">
                                    @for ($x = 0; $x <= 5; $x++)
									<!--begin::Col-->
									<div class="col-xl-3">
										<!--begin::Mixed Widget 2-->
										<div class="card card-xl-stretch">
											<!--begin::Header-->
											<div class="card-header border-0 bg-danger py-5">
												<h3 class="card-title fw-bolder text-white">School</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0">
												<!--begin::Stats-->
												<div class="card-p position-relative">
                                                    <!--begin::Item-->
                                                    <div class="col text-center mb-9">
                                                        <!--begin::Photo-->
                                                        <div class="octagon mx-auto mb-4 d-flex w-150px h-150px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url({{asset('home/assets/media/avatars/300-1.jpg') }})"></div>
                                                        <!--end::Photo-->
                                                        <!--begin::Person-->
                                                        <div class="mb-0">
                                                            <!--begin::Name-->
                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-3">Paul Miles</a>
                                                            <!--end::Name-->
                                                            <!--begin::Position-->
                                                            <div class="text-muted fs-6 fw-bold">Development Lead</div>
                                                            <!--begin::Position-->
                                                        </div>
                                                        <!--end::Person-->
                                                    </div>
                                                    <!--end::Item-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 2-->
									</div>
									<!--end::Col-->
                                    @endfor
								</div>
								<!--end::Row-->
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
