@php
    use Carbon\Carbon;
    use App\Models\AccountOfficer;
    Carbon::setLocale('id');
    /**
     * ===========================
     *  MAPPING DATA (Memo Fasilitas Kredit)
     *  Prioritas: $debitur->simulation (jika ada) lalu fallback ke $debitur
     * ===========================
     */
    $sim = $debitur->simulation ?? null;

    // Helper ambil nilai dari simulation lalu fallback debitur
    if (!function_exists('pick_sim')) {
        function pick_sim($sim, $debitur, string $key, $default = null) {
            if ($sim && isset($sim->{$key}) && $sim->{$key} !== null && $sim->{$key} !== '') {
                return $sim->{$key};
            }
            if (isset($debitur->{$key}) && $debitur->{$key} !== null && $debitur->{$key} !== '') {
                return $debitur->{$key};
            }
            return $default;
        }
    }

    // Nomor memo (jika ada helper internal)
    $memoNomor = function_exists('getNomorUrut')
        ? getNomorUrut($debitur->id, 'MEMO_FASILITAS_KREDIT')
        : ($debitur->nomor_memo ?? '-');

    

    // Data utama kredit
    $plafond = pick_sim($sim, $debitur, 'plafond', pick_sim($sim, $debitur, 'jumlah_permohonan_kredit', 0));
    $jangkaWaktu = pick_sim($sim, $debitur, 'jangka_waktu', '');
    $bungaFlat = pick_sim($sim, $debitur, 'bunga_flat', '');
    $angsuran = pick_sim($sim, $debitur, 'angsuran', '');

    // Biaya-biaya
    $biayaTabDuta = pick_sim($sim, $debitur, 'biaya_tab_duta', 0);
    $biayaAdministrasi = pick_sim($sim, $debitur, 'biaya_administrasi', 0);
    $biayaProvisi = pick_sim($sim, $debitur, 'biaya_provisi', 0);
    $biayaMaterai = pick_sim($sim, $debitur, 'biaya_materai', 0);
    $biayaAsuransi = pick_sim($sim, $debitur, 'biaya_asuransi', 0);

    // Identitas debitur (sesuaikan field bila beda)
    $namaDebitur = $debitur->nama ?? ($debitur->nama_pensiun ?? '');
    $noRek = $debitur->no_rekening ?? '';
    $alamat = $debitur->alamat_lengkap ?? ($debitur->alamat ?? '');

    // Tanggal memo
    $tglMemo = $debitur->tanggal
        ? \Carbon\Carbon::parse($debitur->tanggal)->translatedFormat('d F Y')
        : (\Carbon\Carbon::now()->translatedFormat('d F Y'));

    // Jatuh tempo
    
    
$sim = $simulation ?? ($debitur->simulation ?? null);
$totalAsuransi = ($debitur->simulation->biaya_asuransi ?? 0) + ($debitur->simulation->ass_krd ?? 0);
$ao = AccountOfficer::where('nama_dokumen', 'PERJANJIAN KREDIT')->first();

$aoNama = optional($debitur->accountOfficer)->nama ?? ($debitur->account_officer ?? '');

$tanggalDasar = $sim?->tanggal ?? $debitur->tanggal ?? now('Asia/Jakarta');
$tanggal = $tanggalDasar instanceof Carbon ? $tanggalDasar : Carbon::parse($tanggalDasar, 'Asia/Jakarta');
$hari = $tanggal->translatedFormat('l');
$tanggalText = $tanggal->translatedFormat('d F Y');
$jangka = (int)($sim?->jangka_waktu ?? $debitur->jangka_waktu ?? 1);
$jatuhTempo = $tanggal->copy()->addMonths($jangka);
$jatuhTempoText = $jatuhTempo->translatedFormat('d F Y');

    // Sandi BI default (bisa kamu ganti dari DB kalau ada)
    $sifat = pick_sim($sim, $debitur, 'sifat', '3 (Inst)');
    $jenisPenggunaan = pick_sim($sim, $debitur, 'jenis_penggunaan', '');
    $collectibility = pick_sim($sim, $debitur, 'collectibility', '1');
    $golDebitur = pick_sim($sim, $debitur, 'gol_debitur', '');
    $sektorEkonomi = pick_sim($sim, $debitur, 'sektor_ekonomi', '');
    $lokasi = pick_sim($sim, $debitur, 'lokasi', 'BANDUNG');

    // Kondisi kredit (BARU/TAMBAHAN/PERUBAHAN/PERPANJANGAN)
    $kondisi = strtoupper(pick_sim($sim, $debitur, 'kondisi_kredit', 'BARU'));

    // Wrap style helper (biar konsisten)
    $wrap = "white-space:normal;word-wrap:break-word;word-break:break-word;";
@endphp

{{-- ===========================
    ISI MEMO FASILITAS KREDIT
=========================== --}}
<table>
    {{-- ROW 1: Logo + Memorandum --}}
    <tr>
        <td colspan="4" style="height:40px;"></td>
        <td colspan="9"></td>
        <td colspan="4" style="text-align:center;font-weight:bold;font-style:italic;font-size:14px;border-bottom:2px solid #000;">
            MEMORANDUM
        </td>
    </tr>

    {{-- ROW 2: garis --}}
    <tr>
        <td colspan="17" style="border-bottom:2px solid #000;height:10px;"></td>
    </tr>

    {{-- ROW 3: Kepada --}}
    <tr>
        <td colspan="3" style="border:1px solid #000;">Kepada</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;">BAG. ADMINISTRASI KREDIT</td>
        <td colspan="5" style="border:1px solid #000;"></td>
    </tr>

    {{-- ROW 4: Tanggal --}}
    <tr>
        <td colspan="3" style="border:1px solid #000;">Tanggal</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;">{{ $tglMemo }}</td>
        <td colspan="5" style="border:1px solid #000;"></td>
    </tr>

    {{-- ROW 5: Perihal (wrap) --}}
    <tr>
        <td colspan="3" style="border:1px solid #000;">Perihal</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">Pencairan Kredit a.n</td>
        <td colspan="9" style="border:1px solid #000;background:#d9d9d9;font-weight:bold;{{ $wrap }}">
            {{ $namaDebitur }}
        </td>
    </tr>

    {{-- ROW 6: AO --}}
    <tr>
        <td colspan="3" style="border:1px solid #000;">AO</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;">{{ ucwords($aoNama) }}</td>
        <td colspan="5" style="border:1px solid #000;"></td>
    </tr>

    {{-- ROW 7: garis --}}
    <tr>
        <td colspan="17" style="border-bottom:2px solid #000;height:10px;"></td>
    </tr>

    {{-- ROW 8: SESUAI DENGAN PERJANJIAN --}}
    <tr>
        <td colspan="17" style="text-align:center;font-weight:bold;border:1px solid #000;">
            SESUAI DENGAN PERJANJIAN KREDIT
        </td>
    </tr>

    {{-- ROW 9: NOMOR --}}
    <tr>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;">NOMOR</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="8" style="border:1px solid #000;">{{getNomorUrut($debitur->id,"PERJANJIAN_KREDIT")}}</td>
        <td colspan="5" style="border:1px solid #000;"></td>
    </tr>

    {{-- ROW 10: HARAP DIBUKAKAN KREDIT --}}
    <tr>
        <td colspan="17" style="text-align:center;font-weight:bold;border:1px solid #000;">
            HARAP DIBUKAKAN KREDIT
        </td>
    </tr>

    {{-- ROW 11: NAMA + NO REK --}}
    <tr>
        <td colspan="3" style="border:1px solid #000;">NAMA</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="7" style="border:1px solid #000;{{ $wrap }}">{{ $debitur->nama_direktur }}</td>

        <td colspan="3" style="border:1px solid #000;">NO. REK</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="2" style="border:1px solid #000;">{{ $noRek }}</td>
    </tr>

    {{-- ROW 12: ALAMAT + PLAFOND --}}
    <tr>
        <td colspan="3" style="border:1px solid #000;">ALAMAT</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="7" style="border:1px solid #000;{{ $wrap }}">{{ $alamat }}</td>

        <td colspan="3" style="border:1px solid #000;">PLAFOND</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="2" style="border:1px solid #000;background:#d9d9d9;font-size:18px;font-weight:bold;text-align:center;">
            {{ $plafond }}
        </td>
    </tr>

    {{-- ROW 13: TERBILANG (wrap) --}}
    <tr>
        <td colspan="8" style="border:1px solid #000;"></td>
        <td colspan="3" style="border:1px solid #000;">Terbilang</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="5" style="border:1px solid #000;font-weight:bold;{{ $wrap }}">
            {{ function_exists('terbilang') ? strtoupper(terbilang((float)$plafond)) . ' RUPIAH' : '' }}
        </td>
    </tr>

    {{-- ROW 14: KONDISI + SANDI BI --}}
    <tr>
        <td colspan="9" style="border:1px solid #000;text-align:center;font-weight:bold;">KONDISI KREDIT</td>
        <td colspan="8" style="border:1px solid #000;text-align:center;font-weight:bold;">SANDI BI</td>
    </tr>

    {{-- ROW 15: checkbox BARU / PERUBAHAN + SIFAT --}}
    <tr>
        <td colspan="1" style="border:1px solid #000;text-align:center;">{{ $kondisi === 'BARU' ? 'X' : '' }}</td>
        <td colspan="3" style="border:1px solid #000;">BARU</td>
        <td colspan="2" style="border:1px solid #000;text-align:center;">{{ $kondisi === 'PERUBAHAN' ? 'X' : '' }}</td>
        <td colspan="3" style="border:1px solid #000;">PERUBAHAN</td>

        <td colspan="3" style="border:1px solid #000;">SIFAT</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">{{ $sifat }}</td>
    </tr>

    {{-- ROW 16: checkbox TAMBAHAN / PERPANJANGAN + JENIS PENGGUNAAN --}}
    <tr>
        <td colspan="1" style="border:1px solid #000;text-align:center;">{{ $kondisi === 'TAMBAHAN' ? 'X' : '' }}</td>
        <td colspan="3" style="border:1px solid #000;">TAMBAHAN</td>
        <td colspan="2" style="border:1px solid #000;text-align:center;">{{ $kondisi === 'PERPANJANGAN' ? 'X' : '' }}</td>
        <td colspan="3" style="border:1px solid #000;">PERPANJANGAN</td>

        <td colspan="3" style="border:1px solid #000;">JENIS PENGGUNAAN</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;{{ $wrap }}">{{ $jenisPenggunaan }}</td>
    </tr>

    {{-- ROW 17: JANGKA WAKTU + COLLECTIBILITY --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;">JANGKA WAKTU</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="3" style="border:1px solid #000;text-align:center;">{{ $jangkaWaktu }}</td>
        <td colspan="1" style="border:1px solid #000;">Bulan</td>

        <td colspan="3" style="border:1px solid #000;">COLLECTIBILITY</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">{{ $collectibility }}</td>
    </tr>

    {{-- ROW 18: JATUH TEMPO + GOL DEBITUR --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;">JATUH TEMPO</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">{{ $jatuhTempo }}</td>

        <td colspan="3" style="border:1px solid #000;">GOL. DEBITUR</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">{{ $golDebitur }}</td>
    </tr>

    {{-- ROW 19: BUNGA + SEKTOR EKONOMI --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;">BUNGA</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">
            {{ is_numeric($bungaFlat) ? number_format((float)$bungaFlat, 2, ',', '.') : $bungaFlat }}%
        </td>

        <td colspan="3" style="border:1px solid #000;">SEKTOR EKONOMI</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;{{ $wrap }}">{{ $sektorEkonomi }}</td>
    </tr>

    {{-- ROW 20: ANGSURAN + LOKASI --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;">ANGSURAN</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;text-align:center;">
            {{ $angsuran }}
        </td>

        <td colspan="3" style="border:1px solid #000;">LOKASI</td>
        <td colspan="1" style="border:1px solid #000;text-align:center;">:</td>
        <td colspan="4" style="border:1px solid #000;">{{ $lokasi }}</td>
    </tr>

    {{-- ROW 21: CATATAN --}}
    <tr>
        <td colspan="17" style="border:1px solid #000;text-align:center;font-weight:bold;">CATATAN BAGIAN ADMINISTRASI KREDIT</td>
    </tr>

    {{-- ROW 22 kosong --}}
    <tr>
        <td colspan="17" style="height:25px;border:1px solid #000;"></td>
    </tr>

    {{-- =======================
       BAGIAN BAWAH (TTD + FASILITAS)
    ======================= --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;text-align:center;">TANGGAL</td>
        <td colspan="5" style="border:1px solid #000;text-align:center;font-weight:bold;">{{ $tglMemo }}</td>

        <td colspan="4" style="border:1px solid #000;font-weight:bold;text-align:center;">DROPPING KREDIT</td>
        <td colspan="4" style="border:1px solid #000;text-align:center;font-weight:bold;">{{ $tglMemo }}</td>
    </tr>

    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;text-align:center;">ACCOUNT OFFICER</td>
        <td colspan="5" style="border:1px solid #000;font-weight:bold;text-align:center;">MENYETUJUI</td>

        <td colspan="2" style="border:1px solid #000;font-weight:bold;text-align:center;">DEBET</td>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;text-align:center;">KREDIT</td>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;text-align:center;">NOMINAL</td>
    </tr>

    {{-- Area tanda tangan + fasilitas --}}
    <tr>
        <td colspan="9" rowspan="6" style="border:1px solid #000;"></td>

        {{-- Debet besar --}}
        <td colspan="2" rowspan="6" style="border:1px solid #000;font-size:18px;font-weight:bold;text-align:center;vertical-align:middle;">
            PI INST<br> TAB.<br> HALDEN
        </td>

        <td colspan="3" style="border:1px solid #000;">TAB. HALDEN</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="2" style="border:1px solid #000;text-align:right;">{{ number_format($debitur->simulation->tabungan_wajib ?? 0,0,',','.') }},-</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">PEND. ADM KRD</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="2" style="border:1px solid #000;text-align:right;">{{ number_format($debitur->simulation->biaya_administrasi ?? 0,0,',','.') }},-</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">PEND. PROVISI</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="2" style="border:1px solid #000;text-align:right;">{{ number_format($debitur->simulation->biaya_provisi ?? 0,0,',','.') }},-</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">BY. MATERAI</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="2" style="border:1px solid #000;text-align:right;">{{ number_format($debitur->simulation->biaya_materai ?? 0,0,',','.') }},-</td>
    </tr>

    <tr>
        <td colspan="3" style="border:1px solid #000;">TTP. ASURANSI</td>
        <td colspan="1" style="border:1px solid #000;">Rp.</td>
        <td colspan="2" style="border:1px solid #000;text-align:right;">{{ $totalAsuransi > 0 ? number_format($totalAsuransi, 0, ',', '.') : '-' }}</td>
    </tr>

    <tr>
        <td colspan="6" style="border:1px solid #000;"></td>
    </tr>

    {{-- Nama AO dan menyetujui --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;text-align:center;">{{ ucwords($aoNama) }}</td>
        <td colspan="5" style="border:1px solid #000;text-align:center;">Fitra Ramdani</td>
        <td colspan="8" style="border:1px solid #000;"></td>
    </tr>

    {{-- TGL --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="5" style="border:1px solid #000;">{{ $tglMemo }}</td>

        <td colspan="4" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="4" style="border:1px solid #000;">{{ $tglMemo }}</td>
    </tr>

    {{-- PARAF --}}
    <tr>
        <td colspan="17" style="border:1px solid #000;text-align:center;font-weight:bold;">
            PARAF BAGIAN ADMINISTRASI KREDIT
        </td>
    </tr>

    {{-- DITERIMA - DILAKSANAKAN - BAGIAN - DIBUAT - DISETUJUI --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;text-align:center;font-weight:bold;">DITERIMA</td>
        <td colspan="5" style="border:1px solid #000;text-align:center;font-weight:bold;">DILAKSANAKAN</td>
        <td colspan="3" style="border:1px solid #000;text-align:center;font-weight:bold;">BAGIAN :</td>
        <td colspan="3" style="border:1px solid #000;text-align:center;font-weight:bold;">DIBUAT OLEH :</td>
        <td colspan="2" style="border:1px solid #000;text-align:center;font-weight:bold;">DISETUJUI OLEH :</td>
    </tr>

    {{-- OPERASIONAL --}}
    <tr>
        <td colspan="4" rowspan="4" style="border:1px solid #000;"></td>
        <td colspan="5" rowspan="4" style="border:1px solid #000;"></td>
        <td colspan="3" rowspan="4" style="border:1px solid #000;text-align:center;font-weight:bold;vertical-align:middle;">
            OPERASIONAL
        </td>
        <td colspan="3" rowspan="4" style="border:1px solid #000;"></td>
        <td colspan="2" rowspan="4" style="border:1px solid #000;"></td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>

    {{-- Footer tanggal --}}
    <tr>
        <td colspan="4" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="5" style="border:1px solid #000;">{{ $tglMemo }}</td>
        <td colspan="3" style="border:1px solid #000;font-weight:bold;">TGL :</td>
        <td colspan="3" style="border:1px solid #000;">{{ $tglMemo }}</td>
        <td colspan="2" style="border:1px solid #000;font-weight:bold;">TGL :</td>
    </tr>
</table>
