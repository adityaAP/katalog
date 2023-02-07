@extends('app')
@section('head')
    @include('partial.header')
@endsection
@section('content')		
        <!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
                @include('partial.topbar')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Overview</h1>
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
								<div class="row g-6 mb-6 g-xl-9 mb-xl-9">
									<!--begin::Followers-->
									<!--begin::Col-->
                                    @for ($x = 1; $x <= 1; $x++)
                                        <div class="col-md-6 col-xxl-3">
                                            <!--begin::Card-->
                                            <div class="card">
                                                <!--begin::Card body-->
                                                <div class="card-body d-flex flex-center flex-column p-9">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-200px mb-5">
                                                        <img src="{{ asset('asset/school/logo.png') }}" alt="image" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">SMA NEGERI 1 Semarang</a>
                                                    <!--end::Name-->
                                                    <!--begin::Position-->
                                                    <div class="fw-bold text-gray-400 mb-6">"Your School Quote Here"</div>
                                                    <!--end::Position-->
                                                    <!--begin::Follow-->
                                                    <a href="{{ route('school') }}" class="btn btn-sm btn-light-primary">
                                                    <i class="fa-solid fa-circle-info"></i> See School</a>
                                                    <!--end::Follow-->
                                                </div>
                                                <!--begin::Card body-->
                                            </div>
                                            <!--begin::Card-->
                                        </div>
                                    @endfor
									<!--end::Col-->
									<!--end::Followers-->
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
