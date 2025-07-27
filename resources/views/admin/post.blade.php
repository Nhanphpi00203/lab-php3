@extends('admin.layout.admin')

@section('meta_title', 'Post')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary"><i class="fas fa-newspaper me-2"></i>Quản lý Bài viết</h2>
        <a href="#" class="btn btn-success"><i class="fas fa-plus-circle me-1"></i> Thêm bài viết</a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <p class="text-muted mb-3">Chào mừng bạn đến với hệ thống quản trị bài viết. Tại đây bạn có thể quản lý, chỉnh sửa và thêm mới các bài viết một cách dễ dàng.</p>

            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Tiêu đề</th>
                        <th>Danh mục</th>
                        <th>Ngày đăng</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Dữ liệu bài viết mẫu --}}
                    <tr>
                        <td>1</td>
                        <td>10 mẹo học lập trình nhanh</td>
                        <td>Giáo dục</td>
                        <td>27/07/2025</td>
                        <td><span class="badge bg-success">Hiển thị</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tin tức công nghệ tháng 7</td>
                        <td>Công nghệ</td>
                        <td>25/07/2025</td>
                        <td><span class="badge bg-warning text-dark">Ẩn</span></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    {{-- Kết thúc dữ liệu mẫu --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
