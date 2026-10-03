<!DOCTYPE html>
<html>
<head>
    <title>LaporBanjir BPBD Kab. Bandung</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f1f5f9; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 12px; width: 380px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-top: 5px solid #475569; }
        h2 { color: #334155; text-align: center; margin-bottom: 20px; }
        label { font-weight: bold; font-size: 14px; display: block; margin-top: 12px; margin-bottom: 5px; color: #475569; }
        input { width: 100%; padding: 10px; border: 1px solid #cbd5e1; background-color: #f8fafc; border-radius: 6px; box-sizing: border-box; color: #1e293b; }
        input:focus { outline: none; border-color: #64748b; background-color: #fff; }
        button { width: 100%; background-color: #475569; color: white; border: none; padding: 12px; font-weight: bold; border-radius: 6px; margin-top: 20px; cursor: pointer; }
        button:hover { background-color: #334155; }
    </style>
</head>
<body>
<div class="card">
    <h2>LaporBanjir BPBD Kab. Bandung</h2>
    <form action="/lapor-banjir/proses" method="POST">
        @csrf
        <label>Nama Pelapor:</label>
        <input type="text" name="nama_pelapor" placeholder="Masukkan nama Anda" required>

        <label>Lokasi Kejadian (Kecamatan/Desa):</label>
        <input type="text" name="lokasi" placeholder="Contoh: Dayeuhkolot" required>

        <label>Tinggi Genangan Air (cm):</label>
        <input type="number" name="tinggi_genangan" placeholder="Contoh: 50" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>
</body>
</html>