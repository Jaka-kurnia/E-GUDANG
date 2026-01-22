<div>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            <i class="fas fa-users mr-1"></i>
                            @yield('title')
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="fas fa-home mr-1"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <i class="fas fa-user mr-1"></i>
                                @yield('title')
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between ">
                        <div>
                            <button class="btn btn-sm btn-primary">
                                <i class="fas fa-plus mr-1"></i>
                                Tambah Data
                            </button>
                        </div>
                        <div class="btn-group dropleft">
                            <button type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-print mr-1"></i>
                                Cetak Data
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-file-excel mr-1 text-success"></i>
                                    Excel
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-file-pdf mr-1 text-danger"></i>
                                    PDF
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-2">
                                <select wire:model.live="paginate" class="form-control">
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input wire:model.live="search" type="text" placeholder="Pencarian..." class="form-control">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>
                                            <i class="fas fa-cog"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                @if ($item->role == 'Super Admin')
                                                    <span class="badge badge-info">
                                                        {{ $item->role }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-success">
                                                        {{ $item->role }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-warning text-white">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger text-white">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $user->links() }}
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
