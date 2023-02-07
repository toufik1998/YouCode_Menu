@extends('layouts.common-dash')

@section('title', 'Dashboard || Admin page')

@section('content')
<x-app-layout>

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed" >
		<!-- BEGIN #header -->
		<div id="header" class="app-header" style="background-color: #2D353C;">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand text-warning">YouCode Menu</a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar bg-warning"></span>
					<span class="icon-bar bg-warning"></span>
					<span class="icon-bar bg-warning"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">

				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<img src="../../images/user-15.jpg" alt="">
						<span>
                            <span class="d-none d-md-inline text-warning">{{ Auth::user()->name }}</span>
							<b class="caret text-warning"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>
						{{-- <a href="javascript:;" class="dropdown-item">Edit Profile</a> --}}
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
						{{-- <a href="./logout.php" class="dropdown-item">Log Out</a> --}}
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->

		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
                                <img src="../../images/user-15.jpg" alt="">
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
                                        {{ Auth::user()->name }}
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Front end developer</small>
							</div>
						</a>
					</div>
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>
						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>
						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>

					<div class="navigation-side">


						<ul>

							<li><a href="#" class="btn category-btn  my-1" style="width: 100%; border-bottom-right-radius: 0;">Menu Table</a></li>
							<li><a href="#" class="btn post-btn" style="width: 100%; border-bottom-right-radius: 0;">go to ...</a></li>

						</ul>

						<a href="#" class="icon-post text-center mb-3">
							<i class="fa-solid fa-blog  fa-2x text-warning"></i>
						</a>
						<a href="#" class="icon-post2 text-center">
							<i class="fa-brands fa-typo3 fa-2x text-warning"></i>
						</a>
					</div>



					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;"  class="app-sidebar-minify-btn ms-auto toggler-btn" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->

					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;"  class="app-sidebar-minify-btn ms-auto toggler-btn2" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->

		<!-- BEGIN #content -->
		<div id="content" class="app-content" >
			<div class="d-flex align-items-center mb-3">
				<div>
					<!-- BEGIN page-header -->
					<h1 class="page-header mb-0" style="color: #ff8906">
						Hi, Welcome {{ Auth::user()->name }}
					</h1>
					<!-- END page-header -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="../../home.php" style="color: #f5be7f">Home</a></li>
						<li class="breadcrumb-item active" style="color: #ff8906">YouCode Menu || Plat </li>
					</ol>

				</div>

				<div class="ms-auto">
				<a href={{ url('/menu_plat/create') }} id="addButton"  class="btn btn-rounded text-white px-4 rounded-pill mb-2" style="background-color: #ff8906"><i class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Plat</a>

			</div>
			</div>

			<div class="container-fluid">
				<section>
					<div class="row">
						<div class="col-12 mt-3 mb-1">
							<h5 class="text-uppercase" style="color: #ff8906">Minimal Statistics</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between px-md-1">
								<div class="align-self-center">
									<i class="fa-brands fa-readme text-info fa-3x"></i>
								</div>
								<div class="text-end">
									<h3>
										5
									</h3>
									<p class="mb-0">Manu plats</p>
								</div>
								</div>
							</div>
						   </div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between px-md-1">
									<div class="align-self-center">
										<i class="fa-solid fa-chart-bar text-danger fa-3x"></i>
									</div>
									<div class="text-end">
										<h3>
											3
										</h3>
										<p class="mb-0">Categories</p>
									</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-sm-6 col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between px-md-1">
									<div class="align-self-center">
										<i class="fa-solid fa-lock-open text-warning fa-3x"></i>
									</div>
									<div class="text-end">
										<h3>
											3
										</h3>
										<p class="mb-0">Admins</p>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<!-- section of Search for posts -->
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-5">
						<form action="" method="POST" class="d-flex">
							<input class="form-control me-2" name="search" type="search" placeholder="Search for post" aria-label="Search">
							<button class="btn btn-outline-warning" name="show" type="submit">Search</button>
						</form>
					</div>
				</div>
			</div>

			<!-- section of table -->
			<div class="container-fluid my-2 section-table">
				<div class="row">
					<div class="col">
						<div class="shadow-4 rounded-5 overflow-hidden">
							<div class="table-responsive">
								<table class="table align-middle mb-0" style="background-color: #2F3843; border-radius: 1rem;">
									<thead class="text-white-50" style="background-color:  #2F3843; border-radius: 1rem;">
										<tr style="color: #8D949D;">
										<th>Plat Name</th>
										<th>Plat Day</th>
										<th>Aboyt Plat</th>
										<th>Actions</th>
										</tr>
									</thead>
									<tbody>

                                        @foreach($menu as $item)
                                            <tr style="color: #fff; border-bottom: black;">
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img
                                                            {{-- <img src="{{ url('public/images/'.$item->image) }}" --}}

                                                                src="../../images/{{$item->uploadfile}}"
                                                                alt=""
                                                                style="width: 75px; height: 75px"
                                                                class="rounded-circle bg-white"
                                                            />
                                                            <div class="ms-3">
                                                                <p class="fw-bold mb-1">{{ $item->name }}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="fw-normal mb-1 ms-2">{{ $item->plat_day }}</p>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success rounded-pill ms-4">{{ $item->about_plat }}</span>
                                                    </td>
                                                    <td>

                                                            <a href="{{ url('menu_plat/' . $item->id . '/edit') }}" class="btn bg-success text-white btn-sm btn-rounded mt-2">
                                                                <input type="hidden" name="update-id" value="{{$item->id}}">
                                                                <i class="fa-sharp fa-solid fa-pen-to-square text-white"></i>
                                                            </a>
                                                            {{-- <button type="button" id="update-btn" onclick="editTask({{$item->id}})" class="btn bg-success text-white btn-sm btn-rounded mt-2" data-bs-toggle="modal" data-bs-target="#modal-task">
                                                                <input type="hidden" name="update-id" value="{{$item->id}}">
                                                                <i class="fa-sharp fa-solid fa-pen-to-square text-white"></i>
                                                            </button> --}}
                                                        <form method="post" action="{{ url('/menu_plat' . '/' . $item->id) }}" style="display: inline;">
                                                            @csrf
                                                            @method("DELETE")
                                                            {{-- <button type="submit" name="delete" id="buttonDelete" class="d-none">
                                                                <input type="hidden" name="delete-id" value="{{$item->id}}">
                                                            </button> --}}
                                                            <button type="submit"  name="delete" onclick="return confirm('Confirm delete?')" class="btn bg-danger text-white btn-sm btn-rounded mt-2 ">
                                                                <input type="hidden" name="delete-id" value="{{$item->id}}">
                                                                <i class="fa-solid fa-trash text-white"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->


		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->

	<!-- TASK MODAL -->
	{{-- <div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Post</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="product-id">
							<div class="mb-3">
								<label class="form-label">Plat Name</label>
								<input type="text" name="plat-name" class="form-control" id="plat-name"/>
							</div>

							<div class="mb-3">
								<label class="form-label">Plat Day</label>
								<input type="text" name="plat-day" class="form-control" id="plat-day"/>
							</div>
							<div class="mb-0">
								<label class="form-label">About Plat</label>
								<textarea class="form-control" name="plat-content" rows="10" id="plat-content"></textarea>
							</div>

					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="d-none" id="buttonDelete"></a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
						<button type="submit" name="add" class="btn btn-primary task-action-btn text-dark" id="task-save-btn">ADD</button>
					</div>
				</form>
			</div>
		</div>
	</div> --}}


	{{-- <div class="modal fade" id="modal-multiple-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="./multiple-post.php" method="POST" id="form-task" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Posts </h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="update-id">
							<div class="mb-3">
								<label class="form-label">Post Numbers you want to add</label>
								<input type="number" name="posts-number" class="form-control" id="posts-number" min="2"/>
							</div>

					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="add-number-posts" class="btn btn-primary task-action-btn" id="task-save-btn">ADD</button>

					</div>
				</form>
			</div>
		</div>
	</div> --}}


</x-app-layout>

@endsection



{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
