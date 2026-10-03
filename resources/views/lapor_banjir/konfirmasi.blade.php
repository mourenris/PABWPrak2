<!DOCTYPE html>
<html>
<head>
    <title>Laporan Berhasil Diterima</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f1f5f9; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 12px; width: 380px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center; border-top: 5px solid #475569; }
        h2 { color: #334155; margin-bottom: 8px; }
        p.sub { font-size: 13px; color: #64748b; margin-bottom: 20px; }
        .data-box { background-color: #f8fafc; border: 1px solid #e2e8f0; text-align: left; padding: 15px; border-radius: 8px; font-size: 14px; line-height: 1.8; color: #334155; }
        .btn { display: block; width: 100%; background-color: #475569; color: white; text-decoration: none; padding: 12px 0; font-weight: bold; border-radius: 6px; margin-top: 20px; box-sizing: border-box; }
        .btn:hover { background-color: #334155; }
    </style>
</head>
<body>
<div class="card">
    <h2>Laporan Berhasil Diterima!</h2>
    <p class="sub">Terima kasih. Tim BPBD Kabupaten Bandung akan segera memproses informasi ini.</p>

    <div class="data-box">
        <b>Nama Pelapor:</b> {{ $nama }}<br>
        <b>Lokasi Kejadian:</b> {{ $lokasi }}<br>
        <b>Tinggi Genangan Air:</b> {{ $tinggi }} cm
    </div>

    <a href="/lapor-banjir" class="btn">Kirim Laporan Lain</a>
</div>
</body>
</html>