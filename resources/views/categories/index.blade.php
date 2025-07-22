<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách danh mục</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f6f8;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .category-card {
            border: 1px solid #ddd;
            border-left: 6px solid #00B207;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: 0.3s;
            background-color: #fafafa;
        }

        .category-card:hover {
            background-color: #e6f5ea;
            border-left-color: #019b06;
        }

        .category-title {
            font-size: 18px;
            font-weight: bold;
            color: #00B207;
        }

        .category-info {
            margin-top: 5px;
            font-size: 14px;
            color: #555;
        }

        .created-at {
            font-style: italic;
            color: #999;
            font-size: 13px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📋 Danh sách danh mục</h1>

        @foreach ($kq as $item)
            <div class="category-card">
                <div class="category-title">{{ $item->name }}</div>
                <div class="category-info">🔗 Slug: {{ $item->slug }}</div>
                <div class="category-info">📝 Mô tả: {{ $item->description }}</div>
                <div class="created-at">📅 Ngày tạo: {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}</div>
            </div>
        @endforeach

        @if($kq->isEmpty())
            <p>Không có danh mục nào.</p>
        @endif
    </div>
</body>
</html>
