@extends('layouts.app') <!-- Giả sử bạn có layout chung -->

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-success">Danh sách tin trong chuyên mục: {{ $loaiTin->Ten }}</h2>

    @if($tin->isEmpty())
        <p>Không có tin nào trong chuyên mục này.</p>
    @else
        <ul class="list-group">
            @foreach ($tin as $item)
                <li class="list-group-item">
                    <a href="{{ route('tin.chitiet', ['id' => $item->id]) }}" class="text-decoration-none">
                        <strong>{{ $item->TieuDe }}</strong>
                    </a>
                    <p class="mb-0 text-muted small">Ngày đăng: {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
