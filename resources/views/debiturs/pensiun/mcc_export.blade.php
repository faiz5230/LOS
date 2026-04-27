@php
/**
 * Template MCC (sesuai mcc.xlsx)
 * Mapping utama: debitur_pensiun.simulation_id -> simulations.id
 */
$sim = $debitur->simulation
    ?? (isset($debitur->simulation_id) ? \App\Models\Simulation::find($debitur->simulation_id) : null);

if (!function_exists('num_val')) {
    function num_val($value): float {
        if ($value === null || $value === '') return 0.0;
        if (is_string($value)) {
            $v = trim($value);
            $v = str_replace(' ', '', $v);
            $v = str_replace('.', '', $v);
            $v = str_replace(',', '.', $v);
            return is_numeric($v) ? (float)$v : 0.0;
        }
        return is_numeric($value) ? (float)$value : 0.0;
    }
}
if (!function_exists('fmt_rp')) {
    function fmt_rp($value): string { return number_format(num_val($value), 0, ',', '.'); }
}
if (!function_exists('fmt_pct')) {
    function fmt_pct($value, int $dec=2): string { return number_format(num_val($value), $dec, ',', '.'); }
}
if (!function_exists('fmt_tgl_id')) {
    function fmt_tgl_id($value): string {
        try { return $value ? \Carbon\Carbon::parse($value)->locale('id')->translatedFormat('d F Y') : ''; }
        catch (\Throwable $e) { return ''; }
    }
}
if (!function_exists('pick_sim')) {
    function pick_sim($sim, $debitur, string $key, $default=null) {
        if ($sim && isset($sim->{$key}) && $sim->{$key} !== null && $sim->{$key} !== '') return $sim->{$key};
        if ($debitur && isset($debitur->{$key}) && $debitur->{$key} !== null && $debitur->{$key} !== '') return $debitur->{$key};
        return $default;
    }
}

$plafond       = pick_sim($sim, $debitur, 'plafond', pick_sim($sim, $debitur, 'jumlah_permohonan_kredit', 0));
$jangkaWaktu   = pick_sim($sim, $debitur, 'jangka_waktu', '');
$angsuran      = pick_sim($sim, $debitur, 'angsuran', 0);
$retensi       = pick_sim($sim, $debitur, 'retensi', 0);
$tabunganWajib = pick_sim($sim, $debitur, 'tabungan_wajib', 0);
@endphp

<table style="border-collapse:collapse; width:100%; font-family:Calibri, Arial, sans-serif; font-size:12px;">
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-weight:bold;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-weight:bold;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="8" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">MEMORANDUM CREDIT COMMITTEE</td>
<td style="text-align:center;font-weight:bold;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-weight:bold;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-weight:bold;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-weight:bold;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td><td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Nama Debitur</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->nama_pensiun ?? pick_sim($sim,$debitur,'nama','') }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Nama Perusahaan</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->nama_perusahaan ?? 'PENSIUNAN' }}</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td rowspan="2" colspan="2" style="text-align:left;vertical-align:center;white-space:normal;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Tempat Tanggal Lahir</td>
<td rowspan="2" style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td rowspan="2" colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->tempat_lahir ?? '' }}</td>
<td rowspan="2" colspan="2" style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_tgl_id($debitur->tanggal_lahir ?? pick_sim($sim,$debitur,'tanggal_lahir',null)) }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Tanggal Pengajuan </td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_tgl_id(pick_sim($sim,$debitur,'tanggal_realisasi',null)) }}</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Pinjaman ke</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">1 (Baru)</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Pekerjaan</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->pekerjaan ?? 'PENSIUN' }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Kredit Pernah Diterima</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">-</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td></tr>
<tr><td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">No KTP</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">'{{ $debitur->no_ktp_sim }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">O/S Pokok</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">-</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Nopen</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->nopen }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Bunga</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">-</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">No SK</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->no_sk }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td><td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Tunggakan Pokok</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">-</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td rowspan="5" colspan="2" style="text-align:left;vertical-align:top;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Alamat Rumah</td>
<td rowspan="5" style="text-align:center;vertical-align:top;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td rowspan="5" colspan="4" style="text-align:left;vertical-align:top;white-space:normal;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->alamat_lengkap ?? '' }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Tunggakan Bunga</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;padding:4px;">-</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Rate Bunga</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ number_format($debitur->simulation->bunga_effektif ?? 0,2,',','.') }}%</td>
<td style="font-size:11.0px;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Jenis Bunga</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">EFFEKTIF</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="3" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Tujuan Pinjaman</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->tujuan_penggunan }}</td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Persyaratan Utama</td>
<td style="font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->persyaratan_utama ?? 'SK PENSIUN' }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">No. Telepon</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $debitur->no_telepon_pemohon ?? '' }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:left;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Pengajuan Kredit</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_rp($plafond) }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;">{{ $debitur->lokasi ?? '' }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Penghasilan/Gaji</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_rp(pick_sim($sim,$debitur,'besaran_gaji',0)) }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Maksimum Angsuran</td>
<td style="font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_rp(pick_sim($sim,$debitur,'maksimal_angsuran',0)) }}</td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Jabatan</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Pjs Tim Leader Marketing Konsumer</td>
<td colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Kepala Divisi Bisnis</td>
<!--<td colspan="4" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">DIREKTUR BISNIS</td>-->
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr><td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Plafond Yang disetujui</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_rp($plafond) }}</td>
<td colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Jangka Waktu dan Bunga</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="2" style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ $jangkaWaktu }}</td>
<td colspan="2" style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ number_format($debitur->simulation->bunga_effektif ?? 0,2,',','.') }}%</td>
<td colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Angsuran</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td style="vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_rp($angsuran) }}</td>
<td colspan="3" style="text-align:center;vertical-align:center;font-size:11.0px;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Tabungan</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_rp($tabunganWajib) }}</td>
<td colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Retensi</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">{{ fmt_rp($retensi) }}</td>
<td colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td rowspan="3" colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Disposisi</td>
<td rowspan="3" style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td rowspan="3" colspan="4" style="text-align:justify;vertical-align:center;white-space:normal;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">BI CHEKING CLEAR, DOKUMEN LENGKAP</td>
<td rowspan="3" colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td rowspan="3" colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td><td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td rowspan="3" colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Tanda Tangan</td>
<td rowspan="3" style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td rowspan="3" colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td rowspan="3" colspan="5" style="text-align:center;font-weight:bold;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td rowspan="3" colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td colspan="2" style="text-align:left;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Nama Lengkap</td>
<td style="text-align:center;vertical-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">:</td>
<td colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Muhammad Aria Putra</td>
<td colspan="5" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Dwi Gustin Caturani</td>
<!--<td colspan="4" style="text-align:center;font-size:11.0px;border-left:1px solid#f8f2f2;border-right:1px solid#f8f2f2;border-top:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;">Fitra Ramdani</td>-->
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;padding:4px;"></td>
</tr>
<tr>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
<td style="font-size:11.0px;border-right:1px solid#f8f2f2;border-bottom:1px solid#f8f2f2;padding:4px;"></td>
</tr>
</table>
