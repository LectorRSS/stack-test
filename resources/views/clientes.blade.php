@extends('layouts.dashboard')

@section('title', 'Clientes y Proveedores')

@section('content')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title m-subheader__title--separator">
				Clientes y Proveedores
			</h3>
			<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
				<li class="m-nav__item m-nav__item--home">
					<a href="#" class="m-nav__link m-nav__link--icon">
						<i class="m-nav__link-icon la la-home"></i>
					</a>
				</li>
				<li class="m-nav__separator">
					-
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							Maestros
						</span>
					</a>
				</li>
				<li class="m-nav__separator">
					-
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							Clientes/Proveedores
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div>
			<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
				<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
					<i class="la la-plus m--hide"></i>
					<i class="la la-ellipsis-h"></i>
				</a>
				<div class="m-dropdown__wrapper">
					<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
					<div class="m-dropdown__inner">
						<div class="m-dropdown__body">
							<div class="m-dropdown__content">
								<ul class="m-nav">
									<li class="m-nav__section m-nav__section--first m--hide">
										<span class="m-nav__section-text">
											Quick Actions
										</span>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-share"></i>
											<span class="m-nav__link-text">
												Activity
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-chat-1"></i>
											<span class="m-nav__link-text">
												Messages
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-info"></i>
											<span class="m-nav__link-text">
												FAQ
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<i class="m-nav__link-icon flaticon-lifebuoy"></i>
											<span class="m-nav__link-text">
												Support
											</span>
										</a>
									</li>
									<li class="m-nav__separator m-nav__separator--fit"></li>
									<li class="m-nav__item">
										<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
											Submit
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- END: Subheader -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">

		<div class="m-portlet__body">
			<!--begin: Search Form -->
			<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
				<div class="row align-items-center">
					<div class="col-xl-8 order-2 order-xl-1">
						<div class="form-group m-form__group row align-items-center">
							<div class="col-md-4">
								<div class="m-form__group m-form__group--inline">
									<div class="m-form__label">
										<label>
											Tipos:
										</label>
									</div>
									<div class="m-form__control">
										<select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_status">
											<option value="">
												Todos
											</option>
											<option value="1">
												Clientes
											</option>
											<option value="2">
												Proveedores
											</option>
											<option value="3">
												Extranjeros
											</option>
										</select>
									</div>
								</div>
								<div class="d-md-none m--margin-bottom-10"></div>
							</div>
							<div class="col-md-4">
								<div class="m-input-icon m-input-icon--left">
									<input type="text" class="form-control m-input m-input--solid" placeholder="Buscar..." id="generalSearch">
									<span class="m-input-icon__icon m-input-icon__icon--left">
										<span>
											<i class="la la-search"></i>
										</span>
									</span>
								</div>
							</div>
							<div class="col-md-4"></div>
						</div>
					</div>
					<div class="col-xl-4 order-1 order-xl-2 m--align-right">
						<a href="#" class="btn btn-info m-btn m-btn--custom m-btn--icon m-btn--air">
							<span>
								<i class="la la-user-plus"></i>
								<span>
									Nuevo Cliente/Proveedor
								</span>
							</span>
						</a>
						<div class="m-separator m-separator--dashed d-xl-none"></div>
					</div>
				</div>
			</div>
			<!--end: Search Form -->
			<!--begin: Selected Rows Group Action Form -->
			<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30 collapse" id="m_datatable_group_action_form">
				<div class="row align-items-center">
					<div class="col-xl-12">
						<div class="m-form__group m-form__group--inline">
							<div class="m-form__label m-form__label-no-wrap">
								<label class="m--font-bold m--font-danger-">
									Seleccionado
									<span id="m_datatable_selected_number"></span>
									registros:
								</label>
							</div>
							<div class="m-form__control">
								<div class="btn-toolbar">
									<button class="btn btn-sm btn-danger" type="button" id="m_datatable_delete_all">
										<i class="la la-user-times"></i> Borrar seleccionados
									</button>
									&nbsp;&nbsp;&nbsp;
									<button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#m_modal_fetch_id">
										<i class="la la-file-excel-o"></i> Exportar seleccionados
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end: Selected Rows Group Action Form -->
			<!--begin: Datatable -->
			<div class="m_datatable" id="local_record_selection"></div>
			<!--end: Datatable -->
		</div>
	</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/snippets/pages/clientes/tabla.js') }}" type="text/javascript"></script>
@endsection