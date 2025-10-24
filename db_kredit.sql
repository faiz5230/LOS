/*
 Navicat Premium Data Transfer

 Source Server         : localhost - wsl
 Source Server Type    : MySQL
 Source Server Version : 80043 (8.0.43-0ubuntu0.24.04.1)
 Source Host           : localhost:3306
 Source Schema         : db_kredit

 Target Server Type    : MySQL
 Target Server Version : 80043 (8.0.43-0ubuntu0.24.04.1)
 File Encoding         : 65001

 Date: 21/10/2025 15:41:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account_officers
-- ----------------------------
DROP TABLE IF EXISTS `account_officers`;
CREATE TABLE `account_officers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokumen` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of account_officers
-- ----------------------------
INSERT INTO `account_officers` VALUES (1, '333333', 'Muhammad Aria Putra', 'Account Officer', 'DATA CALON DEBITUR', '-', '2023-12-29 04:08:28', '2023-12-29 06:11:51');
INSERT INTO `account_officers` VALUES (3, '3278030708800020', 'Fitra Ramdani, ST', 'Pejabat Eksekutif Kredit', 'PERJANJIAN KREDIT', 'Jalan Terusan Kopo No. 456 D Kabupaten Bandung', '2023-12-29 04:09:57', '2023-12-29 06:11:43');
INSERT INTO `account_officers` VALUES (4, '22222222', 'Aditya Budi Janu', 'Kepala Bagian Analis Kredit', 'ANALISA KREDIT', '-', '2023-12-29 04:10:30', '2023-12-29 06:11:20');
INSERT INTO `account_officers` VALUES (5, '1111111', 'Farid', 'Account Officer', 'DATA CALON DEBITUR', '-', '2023-12-29 04:13:47', '2023-12-29 06:11:12');

-- ----------------------------
-- Table structure for analisa_kredit
-- ----------------------------
DROP TABLE IF EXISTS `analisa_kredit`;
CREATE TABLE `analisa_kredit`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_debitur` bigint UNSIGNED NOT NULL,
  `tanggal_slik` date NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `gaji_pokok` decimal(20, 2) NOT NULL,
  `tunjangan_jabatan` decimal(20, 2) NOT NULL,
  `lembur` decimal(20, 2) NOT NULL,
  `tunjangan_lain` decimal(20, 2) NOT NULL,
  `gaji_pasangan` decimal(20, 2) NOT NULL,
  `pendapatan_lain` decimal(20, 2) NOT NULL,
  `total_pendapatan_lain` decimal(20, 2) NULL DEFAULT NULL,
  `total_pendapatan_perbulan` decimal(20, 2) NULL DEFAULT NULL,
  `total_pendapatan` decimal(20, 2) NOT NULL,
  `angsuran_bank` decimal(20, 2) NOT NULL,
  `kewajiban_pihak_ketiga` decimal(20, 2) NOT NULL,
  `angsuran_bpr` decimal(20, 2) NOT NULL,
  `total_kewajiban` decimal(20, 2) NOT NULL,
  `disposible_income` decimal(20, 2) NOT NULL,
  `disposible_income_percent` decimal(5, 2) NOT NULL,
  `rp_kewajiban` decimal(20, 2) NOT NULL,
  `rp_pendapatan` decimal(20, 2) NULL DEFAULT NULL,
  `rumus_rc` decimal(5, 2) NULL DEFAULT NULL,
  `hasil` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `analisa_kredit_id_debitur_foreign`(`id_debitur` ASC) USING BTREE,
  CONSTRAINT `analisa_kredit_id_debitur_foreign` FOREIGN KEY (`id_debitur`) REFERENCES `master_debiturs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of analisa_kredit
-- ----------------------------

-- ----------------------------
-- Table structure for detail_analisa_kredit
-- ----------------------------
DROP TABLE IF EXISTS `detail_analisa_kredit`;
CREATE TABLE `detail_analisa_kredit`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_analisa_kredit` bigint UNSIGNED NOT NULL,
  `atas_nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plafond_awal` decimal(20, 2) NOT NULL,
  `bunga` decimal(5, 2) NOT NULL,
  `outstanding` decimal(20, 2) NOT NULL,
  `jangka_waktu` int NOT NULL,
  `angsuran` decimal(20, 2) NOT NULL,
  `kolektibilitas` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `detail_analisa_kredit_id_analisa_kredit_foreign`(`id_analisa_kredit` ASC) USING BTREE,
  CONSTRAINT `detail_analisa_kredit_id_analisa_kredit_foreign` FOREIGN KEY (`id_analisa_kredit`) REFERENCES `analisa_kredit` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detail_analisa_kredit
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for insurance
-- ----------------------------
DROP TABLE IF EXISTS `insurance`;
CREATE TABLE `insurance`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_debitur` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_asuransi` date NOT NULL,
  `jangka_waktu` int NOT NULL,
  `plafon_kredit` decimal(22, 2) NOT NULL,
  `premi` decimal(22, 2) NOT NULL,
  `usia` int NOT NULL,
  `akhir_asuransi` date NOT NULL,
  `rate` decimal(22, 2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of insurance
-- ----------------------------

-- ----------------------------
-- Table structure for master_debiturs
-- ----------------------------
DROP TABLE IF EXISTS `master_debiturs`;
CREATE TABLE `master_debiturs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp_sim` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku` date NOT NULL,
  `alamat_lengkap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pendidikan_terakhir` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_rumah` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_menempati` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_kandung` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu_kandung` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah_kandung` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah_kandung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_telepon_pemohon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `agunan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ijasah` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasangan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp_sim_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tempat_lahir_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tanggal_lahir_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jumlah_tanggungan` int NOT NULL,
  `pekerjaan_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nama_perusahaan_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nama_perusahaan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat_perusahaan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_bekerja_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lama_bekerja` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon_pasangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_telepon` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kontak_tidak_serumah` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon_kontak_tidak_serumah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_id_pegawai` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bidang_usaha` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_permohonan_kredit` decimal(22, 2) NOT NULL,
  `jangka_waktu` int NOT NULL,
  `tujuan_penggunaan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_officer` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `besaran_gaji` decimal(22, 2) NOT NULL,
  `dsr` decimal(22, 2) NOT NULL,
  `angsuran` decimal(22, 2) NOT NULL,
  `id_simulation` bigint NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of master_debiturs
-- ----------------------------
INSERT INTO `master_debiturs` VALUES (9, '2025-10-13', 'luthfi', 'Laki-laki', '1111111111111111', '2025-10-13', 'testet set set set set set se t', 'BANDUNG', '2005-03-01', 's1', 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'xxx', 'xx', '1111111111111111', 'xxx', '2005-05-13', 0, 'xx', 'xx', 'xx', 'xx', 'xx', '1', 'xx', 'xxx', 'xx', 'xxx', 'xxx', 'xxx', 'xx', 'xx', 'xx', 'xx', 100000000.00, 24, 'xxx', 'Farid', 5000000.00, 40.00, 5833333.33, 9, NULL, '2025-10-13 07:15:51', '2025-10-13 07:15:51');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2023_11_25_132527_create_master_debiturs_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_12_07_032317_create_insurance_table', 2);
INSERT INTO `migrations` VALUES (7, '2023_12_07_033049_create_simulations_table', 3);
INSERT INTO `migrations` VALUES (8, '2023_12_07_080432_create_setting_params_table', 4);
INSERT INTO `migrations` VALUES (9, '2023_12_27_084449_create_nomor_urut_table', 5);
INSERT INTO `migrations` VALUES (10, '2023_12_29_034109_create_account_officers_table', 6);
INSERT INTO `migrations` VALUES (11, '2024_01_03_033420_create_analisa_kredit', 7);
INSERT INTO `migrations` VALUES (12, '2024_01_03_033519_create_detail_analisa_kredit', 7);

-- ----------------------------
-- Table structure for nomor_urut
-- ----------------------------
DROP TABLE IF EXISTS `nomor_urut`;
CREATE TABLE `nomor_urut`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomor` int NOT NULL,
  `kode` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_dokumen` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year NOT NULL,
  `id_debitur` bigint NULL DEFAULT NULL,
  `nomor_full` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of nomor_urut
-- ----------------------------
INSERT INTO `nomor_urut` VALUES (1, 1, 'KRD-INST/BPR-DP', 'MEMO_KREDIT', '12', 2023, 5, '1/KRD-INST/BPR-DP/XII/2023', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (2, 1, 'KRD-INST/BPR-DP', 'PERJANJIAN_KREDIT', '12', 2023, 5, '1/KRD-INST/BPR-DP/XII/2023', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (3, 1, 'BPR-DP/SPPK', 'SPPK', '12', 2023, 5, '1/BPR-DP/SPPK/XII/2023', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (4, 1, 'KRD-INST/BPR-DP/STTU', 'SITTU', '12', 2023, 5, '1/KRD-INST/BPR-DP/STTU/XII/2023', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (5, 1, 'AY/PERS', 'ANALISIS', '12', 2023, 5, '1/AY/PERS/XII/2023', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (6, 1, 'KRD-INST/BPR-DP', 'MEMO_KREDIT', '01', 2024, 6, '1/KRD-INST/BPR-DP/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (7, 1, 'KRD-INST/BPR-DP', 'PERJANJIAN_KREDIT', '01', 2024, 6, '1/KRD-INST/BPR-DP/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (8, 1, 'KRD-REG/BPR-DP', 'PERJANJIAN_KREDIT_REGULER', '01', 2024, 6, '1/KRD-REG/BPR-DP/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (9, 1, 'BPR-DP/SPPK', 'SPPK', '01', 2024, 6, '1/BPR-DP/SPPK/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (10, 1, 'KRD-INST/BPR-DP/STTU', 'SITTU', '01', 2024, 6, '1/KRD-INST/BPR-DP/STTU/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (11, 1, 'AY/PERS', 'ANALISIS', '01', 2024, 6, '1/AY/PERS/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (12, 1, 'KRD-INST/BPR-DP', 'MEMO_KREDIT', '01', 2024, 7, '1/KRD-INST/BPR-DP/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (13, 1, 'KRD-INST/BPR-DP', 'PERJANJIAN_KREDIT', '01', 2024, 7, '1/KRD-INST/BPR-DP/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (14, 1, 'KRD-REG/BPR-DP', 'PERJANJIAN_KREDIT_REGULER', '01', 2024, 7, '1/KRD-REG/BPR-DP/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (15, 1, 'BPR-DP/SPPK', 'SPPK', '01', 2024, 7, '1/BPR-DP/SPPK/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (16, 1, 'KRD-INST/BPR-DP/STTU', 'SITTU', '01', 2024, 7, '1/KRD-INST/BPR-DP/STTU/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (17, 1, 'AY/PERS', 'ANALISIS', '01', 2024, 7, '1/AY/PERS/I/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (18, 1, 'KRD-INST/BPR-DP', 'MEMO_KREDIT', '05', 2024, 8, '1/KRD-INST/BPR-DP/V/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (19, 1, 'KRD-INST/BPR-DP', 'PERJANJIAN_KREDIT', '05', 2024, 8, '1/KRD-INST/BPR-DP/V/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (20, 1, 'KRD-REG/BPR-DP', 'PERJANJIAN_KREDIT_REGULER', '05', 2024, 8, '1/KRD-REG/BPR-DP/V/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (21, 1, 'BPR-DP/SPPK', 'SPPK', '05', 2024, 8, '1/BPR-DP/SPPK/V/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (22, 1, 'KRD-INST/BPR-DP/STTU', 'SITTU', '05', 2024, 8, '1/KRD-INST/BPR-DP/STTU/V/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (23, 1, 'AY/PERS', 'ANALISIS', '05', 2024, 8, '1/AY/PERS/V/2024', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (24, 1, 'KRD-INST/BPR-DP', 'MEMO_KREDIT', '10', 2025, 9, '1/KRD-INST/BPR-DP/X/2025', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (25, 1, 'KRD-INST/BPR-DP', 'PERJANJIAN_KREDIT', '10', 2025, 9, '1/KRD-INST/BPR-DP/X/2025', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (26, 1, 'KRD-REG/BPR-DP', 'PERJANJIAN_KREDIT_REGULER', '10', 2025, 9, '1/KRD-REG/BPR-DP/X/2025', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (27, 1, 'BPR-DP/SPPK', 'SPPK', '10', 2025, 9, '1/BPR-DP/SPPK/X/2025', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (28, 1, 'KRD-INST/BPR-DP/STTU', 'SITTU', '10', 2025, 9, '1/KRD-INST/BPR-DP/STTU/X/2025', NULL, NULL);
INSERT INTO `nomor_urut` VALUES (29, 1, 'AY/PERS', 'ANALISIS', '10', 2025, 9, '1/AY/PERS/X/2025', NULL, NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for setting_params
-- ----------------------------
DROP TABLE IF EXISTS `setting_params`;
CREATE TABLE `setting_params`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of setting_params
-- ----------------------------
INSERT INTO `setting_params` VALUES (1, 'dsr', '40', NULL, NULL);
INSERT INTO `setting_params` VALUES (2, 'biaya_provisi', '0', NULL, NULL);
INSERT INTO `setting_params` VALUES (3, 'biaya_materai', '36000', NULL, NULL);
INSERT INTO `setting_params` VALUES (4, 'tabungan_wajib', '20000', NULL, NULL);
INSERT INTO `setting_params` VALUES (5, 'ass_krd', '0', NULL, NULL);
INSERT INTO `setting_params` VALUES (6, 'biaya_administrasi', '0.03', NULL, NULL);

-- ----------------------------
-- Table structure for simulations
-- ----------------------------
DROP TABLE IF EXISTS `simulations`;
CREATE TABLE `simulations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal_realisasi` date NOT NULL,
  `nama` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int NOT NULL,
  `besaran_gaji` decimal(22, 2) NOT NULL,
  `dsr` decimal(22, 2) NOT NULL,
  `maksimal_angsuran` decimal(22, 2) NOT NULL,
  `plafond` decimal(22, 2) NOT NULL,
  `jangka_waktu` int NOT NULL,
  `bunga_flat` decimal(22, 2) NOT NULL,
  `bunga_effektif` decimal(22, 2) NOT NULL,
  `angsuran` decimal(22, 2) NOT NULL,
  `sisa_gaji` decimal(22, 2) NOT NULL,
  `biaya_notaris` decimal(22, 2) NOT NULL,
  `biaya_provisi` decimal(22, 2) NOT NULL,
  `biaya_administrasi` decimal(22, 2) NOT NULL,
  `biaya_asuransi` decimal(22, 2) NOT NULL,
  `biaya_materai` decimal(22, 2) NOT NULL,
  `retensi` decimal(22, 2) NOT NULL,
  `tabungan_wajib` decimal(22, 2) NOT NULL,
  `rate_asuransi` decimal(22, 2) NOT NULL,
  `ass_krd` decimal(22, 2) NOT NULL,
  `bunga` decimal(22, 2) NULL DEFAULT NULL,
  `denda` decimal(22, 2) NULL DEFAULT NULL,
  `pinalty` decimal(22, 2) NULL DEFAULT NULL,
  `total_diterima` decimal(22, 2) NOT NULL,
  `jatuh_tempo` date NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `jenis_kredit` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of simulations
-- ----------------------------
INSERT INTO `simulations` VALUES (6, '2025-09-30', 'WILHELM SIAHAAN', '1951-08-02', 74, 4563300.00, 40.00, 1825320.00, 150000000.00, 120, 12.00, 18.49, 2750000.00, 1813300.00, 3900000.00, 750000.00, 2250000.00, 38500000.00, 36000.00, 2750000.00, 10000.00, 7.75, 300000.00, 0.00, 0.00, 0.00, 143904000.00, '2025-10-30', '2025-10-08 08:40:01', '2025-10-13 02:11:22', NULL, 'Pensiun');
INSERT INTO `simulations` VALUES (7, '2025-10-13', 'luthfi', '2005-03-01', 20, 5000000.00, 40.00, 2000000.00, 100000000.00, 24, 13.00, 24.00, 5250000.00, 250000.00, 0.00, 500000.00, 1500000.00, 19000.00, 36000.00, 5250000.00, 10000.00, 0.19, 300000.00, 0.00, 0.00, 0.00, 92385000.00, '2025-11-13', '2025-10-13 04:05:25', '2025-10-13 04:10:55', '2025-10-13 04:10:55', 'Pensiun');
INSERT INTO `simulations` VALUES (8, '2025-10-13', 'luthfi', '2005-03-01', 20, 5000000.00, 40.00, 2000000.00, 100000000.00, 24, 20.00, 34.65, 5833333.33, 833333.33, 0.00, 0.00, 3000000.00, 383000.00, 36000.00, 5833333.33, 20000.00, 3.85, 300000.00, NULL, NULL, NULL, 90427666.67, '2025-11-13', '2025-10-13 04:21:32', '2025-10-13 04:29:20', '2025-10-13 04:29:20', 'Pensiun');
INSERT INTO `simulations` VALUES (9, '2025-10-13', 'luthfi', '2005-03-01', 21, 5000000.00, 40.00, 2000000.00, 100000000.00, 24, 20.00, 34.65, 5833333.33, 833333.33, 0.00, 0.00, 3000000.00, 385000.00, 36000.00, 5833333.33, 20000.00, 3.85, 0.00, NULL, NULL, NULL, 90725666.67, '2025-11-13', '2025-10-13 07:13:38', '2025-10-13 07:13:38', NULL, 'Pensiun');

-- ----------------------------
-- Table structure for table_counts
-- ----------------------------
DROP TABLE IF EXISTS `table_counts`;
CREATE TABLE `table_counts`  (
  `age` int NOT NULL,
  `1` decimal(22, 2) NULL DEFAULT NULL,
  `2` decimal(22, 2) NULL DEFAULT NULL,
  `3` decimal(22, 2) NULL DEFAULT NULL,
  `4` decimal(22, 2) NULL DEFAULT NULL,
  `5` decimal(22, 2) NULL DEFAULT NULL,
  `6` decimal(22, 2) NULL DEFAULT NULL,
  `7` decimal(22, 2) NULL DEFAULT NULL,
  `8` decimal(22, 2) NULL DEFAULT NULL,
  `9` decimal(22, 2) NULL DEFAULT NULL,
  `10` decimal(22, 2) NULL DEFAULT NULL,
  `11` decimal(22, 2) NULL DEFAULT NULL,
  `12` decimal(22, 2) NULL DEFAULT NULL,
  `13` decimal(22, 2) NULL DEFAULT NULL,
  `14` decimal(22, 2) NULL DEFAULT NULL,
  `15` decimal(22, 2) NULL DEFAULT NULL,
  `16` decimal(22, 2) NULL DEFAULT NULL,
  `17` decimal(22, 2) NULL DEFAULT NULL,
  `18` decimal(22, 2) NULL DEFAULT NULL,
  `19` decimal(22, 2) NULL DEFAULT NULL,
  `20` decimal(22, 2) NULL DEFAULT NULL,
  `21` decimal(22, 2) NULL DEFAULT NULL,
  `22` decimal(22, 2) NULL DEFAULT NULL,
  `23` decimal(22, 2) NULL DEFAULT NULL,
  `24` decimal(22, 2) NULL DEFAULT NULL,
  `25` decimal(22, 2) NULL DEFAULT NULL,
  `26` decimal(22, 2) NULL DEFAULT NULL,
  `27` decimal(22, 2) NULL DEFAULT NULL,
  `28` decimal(22, 2) NULL DEFAULT NULL,
  `29` decimal(22, 2) NULL DEFAULT NULL,
  `30` decimal(22, 2) NULL DEFAULT NULL,
  `31` decimal(22, 2) NULL DEFAULT NULL,
  `32` decimal(22, 2) NULL DEFAULT NULL,
  `33` decimal(22, 2) NULL DEFAULT NULL,
  `34` decimal(22, 2) NULL DEFAULT NULL,
  `35` decimal(22, 2) NULL DEFAULT NULL,
  `36` decimal(22, 2) NULL DEFAULT NULL,
  `37` decimal(22, 2) NULL DEFAULT NULL,
  `38` decimal(22, 2) NULL DEFAULT NULL,
  `39` decimal(22, 2) NULL DEFAULT NULL,
  `40` decimal(22, 2) NULL DEFAULT NULL,
  `41` decimal(22, 2) NULL DEFAULT NULL,
  `42` decimal(22, 2) NULL DEFAULT NULL,
  `43` decimal(22, 2) NULL DEFAULT NULL,
  `44` decimal(22, 2) NULL DEFAULT NULL,
  `45` decimal(22, 2) NULL DEFAULT NULL,
  `46` decimal(22, 2) NULL DEFAULT NULL,
  `47` decimal(22, 2) NULL DEFAULT NULL,
  `48` decimal(22, 2) NULL DEFAULT NULL,
  `49` decimal(22, 2) NULL DEFAULT NULL,
  `50` decimal(22, 2) NULL DEFAULT NULL,
  `51` decimal(22, 2) NULL DEFAULT NULL,
  `52` decimal(22, 2) NULL DEFAULT NULL,
  `53` decimal(22, 2) NULL DEFAULT NULL,
  `54` decimal(22, 2) NULL DEFAULT NULL,
  `55` decimal(22, 2) NULL DEFAULT NULL,
  `56` decimal(22, 2) NULL DEFAULT NULL,
  `57` decimal(22, 2) NULL DEFAULT NULL,
  `58` decimal(22, 2) NULL DEFAULT NULL,
  `59` decimal(22, 2) NULL DEFAULT NULL,
  `60` decimal(22, 2) NULL DEFAULT NULL,
  `61` decimal(22, 2) NULL DEFAULT NULL,
  `62` decimal(22, 2) NULL DEFAULT NULL,
  `63` decimal(22, 2) NULL DEFAULT NULL,
  `64` decimal(22, 2) NULL DEFAULT NULL,
  `65` decimal(22, 2) NULL DEFAULT NULL,
  `66` decimal(22, 2) NULL DEFAULT NULL,
  `67` decimal(22, 2) NULL DEFAULT NULL,
  `68` decimal(22, 2) NULL DEFAULT NULL,
  `69` decimal(22, 2) NULL DEFAULT NULL,
  `70` decimal(22, 2) NULL DEFAULT NULL,
  `71` decimal(22, 2) NULL DEFAULT NULL,
  `72` decimal(22, 2) NULL DEFAULT NULL,
  `73` decimal(22, 2) NULL DEFAULT NULL,
  `74` decimal(22, 2) NULL DEFAULT NULL,
  `75` decimal(22, 2) NULL DEFAULT NULL,
  `76` decimal(22, 2) NULL DEFAULT NULL,
  `77` decimal(22, 2) NULL DEFAULT NULL,
  `78` decimal(22, 2) NULL DEFAULT NULL,
  `79` decimal(22, 2) NULL DEFAULT NULL,
  `80` decimal(22, 2) NULL DEFAULT NULL,
  `81` decimal(22, 2) NULL DEFAULT NULL,
  `82` decimal(22, 2) NULL DEFAULT NULL,
  `83` decimal(22, 2) NULL DEFAULT NULL,
  `84` decimal(22, 2) NULL DEFAULT NULL,
  `85` decimal(22, 2) NULL DEFAULT NULL,
  `86` decimal(22, 2) NULL DEFAULT NULL,
  `87` decimal(22, 2) NULL DEFAULT NULL,
  `88` decimal(22, 2) NULL DEFAULT NULL,
  `89` decimal(22, 2) NULL DEFAULT NULL,
  `90` decimal(22, 2) NULL DEFAULT NULL,
  `91` decimal(22, 2) NULL DEFAULT NULL,
  `92` decimal(22, 2) NULL DEFAULT NULL,
  `93` decimal(22, 2) NULL DEFAULT NULL,
  `94` decimal(22, 2) NULL DEFAULT NULL,
  `95` decimal(22, 2) NULL DEFAULT NULL,
  `96` decimal(22, 2) NULL DEFAULT NULL,
  `97` decimal(22, 2) NULL DEFAULT NULL,
  `98` decimal(22, 2) NULL DEFAULT NULL,
  `99` decimal(22, 2) NULL DEFAULT NULL,
  `100` decimal(22, 2) NULL DEFAULT NULL,
  `101` decimal(22, 2) NULL DEFAULT NULL,
  `102` decimal(22, 2) NULL DEFAULT NULL,
  `103` decimal(22, 2) NULL DEFAULT NULL,
  `104` decimal(22, 2) NULL DEFAULT NULL,
  `105` decimal(22, 2) NULL DEFAULT NULL,
  `106` decimal(22, 2) NULL DEFAULT NULL,
  `107` decimal(22, 2) NULL DEFAULT NULL,
  `108` decimal(22, 2) NULL DEFAULT NULL,
  `109` decimal(22, 2) NULL DEFAULT NULL,
  `110` decimal(22, 2) NULL DEFAULT NULL,
  `111` decimal(22, 2) NULL DEFAULT NULL,
  `112` decimal(22, 2) NULL DEFAULT NULL,
  `113` decimal(22, 2) NULL DEFAULT NULL,
  `114` decimal(22, 2) NULL DEFAULT NULL,
  `115` decimal(22, 2) NULL DEFAULT NULL,
  `116` decimal(22, 2) NULL DEFAULT NULL,
  `117` decimal(22, 2) NULL DEFAULT NULL,
  `118` decimal(22, 2) NULL DEFAULT NULL,
  `119` decimal(22, 2) NULL DEFAULT NULL,
  `120` decimal(22, 2) NULL DEFAULT NULL,
  `121` decimal(22, 2) NULL DEFAULT NULL,
  `122` decimal(22, 2) NULL DEFAULT NULL,
  `123` decimal(22, 2) NULL DEFAULT NULL,
  `124` decimal(22, 2) NULL DEFAULT NULL,
  `125` decimal(22, 2) NULL DEFAULT NULL,
  `126` decimal(22, 2) NULL DEFAULT NULL,
  `127` decimal(22, 2) NULL DEFAULT NULL,
  `128` decimal(22, 2) NULL DEFAULT NULL,
  `129` decimal(22, 2) NULL DEFAULT NULL,
  `130` decimal(22, 2) NULL DEFAULT NULL,
  `131` decimal(22, 2) NULL DEFAULT NULL,
  `132` decimal(22, 2) NULL DEFAULT NULL,
  `133` decimal(22, 2) NULL DEFAULT NULL,
  `134` decimal(22, 2) NULL DEFAULT NULL,
  `135` decimal(22, 2) NULL DEFAULT NULL,
  `136` decimal(22, 2) NULL DEFAULT NULL,
  `137` decimal(22, 2) NULL DEFAULT NULL,
  `138` decimal(22, 2) NULL DEFAULT NULL,
  `139` decimal(22, 2) NULL DEFAULT NULL,
  `140` decimal(22, 2) NULL DEFAULT NULL,
  `141` decimal(22, 2) NULL DEFAULT NULL,
  `142` decimal(22, 2) NULL DEFAULT NULL,
  `143` decimal(22, 2) NULL DEFAULT NULL,
  `144` decimal(22, 2) NULL DEFAULT NULL,
  `145` decimal(22, 2) NULL DEFAULT NULL,
  `146` decimal(22, 2) NULL DEFAULT NULL,
  `147` decimal(22, 2) NULL DEFAULT NULL,
  `148` decimal(22, 2) NULL DEFAULT NULL,
  `149` decimal(22, 2) NULL DEFAULT NULL,
  `150` decimal(22, 2) NULL DEFAULT NULL,
  `151` decimal(22, 2) NULL DEFAULT NULL,
  `152` decimal(22, 2) NULL DEFAULT NULL,
  `153` decimal(22, 2) NULL DEFAULT NULL,
  `154` decimal(22, 2) NULL DEFAULT NULL,
  `155` decimal(22, 2) NULL DEFAULT NULL,
  `156` decimal(22, 2) NULL DEFAULT NULL,
  `157` decimal(22, 2) NULL DEFAULT NULL,
  `158` decimal(22, 2) NULL DEFAULT NULL,
  `159` decimal(22, 2) NULL DEFAULT NULL,
  `160` decimal(22, 2) NULL DEFAULT NULL,
  `161` decimal(22, 2) NULL DEFAULT NULL,
  `162` decimal(22, 2) NULL DEFAULT NULL,
  `163` decimal(22, 2) NULL DEFAULT NULL,
  `164` decimal(22, 2) NULL DEFAULT NULL,
  `165` decimal(22, 2) NULL DEFAULT NULL,
  `166` decimal(22, 2) NULL DEFAULT NULL,
  `167` decimal(22, 2) NULL DEFAULT NULL,
  `168` decimal(22, 2) NULL DEFAULT NULL,
  `169` decimal(22, 2) NULL DEFAULT NULL,
  `170` decimal(22, 2) NULL DEFAULT NULL,
  `171` decimal(22, 2) NULL DEFAULT NULL,
  `172` decimal(22, 2) NULL DEFAULT NULL,
  `173` decimal(22, 2) NULL DEFAULT NULL,
  `174` decimal(22, 2) NULL DEFAULT NULL,
  `175` decimal(22, 2) NULL DEFAULT NULL,
  `176` decimal(22, 2) NULL DEFAULT NULL,
  `177` decimal(22, 2) NULL DEFAULT NULL,
  `178` decimal(22, 2) NULL DEFAULT NULL,
  `179` decimal(22, 2) NULL DEFAULT NULL,
  `180` decimal(22, 2) NULL DEFAULT NULL,
  `181` decimal(22, 2) NULL DEFAULT NULL,
  `182` decimal(22, 2) NULL DEFAULT NULL,
  `183` decimal(22, 2) NULL DEFAULT NULL,
  `184` decimal(22, 2) NULL DEFAULT NULL,
  `185` decimal(22, 2) NULL DEFAULT NULL,
  `186` decimal(22, 2) NULL DEFAULT NULL,
  `187` decimal(22, 2) NULL DEFAULT NULL,
  `188` decimal(22, 2) NULL DEFAULT NULL,
  `189` decimal(22, 2) NULL DEFAULT NULL,
  `190` decimal(22, 2) NULL DEFAULT NULL,
  `191` decimal(22, 2) NULL DEFAULT NULL,
  `192` decimal(22, 2) NULL DEFAULT NULL,
  `193` decimal(22, 2) NULL DEFAULT NULL,
  `194` decimal(22, 2) NULL DEFAULT NULL,
  `195` decimal(22, 2) NULL DEFAULT NULL,
  `196` decimal(22, 2) NULL DEFAULT NULL,
  `197` decimal(22, 2) NULL DEFAULT NULL,
  `198` decimal(22, 2) NULL DEFAULT NULL,
  `199` decimal(22, 2) NULL DEFAULT NULL,
  `200` decimal(22, 2) NULL DEFAULT NULL,
  `201` decimal(22, 2) NULL DEFAULT NULL,
  `202` decimal(22, 2) NULL DEFAULT NULL,
  `203` decimal(22, 2) NULL DEFAULT NULL,
  `204` decimal(22, 2) NULL DEFAULT NULL,
  `205` decimal(22, 2) NULL DEFAULT NULL,
  `206` decimal(22, 2) NULL DEFAULT NULL,
  `207` decimal(22, 2) NULL DEFAULT NULL,
  `208` decimal(22, 2) NULL DEFAULT NULL,
  `209` decimal(22, 2) NULL DEFAULT NULL,
  `210` decimal(22, 2) NULL DEFAULT NULL,
  `211` decimal(22, 2) NULL DEFAULT NULL,
  `212` decimal(22, 2) NULL DEFAULT NULL,
  `213` decimal(22, 2) NULL DEFAULT NULL,
  `214` decimal(22, 2) NULL DEFAULT NULL,
  `215` decimal(22, 2) NULL DEFAULT NULL,
  `216` decimal(22, 2) NULL DEFAULT NULL,
  `217` decimal(22, 2) NULL DEFAULT NULL,
  `218` decimal(22, 2) NULL DEFAULT NULL,
  `219` decimal(22, 2) NULL DEFAULT NULL,
  `220` decimal(22, 2) NULL DEFAULT NULL,
  `221` decimal(22, 2) NULL DEFAULT NULL,
  `222` decimal(22, 2) NULL DEFAULT NULL,
  `223` decimal(22, 2) NULL DEFAULT NULL,
  `224` decimal(22, 2) NULL DEFAULT NULL,
  `225` decimal(22, 2) NULL DEFAULT NULL,
  `226` decimal(22, 2) NULL DEFAULT NULL,
  `227` decimal(22, 2) NULL DEFAULT NULL,
  `228` decimal(22, 2) NULL DEFAULT NULL,
  `229` decimal(22, 2) NULL DEFAULT NULL,
  `230` decimal(22, 2) NULL DEFAULT NULL,
  `231` decimal(22, 2) NULL DEFAULT NULL,
  `232` decimal(22, 2) NULL DEFAULT NULL,
  `233` decimal(22, 2) NULL DEFAULT NULL,
  `234` decimal(22, 2) NULL DEFAULT NULL,
  `235` decimal(22, 2) NULL DEFAULT NULL,
  `236` decimal(22, 2) NULL DEFAULT NULL,
  `237` decimal(22, 2) NULL DEFAULT NULL,
  `238` decimal(22, 2) NULL DEFAULT NULL,
  `239` decimal(22, 2) NULL DEFAULT NULL,
  `240` decimal(22, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`age`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of table_counts
-- ----------------------------
INSERT INTO `table_counts` VALUES (20, 0.19, 0.38, 0.57, 0.76, 0.96, 1.15, 1.34, 1.53, 1.72, 1.81, 1.91, 1.91, 2.10, 2.29, 2.49, 2.68, 2.87, 3.06, 3.25, 3.45, 3.64, 3.73, 3.83, 3.83, 4.02, 4.22, 4.41, 4.61, 4.80, 4.99, 5.19, 5.38, 5.58, 5.67, 5.77, 5.77, 5.97, 6.16, 6.36, 6.55, 6.75, 6.94, 7.14, 7.33, 7.53, 7.62, 7.72, 7.72, 7.91, 8.11, 8.30, 8.50, 8.69, 8.88, 9.08, 9.27, 9.47, 9.56, 9.66, 9.66, 9.85, 10.05, 10.24, 10.43, 10.63, 10.82, 11.01, 11.20, 11.40, 11.49, 11.59, 11.59, 11.78, 11.97, 12.16, 12.35, 12.55, 12.74, 12.93, 13.12, 13.31, 13.40, 13.50, 13.50, 13.69, 13.88, 14.07, 14.26, 14.45, 14.63, 14.82, 15.01, 15.20, 15.30, 15.39, 15.39, 15.58, 15.76, 15.95, 16.13, 16.32, 16.50, 16.69, 16.87, 17.06, 17.15, 17.24, 17.24, 17.42, 17.60, 17.79, 17.97, 18.15, 18.33, 18.51, 18.70, 18.88, 18.97, 19.06, 19.06, 19.24, 19.42, 19.59, 19.77, 19.95, 20.13, 20.31, 20.48, 20.66, 20.75, 20.84, 20.84, 21.01, 21.19, 21.36, 21.53, 21.71, 21.88, 22.05, 22.22, 22.40, 22.48, 22.57, 22.57, 22.74, 22.90, 23.07, 23.24, 23.41, 23.57, 23.74, 23.91, 24.07, 24.16, 24.24, 24.24, 24.40, 24.57, 24.73, 24.89, 25.06, 25.22, 25.38, 25.54, 25.71, 25.79, 25.87, 25.87, 26.03, 26.18, 26.34, 26.50, 26.66, 26.81, 26.97, 27.13, 27.28, 27.36, 27.44, 27.44, 27.59, 27.75, 27.90, 28.05, 28.21, 28.36, 28.51, 28.66, 28.82, 28.89, 28.97, 28.97, 29.12, 29.27, 29.42, 29.57, 29.72, 29.87, 30.02, 30.17, 30.32, 30.40, 30.47, 30.47, 30.62, 30.76, 30.91, 31.06, 31.21, 31.35, 31.50, 31.65, 31.79, 31.87, 31.94, 31.94, 32.09, 32.23, 32.38, 32.52, 32.67, 32.81, 32.96, 33.10, 33.25, 33.32, 33.39, 33.39, 33.53, 33.68, 33.82, 33.97, 34.11, 34.25, 34.40, 34.54, 34.69, 34.76, 34.83, 34.83);
INSERT INTO `table_counts` VALUES (21, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.03, 21.20, 21.38, 21.55, 21.72, 21.89, 22.06, 22.24, 22.41, 22.49, 22.58, 22.58, 22.75, 22.92, 23.08, 23.25, 23.42, 23.59, 23.76, 23.92, 24.09, 24.18, 24.26, 24.26, 24.42, 24.59, 24.75, 24.91, 25.08, 25.24, 25.40, 25.56, 25.73, 25.81, 25.89, 25.89, 26.05, 26.21, 26.37, 26.53, 26.69, 26.84, 27.00, 27.16, 27.32, 27.40, 27.48, 27.48, 27.64, 27.79, 27.95, 28.11, 28.27, 28.42, 28.58, 28.74, 28.89, 28.97, 29.05, 29.05, 29.20, 29.36, 29.51, 29.66, 29.82, 29.97, 30.12, 30.27, 30.43, 30.50, 30.58, 30.58, 30.73, 30.89, 31.04, 31.19, 31.35, 31.50, 31.65, 31.80, 31.96, 32.03, 32.11, 32.11, 32.26, 32.41, 32.56, 32.71, 32.87, 33.02, 33.17, 33.32, 33.47, 33.54, 33.62, 33.62, 33.77, 33.92, 34.07, 34.22, 34.38, 34.53, 34.68, 34.83, 34.98, 35.05, 35.13, 35.13);
INSERT INTO `table_counts` VALUES (22, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.03, 21.20, 21.38, 21.55, 21.72, 21.89, 22.06, 22.24, 22.41, 22.49, 22.58, 22.58, 22.75, 22.92, 23.09, 23.26, 23.43, 23.59, 23.76, 23.93, 24.10, 24.19, 24.27, 24.27, 24.44, 24.60, 24.77, 24.93, 25.10, 25.26, 25.43, 25.59, 25.76, 25.84, 25.92, 25.92, 26.08, 26.24, 26.41, 26.57, 26.73, 26.89, 27.05, 27.22, 27.38, 27.46, 27.54, 27.54, 27.70, 27.86, 28.02, 28.18, 28.35, 28.51, 28.67, 28.83, 28.99, 29.07, 29.15, 29.15, 29.31, 29.47, 29.63, 29.79, 29.95, 30.10, 30.26, 30.42, 30.58, 30.66, 30.74, 30.74, 30.90, 31.06, 31.22, 31.38, 31.54, 31.69, 31.85, 32.01, 32.17, 32.25, 32.33, 32.33, 32.49, 32.65, 32.81, 32.97, 33.13, 33.28, 33.44, 33.60, 33.76, 33.84, 33.92, 33.92, 34.08, 34.24, 34.40, 34.56, 34.72, 34.87, 35.03, 35.19, 35.35, 35.43, 35.51, 35.51);
INSERT INTO `table_counts` VALUES (23, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.03, 21.21, 21.38, 21.55, 21.73, 21.90, 22.07, 22.24, 22.42, 22.50, 22.59, 22.59, 22.76, 22.93, 23.10, 23.27, 23.45, 23.62, 23.79, 23.96, 24.13, 24.21, 24.30, 24.30, 24.47, 24.64, 24.81, 24.98, 25.15, 25.31, 25.48, 25.65, 25.82, 25.91, 25.99, 25.99, 26.16, 26.32, 26.49, 26.66, 26.83, 26.99, 27.16, 27.33, 27.49, 27.58, 27.66, 27.66, 27.83, 27.99, 28.16, 28.32, 28.49, 28.66, 28.82, 28.99, 29.15, 29.24, 29.32, 29.32, 29.49, 29.65, 29.82, 29.99, 30.16, 30.32, 30.49, 30.66, 30.82, 30.91, 30.99, 30.99, 31.16, 31.32, 31.49, 31.65, 31.82, 31.99, 32.15, 32.32, 32.48, 32.57, 32.65, 32.65, 32.82, 32.99, 33.15, 33.32, 33.49, 33.66, 33.83, 33.99, 34.16, 34.25, 34.33, 34.33, 34.50, 34.67, 34.84, 35.01, 35.18, 35.34, 35.51, 35.68, 35.85, 35.94, 36.02, 36.02);
INSERT INTO `table_counts` VALUES (24, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.04, 21.21, 21.39, 21.57, 21.75, 21.92, 22.10, 22.28, 22.45, 22.54, 22.63, 22.63, 22.80, 22.98, 23.15, 23.33, 23.50, 23.67, 23.85, 24.02, 24.20, 24.28, 24.37, 24.37, 24.54, 24.72, 24.89, 25.07, 25.24, 25.41, 25.59, 25.76, 25.94, 26.02, 26.11, 26.11, 26.28, 26.46, 26.63, 26.80, 26.98, 27.15, 27.32, 27.49, 27.67, 27.75, 27.84, 27.84, 28.02, 28.19, 28.37, 28.54, 28.72, 28.89, 29.07, 29.24, 29.42, 29.50, 29.59, 29.59, 29.77, 29.94, 30.12, 30.29, 30.47, 30.64, 30.82, 30.99, 31.17, 31.25, 31.34, 31.34, 31.52, 31.69, 31.87, 32.04, 32.22, 32.40, 32.57, 32.75, 32.92, 33.01, 33.10, 33.10, 33.28, 33.46, 33.63, 33.81, 33.99, 34.17, 34.35, 34.52, 34.70, 34.79, 34.88, 34.88, 35.06, 35.24, 35.42, 35.60, 35.79, 35.97, 36.15, 36.33, 36.51, 36.60, 36.69, 36.69);
INSERT INTO `table_counts` VALUES (25, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.63, 17.81, 17.99, 18.18, 18.36, 18.54, 18.72, 18.91, 19.00, 19.09, 19.09, 19.27, 19.45, 19.63, 19.81, 20.00, 20.18, 20.36, 20.54, 20.72, 20.81, 20.90, 20.90, 21.08, 21.26, 21.44, 21.62, 21.80, 21.98, 22.16, 22.34, 22.52, 22.61, 22.70, 22.70, 22.88, 23.06, 23.24, 23.42, 23.60, 23.78, 23.96, 24.14, 24.32, 24.41, 24.50, 24.50, 24.68, 24.86, 25.04, 25.22, 25.41, 25.59, 25.77, 25.95, 26.13, 26.22, 26.31, 26.31, 26.49, 26.67, 26.86, 27.04, 27.22, 27.40, 27.58, 27.77, 27.95, 28.04, 28.13, 28.13, 28.31, 28.50, 28.68, 28.86, 29.05, 29.23, 29.41, 29.59, 29.78, 29.87, 29.96, 29.96, 30.15, 30.33, 30.52, 30.70, 30.89, 31.08, 31.26, 31.45, 31.63, 31.73, 31.82, 31.82, 32.01, 32.20, 32.38, 32.57, 32.76, 32.95, 33.14, 33.32, 33.51, 33.61, 33.70, 33.70, 33.89, 34.08, 34.27, 34.46, 34.65, 34.84, 35.03, 35.22, 35.41, 35.51, 35.60, 35.60, 35.79, 35.99, 36.18, 36.37, 36.57, 36.76, 36.95, 37.14, 37.34, 37.43, 37.53, 37.53);
INSERT INTO `table_counts` VALUES (26, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.53, 16.71, 16.90, 17.08, 17.18, 17.27, 17.27, 17.46, 17.64, 17.83, 18.01, 18.20, 18.39, 18.57, 18.76, 18.94, 19.04, 19.13, 19.13, 19.32, 19.50, 19.69, 19.87, 20.06, 20.25, 20.43, 20.62, 20.80, 20.90, 20.99, 20.99, 21.18, 21.36, 21.55, 21.73, 21.92, 22.11, 22.29, 22.48, 22.66, 22.76, 22.85, 22.85, 23.04, 23.23, 23.41, 23.60, 23.79, 23.98, 24.17, 24.35, 24.54, 24.64, 24.73, 24.73, 24.92, 25.11, 25.30, 25.49, 25.68, 25.86, 26.05, 26.24, 26.43, 26.53, 26.62, 26.62, 26.81, 27.00, 27.20, 27.39, 27.58, 27.77, 27.96, 28.16, 28.35, 28.44, 28.54, 28.54, 28.74, 28.93, 29.13, 29.32, 29.52, 29.71, 29.91, 30.10, 30.30, 30.39, 30.49, 30.49, 30.69, 30.88, 31.08, 31.28, 31.48, 31.67, 31.87, 32.07, 32.26, 32.36, 32.46, 32.46, 32.66, 32.86, 33.06, 33.26, 33.47, 33.67, 33.87, 34.07, 34.27, 34.37, 34.47, 34.47, 34.67, 34.88, 35.08, 35.29, 35.49, 35.69, 35.90, 36.10, 36.31, 36.41, 36.51, 36.51, 36.72, 36.92, 37.13, 37.34, 37.55, 37.75, 37.96, 38.17, 38.37, 38.48, 38.58, 38.58);
INSERT INTO `table_counts` VALUES (27, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.66, 14.85, 15.04, 15.23, 15.33, 15.42, 15.42, 15.61, 15.80, 15.99, 16.18, 16.37, 16.56, 16.75, 16.94, 17.13, 17.23, 17.32, 17.32, 17.51, 17.70, 17.89, 18.08, 18.27, 18.46, 18.65, 18.84, 19.03, 19.13, 19.22, 19.22, 19.41, 19.61, 19.80, 19.99, 20.19, 20.38, 20.57, 20.76, 20.96, 21.05, 21.15, 21.15, 21.34, 21.54, 21.73, 21.93, 22.12, 22.31, 22.51, 22.70, 22.90, 22.99, 23.09, 23.09, 23.29, 23.48, 23.68, 23.88, 24.08, 24.27, 24.47, 24.67, 24.86, 24.96, 25.06, 25.06, 25.26, 25.46, 25.66, 25.86, 26.07, 26.27, 26.47, 26.67, 26.87, 26.97, 27.07, 27.07, 27.27, 27.48, 27.68, 27.89, 28.09, 28.29, 28.50, 28.70, 28.91, 29.01, 29.11, 29.11, 29.32, 29.52, 29.73, 29.94, 30.15, 30.35, 30.56, 30.77, 30.97, 31.08, 31.18, 31.18, 31.39, 31.60, 31.82, 32.03, 32.24, 32.45, 32.66, 32.88, 33.09, 33.19, 33.30, 33.30, 33.52, 33.73, 33.95, 34.16, 34.38, 34.59, 34.81, 35.02, 35.24, 35.34, 35.45, 35.45, 35.67, 35.89, 36.11, 36.33, 36.55, 36.77, 36.99, 37.21, 37.43, 37.54, 37.65, 37.65, 37.87, 38.09, 38.32, 38.54, 38.76, 38.98, 39.20, 39.43, 39.65, 39.76, 39.87, 39.87);
INSERT INTO `table_counts` VALUES (28, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.19, 12.38, 12.57, 12.76, 12.95, 13.15, 13.34, 13.43, 13.53, 13.53, 13.72, 13.92, 14.11, 14.31, 14.50, 14.69, 14.89, 15.08, 15.28, 15.37, 15.47, 15.47, 15.67, 15.86, 16.06, 16.25, 16.45, 16.64, 16.84, 17.03, 17.23, 17.32, 17.42, 17.42, 17.62, 17.82, 18.01, 18.21, 18.41, 18.61, 18.81, 19.00, 19.20, 19.30, 19.40, 19.40, 19.60, 19.80, 20.00, 20.20, 20.41, 20.61, 20.81, 21.01, 21.21, 21.31, 21.41, 21.41, 21.62, 21.82, 22.03, 22.23, 22.44, 22.64, 22.85, 23.05, 23.26, 23.36, 23.46, 23.46, 23.67, 23.88, 24.09, 24.30, 24.51, 24.71, 24.92, 25.13, 25.34, 25.45, 25.55, 25.55, 25.76, 25.98, 26.19, 26.40, 26.62, 26.83, 27.04, 27.25, 27.47, 27.57, 27.68, 27.68, 27.90, 28.12, 28.33, 28.55, 28.77, 28.99, 29.21, 29.42, 29.64, 29.75, 29.86, 29.86, 30.08, 30.31, 30.53, 30.75, 30.98, 31.20, 31.42, 31.64, 31.87, 31.98, 32.09, 32.09, 32.32, 32.54, 32.77, 33.00, 33.23, 33.45, 33.68, 33.91, 34.13, 34.25, 34.36, 34.36, 34.59, 34.82, 35.06, 35.29, 35.52, 35.75, 35.98, 36.22, 36.45, 36.56, 36.68, 36.68, 36.92, 37.15, 37.39, 37.62, 37.86, 38.10, 38.33, 38.57, 38.80, 38.92, 39.04, 39.04, 39.28, 39.52, 39.76, 40.00, 40.24, 40.48, 40.72, 40.96, 41.20, 41.32, 41.44, 41.44);
INSERT INTO `table_counts` VALUES (29, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.46, 10.65, 10.84, 11.04, 11.23, 11.43, 11.52, 11.62, 11.62, 11.82, 12.01, 12.21, 12.41, 12.61, 12.80, 13.00, 13.20, 13.39, 13.49, 13.59, 13.59, 13.79, 13.99, 14.19, 14.39, 14.59, 14.79, 14.99, 15.19, 15.39, 15.49, 15.59, 15.59, 15.79, 16.00, 16.20, 16.40, 16.61, 16.81, 17.01, 17.21, 17.42, 17.52, 17.62, 17.62, 17.83, 18.04, 18.24, 18.45, 18.66, 18.87, 19.08, 19.28, 19.49, 19.60, 19.70, 19.70, 19.91, 20.12, 20.34, 20.55, 20.76, 20.97, 21.18, 21.40, 21.61, 21.71, 21.82, 21.82, 22.04, 22.26, 22.47, 22.69, 22.91, 23.13, 23.35, 23.56, 23.78, 23.89, 24.00, 24.00, 24.22, 24.44, 24.67, 24.89, 25.11, 25.33, 25.55, 25.78, 26.00, 26.11, 26.22, 26.22, 26.45, 26.68, 26.91, 27.14, 27.37, 27.59, 27.82, 28.05, 28.28, 28.40, 28.51, 28.51, 28.74, 28.98, 29.21, 29.44, 29.68, 29.91, 30.14, 30.37, 30.61, 30.72, 30.84, 30.84, 31.08, 31.32, 31.56, 31.80, 32.04, 32.28, 32.52, 32.76, 33.00, 33.12, 33.24, 33.24, 33.48, 33.73, 33.97, 34.22, 34.46, 34.70, 34.95, 35.19, 35.44, 35.56, 35.68, 35.68, 35.93, 36.18, 36.43, 36.68, 36.93, 37.18, 37.43, 37.68, 37.93, 38.06, 38.18, 38.18, 38.43, 38.69, 38.94, 39.20, 39.45, 39.70, 39.96, 40.21, 40.47, 40.59, 40.72, 40.72, 40.98, 41.24, 41.50, 41.76, 42.02, 42.27, 42.53, 42.79, 43.05, 43.18, 43.31, 43.31);
INSERT INTO `table_counts` VALUES (30, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.91, 9.10, 9.30, 9.49, 9.59, 9.69, 9.69, 9.89, 10.09, 10.29, 10.49, 10.69, 10.89, 11.09, 11.29, 11.49, 11.59, 11.69, 11.69, 11.89, 12.10, 12.30, 12.51, 12.71, 12.91, 13.12, 13.32, 13.53, 13.63, 13.73, 13.73, 13.94, 14.15, 14.35, 14.56, 14.77, 14.98, 15.19, 15.39, 15.60, 15.71, 15.81, 15.81, 16.02, 16.24, 16.45, 16.67, 16.88, 17.09, 17.31, 17.52, 17.74, 17.84, 17.95, 17.95, 18.17, 18.39, 18.61, 18.83, 19.05, 19.27, 19.49, 19.71, 19.93, 20.04, 20.15, 20.15, 20.38, 20.60, 20.83, 21.05, 21.28, 21.51, 21.73, 21.96, 22.18, 22.30, 22.41, 22.41, 22.64, 22.87, 23.11, 23.34, 23.57, 23.80, 24.03, 24.27, 24.50, 24.61, 24.73, 24.73, 24.97, 25.21, 25.45, 25.69, 25.93, 26.16, 26.40, 26.64, 26.88, 27.00, 27.12, 27.12, 27.37, 27.61, 27.86, 28.10, 28.35, 28.59, 28.84, 29.08, 29.33, 29.45, 29.57, 29.57, 29.82, 30.07, 30.33, 30.58, 30.83, 31.08, 31.33, 31.59, 31.84, 31.96, 32.09, 32.09, 32.35, 32.61, 32.86, 33.12, 33.38, 33.64, 33.90, 34.15, 34.41, 34.54, 34.67, 34.67, 34.93, 35.20, 35.46, 35.72, 35.99, 36.25, 36.51, 36.77, 37.04, 37.17, 37.30, 37.30, 37.57, 37.84, 38.11, 38.38, 38.65, 38.91, 39.18, 39.45, 39.72, 39.86, 39.99, 39.99, 40.26, 40.54, 40.81, 41.09, 41.36, 41.63, 41.91, 42.18, 42.46, 42.59, 42.73, 42.73, 43.01, 43.29, 43.57, 43.85, 44.13, 44.40, 44.68, 44.96, 45.24, 45.38, 45.52, 45.52);
INSERT INTO `table_counts` VALUES (31, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.99, 6.18, 6.38, 6.58, 6.78, 6.97, 7.17, 7.37, 7.56, 7.66, 7.76, 7.76, 7.96, 8.16, 8.36, 8.56, 8.77, 8.97, 9.17, 9.37, 9.57, 9.67, 9.77, 9.77, 9.98, 10.19, 10.39, 10.60, 10.81, 11.02, 11.23, 11.43, 11.64, 11.75, 11.85, 11.85, 12.06, 12.28, 12.49, 12.70, 12.92, 13.13, 13.34, 13.55, 13.77, 13.87, 13.98, 13.98, 14.20, 14.42, 14.64, 14.86, 15.08, 15.30, 15.52, 15.74, 15.96, 16.07, 16.18, 16.18, 16.41, 16.63, 16.86, 17.09, 17.32, 17.54, 17.77, 18.00, 18.22, 18.34, 18.45, 18.45, 18.69, 18.92, 19.16, 19.39, 19.63, 19.86, 20.10, 20.33, 20.57, 20.68, 20.80, 20.80, 21.04, 21.28, 21.53, 21.77, 22.01, 22.25, 22.49, 22.74, 22.98, 23.10, 23.22, 23.22, 23.47, 23.72, 23.97, 24.22, 24.47, 24.71, 24.96, 25.21, 25.46, 25.59, 25.71, 25.71, 25.97, 26.22, 26.48, 26.74, 27.00, 27.25, 27.51, 27.77, 28.02, 28.15, 28.28, 28.28, 28.55, 28.81, 29.08, 29.34, 29.61, 29.87, 30.14, 30.40, 30.67, 30.80, 30.93, 30.93, 31.20, 31.47, 31.74, 32.01, 32.29, 32.56, 32.83, 33.10, 33.37, 33.50, 33.64, 33.64, 33.92, 34.20, 34.47, 34.75, 35.03, 35.31, 35.59, 35.86, 36.14, 36.28, 36.42, 36.42, 36.71, 36.99, 37.28, 37.56, 37.85, 38.13, 38.42, 38.70, 38.99, 39.13, 39.27, 39.27, 39.56, 39.85, 40.14, 40.43, 40.72, 41.01, 41.30, 41.59, 41.88, 42.03, 42.17, 42.17, 42.47, 42.76, 43.06, 43.35, 43.65, 43.94, 44.24, 44.53, 44.83, 44.97, 45.12, 45.12, 45.42, 45.72, 46.02, 46.32, 46.62, 46.92, 47.22, 47.52, 47.82, 47.97, 48.12, 48.12);
INSERT INTO `table_counts` VALUES (32, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.05, 4.24, 4.44, 4.64, 4.84, 5.03, 5.23, 5.43, 5.62, 5.72, 5.82, 5.82, 6.02, 6.23, 6.43, 6.63, 6.84, 7.04, 7.24, 7.44, 7.65, 7.75, 7.85, 7.85, 8.06, 8.27, 8.48, 8.69, 8.91, 9.12, 9.33, 9.54, 9.75, 9.85, 9.96, 9.96, 10.18, 10.40, 10.61, 10.83, 11.05, 11.27, 11.49, 11.70, 11.92, 12.03, 12.14, 12.14, 12.37, 12.59, 12.82, 13.04, 13.27, 13.50, 13.72, 13.95, 14.17, 14.29, 14.40, 14.40, 14.64, 14.87, 15.11, 15.34, 15.58, 15.81, 16.05, 16.28, 16.52, 16.63, 16.75, 16.75, 16.99, 17.24, 17.48, 17.72, 17.97, 18.21, 18.45, 18.69, 18.94, 19.06, 19.18, 19.18, 19.43, 19.68, 19.93, 20.18, 20.44, 20.69, 20.94, 21.19, 21.44, 21.56, 21.69, 21.69, 21.95, 22.21, 22.47, 22.73, 23.00, 23.26, 23.52, 23.78, 24.04, 24.17, 24.30, 24.30, 24.57, 24.84, 25.11, 25.38, 25.65, 25.91, 26.18, 26.45, 26.72, 26.86, 26.99, 26.99, 27.27, 27.54, 27.82, 28.10, 28.38, 28.65, 28.93, 29.21, 29.48, 29.62, 29.76, 29.76, 30.05, 30.33, 30.62, 30.90, 31.19, 31.47, 31.76, 32.04, 32.33, 32.47, 32.61, 32.61, 32.90, 33.20, 33.49, 33.78, 34.08, 34.37, 34.66, 34.95, 35.25, 35.39, 35.54, 35.54, 35.84, 36.14, 36.44, 36.74, 37.05, 37.35, 37.65, 37.95, 38.25, 38.40, 38.55, 38.55, 38.86, 39.16, 39.47, 39.77, 40.08, 40.39, 40.69, 41.00, 41.30, 41.46, 41.61, 41.61, 41.92, 42.24, 42.55, 42.86, 43.18, 43.49, 43.80, 44.11, 44.43, 44.58, 44.74, 44.74, 45.06, 45.38, 45.70, 46.02, 46.34, 46.65, 46.97, 47.29, 47.61, 47.77, 47.93, 47.93, 48.25, 48.58, 48.90, 49.23, 49.55, 49.87, 50.20, 50.52, 50.85, 51.01, 51.17, 51.17);
INSERT INTO `table_counts` VALUES (33, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.12, 2.31, 2.51, 2.71, 2.91, 3.10, 3.30, 3.50, 3.69, 3.79, 3.89, 3.89, 4.10, 4.30, 4.51, 4.71, 4.92, 5.13, 5.33, 5.54, 5.74, 5.85, 5.95, 5.95, 6.16, 6.38, 6.59, 6.81, 7.02, 7.23, 7.45, 7.66, 7.88, 7.98, 8.09, 8.09, 8.31, 8.54, 8.76, 8.98, 9.21, 9.43, 9.65, 9.87, 10.10, 10.21, 10.32, 10.32, 10.55, 10.78, 11.01, 11.24, 11.48, 11.71, 11.94, 12.17, 12.40, 12.51, 12.63, 12.63, 12.87, 13.11, 13.36, 13.60, 13.84, 14.08, 14.32, 14.57, 14.81, 14.93, 15.05, 15.05, 15.30, 15.55, 15.80, 16.05, 16.31, 16.56, 16.81, 17.06, 17.31, 17.43, 17.56, 17.56, 17.82, 18.08, 18.34, 18.60, 18.87, 19.13, 19.39, 19.65, 19.91, 20.04, 20.17, 20.17, 20.44, 20.71, 20.99, 21.26, 21.53, 21.80, 22.07, 22.35, 22.62, 22.75, 22.89, 22.89, 23.17, 23.45, 23.73, 24.01, 24.30, 24.58, 24.86, 25.14, 25.42, 25.56, 25.70, 25.70, 25.99, 26.28, 26.57, 26.86, 27.15, 27.44, 27.73, 28.02, 28.31, 28.46, 28.60, 28.60, 28.90, 29.20, 29.50, 29.80, 30.10, 30.40, 30.70, 31.00, 31.30, 31.45, 31.60, 31.60, 31.91, 32.22, 32.52, 32.83, 33.14, 33.45, 33.76, 34.06, 34.37, 34.53, 34.68, 34.68, 35.00, 35.31, 35.63, 35.95, 36.27, 36.58, 36.90, 37.22, 37.53, 37.69, 37.85, 37.85, 38.17, 38.50, 38.82, 39.15, 39.47, 39.79, 40.12, 40.44, 40.77, 40.93, 41.09, 41.09, 41.42, 41.75, 42.08, 42.41, 42.75, 43.08, 43.41, 43.74, 44.07, 44.23, 44.40, 44.40, 44.74, 45.07, 45.41, 45.75, 46.09, 46.42, 46.76, 47.10, 47.43, 47.60, 47.77, 47.77, 48.11, 48.46, 48.80, 49.15, 49.49, 49.83, 50.18, 50.52, 50.87, 51.04, 51.21, 51.21, 51.56, 51.91, 52.26, 52.61, 52.96, 53.30, 53.65, 54.00, 54.35, 54.53, 54.70, 54.70);
INSERT INTO `table_counts` VALUES (34, 0.20, 0.40, 0.60, 0.80, 1.01, 1.21, 1.41, 1.61, 1.81, 1.91, 2.01, 2.01, 2.22, 2.42, 2.63, 2.84, 3.05, 3.25, 3.46, 3.67, 3.87, 3.98, 4.08, 4.08, 4.30, 4.51, 4.73, 4.95, 5.17, 5.38, 5.60, 5.82, 6.03, 6.14, 6.25, 6.25, 6.48, 6.71, 6.93, 7.16, 7.39, 7.62, 7.85, 8.07, 8.30, 8.42, 8.53, 8.53, 8.77, 9.00, 9.24, 9.48, 9.72, 9.95, 10.19, 10.43, 10.66, 10.78, 10.90, 10.90, 11.15, 11.40, 11.64, 11.89, 12.14, 12.39, 12.64, 12.88, 13.13, 13.26, 13.38, 13.38, 13.64, 13.90, 14.16, 14.42, 14.68, 14.94, 15.20, 15.46, 15.72, 15.85, 15.98, 15.98, 16.25, 16.52, 16.79, 17.06, 17.34, 17.61, 17.88, 18.15, 18.42, 18.55, 18.69, 18.69, 18.97, 19.25, 19.54, 19.82, 20.10, 20.38, 20.66, 20.95, 21.23, 21.37, 21.51, 21.51, 21.80, 22.10, 22.39, 22.68, 22.98, 23.27, 23.56, 23.85, 24.15, 24.29, 24.44, 24.44, 24.74, 25.05, 25.35, 25.65, 25.96, 26.26, 26.56, 26.86, 27.17, 27.32, 27.47, 27.47, 27.78, 28.10, 28.41, 28.73, 29.04, 29.35, 29.67, 29.98, 30.30, 30.45, 30.61, 30.61, 30.93, 31.26, 31.58, 31.91, 32.23, 32.55, 32.88, 33.20, 33.53, 33.69, 33.85, 33.85, 34.18, 34.52, 34.85, 35.19, 35.52, 35.85, 36.19, 36.52, 36.86, 37.02, 37.19, 37.19, 37.53, 37.87, 38.21, 38.55, 38.90, 39.24, 39.58, 39.92, 40.26, 40.43, 40.60, 40.60, 40.95, 41.30, 41.65, 42.00, 42.35, 42.70, 43.05, 43.40, 43.75, 43.93, 44.10, 44.10, 44.46, 44.81, 45.17, 45.53, 45.89, 46.24, 46.60, 46.96, 47.31, 47.49, 47.67, 47.67, 48.03, 48.40, 48.76, 49.13, 49.49, 49.85, 50.22, 50.58, 50.95, 51.13, 51.31, 51.31, 51.68, 52.05, 52.42, 52.79, 53.17, 53.54, 53.91, 54.28, 54.65, 54.83, 55.02, 55.02, 55.40, 55.78, 56.15, 56.53, 56.91, 57.29, 57.67, 58.04, 58.42, 58.61, 58.80, 58.80);
INSERT INTO `table_counts` VALUES (35, 0.21, 0.42, 0.64, 0.85, 1.06, 1.27, 1.48, 1.70, 1.91, 2.01, 2.12, 2.12, 2.34, 2.56, 2.78, 3.00, 3.22, 3.43, 3.65, 3.87, 4.09, 4.20, 4.31, 4.31, 4.54, 4.77, 5.00, 5.23, 5.47, 5.70, 5.93, 6.16, 6.39, 6.50, 6.62, 6.62, 6.86, 7.11, 7.35, 7.59, 7.84, 8.08, 8.32, 8.56, 8.81, 8.93, 9.05, 9.05, 9.31, 9.56, 9.82, 10.07, 10.33, 10.58, 10.84, 11.09, 11.35, 11.47, 11.60, 11.60, 11.87, 12.13, 12.40, 12.67, 12.94, 13.20, 13.47, 13.74, 14.00, 14.14, 14.27, 14.27, 14.55, 14.83, 15.11, 15.39, 15.67, 15.95, 16.23, 16.51, 16.79, 16.93, 17.07, 17.07, 17.36, 17.66, 17.95, 18.24, 18.54, 18.83, 19.12, 19.41, 19.71, 19.85, 20.00, 20.00, 20.31, 20.61, 20.92, 21.22, 21.53, 21.83, 22.14, 22.44, 22.75, 22.90, 23.05, 23.05, 23.37, 23.68, 24.00, 24.32, 24.64, 24.95, 25.27, 25.59, 25.90, 26.06, 26.22, 26.22, 26.55, 26.88, 27.20, 27.53, 27.86, 28.19, 28.52, 28.84, 29.17, 29.34, 29.50, 29.50, 29.84, 30.18, 30.52, 30.86, 31.20, 31.54, 31.88, 32.22, 32.56, 32.73, 32.90, 32.90, 33.25, 33.60, 33.95, 34.30, 34.65, 35.00, 35.35, 35.70, 36.05, 36.23, 36.40, 36.40, 36.76, 37.12, 37.48, 37.84, 38.20, 38.56, 38.92, 39.28, 39.64, 39.82, 40.00, 40.00, 40.37, 40.74, 41.11, 41.48, 41.85, 42.21, 42.58, 42.95, 43.32, 43.51, 43.69, 43.69, 44.07, 44.44, 44.82, 45.20, 45.58, 45.95, 46.33, 46.71, 47.08, 47.27, 47.46, 47.46, 47.85, 48.23, 48.62, 49.00, 49.39, 49.77, 50.16, 50.54, 50.93, 51.12, 51.31, 51.31, 51.70, 52.10, 52.49, 52.88, 53.28, 53.67, 54.06, 54.45, 54.85, 55.04, 55.24, 55.24, 55.64, 56.04, 56.44, 56.84, 57.25, 57.65, 58.05, 58.45, 58.85, 59.05, 59.25, 59.25, 59.66, 60.07, 60.48, 60.89, 61.30, 61.70, 62.11, 62.52, 62.93, 63.14, 63.34, 63.34);
INSERT INTO `table_counts` VALUES (36, 0.23, 0.45, 0.68, 0.90, 1.13, 1.35, 1.58, 1.80, 2.03, 2.14, 2.25, 2.25, 2.48, 2.72, 2.95, 3.19, 3.42, 3.65, 3.89, 4.12, 4.36, 4.47, 4.59, 4.59, 4.84, 5.09, 5.33, 5.58, 5.83, 6.08, 6.33, 6.57, 6.82, 6.95, 7.07, 7.07, 7.33, 7.59, 7.85, 8.11, 8.37, 8.63, 8.89, 9.15, 9.41, 9.54, 9.67, 9.67, 9.95, 10.22, 10.50, 10.77, 11.05, 11.32, 11.60, 11.87, 12.15, 12.28, 12.42, 12.42, 12.71, 13.00, 13.29, 13.58, 13.87, 14.15, 14.44, 14.73, 15.02, 15.17, 15.31, 15.31, 15.61, 15.92, 16.22, 16.52, 16.83, 17.13, 17.43, 17.73, 18.04, 18.19, 18.34, 18.34, 18.66, 18.97, 19.29, 19.60, 19.92, 20.24, 20.55, 20.87, 21.18, 21.34, 21.50, 21.50, 21.83, 22.16, 22.49, 22.82, 23.15, 23.48, 23.81, 24.14, 24.47, 24.64, 24.80, 24.80, 25.14, 25.49, 25.83, 26.17, 26.52, 26.86, 27.20, 27.54, 27.89, 28.06, 28.23, 28.23, 28.59, 28.94, 29.30, 29.65, 30.01, 30.37, 30.72, 31.08, 31.43, 31.61, 31.79, 31.79, 32.16, 32.52, 32.89, 33.26, 33.63, 33.99, 34.36, 34.73, 35.09, 35.28, 35.46, 35.46, 35.84, 36.22, 36.60, 36.98, 37.36, 37.73, 38.11, 38.49, 38.87, 39.06, 39.25, 39.25, 39.64, 40.03, 40.41, 40.80, 41.19, 41.58, 41.97, 42.35, 42.74, 42.94, 43.13, 43.13, 43.53, 43.93, 44.32, 44.72, 45.12, 45.52, 45.92, 46.31, 46.71, 46.91, 47.11, 47.11, 47.52, 47.92, 48.33, 48.74, 49.15, 49.55, 49.96, 50.37, 50.77, 50.98, 51.18, 51.18, 51.60, 52.01, 52.43, 52.84, 53.26, 53.68, 54.09, 54.51, 54.92, 55.13, 55.34, 55.34, 55.77, 56.19, 56.62, 57.04, 57.47, 57.89, 58.32, 58.74, 59.17, 59.38, 59.59, 59.59, 60.02, 60.46, 60.89, 61.33, 61.76, 62.19, 62.63, 63.06, 63.50, 63.71, 63.93, 63.93, 64.37, 64.82, 65.26, 65.71, 66.15, 66.59, 67.04, 67.48, 67.93, 68.15, 68.37, 68.37);
INSERT INTO `table_counts` VALUES (37, 0.24, 0.48, 0.72, 0.96, 1.21, 1.45, 1.69, 1.93, 2.17, 2.29, 2.41, 2.41, 2.66, 2.91, 3.16, 3.41, 3.67, 3.92, 4.17, 4.42, 4.67, 4.79, 4.92, 4.92, 5.19, 5.45, 5.72, 5.99, 6.26, 6.52, 6.79, 7.06, 7.32, 7.46, 7.59, 7.59, 7.87, 8.15, 8.43, 8.71, 9.00, 9.28, 9.56, 9.84, 10.12, 10.26, 10.40, 10.40, 10.70, 10.99, 11.29, 11.59, 11.89, 12.18, 12.48, 12.78, 13.07, 13.22, 13.37, 13.37, 13.68, 14.00, 14.31, 14.62, 14.94, 15.25, 15.56, 15.87, 16.19, 16.34, 16.50, 16.50, 16.83, 17.16, 17.48, 17.81, 18.14, 18.47, 18.80, 19.12, 19.45, 19.62, 19.78, 19.78, 20.12, 20.47, 20.81, 21.15, 21.50, 21.84, 22.18, 22.52, 22.87, 23.04, 23.21, 23.21, 23.57, 23.92, 24.28, 24.64, 25.00, 25.35, 25.71, 26.07, 26.42, 26.60, 26.78, 26.78, 27.15, 27.52, 27.90, 28.27, 28.64, 29.01, 29.38, 29.76, 30.13, 30.31, 30.50, 30.50, 30.88, 31.27, 31.65, 32.04, 32.42, 32.80, 33.19, 33.57, 33.96, 34.15, 34.34, 34.34, 34.74, 35.13, 35.53, 35.93, 36.33, 36.72, 37.12, 37.52, 37.91, 38.11, 38.31, 38.31, 38.72, 39.13, 39.53, 39.94, 40.35, 40.76, 41.17, 41.57, 41.98, 42.19, 42.39, 42.39, 42.81, 43.23, 43.65, 44.07, 44.49, 44.91, 45.33, 45.75, 46.17, 46.38, 46.59, 46.59, 47.02, 47.45, 47.88, 48.31, 48.74, 49.16, 49.59, 50.02, 50.45, 50.67, 50.88, 50.88, 51.32, 51.76, 52.20, 52.64, 53.08, 53.52, 53.96, 54.40, 54.84, 55.06, 55.28, 55.28, 55.73, 56.18, 56.63, 57.08, 57.53, 57.98, 58.43, 58.88, 59.33, 59.56, 59.78, 59.78, 60.24, 60.70, 61.16, 61.62, 62.08, 62.54, 63.00, 63.46, 63.92, 64.15, 64.38, 64.38, 64.85, 65.32, 65.79, 66.26, 66.74, 67.21, 67.68, 68.15, 68.62, 68.85, 69.09, 69.09, 69.57, 70.05, 70.53, 71.01, 71.50, 71.98, 72.46, 72.94, 73.42, 73.66, 73.90, 73.90);
INSERT INTO `table_counts` VALUES (38, 0.26, 0.52, 0.78, 1.04, 1.30, 1.55, 1.81, 2.07, 2.33, 2.46, 2.59, 2.59, 2.86, 3.13, 3.40, 3.67, 3.95, 4.22, 4.49, 4.76, 5.03, 5.16, 5.30, 5.30, 5.59, 5.88, 6.16, 6.45, 6.74, 7.03, 7.32, 7.60, 7.89, 8.04, 8.18, 8.18, 8.49, 8.79, 9.10, 9.40, 9.71, 10.01, 10.32, 10.62, 10.93, 11.08, 11.23, 11.23, 11.55, 11.87, 12.20, 12.52, 12.84, 13.16, 13.48, 13.81, 14.13, 14.29, 14.45, 14.45, 14.79, 15.13, 15.47, 15.81, 16.15, 16.48, 16.82, 17.16, 17.50, 17.67, 17.84, 17.84, 18.20, 18.55, 18.91, 19.26, 19.62, 19.97, 20.33, 20.68, 21.04, 21.21, 21.39, 21.39, 21.76, 22.13, 22.51, 22.88, 23.25, 23.62, 23.99, 24.37, 24.74, 24.92, 25.11, 25.11, 25.50, 25.88, 26.27, 26.66, 27.05, 27.43, 27.82, 28.21, 28.59, 28.79, 28.98, 28.98, 29.38, 29.78, 30.18, 30.58, 30.99, 31.39, 31.79, 32.19, 32.59, 32.79, 32.99, 32.99, 33.41, 33.82, 34.24, 34.65, 35.07, 35.49, 35.90, 36.32, 36.73, 36.94, 37.15, 37.15, 37.58, 38.01, 38.43, 38.86, 39.29, 39.72, 40.15, 40.57, 41.00, 41.22, 41.43, 41.43, 41.87, 42.31, 42.75, 43.19, 43.64, 44.08, 44.52, 44.96, 45.40, 45.62, 45.84, 45.84, 46.29, 46.75, 47.20, 47.65, 48.11, 48.56, 49.01, 49.46, 49.92, 50.14, 50.37, 50.37, 50.83, 51.30, 51.76, 52.23, 52.69, 53.15, 53.62, 54.08, 54.55, 54.78, 55.01, 55.01, 55.49, 55.96, 56.44, 56.91, 57.39, 57.86, 58.34, 58.81, 59.29, 59.52, 59.76, 59.76, 60.25, 60.74, 61.22, 61.71, 62.20, 62.69, 63.18, 63.66, 64.15, 64.40, 64.64, 64.64, 65.14, 65.64, 66.14, 66.64, 67.14, 67.63, 68.13, 68.63, 69.13, 69.38, 69.63, 69.63, 70.14, 70.65, 71.16, 71.67, 72.18, 72.69, 73.20, 73.71, 74.22, 74.48, 74.73, 74.73, 75.25, 75.77, 76.30, 76.82, 77.34, 77.86, 78.38, 78.91, 79.43, 79.69, 79.95, 79.95);
INSERT INTO `table_counts` VALUES (39, 0.28, 0.56, 0.84, 1.12, 1.40, 1.68, 1.96, 2.24, 2.52, 2.66, 2.80, 2.80, 3.09, 3.39, 3.68, 3.97, 4.27, 4.56, 4.85, 5.14, 5.44, 5.58, 5.73, 5.73, 6.04, 6.36, 6.67, 6.98, 7.30, 7.61, 7.92, 8.23, 8.55, 8.70, 8.86, 8.86, 9.19, 9.52, 9.85, 10.18, 10.51, 10.84, 11.17, 11.50, 11.83, 12.00, 12.16, 12.16, 12.51, 12.86, 13.21, 13.56, 13.91, 14.26, 14.61, 14.96, 15.31, 15.49, 15.66, 15.66, 16.03, 16.39, 16.76, 17.13, 17.50, 17.86, 18.23, 18.60, 18.96, 19.15, 19.33, 19.33, 19.72, 20.10, 20.49, 20.87, 21.26, 21.64, 22.03, 22.41, 22.80, 22.99, 23.18, 23.18, 23.58, 23.98, 24.39, 24.79, 25.19, 25.59, 25.99, 26.40, 26.80, 27.00, 27.20, 27.20, 27.62, 28.04, 28.46, 28.88, 29.30, 29.71, 30.13, 30.55, 30.97, 31.18, 31.39, 31.39, 31.82, 32.26, 32.69, 33.13, 33.56, 33.99, 34.43, 34.86, 35.30, 35.51, 35.73, 35.73, 36.18, 36.63, 37.08, 37.53, 37.98, 38.42, 38.87, 39.32, 39.77, 40.00, 40.22, 40.22, 40.68, 41.14, 41.61, 42.07, 42.53, 42.99, 43.45, 43.92, 44.38, 44.61, 44.84, 44.84, 45.32, 45.79, 46.27, 46.74, 47.22, 47.70, 48.17, 48.65, 49.12, 49.36, 49.60, 49.60, 50.09, 50.58, 51.07, 51.56, 52.05, 52.53, 53.02, 53.51, 54.00, 54.25, 54.49, 54.49, 54.99, 55.49, 56.00, 56.50, 57.00, 57.50, 58.00, 58.51, 59.01, 59.26, 59.51, 59.51, 60.03, 60.54, 61.06, 61.57, 62.09, 62.60, 63.12, 63.63, 64.15, 64.40, 64.66, 64.66, 65.19, 65.72, 66.25, 66.78, 67.31, 67.83, 68.36, 68.89, 69.42, 69.69, 69.95, 69.95, 70.49, 71.03, 71.57, 72.11, 72.66, 73.20, 73.74, 74.28, 74.82, 75.09, 75.36, 75.36, 75.91, 76.47, 77.02, 77.58, 78.13, 78.68, 79.24, 79.79, 80.35, 80.62, 80.90, 80.90, 81.47, 82.03, 82.60, 83.16, 83.73, 84.29, 84.86, 85.42, 85.99, 86.27, 86.55, 86.55);
INSERT INTO `table_counts` VALUES (40, 0.30, 0.61, 0.91, 1.21, 1.52, 1.82, 2.12, 2.42, 2.73, 2.88, 3.03, 3.03, 3.35, 3.67, 3.99, 4.31, 4.63, 4.94, 5.26, 5.58, 5.90, 6.06, 6.22, 6.22, 6.56, 6.90, 7.24, 7.58, 7.92, 8.25, 8.59, 8.93, 9.27, 9.44, 9.61, 9.61, 9.97, 10.33, 10.68, 11.04, 11.40, 11.76, 12.12, 12.47, 12.83, 13.01, 13.19, 13.19, 13.57, 13.95, 14.33, 14.71, 15.09, 15.46, 15.84, 16.22, 16.60, 16.79, 16.98, 16.98, 17.38, 17.78, 18.17, 18.57, 18.97, 19.37, 19.77, 20.16, 20.56, 20.76, 20.96, 20.96, 21.38, 21.79, 22.21, 22.63, 23.05, 23.46, 23.88, 24.30, 24.71, 24.92, 25.13, 25.13, 25.57, 26.00, 26.44, 26.87, 27.31, 27.74, 28.18, 28.61, 29.05, 29.26, 29.48, 29.48, 29.93, 30.39, 30.84, 31.29, 31.75, 32.20, 32.65, 33.10, 33.56, 33.78, 34.01, 34.01, 34.48, 34.95, 35.41, 35.88, 36.35, 36.82, 37.29, 37.75, 38.22, 38.46, 38.69, 38.69, 39.18, 39.66, 40.15, 40.63, 41.12, 41.60, 42.09, 42.57, 43.06, 43.30, 43.54, 43.54, 44.04, 44.54, 45.04, 45.54, 46.04, 46.53, 47.03, 47.53, 48.03, 48.28, 48.53, 48.53, 49.04, 49.56, 50.07, 50.59, 51.10, 51.61, 52.13, 52.64, 53.16, 53.41, 53.67, 53.67, 54.20, 54.73, 55.26, 55.79, 56.32, 56.84, 57.37, 57.90, 58.43, 58.70, 58.96, 58.96, 59.50, 60.05, 60.59, 61.14, 61.68, 62.22, 62.77, 63.31, 63.86, 64.13, 64.40, 64.40, 64.96, 65.52, 66.08, 66.64, 67.20, 67.75, 68.31, 68.87, 69.43, 69.71, 69.99, 69.99, 70.56, 71.14, 71.71, 72.29, 72.86, 73.43, 74.01, 74.58, 75.16, 75.44, 75.73, 75.73, 76.32, 76.91, 77.49, 78.08, 78.67, 79.26, 79.85, 80.43, 81.02, 81.32, 81.61, 81.61, 82.21, 82.81, 83.41, 84.01, 84.61, 85.21, 85.81, 86.41, 87.01, 87.31, 87.61, 87.61, 88.22, 88.83, 89.44, 90.05, 90.67, 91.28, 91.89, 92.50, 93.11, 93.41, 93.72, 93.72);
INSERT INTO `table_counts` VALUES (41, 0.33, 0.66, 0.99, 1.32, 1.65, 1.98, 2.31, 2.64, 2.97, 3.14, 3.30, 3.30, 3.65, 3.99, 4.34, 4.68, 5.03, 5.38, 5.72, 6.07, 6.41, 6.59, 6.76, 6.76, 7.13, 7.49, 7.86, 8.23, 8.60, 8.96, 9.33, 9.70, 10.06, 10.25, 10.43, 10.43, 10.82, 11.21, 11.60, 11.99, 12.38, 12.76, 13.15, 13.54, 13.93, 14.13, 14.32, 14.32, 14.73, 15.14, 15.55, 15.96, 16.38, 16.79, 17.20, 17.61, 18.02, 18.22, 18.43, 18.43, 18.86, 19.29, 19.72, 20.15, 20.59, 21.02, 21.45, 21.88, 22.31, 22.52, 22.74, 22.74, 23.19, 23.64, 24.09, 24.54, 25.00, 25.45, 25.90, 26.35, 26.80, 27.02, 27.25, 27.25, 27.72, 28.19, 28.66, 29.13, 29.61, 30.08, 30.55, 31.02, 31.49, 31.72, 31.96, 31.96, 32.45, 32.94, 33.42, 33.91, 34.40, 34.89, 35.38, 35.86, 36.35, 36.60, 36.84, 36.84, 37.35, 37.85, 38.36, 38.86, 39.37, 39.88, 40.38, 40.89, 41.39, 41.65, 41.90, 41.90, 42.42, 42.95, 43.47, 43.99, 44.52, 45.04, 45.56, 46.08, 46.61, 46.87, 47.13, 47.13, 47.67, 48.21, 48.75, 49.29, 49.83, 50.37, 50.91, 51.45, 51.99, 52.26, 52.53, 52.53, 53.09, 53.64, 54.20, 54.75, 55.31, 55.87, 56.42, 56.98, 57.53, 57.81, 58.09, 58.09, 58.66, 59.24, 59.81, 60.38, 60.96, 61.53, 62.10, 62.67, 63.25, 63.53, 63.82, 63.82, 64.41, 65.00, 65.59, 66.18, 66.78, 67.37, 67.96, 68.55, 69.14, 69.43, 69.73, 69.73, 70.34, 70.94, 71.55, 72.16, 72.77, 73.37, 73.98, 74.59, 75.19, 75.50, 75.80, 75.80, 76.42, 77.04, 77.67, 78.29, 78.91, 79.53, 80.15, 80.78, 81.40, 81.71, 82.02, 82.02, 82.66, 83.29, 83.93, 84.57, 85.21, 85.84, 86.48, 87.12, 87.75, 88.07, 88.39, 88.39, 89.04, 89.69, 90.34, 90.99, 91.64, 92.29, 92.94, 93.59, 94.24, 94.57, 94.89, 94.89, 95.55, 96.21, 96.87, 97.53, 98.20, 98.86, 99.52, 100.18, 100.84, 101.17, 101.50, 101.50);
INSERT INTO `table_counts` VALUES (42, 0.36, 0.71, 1.07, 1.43, 1.79, 2.14, 2.50, 2.86, 3.21, 3.39, 3.57, 3.57, 3.95, 4.32, 4.70, 5.07, 5.45, 5.82, 6.20, 6.57, 6.95, 7.13, 7.32, 7.32, 7.72, 8.12, 8.52, 8.92, 9.32, 9.71, 10.11, 10.51, 10.91, 11.11, 11.31, 11.31, 11.73, 12.15, 12.57, 12.99, 13.42, 13.84, 14.26, 14.68, 15.10, 15.31, 15.52, 15.52, 15.97, 16.41, 16.86, 17.30, 17.75, 18.19, 18.64, 19.08, 19.53, 19.75, 19.97, 19.97, 20.44, 20.90, 21.37, 21.83, 22.30, 22.77, 23.23, 23.70, 24.16, 24.40, 24.63, 24.63, 25.12, 25.61, 26.09, 26.58, 27.07, 27.56, 28.05, 28.53, 29.02, 29.27, 29.51, 29.51, 30.02, 30.53, 31.03, 31.54, 32.05, 32.56, 33.07, 33.57, 34.08, 34.34, 34.59, 34.59, 35.12, 35.64, 36.17, 36.70, 37.23, 37.75, 38.28, 38.81, 39.33, 39.60, 39.86, 39.86, 40.41, 40.95, 41.50, 42.05, 42.60, 43.14, 43.69, 44.24, 44.78, 45.06, 45.33, 45.33, 45.90, 46.46, 47.03, 47.59, 48.16, 48.72, 49.29, 49.85, 50.42, 50.70, 50.98, 50.98, 51.56, 52.15, 52.73, 53.32, 53.90, 54.48, 55.07, 55.65, 56.24, 56.53, 56.82, 56.82, 57.42, 58.03, 58.63, 59.23, 59.84, 60.44, 61.04, 61.64, 62.25, 62.55, 62.85, 62.85, 63.47, 64.10, 64.72, 65.34, 65.97, 66.59, 67.21, 67.83, 68.46, 68.77, 69.08, 69.08, 69.72, 70.36, 71.00, 71.64, 72.29, 72.93, 73.57, 74.21, 74.85, 75.17, 75.49, 75.49, 76.15, 76.81, 77.47, 78.13, 78.79, 79.44, 80.10, 80.76, 81.42, 81.75, 82.08, 82.08, 82.76, 83.43, 84.11, 84.78, 85.46, 86.13, 86.81, 87.48, 88.16, 88.49, 88.83, 88.83, 89.52, 90.21, 90.90, 91.59, 92.28, 92.97, 93.66, 94.35, 95.04, 95.39, 95.73, 95.73, 96.43, 97.13, 97.84, 98.54, 99.24, 99.94, 100.64, 101.35, 102.05, 102.40, 102.75, 102.75, 103.47, 104.18, 104.90, 105.61, 106.33, 107.04, 107.76, 108.47, 109.19, 109.54, 109.90, 109.90);
INSERT INTO `table_counts` VALUES (43, 0.39, 0.78, 1.16, 1.55, 1.94, 2.33, 2.72, 3.10, 3.49, 3.69, 3.88, 3.88, 4.29, 4.69, 5.10, 5.51, 5.92, 6.32, 6.73, 7.14, 7.54, 7.75, 7.95, 7.95, 8.38, 8.81, 9.25, 9.68, 10.11, 10.54, 10.97, 11.41, 11.84, 12.05, 12.27, 12.27, 12.73, 13.18, 13.64, 14.10, 14.56, 15.01, 15.47, 15.93, 16.38, 16.61, 16.84, 16.84, 17.32, 17.80, 18.28, 18.76, 19.25, 19.73, 20.21, 20.69, 21.17, 21.41, 21.65, 21.65, 22.15, 22.66, 23.16, 23.67, 24.17, 24.67, 25.18, 25.68, 26.19, 26.44, 26.69, 26.69, 27.22, 27.74, 28.27, 28.79, 29.32, 29.85, 30.37, 30.90, 31.42, 31.69, 31.95, 31.95, 32.50, 33.05, 33.60, 34.15, 34.70, 35.24, 35.79, 36.34, 36.89, 37.17, 37.44, 37.44, 38.01, 38.58, 39.15, 39.72, 40.29, 40.85, 41.42, 41.99, 42.56, 42.85, 43.13, 43.13, 43.72, 44.31, 44.90, 45.49, 46.09, 46.68, 47.27, 47.86, 48.45, 48.74, 49.04, 49.04, 49.65, 50.26, 50.88, 51.49, 52.10, 52.71, 53.32, 53.94, 54.55, 54.85, 55.16, 55.16, 55.79, 56.43, 57.06, 57.70, 58.33, 58.96, 59.60, 60.23, 60.87, 61.18, 61.50, 61.50, 62.16, 62.81, 63.47, 64.12, 64.78, 65.43, 66.09, 66.74, 67.40, 67.72, 68.05, 68.05, 68.73, 69.40, 70.08, 70.76, 71.44, 72.11, 72.79, 73.47, 74.14, 74.48, 74.82, 74.82, 75.52, 76.21, 76.91, 77.60, 78.30, 79.00, 79.69, 80.39, 81.08, 81.43, 81.78, 81.78, 82.49, 83.21, 83.92, 84.64, 85.35, 86.06, 86.78, 87.49, 88.21, 88.56, 88.92, 88.92, 89.65, 90.38, 91.12, 91.85, 92.58, 93.31, 94.04, 94.78, 95.51, 95.87, 96.24, 96.24, 96.99, 97.73, 98.48, 99.22, 99.97, 100.72, 101.46, 102.21, 102.95, 103.33, 103.70, 103.70, 104.46, 105.22, 105.98, 106.74, 107.50, 108.25, 109.01, 109.77, 110.53, 110.91, 111.29, 111.29, 112.06, 112.83, 113.61, 114.38, 115.15, 115.92, 116.69, 117.47, 118.24, 118.62, 119.01, 119.01);
INSERT INTO `table_counts` VALUES (44, 0.42, 0.84, 1.26, 1.68, 2.10, 2.52, 2.94, 3.36, 3.78, 3.99, 4.20, 4.20, 4.64, 5.08, 5.53, 5.97, 6.41, 6.85, 7.29, 7.74, 8.18, 8.40, 8.62, 8.62, 9.09, 9.56, 10.02, 10.49, 10.96, 11.43, 11.90, 12.36, 12.83, 13.07, 13.30, 13.30, 13.79, 14.29, 14.78, 15.28, 15.77, 16.26, 16.76, 17.25, 17.75, 17.99, 18.24, 18.24, 18.76, 19.28, 19.80, 20.32, 20.84, 21.35, 21.87, 22.39, 22.91, 23.17, 23.43, 23.43, 23.97, 24.52, 25.06, 25.61, 26.15, 26.69, 27.24, 27.78, 28.33, 28.60, 28.87, 28.87, 29.44, 30.01, 30.58, 31.15, 31.72, 32.28, 32.85, 33.42, 33.99, 34.28, 34.56, 34.56, 35.15, 35.74, 36.34, 36.93, 37.52, 38.11, 38.70, 39.30, 39.89, 40.18, 40.48, 40.48, 41.10, 41.71, 42.33, 42.94, 43.56, 44.18, 44.79, 45.41, 46.02, 46.33, 46.64, 46.64, 47.28, 47.92, 48.56, 49.20, 49.84, 50.48, 51.12, 51.76, 52.40, 52.72, 53.04, 53.04, 53.70, 54.37, 55.03, 55.70, 56.36, 57.02, 57.69, 58.35, 59.02, 59.35, 59.68, 59.68, 60.37, 61.06, 61.75, 62.44, 63.13, 63.81, 64.50, 65.19, 65.88, 66.23, 66.57, 66.57, 67.28, 67.99, 68.71, 69.42, 70.13, 70.84, 71.55, 72.27, 72.98, 73.33, 73.69, 73.69, 74.43, 75.16, 75.90, 76.63, 77.37, 78.10, 78.84, 79.57, 80.31, 80.67, 81.04, 81.04, 81.80, 82.55, 83.31, 84.06, 84.82, 85.58, 86.33, 87.09, 87.84, 88.22, 88.60, 88.60, 89.37, 90.15, 90.92, 91.70, 92.47, 93.24, 94.02, 94.79, 95.57, 95.95, 96.34, 96.34, 97.13, 97.92, 98.71, 99.50, 100.30, 101.09, 101.88, 102.67, 103.46, 103.85, 104.25, 104.25, 105.06, 105.86, 106.67, 107.47, 108.28, 109.09, 109.89, 110.70, 111.50, 111.91, 112.31, 112.31, 113.13, 113.95, 114.77, 115.59, 116.42, 117.24, 118.06, 118.88, 119.70, 120.11, 120.52, 120.52, 121.35, 122.19, 123.02, 123.86, 124.69, 125.52, 126.36, 127.19, 128.03, 128.44, 128.86, 128.86);
INSERT INTO `table_counts` VALUES (45, 0.46, 0.91, 1.37, 1.83, 2.29, 2.74, 3.20, 3.66, 4.11, 4.34, 4.57, 4.57, 5.05, 5.52, 6.00, 6.48, 6.96, 7.43, 7.91, 8.39, 8.86, 9.10, 9.34, 9.34, 9.85, 10.35, 10.86, 11.37, 11.88, 12.38, 12.89, 13.40, 13.90, 14.16, 14.41, 14.41, 14.94, 15.48, 16.01, 16.54, 17.08, 17.61, 18.14, 18.67, 19.21, 19.47, 19.74, 19.74, 20.30, 20.86, 21.42, 21.98, 22.55, 23.11, 23.67, 24.23, 24.79, 25.07, 25.35, 25.35, 25.94, 26.53, 27.11, 27.70, 28.29, 28.88, 29.47, 30.05, 30.64, 30.94, 31.23, 31.23, 31.84, 32.46, 33.07, 33.69, 34.30, 34.91, 35.53, 36.14, 36.76, 37.06, 37.37, 37.37, 38.01, 38.65, 39.29, 39.93, 40.57, 41.21, 41.85, 42.49, 43.13, 43.45, 43.77, 43.77, 44.44, 45.11, 45.77, 46.44, 47.11, 47.78, 48.45, 49.11, 49.78, 50.12, 50.45, 50.45, 51.15, 51.84, 52.54, 53.23, 53.93, 54.62, 55.32, 56.01, 56.71, 57.05, 57.40, 57.40, 58.12, 58.84, 59.57, 60.29, 61.01, 61.73, 62.45, 63.18, 63.90, 64.26, 64.62, 64.62, 65.37, 66.12, 66.87, 67.62, 68.37, 69.11, 69.86, 70.61, 71.36, 71.74, 72.11, 72.11, 72.89, 73.66, 74.44, 75.21, 75.99, 76.76, 77.54, 78.31, 79.09, 79.47, 79.86, 79.86, 80.66, 81.45, 82.25, 83.05, 83.85, 84.64, 85.44, 86.24, 87.03, 87.43, 87.83, 87.83, 88.65, 89.47, 90.29, 91.11, 91.93, 92.74, 93.56, 94.38, 95.20, 95.61, 96.02, 96.02, 96.86, 97.70, 98.53, 99.37, 100.21, 101.05, 101.89, 102.72, 103.56, 103.98, 104.40, 104.40, 105.26, 106.11, 106.97, 107.82, 108.68, 109.53, 110.39, 111.24, 112.10, 112.52, 112.95, 112.95, 113.82, 114.69, 115.57, 116.44, 117.31, 118.18, 119.05, 119.93, 120.80, 121.23, 121.67, 121.67, 122.56, 123.44, 124.33, 125.22, 126.11, 126.99, 127.88, 128.77, 129.65, 130.10, 130.54, 130.54, 131.44, 132.34, 133.24, 134.14, 135.05, 135.95, 136.85, 137.75, 138.65, 139.10, 139.55, 139.55);
INSERT INTO `table_counts` VALUES (46, 0.49, 0.99, 1.48, 1.98, 2.47, 2.96, 3.46, 3.95, 4.45, 4.69, 4.94, 4.94, 5.46, 5.97, 6.49, 7.00, 7.52, 8.04, 8.55, 9.07, 9.58, 9.84, 10.10, 10.10, 10.65, 11.19, 11.74, 12.29, 12.84, 13.38, 13.93, 14.48, 15.02, 15.30, 15.57, 15.57, 16.15, 16.72, 17.30, 17.87, 18.45, 19.03, 19.60, 20.18, 20.75, 21.04, 21.33, 21.33, 21.94, 22.54, 23.15, 23.75, 24.36, 24.97, 25.57, 26.18, 26.78, 27.09, 27.39, 27.39, 28.03, 28.66, 29.30, 29.93, 30.57, 31.20, 31.84, 32.47, 33.11, 33.42, 33.74, 33.74, 34.40, 35.07, 35.73, 36.40, 37.06, 37.72, 38.39, 39.05, 39.72, 40.05, 40.38, 40.38, 41.08, 41.77, 42.47, 43.16, 43.86, 44.55, 45.25, 45.94, 46.64, 46.98, 47.33, 47.33, 48.06, 48.78, 49.51, 50.23, 50.96, 51.69, 52.41, 53.14, 53.86, 54.23, 54.59, 54.59, 55.35, 56.10, 56.86, 57.61, 58.37, 59.13, 59.88, 60.64, 61.39, 61.77, 62.15, 62.15, 62.94, 63.72, 64.51, 65.29, 66.08, 66.87, 67.65, 68.44, 69.22, 69.62, 70.01, 70.01, 70.82, 71.64, 72.45, 73.27, 74.08, 74.89, 75.71, 76.52, 77.34, 77.74, 78.15, 78.15, 78.99, 79.83, 80.67, 81.51, 82.36, 83.20, 84.04, 84.88, 85.72, 86.14, 86.56, 86.56, 87.43, 88.29, 89.16, 90.02, 90.89, 91.75, 92.62, 93.48, 94.35, 94.78, 95.21, 95.21, 96.10, 96.98, 97.87, 98.75, 99.64, 100.53, 101.41, 102.30, 103.18, 103.63, 104.07, 104.07, 104.98, 105.88, 106.79, 107.70, 108.61, 109.51, 110.42, 111.33, 112.23, 112.69, 113.14, 113.14, 114.06, 114.99, 115.91, 116.84, 117.76, 118.68, 119.61, 120.53, 121.46, 121.92, 122.38, 122.38, 123.32, 124.27, 125.21, 126.15, 127.10, 128.04, 128.98, 129.92, 130.87, 131.34, 131.81, 131.81, 132.77, 133.73, 134.68, 135.64, 136.60, 137.56, 138.52, 139.47, 140.43, 140.91, 141.39, 141.39, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (47, 0.53, 1.07, 1.60, 2.14, 2.67, 3.20, 3.74, 4.27, 4.81, 5.07, 5.34, 5.34, 5.90, 6.46, 7.01, 7.57, 8.13, 8.69, 9.25, 9.80, 10.36, 10.64, 10.92, 10.92, 11.51, 12.10, 12.69, 13.28, 13.87, 14.46, 15.05, 15.64, 16.23, 16.53, 16.82, 16.82, 17.44, 18.06, 18.69, 19.31, 19.93, 20.55, 21.17, 21.80, 22.42, 22.73, 23.04, 23.04, 23.70, 24.35, 25.01, 25.66, 26.32, 26.97, 27.63, 28.28, 28.94, 29.26, 29.59, 29.59, 30.28, 30.97, 31.65, 32.34, 33.03, 33.72, 34.41, 35.09, 35.78, 36.13, 36.47, 36.47, 37.19, 37.91, 38.63, 39.35, 40.08, 40.80, 41.52, 42.24, 42.96, 43.32, 43.68, 43.68, 44.44, 45.19, 45.95, 46.70, 47.46, 48.22, 48.97, 49.73, 50.48, 50.86, 51.24, 51.24, 52.03, 52.82, 53.61, 54.40, 55.19, 55.98, 56.77, 57.56, 58.35, 58.75, 59.14, 59.14, 59.96, 60.79, 61.61, 62.43, 63.26, 64.08, 64.90, 65.72, 66.55, 66.96, 67.37, 67.37, 68.23, 69.08, 69.94, 70.79, 71.65, 72.50, 73.36, 74.21, 75.07, 75.49, 75.92, 75.92, 76.81, 77.69, 78.58, 79.46, 80.35, 81.23, 82.12, 83.00, 83.89, 84.33, 84.77, 84.77, 85.68, 86.59, 87.51, 88.42, 89.33, 90.24, 91.15, 92.07, 92.98, 93.43, 93.89, 93.89, 94.83, 95.76, 96.70, 97.63, 98.57, 99.51, 100.44, 101.38, 102.31, 102.78, 103.25, 103.25, 104.21, 105.17, 106.13, 107.09, 108.05, 109.00, 109.96, 110.92, 111.88, 112.36, 112.84, 112.84, 113.82, 114.80, 115.78, 116.76, 117.75, 118.73, 119.71, 120.69, 121.67, 122.16, 122.65, 122.65, 123.65, 124.65, 125.65, 126.65, 127.65, 128.65, 129.65, 130.65, 131.65, 132.15, 132.65, 132.65, 133.67, 134.69, 135.71, 136.73, 137.75, 138.76, 139.78, 140.80, 141.82, 142.33, 142.84, 142.84, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (48, 0.58, 1.15, 1.73, 2.30, 2.88, 3.46, 4.03, 4.61, 5.18, 5.47, 5.76, 5.76, 6.36, 6.97, 7.57, 8.17, 8.78, 9.38, 9.98, 10.58, 11.19, 11.49, 11.79, 11.79, 12.43, 13.06, 13.70, 14.34, 14.98, 15.61, 16.25, 16.89, 17.52, 17.84, 18.16, 18.16, 18.83, 19.51, 20.18, 20.86, 21.53, 22.20, 22.88, 23.55, 24.23, 24.56, 24.90, 24.90, 25.61, 26.32, 27.03, 27.74, 28.45, 29.15, 29.86, 30.57, 31.28, 31.64, 31.99, 31.99, 32.74, 33.49, 34.23, 34.98, 35.73, 36.48, 37.23, 37.97, 38.72, 39.10, 39.47, 39.47, 40.26, 41.04, 41.83, 42.61, 43.40, 44.18, 44.97, 45.75, 46.54, 46.93, 47.32, 47.32, 48.14, 48.97, 49.79, 50.62, 51.44, 52.26, 53.09, 53.91, 54.74, 55.15, 55.56, 55.56, 56.42, 57.28, 58.14, 59.00, 59.86, 60.72, 61.58, 62.44, 63.30, 63.73, 64.16, 64.16, 65.06, 65.95, 66.85, 67.75, 68.65, 69.54, 70.44, 71.34, 72.23, 72.68, 73.13, 73.13, 74.06, 74.99, 75.92, 76.85, 77.78, 78.70, 79.63, 80.56, 81.49, 81.96, 82.42, 82.42, 83.38, 84.34, 85.30, 86.26, 87.22, 88.18, 89.14, 90.10, 91.06, 91.54, 92.02, 92.02, 93.01, 94.00, 94.98, 95.97, 96.96, 97.95, 98.94, 99.92, 100.91, 101.41, 101.90, 101.90, 102.91, 103.93, 104.94, 105.95, 106.97, 107.98, 108.99, 110.00, 111.02, 111.52, 112.03, 112.03, 113.07, 114.11, 115.14, 116.18, 117.22, 118.26, 119.30, 120.33, 121.37, 121.89, 122.41, 122.41, 123.47, 124.53, 125.59, 126.65, 127.71, 128.77, 129.83, 130.89, 131.95, 132.48, 133.01, 133.01, 134.09, 135.17, 136.26, 137.34, 138.42, 139.50, 140.58, 141.67, 142.75, 143.29, 143.83, 143.83, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (49, 0.62, 1.25, 1.87, 2.49, 3.12, 3.74, 4.36, 4.98, 5.61, 5.92, 6.23, 6.23, 6.88, 7.53, 8.19, 8.84, 9.49, 10.14, 10.79, 11.45, 12.10, 12.42, 12.75, 12.75, 13.44, 14.13, 14.82, 15.51, 16.20, 16.89, 17.58, 18.27, 18.96, 19.31, 19.65, 19.65, 20.38, 21.11, 21.84, 22.57, 23.31, 24.04, 24.77, 25.50, 26.23, 26.59, 26.96, 26.96, 27.73, 28.50, 29.28, 30.05, 30.82, 31.59, 32.36, 33.14, 33.91, 34.29, 34.68, 34.68, 35.49, 36.31, 37.12, 37.94, 38.75, 39.56, 40.38, 41.19, 42.01, 42.41, 42.82, 42.82, 43.68, 44.53, 45.39, 46.25, 47.11, 47.96, 48.82, 49.68, 50.53, 50.96, 51.39, 51.39, 52.29, 53.19, 54.08, 54.98, 55.88, 56.78, 57.68, 58.57, 59.47, 59.92, 60.37, 60.37, 61.31, 62.24, 63.18, 64.12, 65.06, 65.99, 66.93, 67.87, 68.80, 69.27, 69.74, 69.74, 70.72, 71.69, 72.67, 73.64, 74.62, 75.59, 76.57, 77.54, 78.52, 79.00, 79.49, 79.49, 80.50, 81.51, 82.52, 83.53, 84.54, 85.54, 86.55, 87.56, 88.57, 89.08, 89.58, 89.58, 90.62, 91.66, 92.70, 93.74, 94.78, 95.82, 96.86, 97.90, 98.94, 99.46, 99.98, 99.98, 101.05, 102.12, 103.19, 104.26, 105.33, 106.40, 107.47, 108.54, 109.61, 110.15, 110.68, 110.68, 111.78, 112.87, 113.97, 115.06, 116.16, 117.26, 118.35, 119.45, 120.54, 121.09, 121.64, 121.64, 122.76, 123.89, 125.01, 126.13, 127.26, 128.38, 129.50, 130.62, 131.75, 132.31, 132.87, 132.87, 134.02, 135.17, 136.31, 137.46, 138.61, 139.76, 140.91, 142.05, 143.20, 143.78, 144.35, 144.35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (50, 0.67, 1.35, 2.02, 2.69, 3.37, 4.04, 4.71, 5.38, 6.06, 6.39, 6.73, 6.73, 7.44, 8.14, 8.85, 9.55, 10.26, 10.97, 11.67, 12.38, 13.08, 13.44, 13.79, 13.79, 14.54, 15.29, 16.04, 16.79, 17.55, 18.30, 19.05, 19.80, 20.55, 20.92, 21.30, 21.30, 22.10, 22.89, 23.69, 24.48, 25.28, 26.08, 26.87, 27.67, 28.46, 28.86, 29.26, 29.26, 30.10, 30.94, 31.79, 32.63, 33.47, 34.31, 35.15, 36.00, 36.84, 37.26, 37.68, 37.68, 38.57, 39.46, 40.35, 41.24, 42.13, 43.01, 43.90, 44.79, 45.68, 46.13, 46.57, 46.57, 47.51, 48.44, 49.38, 50.31, 51.25, 52.18, 53.12, 54.05, 54.99, 55.45, 55.92, 55.92, 56.90, 57.88, 58.86, 59.84, 60.82, 61.79, 62.77, 63.75, 64.73, 65.22, 65.71, 65.71, 66.73, 67.75, 68.77, 69.79, 70.81, 71.83, 72.85, 73.87, 74.89, 75.40, 75.91, 75.91, 76.97, 78.03, 79.08, 80.14, 81.20, 82.26, 83.32, 84.37, 85.43, 85.96, 86.49, 86.49, 87.58, 88.68, 89.77, 90.87, 91.96, 93.05, 94.15, 95.24, 96.34, 96.88, 97.43, 97.43, 98.56, 99.68, 100.81, 101.94, 103.07, 104.19, 105.32, 106.45, 107.57, 108.14, 108.70, 108.70, 109.86, 111.01, 112.17, 113.33, 114.49, 115.64, 116.80, 117.96, 119.11, 119.69, 120.27, 120.27, 121.46, 122.65, 123.83, 125.02, 126.21, 127.40, 128.59, 129.77, 130.96, 131.56, 132.15, 132.15, 133.37, 134.58, 135.80, 137.01, 138.23, 139.44, 140.66, 141.87, 143.09, 143.69, 144.30, 144.30, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (51, 0.73, 1.47, 2.20, 2.93, 3.67, 4.40, 5.13, 5.86, 6.60, 6.96, 7.33, 7.33, 8.10, 8.87, 9.63, 10.40, 11.17, 11.94, 12.71, 13.47, 14.24, 14.63, 15.01, 15.01, 15.83, 16.65, 17.47, 18.29, 19.11, 19.92, 20.74, 21.56, 22.38, 22.79, 23.20, 23.20, 24.07, 24.94, 25.81, 26.68, 27.55, 28.42, 29.29, 30.16, 31.03, 31.47, 31.90, 31.90, 32.82, 33.74, 34.66, 35.58, 36.50, 37.42, 38.34, 39.26, 40.18, 40.64, 41.10, 41.10, 42.07, 43.04, 44.02, 44.99, 45.96, 46.93, 47.90, 48.88, 49.85, 50.33, 50.82, 50.82, 51.84, 52.86, 53.88, 54.90, 55.92, 56.93, 57.95, 58.97, 59.99, 60.50, 61.01, 61.01, 62.08, 63.14, 64.21, 65.27, 66.34, 67.40, 68.47, 69.53, 70.60, 71.13, 71.66, 71.66, 72.77, 73.88, 74.98, 76.09, 77.20, 78.31, 79.42, 80.52, 81.63, 82.19, 82.74, 82.74, 83.89, 85.04, 86.18, 87.33, 88.48, 89.63, 90.78, 91.92, 93.07, 93.65, 94.22, 94.22, 95.40, 96.59, 97.77, 98.96, 100.14, 101.32, 102.51, 103.69, 104.88, 105.47, 106.06, 106.06, 107.28, 108.50, 109.72, 110.94, 112.16, 113.38, 114.60, 115.82, 117.04, 117.65, 118.26, 118.26, 119.51, 120.77, 122.02, 123.28, 124.53, 125.78, 127.04, 128.29, 129.55, 130.17, 130.80, 130.80, 132.09, 133.37, 134.66, 135.94, 137.23, 138.52, 139.80, 141.09, 142.37, 143.02, 143.66, 143.66, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (52, 0.80, 1.60, 2.40, 3.20, 4.00, 4.79, 5.59, 6.39, 7.19, 7.59, 7.99, 7.99, 8.83, 9.67, 10.51, 11.35, 12.19, 13.02, 13.86, 14.70, 15.54, 15.96, 16.38, 16.38, 17.28, 18.17, 19.07, 19.96, 20.86, 21.76, 22.65, 23.55, 24.44, 24.89, 25.34, 25.34, 26.29, 27.24, 28.19, 29.14, 30.10, 31.05, 32.00, 32.95, 33.90, 34.37, 34.85, 34.85, 35.86, 36.86, 37.87, 38.88, 39.89, 40.89, 41.90, 42.91, 43.91, 44.42, 44.92, 44.92, 45.98, 47.04, 48.10, 49.16, 50.22, 51.28, 52.34, 53.40, 54.46, 54.99, 55.52, 55.52, 56.63, 57.74, 58.85, 59.96, 61.07, 62.18, 63.29, 64.40, 65.51, 66.07, 66.62, 66.62, 67.78, 68.93, 70.09, 71.25, 72.41, 73.56, 74.72, 75.88, 77.03, 77.61, 78.19, 78.19, 79.39, 80.59, 81.79, 82.99, 84.20, 85.40, 86.60, 87.80, 89.00, 89.60, 90.20, 90.20, 91.44, 92.69, 93.93, 95.18, 96.42, 97.66, 98.91, 100.15, 101.40, 102.02, 102.64, 102.64, 103.92, 105.21, 106.49, 107.77, 109.06, 110.34, 111.62, 112.90, 114.19, 114.83, 115.47, 115.47, 116.79, 118.11, 119.43, 120.75, 122.08, 123.40, 124.72, 126.04, 127.36, 128.02, 128.68, 128.68, 130.04, 131.40, 132.76, 134.12, 135.48, 136.83, 138.19, 139.55, 140.91, 141.59, 142.27, 142.27, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (53, 0.87, 1.75, 2.62, 3.50, 4.37, 5.24, 6.12, 6.99, 7.87, 8.30, 8.74, 8.74, 9.66, 10.58, 11.50, 12.42, 13.34, 14.26, 15.18, 16.10, 17.02, 17.48, 17.94, 17.94, 18.92, 19.90, 20.88, 21.86, 22.85, 23.83, 24.81, 25.79, 26.77, 27.26, 27.75, 27.75, 28.79, 29.83, 30.87, 31.91, 32.95, 33.99, 35.03, 36.07, 37.11, 37.63, 38.15, 38.15, 39.25, 40.35, 41.45, 42.55, 43.65, 44.74, 45.84, 46.94, 48.04, 48.59, 49.14, 49.14, 50.29, 51.45, 52.60, 53.76, 54.91, 56.06, 57.22, 58.37, 59.53, 60.10, 60.68, 60.68, 61.89, 63.09, 64.30, 65.50, 66.71, 67.92, 69.12, 70.33, 71.53, 72.14, 72.74, 72.74, 74.00, 75.25, 76.51, 77.76, 79.02, 80.27, 81.53, 82.78, 84.04, 84.66, 85.29, 85.29, 86.59, 87.89, 89.20, 90.50, 91.80, 93.10, 94.40, 95.71, 97.01, 97.66, 98.31, 98.31, 99.66, 101.00, 102.35, 103.70, 105.05, 106.39, 107.74, 109.09, 110.43, 111.11, 111.78, 111.78, 113.17, 114.56, 115.95, 117.34, 118.74, 120.13, 121.52, 122.91, 124.30, 124.99, 125.69, 125.69, 127.12, 128.56, 129.99, 131.42, 132.86, 134.29, 135.72, 137.15, 138.59, 139.30, 140.02, 140.02, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (54, 0.96, 1.92, 2.88, 3.84, 4.80, 5.75, 6.71, 7.67, 8.63, 9.11, 9.59, 9.59, 10.60, 11.61, 12.61, 13.62, 14.63, 15.64, 16.65, 17.65, 18.66, 19.17, 19.67, 19.67, 20.74, 21.82, 22.89, 23.96, 25.04, 26.11, 27.18, 28.25, 29.33, 29.86, 30.40, 30.40, 31.54, 32.67, 33.81, 34.94, 36.08, 37.22, 38.35, 39.49, 40.62, 41.19, 41.76, 41.76, 42.96, 44.15, 45.35, 46.55, 47.75, 48.94, 50.14, 51.34, 52.53, 53.13, 53.73, 53.73, 54.98, 56.24, 57.49, 58.74, 60.00, 61.25, 62.50, 63.75, 65.01, 65.63, 66.26, 66.26, 67.57, 68.88, 70.19, 71.50, 72.81, 74.11, 75.42, 76.73, 78.04, 78.70, 79.35, 79.35, 80.71, 82.07, 83.43, 84.79, 86.16, 87.52, 88.88, 90.24, 91.60, 92.28, 92.96, 92.96, 94.37, 95.78, 97.19, 98.60, 100.02, 101.43, 102.84, 104.25, 105.66, 106.36, 107.07, 107.07, 108.53, 109.99, 111.45, 112.91, 114.38, 115.84, 117.30, 118.76, 120.22, 120.95, 121.68, 121.68, 123.19, 124.70, 126.20, 127.71, 129.22, 130.73, 132.24, 133.74, 135.25, 136.01, 136.76, 136.76, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (55, 1.05, 2.10, 3.15, 4.20, 5.26, 6.31, 7.36, 8.41, 9.46, 9.98, 10.51, 10.51, 11.61, 12.72, 13.82, 14.92, 16.03, 17.13, 18.23, 19.33, 20.44, 20.99, 21.54, 21.54, 22.71, 23.88, 25.05, 26.22, 27.40, 28.57, 29.74, 30.91, 32.08, 32.66, 33.25, 33.25, 34.49, 35.72, 36.96, 38.20, 39.44, 40.67, 41.91, 43.15, 44.38, 45.00, 45.62, 45.62, 46.92, 48.22, 49.52, 50.82, 52.12, 53.42, 54.72, 56.02, 57.32, 57.97, 58.62, 58.62, 59.98, 61.34, 62.70, 64.06, 65.42, 66.78, 68.14, 69.50, 70.86, 71.54, 72.22, 72.22, 73.64, 75.06, 76.48, 77.90, 79.32, 80.73, 82.15, 83.57, 84.99, 85.70, 86.41, 86.41, 87.89, 89.36, 90.84, 92.31, 93.79, 95.27, 96.74, 98.22, 99.69, 100.43, 101.17, 101.17, 102.70, 104.23, 105.76, 107.29, 108.83, 110.36, 111.89, 113.42, 114.95, 115.71, 116.48, 116.48, 118.07, 119.65, 121.24, 122.82, 124.41, 125.99, 127.58, 129.16, 130.75, 131.54, 132.33, 132.33, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (56, 1.15, 2.30, 3.45, 4.60, 5.75, 6.90, 8.05, 9.20, 10.35, 10.93, 11.50, 11.50, 12.70, 13.91, 15.11, 16.32, 17.52, 18.72, 19.93, 21.13, 22.34, 22.94, 23.54, 23.54, 24.82, 26.09, 27.37, 28.64, 29.92, 31.19, 32.47, 33.74, 35.02, 35.65, 36.29, 36.29, 37.63, 38.98, 40.32, 41.67, 43.01, 44.35, 45.70, 47.04, 48.39, 49.06, 49.73, 49.73, 51.14, 52.55, 53.96, 55.37, 56.79, 58.20, 59.61, 61.02, 62.43, 63.13, 63.84, 63.84, 65.32, 66.79, 68.27, 69.74, 71.22, 72.69, 74.17, 75.64, 77.12, 77.85, 78.59, 78.59, 80.13, 81.67, 83.21, 84.75, 86.29, 87.83, 89.37, 90.91, 92.45, 93.22, 93.99, 93.99, 95.59, 97.19, 98.80, 100.40, 102.00, 103.60, 105.20, 106.81, 108.41, 109.21, 110.01, 110.01, 111.67, 113.34, 115.00, 116.66, 118.33, 119.99, 121.65, 123.31, 124.98, 125.81, 126.64, 126.64, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (57, 1.25, 2.51, 3.76, 5.01, 6.27, 7.52, 8.77, 10.02, 11.28, 11.90, 12.53, 12.53, 13.84, 15.15, 16.46, 17.77, 19.09, 20.40, 21.71, 23.02, 24.33, 24.98, 25.64, 25.64, 27.03, 28.41, 29.80, 31.18, 32.57, 33.95, 35.34, 36.72, 38.11, 38.80, 39.49, 39.49, 40.95, 42.41, 43.87, 45.33, 46.79, 48.24, 49.70, 51.16, 52.62, 53.35, 54.08, 54.08, 55.61, 57.14, 58.67, 60.20, 61.74, 63.27, 64.80, 66.33, 67.86, 68.62, 69.39, 69.39, 70.99, 72.60, 74.20, 75.80, 77.41, 79.01, 80.61, 82.21, 83.82, 84.62, 85.42, 85.42, 87.09, 88.77, 90.44, 92.11, 93.79, 95.46, 97.13, 98.80, 100.48, 101.31, 102.15, 102.15, 103.89, 105.63, 107.37, 109.11, 110.86, 112.60, 114.34, 116.08, 117.82, 118.69, 119.56, 119.56, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (58, 1.36, 2.73, 4.09, 5.46, 6.82, 8.18, 9.55, 10.91, 12.28, 12.96, 13.64, 13.64, 15.06, 16.49, 17.91, 19.34, 20.76, 22.18, 23.61, 25.03, 26.46, 27.17, 27.88, 27.88, 29.39, 30.89, 32.40, 33.90, 35.41, 36.91, 38.42, 39.92, 41.43, 42.18, 42.93, 42.93, 44.52, 46.10, 47.69, 49.27, 50.86, 52.44, 54.03, 55.61, 57.20, 57.99, 58.78, 58.78, 60.44, 62.11, 63.77, 65.44, 67.10, 68.76, 70.43, 72.09, 73.76, 74.59, 75.42, 75.42, 77.16, 78.91, 80.65, 82.39, 84.14, 85.88, 87.62, 89.36, 91.11, 91.98, 92.85, 92.85, 94.67, 96.49, 98.31, 100.13, 101.96, 103.78, 105.60, 107.42, 109.24, 110.15, 111.06, 111.06, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (59, 1.48, 2.96, 4.45, 5.93, 7.41, 8.89, 10.37, 11.86, 13.34, 14.08, 14.82, 14.82, 16.37, 17.92, 19.46, 21.01, 22.56, 24.11, 25.66, 27.20, 28.75, 29.53, 30.30, 30.30, 31.94, 33.57, 35.21, 36.85, 38.49, 40.12, 41.76, 43.40, 45.03, 45.85, 46.67, 46.67, 48.40, 50.12, 51.85, 53.57, 55.30, 57.02, 58.75, 60.47, 62.20, 63.06, 63.92, 63.92, 65.73, 67.54, 69.36, 71.17, 72.98, 74.79, 76.60, 78.42, 80.23, 81.13, 82.04, 82.04, 83.94, 85.84, 87.74, 89.64, 91.54, 93.44, 95.34, 97.24, 99.14, 100.09, 101.04, 101.04, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (60, 1.61, 3.23, 4.84, 6.46, 8.07, 9.68, 11.30, 12.91, 14.53, 15.33, 16.14, 16.14, 17.83, 19.51, 21.20, 22.88, 24.57, 26.26, 27.94, 29.63, 31.31, 32.16, 33.00, 33.00, 34.78, 36.57, 38.35, 40.13, 41.92, 43.70, 45.48, 47.26, 49.05, 49.94, 50.83, 50.83, 52.71, 54.59, 56.48, 58.36, 60.24, 62.12, 64.00, 65.89, 67.77, 68.71, 69.65, 69.65, 71.63, 73.61, 75.58, 77.56, 79.54, 81.52, 83.50, 85.47, 87.45, 88.44, 89.43, 89.43, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (61, 1.76, 3.52, 5.28, 7.04, 8.80, 10.56, 12.32, 14.08, 15.84, 16.72, 17.60, 17.60, 19.44, 21.28, 23.12, 24.96, 26.81, 28.65, 30.49, 32.33, 34.17, 35.09, 36.01, 36.01, 37.96, 39.91, 41.86, 43.81, 45.76, 47.70, 49.65, 51.60, 53.55, 54.53, 55.50, 55.50, 57.56, 59.61, 61.67, 63.73, 65.79, 67.84, 69.90, 71.96, 74.01, 75.04, 76.07, 76.07, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (62, 1.93, 3.85, 5.78, 7.70, 9.63, 11.56, 13.48, 15.41, 17.33, 18.30, 19.26, 19.26, 21.28, 23.29, 25.31, 27.32, 29.34, 31.35, 33.37, 35.38, 37.40, 38.40, 39.41, 39.41, 41.54, 43.68, 45.81, 47.95, 50.08, 52.21, 54.35, 56.48, 58.62, 59.68, 60.75, 60.75, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (63, 2.11, 4.23, 6.34, 8.45, 10.57, 12.68, 14.79, 16.90, 19.02, 20.07, 21.13, 21.13, 23.34, 25.55, 27.76, 29.97, 32.19, 34.40, 36.61, 38.82, 41.03, 42.13, 43.24, 43.24, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts` VALUES (64, 2.32, 4.64, 6.97, 9.29, 11.61, 13.93, 16.25, 18.58, 20.90, 22.06, 23.22, 23.22, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

-- ----------------------------
-- Table structure for table_counts_copy1
-- ----------------------------
DROP TABLE IF EXISTS `table_counts_copy1`;
CREATE TABLE `table_counts_copy1`  (
  `age` int NOT NULL,
  `1` decimal(22, 2) NULL DEFAULT NULL,
  `2` decimal(22, 2) NULL DEFAULT NULL,
  `3` decimal(22, 2) NULL DEFAULT NULL,
  `4` decimal(22, 2) NULL DEFAULT NULL,
  `5` decimal(22, 2) NULL DEFAULT NULL,
  `6` decimal(22, 2) NULL DEFAULT NULL,
  `7` decimal(22, 2) NULL DEFAULT NULL,
  `8` decimal(22, 2) NULL DEFAULT NULL,
  `9` decimal(22, 2) NULL DEFAULT NULL,
  `10` decimal(22, 2) NULL DEFAULT NULL,
  `11` decimal(22, 2) NULL DEFAULT NULL,
  `12` decimal(22, 2) NULL DEFAULT NULL,
  `13` decimal(22, 2) NULL DEFAULT NULL,
  `14` decimal(22, 2) NULL DEFAULT NULL,
  `15` decimal(22, 2) NULL DEFAULT NULL,
  `16` decimal(22, 2) NULL DEFAULT NULL,
  `17` decimal(22, 2) NULL DEFAULT NULL,
  `18` decimal(22, 2) NULL DEFAULT NULL,
  `19` decimal(22, 2) NULL DEFAULT NULL,
  `20` decimal(22, 2) NULL DEFAULT NULL,
  `21` decimal(22, 2) NULL DEFAULT NULL,
  `22` decimal(22, 2) NULL DEFAULT NULL,
  `23` decimal(22, 2) NULL DEFAULT NULL,
  `24` decimal(22, 2) NULL DEFAULT NULL,
  `25` decimal(22, 2) NULL DEFAULT NULL,
  `26` decimal(22, 2) NULL DEFAULT NULL,
  `27` decimal(22, 2) NULL DEFAULT NULL,
  `28` decimal(22, 2) NULL DEFAULT NULL,
  `29` decimal(22, 2) NULL DEFAULT NULL,
  `30` decimal(22, 2) NULL DEFAULT NULL,
  `31` decimal(22, 2) NULL DEFAULT NULL,
  `32` decimal(22, 2) NULL DEFAULT NULL,
  `33` decimal(22, 2) NULL DEFAULT NULL,
  `34` decimal(22, 2) NULL DEFAULT NULL,
  `35` decimal(22, 2) NULL DEFAULT NULL,
  `36` decimal(22, 2) NULL DEFAULT NULL,
  `37` decimal(22, 2) NULL DEFAULT NULL,
  `38` decimal(22, 2) NULL DEFAULT NULL,
  `39` decimal(22, 2) NULL DEFAULT NULL,
  `40` decimal(22, 2) NULL DEFAULT NULL,
  `41` decimal(22, 2) NULL DEFAULT NULL,
  `42` decimal(22, 2) NULL DEFAULT NULL,
  `43` decimal(22, 2) NULL DEFAULT NULL,
  `44` decimal(22, 2) NULL DEFAULT NULL,
  `45` decimal(22, 2) NULL DEFAULT NULL,
  `46` decimal(22, 2) NULL DEFAULT NULL,
  `47` decimal(22, 2) NULL DEFAULT NULL,
  `48` decimal(22, 2) NULL DEFAULT NULL,
  `49` decimal(22, 2) NULL DEFAULT NULL,
  `50` decimal(22, 2) NULL DEFAULT NULL,
  `51` decimal(22, 2) NULL DEFAULT NULL,
  `52` decimal(22, 2) NULL DEFAULT NULL,
  `53` decimal(22, 2) NULL DEFAULT NULL,
  `54` decimal(22, 2) NULL DEFAULT NULL,
  `55` decimal(22, 2) NULL DEFAULT NULL,
  `56` decimal(22, 2) NULL DEFAULT NULL,
  `57` decimal(22, 2) NULL DEFAULT NULL,
  `58` decimal(22, 2) NULL DEFAULT NULL,
  `59` decimal(22, 2) NULL DEFAULT NULL,
  `60` decimal(22, 2) NULL DEFAULT NULL,
  `61` decimal(22, 2) NULL DEFAULT NULL,
  `62` decimal(22, 2) NULL DEFAULT NULL,
  `63` decimal(22, 2) NULL DEFAULT NULL,
  `64` decimal(22, 2) NULL DEFAULT NULL,
  `65` decimal(22, 2) NULL DEFAULT NULL,
  `66` decimal(22, 2) NULL DEFAULT NULL,
  `67` decimal(22, 2) NULL DEFAULT NULL,
  `68` decimal(22, 2) NULL DEFAULT NULL,
  `69` decimal(22, 2) NULL DEFAULT NULL,
  `70` decimal(22, 2) NULL DEFAULT NULL,
  `71` decimal(22, 2) NULL DEFAULT NULL,
  `72` decimal(22, 2) NULL DEFAULT NULL,
  `73` decimal(22, 2) NULL DEFAULT NULL,
  `74` decimal(22, 2) NULL DEFAULT NULL,
  `75` decimal(22, 2) NULL DEFAULT NULL,
  `76` decimal(22, 2) NULL DEFAULT NULL,
  `77` decimal(22, 2) NULL DEFAULT NULL,
  `78` decimal(22, 2) NULL DEFAULT NULL,
  `79` decimal(22, 2) NULL DEFAULT NULL,
  `80` decimal(22, 2) NULL DEFAULT NULL,
  `81` decimal(22, 2) NULL DEFAULT NULL,
  `82` decimal(22, 2) NULL DEFAULT NULL,
  `83` decimal(22, 2) NULL DEFAULT NULL,
  `84` decimal(22, 2) NULL DEFAULT NULL,
  `85` decimal(22, 2) NULL DEFAULT NULL,
  `86` decimal(22, 2) NULL DEFAULT NULL,
  `87` decimal(22, 2) NULL DEFAULT NULL,
  `88` decimal(22, 2) NULL DEFAULT NULL,
  `89` decimal(22, 2) NULL DEFAULT NULL,
  `90` decimal(22, 2) NULL DEFAULT NULL,
  `91` decimal(22, 2) NULL DEFAULT NULL,
  `92` decimal(22, 2) NULL DEFAULT NULL,
  `93` decimal(22, 2) NULL DEFAULT NULL,
  `94` decimal(22, 2) NULL DEFAULT NULL,
  `95` decimal(22, 2) NULL DEFAULT NULL,
  `96` decimal(22, 2) NULL DEFAULT NULL,
  `97` decimal(22, 2) NULL DEFAULT NULL,
  `98` decimal(22, 2) NULL DEFAULT NULL,
  `99` decimal(22, 2) NULL DEFAULT NULL,
  `100` decimal(22, 2) NULL DEFAULT NULL,
  `101` decimal(22, 2) NULL DEFAULT NULL,
  `102` decimal(22, 2) NULL DEFAULT NULL,
  `103` decimal(22, 2) NULL DEFAULT NULL,
  `104` decimal(22, 2) NULL DEFAULT NULL,
  `105` decimal(22, 2) NULL DEFAULT NULL,
  `106` decimal(22, 2) NULL DEFAULT NULL,
  `107` decimal(22, 2) NULL DEFAULT NULL,
  `108` decimal(22, 2) NULL DEFAULT NULL,
  `109` decimal(22, 2) NULL DEFAULT NULL,
  `110` decimal(22, 2) NULL DEFAULT NULL,
  `111` decimal(22, 2) NULL DEFAULT NULL,
  `112` decimal(22, 2) NULL DEFAULT NULL,
  `113` decimal(22, 2) NULL DEFAULT NULL,
  `114` decimal(22, 2) NULL DEFAULT NULL,
  `115` decimal(22, 2) NULL DEFAULT NULL,
  `116` decimal(22, 2) NULL DEFAULT NULL,
  `117` decimal(22, 2) NULL DEFAULT NULL,
  `118` decimal(22, 2) NULL DEFAULT NULL,
  `119` decimal(22, 2) NULL DEFAULT NULL,
  `120` decimal(22, 2) NULL DEFAULT NULL,
  `121` decimal(22, 2) NULL DEFAULT NULL,
  `122` decimal(22, 2) NULL DEFAULT NULL,
  `123` decimal(22, 2) NULL DEFAULT NULL,
  `124` decimal(22, 2) NULL DEFAULT NULL,
  `125` decimal(22, 2) NULL DEFAULT NULL,
  `126` decimal(22, 2) NULL DEFAULT NULL,
  `127` decimal(22, 2) NULL DEFAULT NULL,
  `128` decimal(22, 2) NULL DEFAULT NULL,
  `129` decimal(22, 2) NULL DEFAULT NULL,
  `130` decimal(22, 2) NULL DEFAULT NULL,
  `131` decimal(22, 2) NULL DEFAULT NULL,
  `132` decimal(22, 2) NULL DEFAULT NULL,
  `133` decimal(22, 2) NULL DEFAULT NULL,
  `134` decimal(22, 2) NULL DEFAULT NULL,
  `135` decimal(22, 2) NULL DEFAULT NULL,
  `136` decimal(22, 2) NULL DEFAULT NULL,
  `137` decimal(22, 2) NULL DEFAULT NULL,
  `138` decimal(22, 2) NULL DEFAULT NULL,
  `139` decimal(22, 2) NULL DEFAULT NULL,
  `140` decimal(22, 2) NULL DEFAULT NULL,
  `141` decimal(22, 2) NULL DEFAULT NULL,
  `142` decimal(22, 2) NULL DEFAULT NULL,
  `143` decimal(22, 2) NULL DEFAULT NULL,
  `144` decimal(22, 2) NULL DEFAULT NULL,
  `145` decimal(22, 2) NULL DEFAULT NULL,
  `146` decimal(22, 2) NULL DEFAULT NULL,
  `147` decimal(22, 2) NULL DEFAULT NULL,
  `148` decimal(22, 2) NULL DEFAULT NULL,
  `149` decimal(22, 2) NULL DEFAULT NULL,
  `150` decimal(22, 2) NULL DEFAULT NULL,
  `151` decimal(22, 2) NULL DEFAULT NULL,
  `152` decimal(22, 2) NULL DEFAULT NULL,
  `153` decimal(22, 2) NULL DEFAULT NULL,
  `154` decimal(22, 2) NULL DEFAULT NULL,
  `155` decimal(22, 2) NULL DEFAULT NULL,
  `156` decimal(22, 2) NULL DEFAULT NULL,
  `157` decimal(22, 2) NULL DEFAULT NULL,
  `158` decimal(22, 2) NULL DEFAULT NULL,
  `159` decimal(22, 2) NULL DEFAULT NULL,
  `160` decimal(22, 2) NULL DEFAULT NULL,
  `161` decimal(22, 2) NULL DEFAULT NULL,
  `162` decimal(22, 2) NULL DEFAULT NULL,
  `163` decimal(22, 2) NULL DEFAULT NULL,
  `164` decimal(22, 2) NULL DEFAULT NULL,
  `165` decimal(22, 2) NULL DEFAULT NULL,
  `166` decimal(22, 2) NULL DEFAULT NULL,
  `167` decimal(22, 2) NULL DEFAULT NULL,
  `168` decimal(22, 2) NULL DEFAULT NULL,
  `169` decimal(22, 2) NULL DEFAULT NULL,
  `170` decimal(22, 2) NULL DEFAULT NULL,
  `171` decimal(22, 2) NULL DEFAULT NULL,
  `172` decimal(22, 2) NULL DEFAULT NULL,
  `173` decimal(22, 2) NULL DEFAULT NULL,
  `174` decimal(22, 2) NULL DEFAULT NULL,
  `175` decimal(22, 2) NULL DEFAULT NULL,
  `176` decimal(22, 2) NULL DEFAULT NULL,
  `177` decimal(22, 2) NULL DEFAULT NULL,
  `178` decimal(22, 2) NULL DEFAULT NULL,
  `179` decimal(22, 2) NULL DEFAULT NULL,
  `180` decimal(22, 2) NULL DEFAULT NULL,
  `181` decimal(22, 2) NULL DEFAULT NULL,
  `182` decimal(22, 2) NULL DEFAULT NULL,
  `183` decimal(22, 2) NULL DEFAULT NULL,
  `184` decimal(22, 2) NULL DEFAULT NULL,
  `185` decimal(22, 2) NULL DEFAULT NULL,
  `186` decimal(22, 2) NULL DEFAULT NULL,
  `187` decimal(22, 2) NULL DEFAULT NULL,
  `188` decimal(22, 2) NULL DEFAULT NULL,
  `189` decimal(22, 2) NULL DEFAULT NULL,
  `190` decimal(22, 2) NULL DEFAULT NULL,
  `191` decimal(22, 2) NULL DEFAULT NULL,
  `192` decimal(22, 2) NULL DEFAULT NULL,
  `193` decimal(22, 2) NULL DEFAULT NULL,
  `194` decimal(22, 2) NULL DEFAULT NULL,
  `195` decimal(22, 2) NULL DEFAULT NULL,
  `196` decimal(22, 2) NULL DEFAULT NULL,
  `197` decimal(22, 2) NULL DEFAULT NULL,
  `198` decimal(22, 2) NULL DEFAULT NULL,
  `199` decimal(22, 2) NULL DEFAULT NULL,
  `200` decimal(22, 2) NULL DEFAULT NULL,
  `201` decimal(22, 2) NULL DEFAULT NULL,
  `202` decimal(22, 2) NULL DEFAULT NULL,
  `203` decimal(22, 2) NULL DEFAULT NULL,
  `204` decimal(22, 2) NULL DEFAULT NULL,
  `205` decimal(22, 2) NULL DEFAULT NULL,
  `206` decimal(22, 2) NULL DEFAULT NULL,
  `207` decimal(22, 2) NULL DEFAULT NULL,
  `208` decimal(22, 2) NULL DEFAULT NULL,
  `209` decimal(22, 2) NULL DEFAULT NULL,
  `210` decimal(22, 2) NULL DEFAULT NULL,
  `211` decimal(22, 2) NULL DEFAULT NULL,
  `212` decimal(22, 2) NULL DEFAULT NULL,
  `213` decimal(22, 2) NULL DEFAULT NULL,
  `214` decimal(22, 2) NULL DEFAULT NULL,
  `215` decimal(22, 2) NULL DEFAULT NULL,
  `216` decimal(22, 2) NULL DEFAULT NULL,
  `217` decimal(22, 2) NULL DEFAULT NULL,
  `218` decimal(22, 2) NULL DEFAULT NULL,
  `219` decimal(22, 2) NULL DEFAULT NULL,
  `220` decimal(22, 2) NULL DEFAULT NULL,
  `221` decimal(22, 2) NULL DEFAULT NULL,
  `222` decimal(22, 2) NULL DEFAULT NULL,
  `223` decimal(22, 2) NULL DEFAULT NULL,
  `224` decimal(22, 2) NULL DEFAULT NULL,
  `225` decimal(22, 2) NULL DEFAULT NULL,
  `226` decimal(22, 2) NULL DEFAULT NULL,
  `227` decimal(22, 2) NULL DEFAULT NULL,
  `228` decimal(22, 2) NULL DEFAULT NULL,
  `229` decimal(22, 2) NULL DEFAULT NULL,
  `230` decimal(22, 2) NULL DEFAULT NULL,
  `231` decimal(22, 2) NULL DEFAULT NULL,
  `232` decimal(22, 2) NULL DEFAULT NULL,
  `233` decimal(22, 2) NULL DEFAULT NULL,
  `234` decimal(22, 2) NULL DEFAULT NULL,
  `235` decimal(22, 2) NULL DEFAULT NULL,
  `236` decimal(22, 2) NULL DEFAULT NULL,
  `237` decimal(22, 2) NULL DEFAULT NULL,
  `238` decimal(22, 2) NULL DEFAULT NULL,
  `239` decimal(22, 2) NULL DEFAULT NULL,
  `240` decimal(22, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`age`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of table_counts_copy1
-- ----------------------------
INSERT INTO `table_counts_copy1` VALUES (20, 0.19, 0.38, 0.57, 0.76, 0.96, 1.15, 1.34, 1.53, 1.72, 1.81, 1.91, 1.91, 2.10, 2.29, 2.49, 2.68, 2.87, 3.06, 3.25, 3.45, 3.64, 3.73, 3.83, 3.83, 4.02, 4.22, 4.41, 4.61, 4.80, 4.99, 5.19, 5.38, 5.58, 5.67, 5.77, 5.77, 5.97, 6.16, 6.36, 6.55, 6.75, 6.94, 7.14, 7.33, 7.53, 7.62, 7.72, 7.72, 7.91, 8.11, 8.30, 8.50, 8.69, 8.88, 9.08, 9.27, 9.47, 9.56, 9.66, 9.66, 9.85, 10.05, 10.24, 10.43, 10.63, 10.82, 11.01, 11.20, 11.40, 11.49, 11.59, 11.59, 11.78, 11.97, 12.16, 12.35, 12.55, 12.74, 12.93, 13.12, 13.31, 13.40, 13.50, 13.50, 13.69, 13.88, 14.07, 14.26, 14.45, 14.63, 14.82, 15.01, 15.20, 15.30, 15.39, 15.39, 15.58, 15.76, 15.95, 16.13, 16.32, 16.50, 16.69, 16.87, 17.06, 17.15, 17.24, 17.24, 17.42, 17.60, 17.79, 17.97, 18.15, 18.33, 18.51, 18.70, 18.88, 18.97, 19.06, 19.06, 19.24, 19.42, 19.59, 19.77, 19.95, 20.13, 20.31, 20.48, 20.66, 20.75, 20.84, 20.84, 21.01, 21.19, 21.36, 21.53, 21.71, 21.88, 22.05, 22.22, 22.40, 22.48, 22.57, 22.57, 22.74, 22.90, 23.07, 23.24, 23.41, 23.57, 23.74, 23.91, 24.07, 24.16, 24.24, 24.24, 24.40, 24.57, 24.73, 24.89, 25.06, 25.22, 25.38, 25.54, 25.71, 25.79, 25.87, 25.87, 26.03, 26.18, 26.34, 26.50, 26.66, 26.81, 26.97, 27.13, 27.28, 27.36, 27.44, 27.44, 27.59, 27.75, 27.90, 28.05, 28.21, 28.36, 28.51, 28.66, 28.82, 28.89, 28.97, 28.97, 29.12, 29.27, 29.42, 29.57, 29.72, 29.87, 30.02, 30.17, 30.32, 30.40, 30.47, 30.47, 30.62, 30.76, 30.91, 31.06, 31.21, 31.35, 31.50, 31.65, 31.79, 31.87, 31.94, 31.94, 32.09, 32.23, 32.38, 32.52, 32.67, 32.81, 32.96, 33.10, 33.25, 33.32, 33.39, 33.39, 33.53, 33.68, 33.82, 33.97, 34.11, 34.25, 34.40, 34.54, 34.69, 34.76, 34.83, 34.83);
INSERT INTO `table_counts_copy1` VALUES (21, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.03, 21.20, 21.38, 21.55, 21.72, 21.89, 22.06, 22.24, 22.41, 22.49, 22.58, 22.58, 22.75, 22.92, 23.08, 23.25, 23.42, 23.59, 23.76, 23.92, 24.09, 24.18, 24.26, 24.26, 24.42, 24.59, 24.75, 24.91, 25.08, 25.24, 25.40, 25.56, 25.73, 25.81, 25.89, 25.89, 26.05, 26.21, 26.37, 26.53, 26.69, 26.84, 27.00, 27.16, 27.32, 27.40, 27.48, 27.48, 27.64, 27.79, 27.95, 28.11, 28.27, 28.42, 28.58, 28.74, 28.89, 28.97, 29.05, 29.05, 29.20, 29.36, 29.51, 29.66, 29.82, 29.97, 30.12, 30.27, 30.43, 30.50, 30.58, 30.58, 30.73, 30.89, 31.04, 31.19, 31.35, 31.50, 31.65, 31.80, 31.96, 32.03, 32.11, 32.11, 32.26, 32.41, 32.56, 32.71, 32.87, 33.02, 33.17, 33.32, 33.47, 33.54, 33.62, 33.62, 33.77, 33.92, 34.07, 34.22, 34.38, 34.53, 34.68, 34.83, 34.98, 35.05, 35.13, 35.13);
INSERT INTO `table_counts_copy1` VALUES (22, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.03, 21.20, 21.38, 21.55, 21.72, 21.89, 22.06, 22.24, 22.41, 22.49, 22.58, 22.58, 22.75, 22.92, 23.09, 23.26, 23.43, 23.59, 23.76, 23.93, 24.10, 24.19, 24.27, 24.27, 24.44, 24.60, 24.77, 24.93, 25.10, 25.26, 25.43, 25.59, 25.76, 25.84, 25.92, 25.92, 26.08, 26.24, 26.41, 26.57, 26.73, 26.89, 27.05, 27.22, 27.38, 27.46, 27.54, 27.54, 27.70, 27.86, 28.02, 28.18, 28.35, 28.51, 28.67, 28.83, 28.99, 29.07, 29.15, 29.15, 29.31, 29.47, 29.63, 29.79, 29.95, 30.10, 30.26, 30.42, 30.58, 30.66, 30.74, 30.74, 30.90, 31.06, 31.22, 31.38, 31.54, 31.69, 31.85, 32.01, 32.17, 32.25, 32.33, 32.33, 32.49, 32.65, 32.81, 32.97, 33.13, 33.28, 33.44, 33.60, 33.76, 33.84, 33.92, 33.92, 34.08, 34.24, 34.40, 34.56, 34.72, 34.87, 35.03, 35.19, 35.35, 35.43, 35.51, 35.51);
INSERT INTO `table_counts_copy1` VALUES (23, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.03, 21.21, 21.38, 21.55, 21.73, 21.90, 22.07, 22.24, 22.42, 22.50, 22.59, 22.59, 22.76, 22.93, 23.10, 23.27, 23.45, 23.62, 23.79, 23.96, 24.13, 24.21, 24.30, 24.30, 24.47, 24.64, 24.81, 24.98, 25.15, 25.31, 25.48, 25.65, 25.82, 25.91, 25.99, 25.99, 26.16, 26.32, 26.49, 26.66, 26.83, 26.99, 27.16, 27.33, 27.49, 27.58, 27.66, 27.66, 27.83, 27.99, 28.16, 28.32, 28.49, 28.66, 28.82, 28.99, 29.15, 29.24, 29.32, 29.32, 29.49, 29.65, 29.82, 29.99, 30.16, 30.32, 30.49, 30.66, 30.82, 30.91, 30.99, 30.99, 31.16, 31.32, 31.49, 31.65, 31.82, 31.99, 32.15, 32.32, 32.48, 32.57, 32.65, 32.65, 32.82, 32.99, 33.15, 33.32, 33.49, 33.66, 33.83, 33.99, 34.16, 34.25, 34.33, 34.33, 34.50, 34.67, 34.84, 35.01, 35.18, 35.34, 35.51, 35.68, 35.85, 35.94, 36.02, 36.02);
INSERT INTO `table_counts_copy1` VALUES (24, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.62, 17.81, 17.99, 18.17, 18.35, 18.53, 18.72, 18.90, 18.99, 19.08, 19.08, 19.26, 19.44, 19.61, 19.79, 19.97, 20.15, 20.33, 20.50, 20.68, 20.77, 20.86, 20.86, 21.04, 21.21, 21.39, 21.57, 21.75, 21.92, 22.10, 22.28, 22.45, 22.54, 22.63, 22.63, 22.80, 22.98, 23.15, 23.33, 23.50, 23.67, 23.85, 24.02, 24.20, 24.28, 24.37, 24.37, 24.54, 24.72, 24.89, 25.07, 25.24, 25.41, 25.59, 25.76, 25.94, 26.02, 26.11, 26.11, 26.28, 26.46, 26.63, 26.80, 26.98, 27.15, 27.32, 27.49, 27.67, 27.75, 27.84, 27.84, 28.02, 28.19, 28.37, 28.54, 28.72, 28.89, 29.07, 29.24, 29.42, 29.50, 29.59, 29.59, 29.77, 29.94, 30.12, 30.29, 30.47, 30.64, 30.82, 30.99, 31.17, 31.25, 31.34, 31.34, 31.52, 31.69, 31.87, 32.04, 32.22, 32.40, 32.57, 32.75, 32.92, 33.01, 33.10, 33.10, 33.28, 33.46, 33.63, 33.81, 33.99, 34.17, 34.35, 34.52, 34.70, 34.79, 34.88, 34.88, 35.06, 35.24, 35.42, 35.60, 35.79, 35.97, 36.15, 36.33, 36.51, 36.60, 36.69, 36.69);
INSERT INTO `table_counts_copy1` VALUES (25, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.52, 16.71, 16.89, 17.08, 17.17, 17.26, 17.26, 17.44, 17.63, 17.81, 17.99, 18.18, 18.36, 18.54, 18.72, 18.91, 19.00, 19.09, 19.09, 19.27, 19.45, 19.63, 19.81, 20.00, 20.18, 20.36, 20.54, 20.72, 20.81, 20.90, 20.90, 21.08, 21.26, 21.44, 21.62, 21.80, 21.98, 22.16, 22.34, 22.52, 22.61, 22.70, 22.70, 22.88, 23.06, 23.24, 23.42, 23.60, 23.78, 23.96, 24.14, 24.32, 24.41, 24.50, 24.50, 24.68, 24.86, 25.04, 25.22, 25.41, 25.59, 25.77, 25.95, 26.13, 26.22, 26.31, 26.31, 26.49, 26.67, 26.86, 27.04, 27.22, 27.40, 27.58, 27.77, 27.95, 28.04, 28.13, 28.13, 28.31, 28.50, 28.68, 28.86, 29.05, 29.23, 29.41, 29.59, 29.78, 29.87, 29.96, 29.96, 30.15, 30.33, 30.52, 30.70, 30.89, 31.08, 31.26, 31.45, 31.63, 31.73, 31.82, 31.82, 32.01, 32.20, 32.38, 32.57, 32.76, 32.95, 33.14, 33.32, 33.51, 33.61, 33.70, 33.70, 33.89, 34.08, 34.27, 34.46, 34.65, 34.84, 35.03, 35.22, 35.41, 35.51, 35.60, 35.60, 35.79, 35.99, 36.18, 36.37, 36.57, 36.76, 36.95, 37.14, 37.34, 37.43, 37.53, 37.53);
INSERT INTO `table_counts_copy1` VALUES (26, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.65, 14.84, 15.03, 15.22, 15.32, 15.41, 15.41, 15.60, 15.78, 15.97, 16.15, 16.34, 16.53, 16.71, 16.90, 17.08, 17.18, 17.27, 17.27, 17.46, 17.64, 17.83, 18.01, 18.20, 18.39, 18.57, 18.76, 18.94, 19.04, 19.13, 19.13, 19.32, 19.50, 19.69, 19.87, 20.06, 20.25, 20.43, 20.62, 20.80, 20.90, 20.99, 20.99, 21.18, 21.36, 21.55, 21.73, 21.92, 22.11, 22.29, 22.48, 22.66, 22.76, 22.85, 22.85, 23.04, 23.23, 23.41, 23.60, 23.79, 23.98, 24.17, 24.35, 24.54, 24.64, 24.73, 24.73, 24.92, 25.11, 25.30, 25.49, 25.68, 25.86, 26.05, 26.24, 26.43, 26.53, 26.62, 26.62, 26.81, 27.00, 27.20, 27.39, 27.58, 27.77, 27.96, 28.16, 28.35, 28.44, 28.54, 28.54, 28.74, 28.93, 29.13, 29.32, 29.52, 29.71, 29.91, 30.10, 30.30, 30.39, 30.49, 30.49, 30.69, 30.88, 31.08, 31.28, 31.48, 31.67, 31.87, 32.07, 32.26, 32.36, 32.46, 32.46, 32.66, 32.86, 33.06, 33.26, 33.47, 33.67, 33.87, 34.07, 34.27, 34.37, 34.47, 34.47, 34.67, 34.88, 35.08, 35.29, 35.49, 35.69, 35.90, 36.10, 36.31, 36.41, 36.51, 36.51, 36.72, 36.92, 37.13, 37.34, 37.55, 37.75, 37.96, 38.17, 38.37, 38.48, 38.58, 38.58);
INSERT INTO `table_counts_copy1` VALUES (27, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.18, 12.37, 12.57, 12.76, 12.95, 13.14, 13.33, 13.42, 13.52, 13.52, 13.71, 13.90, 14.09, 14.28, 14.47, 14.66, 14.85, 15.04, 15.23, 15.33, 15.42, 15.42, 15.61, 15.80, 15.99, 16.18, 16.37, 16.56, 16.75, 16.94, 17.13, 17.23, 17.32, 17.32, 17.51, 17.70, 17.89, 18.08, 18.27, 18.46, 18.65, 18.84, 19.03, 19.13, 19.22, 19.22, 19.41, 19.61, 19.80, 19.99, 20.19, 20.38, 20.57, 20.76, 20.96, 21.05, 21.15, 21.15, 21.34, 21.54, 21.73, 21.93, 22.12, 22.31, 22.51, 22.70, 22.90, 22.99, 23.09, 23.09, 23.29, 23.48, 23.68, 23.88, 24.08, 24.27, 24.47, 24.67, 24.86, 24.96, 25.06, 25.06, 25.26, 25.46, 25.66, 25.86, 26.07, 26.27, 26.47, 26.67, 26.87, 26.97, 27.07, 27.07, 27.27, 27.48, 27.68, 27.89, 28.09, 28.29, 28.50, 28.70, 28.91, 29.01, 29.11, 29.11, 29.32, 29.52, 29.73, 29.94, 30.15, 30.35, 30.56, 30.77, 30.97, 31.08, 31.18, 31.18, 31.39, 31.60, 31.82, 32.03, 32.24, 32.45, 32.66, 32.88, 33.09, 33.19, 33.30, 33.30, 33.52, 33.73, 33.95, 34.16, 34.38, 34.59, 34.81, 35.02, 35.24, 35.34, 35.45, 35.45, 35.67, 35.89, 36.11, 36.33, 36.55, 36.77, 36.99, 37.21, 37.43, 37.54, 37.65, 37.65, 37.87, 38.09, 38.32, 38.54, 38.76, 38.98, 39.20, 39.43, 39.65, 39.76, 39.87, 39.87);
INSERT INTO `table_counts_copy1` VALUES (28, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.45, 10.65, 10.84, 11.03, 11.22, 11.42, 11.51, 11.61, 11.61, 11.80, 11.99, 12.19, 12.38, 12.57, 12.76, 12.95, 13.15, 13.34, 13.43, 13.53, 13.53, 13.72, 13.92, 14.11, 14.31, 14.50, 14.69, 14.89, 15.08, 15.28, 15.37, 15.47, 15.47, 15.67, 15.86, 16.06, 16.25, 16.45, 16.64, 16.84, 17.03, 17.23, 17.32, 17.42, 17.42, 17.62, 17.82, 18.01, 18.21, 18.41, 18.61, 18.81, 19.00, 19.20, 19.30, 19.40, 19.40, 19.60, 19.80, 20.00, 20.20, 20.41, 20.61, 20.81, 21.01, 21.21, 21.31, 21.41, 21.41, 21.62, 21.82, 22.03, 22.23, 22.44, 22.64, 22.85, 23.05, 23.26, 23.36, 23.46, 23.46, 23.67, 23.88, 24.09, 24.30, 24.51, 24.71, 24.92, 25.13, 25.34, 25.45, 25.55, 25.55, 25.76, 25.98, 26.19, 26.40, 26.62, 26.83, 27.04, 27.25, 27.47, 27.57, 27.68, 27.68, 27.90, 28.12, 28.33, 28.55, 28.77, 28.99, 29.21, 29.42, 29.64, 29.75, 29.86, 29.86, 30.08, 30.31, 30.53, 30.75, 30.98, 31.20, 31.42, 31.64, 31.87, 31.98, 32.09, 32.09, 32.32, 32.54, 32.77, 33.00, 33.23, 33.45, 33.68, 33.91, 34.13, 34.25, 34.36, 34.36, 34.59, 34.82, 35.06, 35.29, 35.52, 35.75, 35.98, 36.22, 36.45, 36.56, 36.68, 36.68, 36.92, 37.15, 37.39, 37.62, 37.86, 38.10, 38.33, 38.57, 38.80, 38.92, 39.04, 39.04, 39.28, 39.52, 39.76, 40.00, 40.24, 40.48, 40.72, 40.96, 41.20, 41.32, 41.44, 41.44);
INSERT INTO `table_counts_copy1` VALUES (29, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.90, 9.10, 9.29, 9.49, 9.58, 9.68, 9.68, 9.87, 10.07, 10.26, 10.46, 10.65, 10.84, 11.04, 11.23, 11.43, 11.52, 11.62, 11.62, 11.82, 12.01, 12.21, 12.41, 12.61, 12.80, 13.00, 13.20, 13.39, 13.49, 13.59, 13.59, 13.79, 13.99, 14.19, 14.39, 14.59, 14.79, 14.99, 15.19, 15.39, 15.49, 15.59, 15.59, 15.79, 16.00, 16.20, 16.40, 16.61, 16.81, 17.01, 17.21, 17.42, 17.52, 17.62, 17.62, 17.83, 18.04, 18.24, 18.45, 18.66, 18.87, 19.08, 19.28, 19.49, 19.60, 19.70, 19.70, 19.91, 20.12, 20.34, 20.55, 20.76, 20.97, 21.18, 21.40, 21.61, 21.71, 21.82, 21.82, 22.04, 22.26, 22.47, 22.69, 22.91, 23.13, 23.35, 23.56, 23.78, 23.89, 24.00, 24.00, 24.22, 24.44, 24.67, 24.89, 25.11, 25.33, 25.55, 25.78, 26.00, 26.11, 26.22, 26.22, 26.45, 26.68, 26.91, 27.14, 27.37, 27.59, 27.82, 28.05, 28.28, 28.40, 28.51, 28.51, 28.74, 28.98, 29.21, 29.44, 29.68, 29.91, 30.14, 30.37, 30.61, 30.72, 30.84, 30.84, 31.08, 31.32, 31.56, 31.80, 32.04, 32.28, 32.52, 32.76, 33.00, 33.12, 33.24, 33.24, 33.48, 33.73, 33.97, 34.22, 34.46, 34.70, 34.95, 35.19, 35.44, 35.56, 35.68, 35.68, 35.93, 36.18, 36.43, 36.68, 36.93, 37.18, 37.43, 37.68, 37.93, 38.06, 38.18, 38.18, 38.43, 38.69, 38.94, 39.20, 39.45, 39.70, 39.96, 40.21, 40.47, 40.59, 40.72, 40.72, 40.98, 41.24, 41.50, 41.76, 42.02, 42.27, 42.53, 42.79, 43.05, 43.18, 43.31, 43.31);
INSERT INTO `table_counts_copy1` VALUES (30, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.98, 6.18, 6.37, 6.57, 6.76, 6.95, 7.15, 7.34, 7.54, 7.63, 7.73, 7.73, 7.93, 8.12, 8.32, 8.51, 8.71, 8.91, 9.10, 9.30, 9.49, 9.59, 9.69, 9.69, 9.89, 10.09, 10.29, 10.49, 10.69, 10.89, 11.09, 11.29, 11.49, 11.59, 11.69, 11.69, 11.89, 12.10, 12.30, 12.51, 12.71, 12.91, 13.12, 13.32, 13.53, 13.63, 13.73, 13.73, 13.94, 14.15, 14.35, 14.56, 14.77, 14.98, 15.19, 15.39, 15.60, 15.71, 15.81, 15.81, 16.02, 16.24, 16.45, 16.67, 16.88, 17.09, 17.31, 17.52, 17.74, 17.84, 17.95, 17.95, 18.17, 18.39, 18.61, 18.83, 19.05, 19.27, 19.49, 19.71, 19.93, 20.04, 20.15, 20.15, 20.38, 20.60, 20.83, 21.05, 21.28, 21.51, 21.73, 21.96, 22.18, 22.30, 22.41, 22.41, 22.64, 22.87, 23.11, 23.34, 23.57, 23.80, 24.03, 24.27, 24.50, 24.61, 24.73, 24.73, 24.97, 25.21, 25.45, 25.69, 25.93, 26.16, 26.40, 26.64, 26.88, 27.00, 27.12, 27.12, 27.37, 27.61, 27.86, 28.10, 28.35, 28.59, 28.84, 29.08, 29.33, 29.45, 29.57, 29.57, 29.82, 30.07, 30.33, 30.58, 30.83, 31.08, 31.33, 31.59, 31.84, 31.96, 32.09, 32.09, 32.35, 32.61, 32.86, 33.12, 33.38, 33.64, 33.90, 34.15, 34.41, 34.54, 34.67, 34.67, 34.93, 35.20, 35.46, 35.72, 35.99, 36.25, 36.51, 36.77, 37.04, 37.17, 37.30, 37.30, 37.57, 37.84, 38.11, 38.38, 38.65, 38.91, 39.18, 39.45, 39.72, 39.86, 39.99, 39.99, 40.26, 40.54, 40.81, 41.09, 41.36, 41.63, 41.91, 42.18, 42.46, 42.59, 42.73, 42.73, 43.01, 43.29, 43.57, 43.85, 44.13, 44.40, 44.68, 44.96, 45.24, 45.38, 45.52, 45.52);
INSERT INTO `table_counts_copy1` VALUES (31, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.04, 4.24, 4.43, 4.63, 4.82, 5.01, 5.21, 5.40, 5.60, 5.69, 5.79, 5.79, 5.99, 6.18, 6.38, 6.58, 6.78, 6.97, 7.17, 7.37, 7.56, 7.66, 7.76, 7.76, 7.96, 8.16, 8.36, 8.56, 8.77, 8.97, 9.17, 9.37, 9.57, 9.67, 9.77, 9.77, 9.98, 10.19, 10.39, 10.60, 10.81, 11.02, 11.23, 11.43, 11.64, 11.75, 11.85, 11.85, 12.06, 12.28, 12.49, 12.70, 12.92, 13.13, 13.34, 13.55, 13.77, 13.87, 13.98, 13.98, 14.20, 14.42, 14.64, 14.86, 15.08, 15.30, 15.52, 15.74, 15.96, 16.07, 16.18, 16.18, 16.41, 16.63, 16.86, 17.09, 17.32, 17.54, 17.77, 18.00, 18.22, 18.34, 18.45, 18.45, 18.69, 18.92, 19.16, 19.39, 19.63, 19.86, 20.10, 20.33, 20.57, 20.68, 20.80, 20.80, 21.04, 21.28, 21.53, 21.77, 22.01, 22.25, 22.49, 22.74, 22.98, 23.10, 23.22, 23.22, 23.47, 23.72, 23.97, 24.22, 24.47, 24.71, 24.96, 25.21, 25.46, 25.59, 25.71, 25.71, 25.97, 26.22, 26.48, 26.74, 27.00, 27.25, 27.51, 27.77, 28.02, 28.15, 28.28, 28.28, 28.55, 28.81, 29.08, 29.34, 29.61, 29.87, 30.14, 30.40, 30.67, 30.80, 30.93, 30.93, 31.20, 31.47, 31.74, 32.01, 32.29, 32.56, 32.83, 33.10, 33.37, 33.50, 33.64, 33.64, 33.92, 34.20, 34.47, 34.75, 35.03, 35.31, 35.59, 35.86, 36.14, 36.28, 36.42, 36.42, 36.71, 36.99, 37.28, 37.56, 37.85, 38.13, 38.42, 38.70, 38.99, 39.13, 39.27, 39.27, 39.56, 39.85, 40.14, 40.43, 40.72, 41.01, 41.30, 41.59, 41.88, 42.03, 42.17, 42.17, 42.47, 42.76, 43.06, 43.35, 43.65, 43.94, 44.24, 44.53, 44.83, 44.97, 45.12, 45.12, 45.42, 45.72, 46.02, 46.32, 46.62, 46.92, 47.22, 47.52, 47.82, 47.97, 48.12, 48.12);
INSERT INTO `table_counts_copy1` VALUES (32, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.11, 2.31, 2.50, 2.69, 2.89, 3.08, 3.27, 3.46, 3.66, 3.75, 3.85, 3.85, 4.05, 4.24, 4.44, 4.64, 4.84, 5.03, 5.23, 5.43, 5.62, 5.72, 5.82, 5.82, 6.02, 6.23, 6.43, 6.63, 6.84, 7.04, 7.24, 7.44, 7.65, 7.75, 7.85, 7.85, 8.06, 8.27, 8.48, 8.69, 8.91, 9.12, 9.33, 9.54, 9.75, 9.85, 9.96, 9.96, 10.18, 10.40, 10.61, 10.83, 11.05, 11.27, 11.49, 11.70, 11.92, 12.03, 12.14, 12.14, 12.37, 12.59, 12.82, 13.04, 13.27, 13.50, 13.72, 13.95, 14.17, 14.29, 14.40, 14.40, 14.64, 14.87, 15.11, 15.34, 15.58, 15.81, 16.05, 16.28, 16.52, 16.63, 16.75, 16.75, 16.99, 17.24, 17.48, 17.72, 17.97, 18.21, 18.45, 18.69, 18.94, 19.06, 19.18, 19.18, 19.43, 19.68, 19.93, 20.18, 20.44, 20.69, 20.94, 21.19, 21.44, 21.56, 21.69, 21.69, 21.95, 22.21, 22.47, 22.73, 23.00, 23.26, 23.52, 23.78, 24.04, 24.17, 24.30, 24.30, 24.57, 24.84, 25.11, 25.38, 25.65, 25.91, 26.18, 26.45, 26.72, 26.86, 26.99, 26.99, 27.27, 27.54, 27.82, 28.10, 28.38, 28.65, 28.93, 29.21, 29.48, 29.62, 29.76, 29.76, 30.05, 30.33, 30.62, 30.90, 31.19, 31.47, 31.76, 32.04, 32.33, 32.47, 32.61, 32.61, 32.90, 33.20, 33.49, 33.78, 34.08, 34.37, 34.66, 34.95, 35.25, 35.39, 35.54, 35.54, 35.84, 36.14, 36.44, 36.74, 37.05, 37.35, 37.65, 37.95, 38.25, 38.40, 38.55, 38.55, 38.86, 39.16, 39.47, 39.77, 40.08, 40.39, 40.69, 41.00, 41.30, 41.46, 41.61, 41.61, 41.92, 42.24, 42.55, 42.86, 43.18, 43.49, 43.80, 44.11, 44.43, 44.58, 44.74, 44.74, 45.06, 45.38, 45.70, 46.02, 46.34, 46.65, 46.97, 47.29, 47.61, 47.77, 47.93, 47.93, 48.25, 48.58, 48.90, 49.23, 49.55, 49.87, 50.20, 50.52, 50.85, 51.01, 51.17, 51.17);
INSERT INTO `table_counts_copy1` VALUES (33, 0.19, 0.38, 0.58, 0.77, 0.96, 1.15, 1.34, 1.54, 1.73, 1.82, 1.92, 1.92, 2.12, 2.31, 2.51, 2.71, 2.91, 3.10, 3.30, 3.50, 3.69, 3.79, 3.89, 3.89, 4.10, 4.30, 4.51, 4.71, 4.92, 5.13, 5.33, 5.54, 5.74, 5.85, 5.95, 5.95, 6.16, 6.38, 6.59, 6.81, 7.02, 7.23, 7.45, 7.66, 7.88, 7.98, 8.09, 8.09, 8.31, 8.54, 8.76, 8.98, 9.21, 9.43, 9.65, 9.87, 10.10, 10.21, 10.32, 10.32, 10.55, 10.78, 11.01, 11.24, 11.48, 11.71, 11.94, 12.17, 12.40, 12.51, 12.63, 12.63, 12.87, 13.11, 13.36, 13.60, 13.84, 14.08, 14.32, 14.57, 14.81, 14.93, 15.05, 15.05, 15.30, 15.55, 15.80, 16.05, 16.31, 16.56, 16.81, 17.06, 17.31, 17.43, 17.56, 17.56, 17.82, 18.08, 18.34, 18.60, 18.87, 19.13, 19.39, 19.65, 19.91, 20.04, 20.17, 20.17, 20.44, 20.71, 20.99, 21.26, 21.53, 21.80, 22.07, 22.35, 22.62, 22.75, 22.89, 22.89, 23.17, 23.45, 23.73, 24.01, 24.30, 24.58, 24.86, 25.14, 25.42, 25.56, 25.70, 25.70, 25.99, 26.28, 26.57, 26.86, 27.15, 27.44, 27.73, 28.02, 28.31, 28.46, 28.60, 28.60, 28.90, 29.20, 29.50, 29.80, 30.10, 30.40, 30.70, 31.00, 31.30, 31.45, 31.60, 31.60, 31.91, 32.22, 32.52, 32.83, 33.14, 33.45, 33.76, 34.06, 34.37, 34.53, 34.68, 34.68, 35.00, 35.31, 35.63, 35.95, 36.27, 36.58, 36.90, 37.22, 37.53, 37.69, 37.85, 37.85, 38.17, 38.50, 38.82, 39.15, 39.47, 39.79, 40.12, 40.44, 40.77, 40.93, 41.09, 41.09, 41.42, 41.75, 42.08, 42.41, 42.75, 43.08, 43.41, 43.74, 44.07, 44.23, 44.40, 44.40, 44.74, 45.07, 45.41, 45.75, 46.09, 46.42, 46.76, 47.10, 47.43, 47.60, 47.77, 47.77, 48.11, 48.46, 48.80, 49.15, 49.49, 49.83, 50.18, 50.52, 50.87, 51.04, 51.21, 51.21, 51.56, 51.91, 52.26, 52.61, 52.96, 53.30, 53.65, 54.00, 54.35, 54.53, 54.70, 54.70);
INSERT INTO `table_counts_copy1` VALUES (34, 0.20, 0.40, 0.60, 0.80, 1.01, 1.21, 1.41, 1.61, 1.81, 1.91, 2.01, 2.01, 2.22, 2.42, 2.63, 2.84, 3.05, 3.25, 3.46, 3.67, 3.87, 3.98, 4.08, 4.08, 4.30, 4.51, 4.73, 4.95, 5.17, 5.38, 5.60, 5.82, 6.03, 6.14, 6.25, 6.25, 6.48, 6.71, 6.93, 7.16, 7.39, 7.62, 7.85, 8.07, 8.30, 8.42, 8.53, 8.53, 8.77, 9.00, 9.24, 9.48, 9.72, 9.95, 10.19, 10.43, 10.66, 10.78, 10.90, 10.90, 11.15, 11.40, 11.64, 11.89, 12.14, 12.39, 12.64, 12.88, 13.13, 13.26, 13.38, 13.38, 13.64, 13.90, 14.16, 14.42, 14.68, 14.94, 15.20, 15.46, 15.72, 15.85, 15.98, 15.98, 16.25, 16.52, 16.79, 17.06, 17.34, 17.61, 17.88, 18.15, 18.42, 18.55, 18.69, 18.69, 18.97, 19.25, 19.54, 19.82, 20.10, 20.38, 20.66, 20.95, 21.23, 21.37, 21.51, 21.51, 21.80, 22.10, 22.39, 22.68, 22.98, 23.27, 23.56, 23.85, 24.15, 24.29, 24.44, 24.44, 24.74, 25.05, 25.35, 25.65, 25.96, 26.26, 26.56, 26.86, 27.17, 27.32, 27.47, 27.47, 27.78, 28.10, 28.41, 28.73, 29.04, 29.35, 29.67, 29.98, 30.30, 30.45, 30.61, 30.61, 30.93, 31.26, 31.58, 31.91, 32.23, 32.55, 32.88, 33.20, 33.53, 33.69, 33.85, 33.85, 34.18, 34.52, 34.85, 35.19, 35.52, 35.85, 36.19, 36.52, 36.86, 37.02, 37.19, 37.19, 37.53, 37.87, 38.21, 38.55, 38.90, 39.24, 39.58, 39.92, 40.26, 40.43, 40.60, 40.60, 40.95, 41.30, 41.65, 42.00, 42.35, 42.70, 43.05, 43.40, 43.75, 43.93, 44.10, 44.10, 44.46, 44.81, 45.17, 45.53, 45.89, 46.24, 46.60, 46.96, 47.31, 47.49, 47.67, 47.67, 48.03, 48.40, 48.76, 49.13, 49.49, 49.85, 50.22, 50.58, 50.95, 51.13, 51.31, 51.31, 51.68, 52.05, 52.42, 52.79, 53.17, 53.54, 53.91, 54.28, 54.65, 54.83, 55.02, 55.02, 55.40, 55.78, 56.15, 56.53, 56.91, 57.29, 57.67, 58.04, 58.42, 58.61, 58.80, 58.80);
INSERT INTO `table_counts_copy1` VALUES (35, 0.21, 0.42, 0.64, 0.85, 1.06, 1.27, 1.48, 1.70, 1.91, 2.01, 2.12, 2.12, 2.34, 2.56, 2.78, 3.00, 3.22, 3.43, 3.65, 3.87, 4.09, 4.20, 4.31, 4.31, 4.54, 4.77, 5.00, 5.23, 5.47, 5.70, 5.93, 6.16, 6.39, 6.50, 6.62, 6.62, 6.86, 7.11, 7.35, 7.59, 7.84, 8.08, 8.32, 8.56, 8.81, 8.93, 9.05, 9.05, 9.31, 9.56, 9.82, 10.07, 10.33, 10.58, 10.84, 11.09, 11.35, 11.47, 11.60, 11.60, 11.87, 12.13, 12.40, 12.67, 12.94, 13.20, 13.47, 13.74, 14.00, 14.14, 14.27, 14.27, 14.55, 14.83, 15.11, 15.39, 15.67, 15.95, 16.23, 16.51, 16.79, 16.93, 17.07, 17.07, 17.36, 17.66, 17.95, 18.24, 18.54, 18.83, 19.12, 19.41, 19.71, 19.85, 20.00, 20.00, 20.31, 20.61, 20.92, 21.22, 21.53, 21.83, 22.14, 22.44, 22.75, 22.90, 23.05, 23.05, 23.37, 23.68, 24.00, 24.32, 24.64, 24.95, 25.27, 25.59, 25.90, 26.06, 26.22, 26.22, 26.55, 26.88, 27.20, 27.53, 27.86, 28.19, 28.52, 28.84, 29.17, 29.34, 29.50, 29.50, 29.84, 30.18, 30.52, 30.86, 31.20, 31.54, 31.88, 32.22, 32.56, 32.73, 32.90, 32.90, 33.25, 33.60, 33.95, 34.30, 34.65, 35.00, 35.35, 35.70, 36.05, 36.23, 36.40, 36.40, 36.76, 37.12, 37.48, 37.84, 38.20, 38.56, 38.92, 39.28, 39.64, 39.82, 40.00, 40.00, 40.37, 40.74, 41.11, 41.48, 41.85, 42.21, 42.58, 42.95, 43.32, 43.51, 43.69, 43.69, 44.07, 44.44, 44.82, 45.20, 45.58, 45.95, 46.33, 46.71, 47.08, 47.27, 47.46, 47.46, 47.85, 48.23, 48.62, 49.00, 49.39, 49.77, 50.16, 50.54, 50.93, 51.12, 51.31, 51.31, 51.70, 52.10, 52.49, 52.88, 53.28, 53.67, 54.06, 54.45, 54.85, 55.04, 55.24, 55.24, 55.64, 56.04, 56.44, 56.84, 57.25, 57.65, 58.05, 58.45, 58.85, 59.05, 59.25, 59.25, 59.66, 60.07, 60.48, 60.89, 61.30, 61.70, 62.11, 62.52, 62.93, 63.14, 63.34, 63.34);
INSERT INTO `table_counts_copy1` VALUES (36, 0.23, 0.45, 0.68, 0.90, 1.13, 1.35, 1.58, 1.80, 2.03, 2.14, 2.25, 2.25, 2.48, 2.72, 2.95, 3.19, 3.42, 3.65, 3.89, 4.12, 4.36, 4.47, 4.59, 4.59, 4.84, 5.09, 5.33, 5.58, 5.83, 6.08, 6.33, 6.57, 6.82, 6.95, 7.07, 7.07, 7.33, 7.59, 7.85, 8.11, 8.37, 8.63, 8.89, 9.15, 9.41, 9.54, 9.67, 9.67, 9.95, 10.22, 10.50, 10.77, 11.05, 11.32, 11.60, 11.87, 12.15, 12.28, 12.42, 12.42, 12.71, 13.00, 13.29, 13.58, 13.87, 14.15, 14.44, 14.73, 15.02, 15.17, 15.31, 15.31, 15.61, 15.92, 16.22, 16.52, 16.83, 17.13, 17.43, 17.73, 18.04, 18.19, 18.34, 18.34, 18.66, 18.97, 19.29, 19.60, 19.92, 20.24, 20.55, 20.87, 21.18, 21.34, 21.50, 21.50, 21.83, 22.16, 22.49, 22.82, 23.15, 23.48, 23.81, 24.14, 24.47, 24.64, 24.80, 24.80, 25.14, 25.49, 25.83, 26.17, 26.52, 26.86, 27.20, 27.54, 27.89, 28.06, 28.23, 28.23, 28.59, 28.94, 29.30, 29.65, 30.01, 30.37, 30.72, 31.08, 31.43, 31.61, 31.79, 31.79, 32.16, 32.52, 32.89, 33.26, 33.63, 33.99, 34.36, 34.73, 35.09, 35.28, 35.46, 35.46, 35.84, 36.22, 36.60, 36.98, 37.36, 37.73, 38.11, 38.49, 38.87, 39.06, 39.25, 39.25, 39.64, 40.03, 40.41, 40.80, 41.19, 41.58, 41.97, 42.35, 42.74, 42.94, 43.13, 43.13, 43.53, 43.93, 44.32, 44.72, 45.12, 45.52, 45.92, 46.31, 46.71, 46.91, 47.11, 47.11, 47.52, 47.92, 48.33, 48.74, 49.15, 49.55, 49.96, 50.37, 50.77, 50.98, 51.18, 51.18, 51.60, 52.01, 52.43, 52.84, 53.26, 53.68, 54.09, 54.51, 54.92, 55.13, 55.34, 55.34, 55.77, 56.19, 56.62, 57.04, 57.47, 57.89, 58.32, 58.74, 59.17, 59.38, 59.59, 59.59, 60.02, 60.46, 60.89, 61.33, 61.76, 62.19, 62.63, 63.06, 63.50, 63.71, 63.93, 63.93, 64.37, 64.82, 65.26, 65.71, 66.15, 66.59, 67.04, 67.48, 67.93, 68.15, 68.37, 68.37);
INSERT INTO `table_counts_copy1` VALUES (37, 0.24, 0.48, 0.72, 0.96, 1.21, 1.45, 1.69, 1.93, 2.17, 2.29, 2.41, 2.41, 2.66, 2.91, 3.16, 3.41, 3.67, 3.92, 4.17, 4.42, 4.67, 4.79, 4.92, 4.92, 5.19, 5.45, 5.72, 5.99, 6.26, 6.52, 6.79, 7.06, 7.32, 7.46, 7.59, 7.59, 7.87, 8.15, 8.43, 8.71, 9.00, 9.28, 9.56, 9.84, 10.12, 10.26, 10.40, 10.40, 10.70, 10.99, 11.29, 11.59, 11.89, 12.18, 12.48, 12.78, 13.07, 13.22, 13.37, 13.37, 13.68, 14.00, 14.31, 14.62, 14.94, 15.25, 15.56, 15.87, 16.19, 16.34, 16.50, 16.50, 16.83, 17.16, 17.48, 17.81, 18.14, 18.47, 18.80, 19.12, 19.45, 19.62, 19.78, 19.78, 20.12, 20.47, 20.81, 21.15, 21.50, 21.84, 22.18, 22.52, 22.87, 23.04, 23.21, 23.21, 23.57, 23.92, 24.28, 24.64, 25.00, 25.35, 25.71, 26.07, 26.42, 26.60, 26.78, 26.78, 27.15, 27.52, 27.90, 28.27, 28.64, 29.01, 29.38, 29.76, 30.13, 30.31, 30.50, 30.50, 30.88, 31.27, 31.65, 32.04, 32.42, 32.80, 33.19, 33.57, 33.96, 34.15, 34.34, 34.34, 34.74, 35.13, 35.53, 35.93, 36.33, 36.72, 37.12, 37.52, 37.91, 38.11, 38.31, 38.31, 38.72, 39.13, 39.53, 39.94, 40.35, 40.76, 41.17, 41.57, 41.98, 42.19, 42.39, 42.39, 42.81, 43.23, 43.65, 44.07, 44.49, 44.91, 45.33, 45.75, 46.17, 46.38, 46.59, 46.59, 47.02, 47.45, 47.88, 48.31, 48.74, 49.16, 49.59, 50.02, 50.45, 50.67, 50.88, 50.88, 51.32, 51.76, 52.20, 52.64, 53.08, 53.52, 53.96, 54.40, 54.84, 55.06, 55.28, 55.28, 55.73, 56.18, 56.63, 57.08, 57.53, 57.98, 58.43, 58.88, 59.33, 59.56, 59.78, 59.78, 60.24, 60.70, 61.16, 61.62, 62.08, 62.54, 63.00, 63.46, 63.92, 64.15, 64.38, 64.38, 64.85, 65.32, 65.79, 66.26, 66.74, 67.21, 67.68, 68.15, 68.62, 68.85, 69.09, 69.09, 69.57, 70.05, 70.53, 71.01, 71.50, 71.98, 72.46, 72.94, 73.42, 73.66, 73.90, 73.90);
INSERT INTO `table_counts_copy1` VALUES (38, 0.26, 0.52, 0.78, 1.04, 1.30, 1.55, 1.81, 2.07, 2.33, 2.46, 2.59, 2.59, 2.86, 3.13, 3.40, 3.67, 3.95, 4.22, 4.49, 4.76, 5.03, 5.16, 5.30, 5.30, 5.59, 5.88, 6.16, 6.45, 6.74, 7.03, 7.32, 7.60, 7.89, 8.04, 8.18, 8.18, 8.49, 8.79, 9.10, 9.40, 9.71, 10.01, 10.32, 10.62, 10.93, 11.08, 11.23, 11.23, 11.55, 11.87, 12.20, 12.52, 12.84, 13.16, 13.48, 13.81, 14.13, 14.29, 14.45, 14.45, 14.79, 15.13, 15.47, 15.81, 16.15, 16.48, 16.82, 17.16, 17.50, 17.67, 17.84, 17.84, 18.20, 18.55, 18.91, 19.26, 19.62, 19.97, 20.33, 20.68, 21.04, 21.21, 21.39, 21.39, 21.76, 22.13, 22.51, 22.88, 23.25, 23.62, 23.99, 24.37, 24.74, 24.92, 25.11, 25.11, 25.50, 25.88, 26.27, 26.66, 27.05, 27.43, 27.82, 28.21, 28.59, 28.79, 28.98, 28.98, 29.38, 29.78, 30.18, 30.58, 30.99, 31.39, 31.79, 32.19, 32.59, 32.79, 32.99, 32.99, 33.41, 33.82, 34.24, 34.65, 35.07, 35.49, 35.90, 36.32, 36.73, 36.94, 37.15, 37.15, 37.58, 38.01, 38.43, 38.86, 39.29, 39.72, 40.15, 40.57, 41.00, 41.22, 41.43, 41.43, 41.87, 42.31, 42.75, 43.19, 43.64, 44.08, 44.52, 44.96, 45.40, 45.62, 45.84, 45.84, 46.29, 46.75, 47.20, 47.65, 48.11, 48.56, 49.01, 49.46, 49.92, 50.14, 50.37, 50.37, 50.83, 51.30, 51.76, 52.23, 52.69, 53.15, 53.62, 54.08, 54.55, 54.78, 55.01, 55.01, 55.49, 55.96, 56.44, 56.91, 57.39, 57.86, 58.34, 58.81, 59.29, 59.52, 59.76, 59.76, 60.25, 60.74, 61.22, 61.71, 62.20, 62.69, 63.18, 63.66, 64.15, 64.40, 64.64, 64.64, 65.14, 65.64, 66.14, 66.64, 67.14, 67.63, 68.13, 68.63, 69.13, 69.38, 69.63, 69.63, 70.14, 70.65, 71.16, 71.67, 72.18, 72.69, 73.20, 73.71, 74.22, 74.48, 74.73, 74.73, 75.25, 75.77, 76.30, 76.82, 77.34, 77.86, 78.38, 78.91, 79.43, 79.69, 79.95, 79.95);
INSERT INTO `table_counts_copy1` VALUES (39, 0.28, 0.56, 0.84, 1.12, 1.40, 1.68, 1.96, 2.24, 2.52, 2.66, 2.80, 2.80, 3.09, 3.39, 3.68, 3.97, 4.27, 4.56, 4.85, 5.14, 5.44, 5.58, 5.73, 5.73, 6.04, 6.36, 6.67, 6.98, 7.30, 7.61, 7.92, 8.23, 8.55, 8.70, 8.86, 8.86, 9.19, 9.52, 9.85, 10.18, 10.51, 10.84, 11.17, 11.50, 11.83, 12.00, 12.16, 12.16, 12.51, 12.86, 13.21, 13.56, 13.91, 14.26, 14.61, 14.96, 15.31, 15.49, 15.66, 15.66, 16.03, 16.39, 16.76, 17.13, 17.50, 17.86, 18.23, 18.60, 18.96, 19.15, 19.33, 19.33, 19.72, 20.10, 20.49, 20.87, 21.26, 21.64, 22.03, 22.41, 22.80, 22.99, 23.18, 23.18, 23.58, 23.98, 24.39, 24.79, 25.19, 25.59, 25.99, 26.40, 26.80, 27.00, 27.20, 27.20, 27.62, 28.04, 28.46, 28.88, 29.30, 29.71, 30.13, 30.55, 30.97, 31.18, 31.39, 31.39, 31.82, 32.26, 32.69, 33.13, 33.56, 33.99, 34.43, 34.86, 35.30, 35.51, 35.73, 35.73, 36.18, 36.63, 37.08, 37.53, 37.98, 38.42, 38.87, 39.32, 39.77, 40.00, 40.22, 40.22, 40.68, 41.14, 41.61, 42.07, 42.53, 42.99, 43.45, 43.92, 44.38, 44.61, 44.84, 44.84, 45.32, 45.79, 46.27, 46.74, 47.22, 47.70, 48.17, 48.65, 49.12, 49.36, 49.60, 49.60, 50.09, 50.58, 51.07, 51.56, 52.05, 52.53, 53.02, 53.51, 54.00, 54.25, 54.49, 54.49, 54.99, 55.49, 56.00, 56.50, 57.00, 57.50, 58.00, 58.51, 59.01, 59.26, 59.51, 59.51, 60.03, 60.54, 61.06, 61.57, 62.09, 62.60, 63.12, 63.63, 64.15, 64.40, 64.66, 64.66, 65.19, 65.72, 66.25, 66.78, 67.31, 67.83, 68.36, 68.89, 69.42, 69.69, 69.95, 69.95, 70.49, 71.03, 71.57, 72.11, 72.66, 73.20, 73.74, 74.28, 74.82, 75.09, 75.36, 75.36, 75.91, 76.47, 77.02, 77.58, 78.13, 78.68, 79.24, 79.79, 80.35, 80.62, 80.90, 80.90, 81.47, 82.03, 82.60, 83.16, 83.73, 84.29, 84.86, 85.42, 85.99, 86.27, 86.55, 86.55);
INSERT INTO `table_counts_copy1` VALUES (40, 0.30, 0.61, 0.91, 1.21, 1.52, 1.82, 2.12, 2.42, 2.73, 2.88, 3.03, 3.03, 3.35, 3.67, 3.99, 4.31, 4.63, 4.94, 5.26, 5.58, 5.90, 6.06, 6.22, 6.22, 6.56, 6.90, 7.24, 7.58, 7.92, 8.25, 8.59, 8.93, 9.27, 9.44, 9.61, 9.61, 9.97, 10.33, 10.68, 11.04, 11.40, 11.76, 12.12, 12.47, 12.83, 13.01, 13.19, 13.19, 13.57, 13.95, 14.33, 14.71, 15.09, 15.46, 15.84, 16.22, 16.60, 16.79, 16.98, 16.98, 17.38, 17.78, 18.17, 18.57, 18.97, 19.37, 19.77, 20.16, 20.56, 20.76, 20.96, 20.96, 21.38, 21.79, 22.21, 22.63, 23.05, 23.46, 23.88, 24.30, 24.71, 24.92, 25.13, 25.13, 25.57, 26.00, 26.44, 26.87, 27.31, 27.74, 28.18, 28.61, 29.05, 29.26, 29.48, 29.48, 29.93, 30.39, 30.84, 31.29, 31.75, 32.20, 32.65, 33.10, 33.56, 33.78, 34.01, 34.01, 34.48, 34.95, 35.41, 35.88, 36.35, 36.82, 37.29, 37.75, 38.22, 38.46, 38.69, 38.69, 39.18, 39.66, 40.15, 40.63, 41.12, 41.60, 42.09, 42.57, 43.06, 43.30, 43.54, 43.54, 44.04, 44.54, 45.04, 45.54, 46.04, 46.53, 47.03, 47.53, 48.03, 48.28, 48.53, 48.53, 49.04, 49.56, 50.07, 50.59, 51.10, 51.61, 52.13, 52.64, 53.16, 53.41, 53.67, 53.67, 54.20, 54.73, 55.26, 55.79, 56.32, 56.84, 57.37, 57.90, 58.43, 58.70, 58.96, 58.96, 59.50, 60.05, 60.59, 61.14, 61.68, 62.22, 62.77, 63.31, 63.86, 64.13, 64.40, 64.40, 64.96, 65.52, 66.08, 66.64, 67.20, 67.75, 68.31, 68.87, 69.43, 69.71, 69.99, 69.99, 70.56, 71.14, 71.71, 72.29, 72.86, 73.43, 74.01, 74.58, 75.16, 75.44, 75.73, 75.73, 76.32, 76.91, 77.49, 78.08, 78.67, 79.26, 79.85, 80.43, 81.02, 81.32, 81.61, 81.61, 82.21, 82.81, 83.41, 84.01, 84.61, 85.21, 85.81, 86.41, 87.01, 87.31, 87.61, 87.61, 88.22, 88.83, 89.44, 90.05, 90.67, 91.28, 91.89, 92.50, 93.11, 93.41, 93.72, 93.72);
INSERT INTO `table_counts_copy1` VALUES (41, 0.33, 0.66, 0.99, 1.32, 1.65, 1.98, 2.31, 2.64, 2.97, 3.14, 3.30, 3.30, 3.65, 3.99, 4.34, 4.68, 5.03, 5.38, 5.72, 6.07, 6.41, 6.59, 6.76, 6.76, 7.13, 7.49, 7.86, 8.23, 8.60, 8.96, 9.33, 9.70, 10.06, 10.25, 10.43, 10.43, 10.82, 11.21, 11.60, 11.99, 12.38, 12.76, 13.15, 13.54, 13.93, 14.13, 14.32, 14.32, 14.73, 15.14, 15.55, 15.96, 16.38, 16.79, 17.20, 17.61, 18.02, 18.22, 18.43, 18.43, 18.86, 19.29, 19.72, 20.15, 20.59, 21.02, 21.45, 21.88, 22.31, 22.52, 22.74, 22.74, 23.19, 23.64, 24.09, 24.54, 25.00, 25.45, 25.90, 26.35, 26.80, 27.02, 27.25, 27.25, 27.72, 28.19, 28.66, 29.13, 29.61, 30.08, 30.55, 31.02, 31.49, 31.72, 31.96, 31.96, 32.45, 32.94, 33.42, 33.91, 34.40, 34.89, 35.38, 35.86, 36.35, 36.60, 36.84, 36.84, 37.35, 37.85, 38.36, 38.86, 39.37, 39.88, 40.38, 40.89, 41.39, 41.65, 41.90, 41.90, 42.42, 42.95, 43.47, 43.99, 44.52, 45.04, 45.56, 46.08, 46.61, 46.87, 47.13, 47.13, 47.67, 48.21, 48.75, 49.29, 49.83, 50.37, 50.91, 51.45, 51.99, 52.26, 52.53, 52.53, 53.09, 53.64, 54.20, 54.75, 55.31, 55.87, 56.42, 56.98, 57.53, 57.81, 58.09, 58.09, 58.66, 59.24, 59.81, 60.38, 60.96, 61.53, 62.10, 62.67, 63.25, 63.53, 63.82, 63.82, 64.41, 65.00, 65.59, 66.18, 66.78, 67.37, 67.96, 68.55, 69.14, 69.43, 69.73, 69.73, 70.34, 70.94, 71.55, 72.16, 72.77, 73.37, 73.98, 74.59, 75.19, 75.50, 75.80, 75.80, 76.42, 77.04, 77.67, 78.29, 78.91, 79.53, 80.15, 80.78, 81.40, 81.71, 82.02, 82.02, 82.66, 83.29, 83.93, 84.57, 85.21, 85.84, 86.48, 87.12, 87.75, 88.07, 88.39, 88.39, 89.04, 89.69, 90.34, 90.99, 91.64, 92.29, 92.94, 93.59, 94.24, 94.57, 94.89, 94.89, 95.55, 96.21, 96.87, 97.53, 98.20, 98.86, 99.52, 100.18, 100.84, 101.17, 101.50, 101.50);
INSERT INTO `table_counts_copy1` VALUES (42, 0.36, 0.71, 1.07, 1.43, 1.79, 2.14, 2.50, 2.86, 3.21, 3.39, 3.57, 3.57, 3.95, 4.32, 4.70, 5.07, 5.45, 5.82, 6.20, 6.57, 6.95, 7.13, 7.32, 7.32, 7.72, 8.12, 8.52, 8.92, 9.32, 9.71, 10.11, 10.51, 10.91, 11.11, 11.31, 11.31, 11.73, 12.15, 12.57, 12.99, 13.42, 13.84, 14.26, 14.68, 15.10, 15.31, 15.52, 15.52, 15.97, 16.41, 16.86, 17.30, 17.75, 18.19, 18.64, 19.08, 19.53, 19.75, 19.97, 19.97, 20.44, 20.90, 21.37, 21.83, 22.30, 22.77, 23.23, 23.70, 24.16, 24.40, 24.63, 24.63, 25.12, 25.61, 26.09, 26.58, 27.07, 27.56, 28.05, 28.53, 29.02, 29.27, 29.51, 29.51, 30.02, 30.53, 31.03, 31.54, 32.05, 32.56, 33.07, 33.57, 34.08, 34.34, 34.59, 34.59, 35.12, 35.64, 36.17, 36.70, 37.23, 37.75, 38.28, 38.81, 39.33, 39.60, 39.86, 39.86, 40.41, 40.95, 41.50, 42.05, 42.60, 43.14, 43.69, 44.24, 44.78, 45.06, 45.33, 45.33, 45.90, 46.46, 47.03, 47.59, 48.16, 48.72, 49.29, 49.85, 50.42, 50.70, 50.98, 50.98, 51.56, 52.15, 52.73, 53.32, 53.90, 54.48, 55.07, 55.65, 56.24, 56.53, 56.82, 56.82, 57.42, 58.03, 58.63, 59.23, 59.84, 60.44, 61.04, 61.64, 62.25, 62.55, 62.85, 62.85, 63.47, 64.10, 64.72, 65.34, 65.97, 66.59, 67.21, 67.83, 68.46, 68.77, 69.08, 69.08, 69.72, 70.36, 71.00, 71.64, 72.29, 72.93, 73.57, 74.21, 74.85, 75.17, 75.49, 75.49, 76.15, 76.81, 77.47, 78.13, 78.79, 79.44, 80.10, 80.76, 81.42, 81.75, 82.08, 82.08, 82.76, 83.43, 84.11, 84.78, 85.46, 86.13, 86.81, 87.48, 88.16, 88.49, 88.83, 88.83, 89.52, 90.21, 90.90, 91.59, 92.28, 92.97, 93.66, 94.35, 95.04, 95.39, 95.73, 95.73, 96.43, 97.13, 97.84, 98.54, 99.24, 99.94, 100.64, 101.35, 102.05, 102.40, 102.75, 102.75, 103.47, 104.18, 104.90, 105.61, 106.33, 107.04, 107.76, 108.47, 109.19, 109.54, 109.90, 109.90);
INSERT INTO `table_counts_copy1` VALUES (43, 0.39, 0.78, 1.16, 1.55, 1.94, 2.33, 2.72, 3.10, 3.49, 3.69, 3.88, 3.88, 4.29, 4.69, 5.10, 5.51, 5.92, 6.32, 6.73, 7.14, 7.54, 7.75, 7.95, 7.95, 8.38, 8.81, 9.25, 9.68, 10.11, 10.54, 10.97, 11.41, 11.84, 12.05, 12.27, 12.27, 12.73, 13.18, 13.64, 14.10, 14.56, 15.01, 15.47, 15.93, 16.38, 16.61, 16.84, 16.84, 17.32, 17.80, 18.28, 18.76, 19.25, 19.73, 20.21, 20.69, 21.17, 21.41, 21.65, 21.65, 22.15, 22.66, 23.16, 23.67, 24.17, 24.67, 25.18, 25.68, 26.19, 26.44, 26.69, 26.69, 27.22, 27.74, 28.27, 28.79, 29.32, 29.85, 30.37, 30.90, 31.42, 31.69, 31.95, 31.95, 32.50, 33.05, 33.60, 34.15, 34.70, 35.24, 35.79, 36.34, 36.89, 37.17, 37.44, 37.44, 38.01, 38.58, 39.15, 39.72, 40.29, 40.85, 41.42, 41.99, 42.56, 42.85, 43.13, 43.13, 43.72, 44.31, 44.90, 45.49, 46.09, 46.68, 47.27, 47.86, 48.45, 48.74, 49.04, 49.04, 49.65, 50.26, 50.88, 51.49, 52.10, 52.71, 53.32, 53.94, 54.55, 54.85, 55.16, 55.16, 55.79, 56.43, 57.06, 57.70, 58.33, 58.96, 59.60, 60.23, 60.87, 61.18, 61.50, 61.50, 62.16, 62.81, 63.47, 64.12, 64.78, 65.43, 66.09, 66.74, 67.40, 67.72, 68.05, 68.05, 68.73, 69.40, 70.08, 70.76, 71.44, 72.11, 72.79, 73.47, 74.14, 74.48, 74.82, 74.82, 75.52, 76.21, 76.91, 77.60, 78.30, 79.00, 79.69, 80.39, 81.08, 81.43, 81.78, 81.78, 82.49, 83.21, 83.92, 84.64, 85.35, 86.06, 86.78, 87.49, 88.21, 88.56, 88.92, 88.92, 89.65, 90.38, 91.12, 91.85, 92.58, 93.31, 94.04, 94.78, 95.51, 95.87, 96.24, 96.24, 96.99, 97.73, 98.48, 99.22, 99.97, 100.72, 101.46, 102.21, 102.95, 103.33, 103.70, 103.70, 104.46, 105.22, 105.98, 106.74, 107.50, 108.25, 109.01, 109.77, 110.53, 110.91, 111.29, 111.29, 112.06, 112.83, 113.61, 114.38, 115.15, 115.92, 116.69, 117.47, 118.24, 118.62, 119.01, 119.01);
INSERT INTO `table_counts_copy1` VALUES (44, 0.42, 0.84, 1.26, 1.68, 2.10, 2.52, 2.94, 3.36, 3.78, 3.99, 4.20, 4.20, 4.64, 5.08, 5.53, 5.97, 6.41, 6.85, 7.29, 7.74, 8.18, 8.40, 8.62, 8.62, 9.09, 9.56, 10.02, 10.49, 10.96, 11.43, 11.90, 12.36, 12.83, 13.07, 13.30, 13.30, 13.79, 14.29, 14.78, 15.28, 15.77, 16.26, 16.76, 17.25, 17.75, 17.99, 18.24, 18.24, 18.76, 19.28, 19.80, 20.32, 20.84, 21.35, 21.87, 22.39, 22.91, 23.17, 23.43, 23.43, 23.97, 24.52, 25.06, 25.61, 26.15, 26.69, 27.24, 27.78, 28.33, 28.60, 28.87, 28.87, 29.44, 30.01, 30.58, 31.15, 31.72, 32.28, 32.85, 33.42, 33.99, 34.28, 34.56, 34.56, 35.15, 35.74, 36.34, 36.93, 37.52, 38.11, 38.70, 39.30, 39.89, 40.18, 40.48, 40.48, 41.10, 41.71, 42.33, 42.94, 43.56, 44.18, 44.79, 45.41, 46.02, 46.33, 46.64, 46.64, 47.28, 47.92, 48.56, 49.20, 49.84, 50.48, 51.12, 51.76, 52.40, 52.72, 53.04, 53.04, 53.70, 54.37, 55.03, 55.70, 56.36, 57.02, 57.69, 58.35, 59.02, 59.35, 59.68, 59.68, 60.37, 61.06, 61.75, 62.44, 63.13, 63.81, 64.50, 65.19, 65.88, 66.23, 66.57, 66.57, 67.28, 67.99, 68.71, 69.42, 70.13, 70.84, 71.55, 72.27, 72.98, 73.33, 73.69, 73.69, 74.43, 75.16, 75.90, 76.63, 77.37, 78.10, 78.84, 79.57, 80.31, 80.67, 81.04, 81.04, 81.80, 82.55, 83.31, 84.06, 84.82, 85.58, 86.33, 87.09, 87.84, 88.22, 88.60, 88.60, 89.37, 90.15, 90.92, 91.70, 92.47, 93.24, 94.02, 94.79, 95.57, 95.95, 96.34, 96.34, 97.13, 97.92, 98.71, 99.50, 100.30, 101.09, 101.88, 102.67, 103.46, 103.85, 104.25, 104.25, 105.06, 105.86, 106.67, 107.47, 108.28, 109.09, 109.89, 110.70, 111.50, 111.91, 112.31, 112.31, 113.13, 113.95, 114.77, 115.59, 116.42, 117.24, 118.06, 118.88, 119.70, 120.11, 120.52, 120.52, 121.35, 122.19, 123.02, 123.86, 124.69, 125.52, 126.36, 127.19, 128.03, 128.44, 128.86, 128.86);
INSERT INTO `table_counts_copy1` VALUES (45, 0.46, 0.91, 1.37, 1.83, 2.29, 2.74, 3.20, 3.66, 4.11, 4.34, 4.57, 4.57, 5.05, 5.52, 6.00, 6.48, 6.96, 7.43, 7.91, 8.39, 8.86, 9.10, 9.34, 9.34, 9.85, 10.35, 10.86, 11.37, 11.88, 12.38, 12.89, 13.40, 13.90, 14.16, 14.41, 14.41, 14.94, 15.48, 16.01, 16.54, 17.08, 17.61, 18.14, 18.67, 19.21, 19.47, 19.74, 19.74, 20.30, 20.86, 21.42, 21.98, 22.55, 23.11, 23.67, 24.23, 24.79, 25.07, 25.35, 25.35, 25.94, 26.53, 27.11, 27.70, 28.29, 28.88, 29.47, 30.05, 30.64, 30.94, 31.23, 31.23, 31.84, 32.46, 33.07, 33.69, 34.30, 34.91, 35.53, 36.14, 36.76, 37.06, 37.37, 37.37, 38.01, 38.65, 39.29, 39.93, 40.57, 41.21, 41.85, 42.49, 43.13, 43.45, 43.77, 43.77, 44.44, 45.11, 45.77, 46.44, 47.11, 47.78, 48.45, 49.11, 49.78, 50.12, 50.45, 50.45, 51.15, 51.84, 52.54, 53.23, 53.93, 54.62, 55.32, 56.01, 56.71, 57.05, 57.40, 57.40, 58.12, 58.84, 59.57, 60.29, 61.01, 61.73, 62.45, 63.18, 63.90, 64.26, 64.62, 64.62, 65.37, 66.12, 66.87, 67.62, 68.37, 69.11, 69.86, 70.61, 71.36, 71.74, 72.11, 72.11, 72.89, 73.66, 74.44, 75.21, 75.99, 76.76, 77.54, 78.31, 79.09, 79.47, 79.86, 79.86, 80.66, 81.45, 82.25, 83.05, 83.85, 84.64, 85.44, 86.24, 87.03, 87.43, 87.83, 87.83, 88.65, 89.47, 90.29, 91.11, 91.93, 92.74, 93.56, 94.38, 95.20, 95.61, 96.02, 96.02, 96.86, 97.70, 98.53, 99.37, 100.21, 101.05, 101.89, 102.72, 103.56, 103.98, 104.40, 104.40, 105.26, 106.11, 106.97, 107.82, 108.68, 109.53, 110.39, 111.24, 112.10, 112.52, 112.95, 112.95, 113.82, 114.69, 115.57, 116.44, 117.31, 118.18, 119.05, 119.93, 120.80, 121.23, 121.67, 121.67, 122.56, 123.44, 124.33, 125.22, 126.11, 126.99, 127.88, 128.77, 129.65, 130.10, 130.54, 130.54, 131.44, 132.34, 133.24, 134.14, 135.05, 135.95, 136.85, 137.75, 138.65, 139.10, 139.55, 139.55);
INSERT INTO `table_counts_copy1` VALUES (46, 0.49, 0.99, 1.48, 1.98, 2.47, 2.96, 3.46, 3.95, 4.45, 4.69, 4.94, 4.94, 5.46, 5.97, 6.49, 7.00, 7.52, 8.04, 8.55, 9.07, 9.58, 9.84, 10.10, 10.10, 10.65, 11.19, 11.74, 12.29, 12.84, 13.38, 13.93, 14.48, 15.02, 15.30, 15.57, 15.57, 16.15, 16.72, 17.30, 17.87, 18.45, 19.03, 19.60, 20.18, 20.75, 21.04, 21.33, 21.33, 21.94, 22.54, 23.15, 23.75, 24.36, 24.97, 25.57, 26.18, 26.78, 27.09, 27.39, 27.39, 28.03, 28.66, 29.30, 29.93, 30.57, 31.20, 31.84, 32.47, 33.11, 33.42, 33.74, 33.74, 34.40, 35.07, 35.73, 36.40, 37.06, 37.72, 38.39, 39.05, 39.72, 40.05, 40.38, 40.38, 41.08, 41.77, 42.47, 43.16, 43.86, 44.55, 45.25, 45.94, 46.64, 46.98, 47.33, 47.33, 48.06, 48.78, 49.51, 50.23, 50.96, 51.69, 52.41, 53.14, 53.86, 54.23, 54.59, 54.59, 55.35, 56.10, 56.86, 57.61, 58.37, 59.13, 59.88, 60.64, 61.39, 61.77, 62.15, 62.15, 62.94, 63.72, 64.51, 65.29, 66.08, 66.87, 67.65, 68.44, 69.22, 69.62, 70.01, 70.01, 70.82, 71.64, 72.45, 73.27, 74.08, 74.89, 75.71, 76.52, 77.34, 77.74, 78.15, 78.15, 78.99, 79.83, 80.67, 81.51, 82.36, 83.20, 84.04, 84.88, 85.72, 86.14, 86.56, 86.56, 87.43, 88.29, 89.16, 90.02, 90.89, 91.75, 92.62, 93.48, 94.35, 94.78, 95.21, 95.21, 96.10, 96.98, 97.87, 98.75, 99.64, 100.53, 101.41, 102.30, 103.18, 103.63, 104.07, 104.07, 104.98, 105.88, 106.79, 107.70, 108.61, 109.51, 110.42, 111.33, 112.23, 112.69, 113.14, 113.14, 114.06, 114.99, 115.91, 116.84, 117.76, 118.68, 119.61, 120.53, 121.46, 121.92, 122.38, 122.38, 123.32, 124.27, 125.21, 126.15, 127.10, 128.04, 128.98, 129.92, 130.87, 131.34, 131.81, 131.81, 132.77, 133.73, 134.68, 135.64, 136.60, 137.56, 138.52, 139.47, 140.43, 140.91, 141.39, 141.39, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (47, 0.53, 1.07, 1.60, 2.14, 2.67, 3.20, 3.74, 4.27, 4.81, 5.07, 5.34, 5.34, 5.90, 6.46, 7.01, 7.57, 8.13, 8.69, 9.25, 9.80, 10.36, 10.64, 10.92, 10.92, 11.51, 12.10, 12.69, 13.28, 13.87, 14.46, 15.05, 15.64, 16.23, 16.53, 16.82, 16.82, 17.44, 18.06, 18.69, 19.31, 19.93, 20.55, 21.17, 21.80, 22.42, 22.73, 23.04, 23.04, 23.70, 24.35, 25.01, 25.66, 26.32, 26.97, 27.63, 28.28, 28.94, 29.26, 29.59, 29.59, 30.28, 30.97, 31.65, 32.34, 33.03, 33.72, 34.41, 35.09, 35.78, 36.13, 36.47, 36.47, 37.19, 37.91, 38.63, 39.35, 40.08, 40.80, 41.52, 42.24, 42.96, 43.32, 43.68, 43.68, 44.44, 45.19, 45.95, 46.70, 47.46, 48.22, 48.97, 49.73, 50.48, 50.86, 51.24, 51.24, 52.03, 52.82, 53.61, 54.40, 55.19, 55.98, 56.77, 57.56, 58.35, 58.75, 59.14, 59.14, 59.96, 60.79, 61.61, 62.43, 63.26, 64.08, 64.90, 65.72, 66.55, 66.96, 67.37, 67.37, 68.23, 69.08, 69.94, 70.79, 71.65, 72.50, 73.36, 74.21, 75.07, 75.49, 75.92, 75.92, 76.81, 77.69, 78.58, 79.46, 80.35, 81.23, 82.12, 83.00, 83.89, 84.33, 84.77, 84.77, 85.68, 86.59, 87.51, 88.42, 89.33, 90.24, 91.15, 92.07, 92.98, 93.43, 93.89, 93.89, 94.83, 95.76, 96.70, 97.63, 98.57, 99.51, 100.44, 101.38, 102.31, 102.78, 103.25, 103.25, 104.21, 105.17, 106.13, 107.09, 108.05, 109.00, 109.96, 110.92, 111.88, 112.36, 112.84, 112.84, 113.82, 114.80, 115.78, 116.76, 117.75, 118.73, 119.71, 120.69, 121.67, 122.16, 122.65, 122.65, 123.65, 124.65, 125.65, 126.65, 127.65, 128.65, 129.65, 130.65, 131.65, 132.15, 132.65, 132.65, 133.67, 134.69, 135.71, 136.73, 137.75, 138.76, 139.78, 140.80, 141.82, 142.33, 142.84, 142.84, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (48, 0.58, 1.15, 1.73, 2.30, 2.88, 3.46, 4.03, 4.61, 5.18, 5.47, 5.76, 5.76, 6.36, 6.97, 7.57, 8.17, 8.78, 9.38, 9.98, 10.58, 11.19, 11.49, 11.79, 11.79, 12.43, 13.06, 13.70, 14.34, 14.98, 15.61, 16.25, 16.89, 17.52, 17.84, 18.16, 18.16, 18.83, 19.51, 20.18, 20.86, 21.53, 22.20, 22.88, 23.55, 24.23, 24.56, 24.90, 24.90, 25.61, 26.32, 27.03, 27.74, 28.45, 29.15, 29.86, 30.57, 31.28, 31.64, 31.99, 31.99, 32.74, 33.49, 34.23, 34.98, 35.73, 36.48, 37.23, 37.97, 38.72, 39.10, 39.47, 39.47, 40.26, 41.04, 41.83, 42.61, 43.40, 44.18, 44.97, 45.75, 46.54, 46.93, 47.32, 47.32, 48.14, 48.97, 49.79, 50.62, 51.44, 52.26, 53.09, 53.91, 54.74, 55.15, 55.56, 55.56, 56.42, 57.28, 58.14, 59.00, 59.86, 60.72, 61.58, 62.44, 63.30, 63.73, 64.16, 64.16, 65.06, 65.95, 66.85, 67.75, 68.65, 69.54, 70.44, 71.34, 72.23, 72.68, 73.13, 73.13, 74.06, 74.99, 75.92, 76.85, 77.78, 78.70, 79.63, 80.56, 81.49, 81.96, 82.42, 82.42, 83.38, 84.34, 85.30, 86.26, 87.22, 88.18, 89.14, 90.10, 91.06, 91.54, 92.02, 92.02, 93.01, 94.00, 94.98, 95.97, 96.96, 97.95, 98.94, 99.92, 100.91, 101.41, 101.90, 101.90, 102.91, 103.93, 104.94, 105.95, 106.97, 107.98, 108.99, 110.00, 111.02, 111.52, 112.03, 112.03, 113.07, 114.11, 115.14, 116.18, 117.22, 118.26, 119.30, 120.33, 121.37, 121.89, 122.41, 122.41, 123.47, 124.53, 125.59, 126.65, 127.71, 128.77, 129.83, 130.89, 131.95, 132.48, 133.01, 133.01, 134.09, 135.17, 136.26, 137.34, 138.42, 139.50, 140.58, 141.67, 142.75, 143.29, 143.83, 143.83, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (49, 0.62, 1.25, 1.87, 2.49, 3.12, 3.74, 4.36, 4.98, 5.61, 5.92, 6.23, 6.23, 6.88, 7.53, 8.19, 8.84, 9.49, 10.14, 10.79, 11.45, 12.10, 12.42, 12.75, 12.75, 13.44, 14.13, 14.82, 15.51, 16.20, 16.89, 17.58, 18.27, 18.96, 19.31, 19.65, 19.65, 20.38, 21.11, 21.84, 22.57, 23.31, 24.04, 24.77, 25.50, 26.23, 26.59, 26.96, 26.96, 27.73, 28.50, 29.28, 30.05, 30.82, 31.59, 32.36, 33.14, 33.91, 34.29, 34.68, 34.68, 35.49, 36.31, 37.12, 37.94, 38.75, 39.56, 40.38, 41.19, 42.01, 42.41, 42.82, 42.82, 43.68, 44.53, 45.39, 46.25, 47.11, 47.96, 48.82, 49.68, 50.53, 50.96, 51.39, 51.39, 52.29, 53.19, 54.08, 54.98, 55.88, 56.78, 57.68, 58.57, 59.47, 59.92, 60.37, 60.37, 61.31, 62.24, 63.18, 64.12, 65.06, 65.99, 66.93, 67.87, 68.80, 69.27, 69.74, 69.74, 70.72, 71.69, 72.67, 73.64, 74.62, 75.59, 76.57, 77.54, 78.52, 79.00, 79.49, 79.49, 80.50, 81.51, 82.52, 83.53, 84.54, 85.54, 86.55, 87.56, 88.57, 89.08, 89.58, 89.58, 90.62, 91.66, 92.70, 93.74, 94.78, 95.82, 96.86, 97.90, 98.94, 99.46, 99.98, 99.98, 101.05, 102.12, 103.19, 104.26, 105.33, 106.40, 107.47, 108.54, 109.61, 110.15, 110.68, 110.68, 111.78, 112.87, 113.97, 115.06, 116.16, 117.26, 118.35, 119.45, 120.54, 121.09, 121.64, 121.64, 122.76, 123.89, 125.01, 126.13, 127.26, 128.38, 129.50, 130.62, 131.75, 132.31, 132.87, 132.87, 134.02, 135.17, 136.31, 137.46, 138.61, 139.76, 140.91, 142.05, 143.20, 143.78, 144.35, 144.35, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (50, 0.67, 1.35, 2.02, 2.69, 3.37, 4.04, 4.71, 5.38, 6.06, 6.39, 6.73, 6.73, 7.44, 8.14, 8.85, 9.55, 10.26, 10.97, 11.67, 12.38, 13.08, 13.44, 13.79, 13.79, 14.54, 15.29, 16.04, 16.79, 17.55, 18.30, 19.05, 19.80, 20.55, 20.92, 21.30, 21.30, 22.10, 22.89, 23.69, 24.48, 25.28, 26.08, 26.87, 27.67, 28.46, 28.86, 29.26, 29.26, 30.10, 30.94, 31.79, 32.63, 33.47, 34.31, 35.15, 36.00, 36.84, 37.26, 37.68, 37.68, 38.57, 39.46, 40.35, 41.24, 42.13, 43.01, 43.90, 44.79, 45.68, 46.13, 46.57, 46.57, 47.51, 48.44, 49.38, 50.31, 51.25, 52.18, 53.12, 54.05, 54.99, 55.45, 55.92, 55.92, 56.90, 57.88, 58.86, 59.84, 60.82, 61.79, 62.77, 63.75, 64.73, 65.22, 65.71, 65.71, 66.73, 67.75, 68.77, 69.79, 70.81, 71.83, 72.85, 73.87, 74.89, 75.40, 75.91, 75.91, 76.97, 78.03, 79.08, 80.14, 81.20, 82.26, 83.32, 84.37, 85.43, 85.96, 86.49, 86.49, 87.58, 88.68, 89.77, 90.87, 91.96, 93.05, 94.15, 95.24, 96.34, 96.88, 97.43, 97.43, 98.56, 99.68, 100.81, 101.94, 103.07, 104.19, 105.32, 106.45, 107.57, 108.14, 108.70, 108.70, 109.86, 111.01, 112.17, 113.33, 114.49, 115.64, 116.80, 117.96, 119.11, 119.69, 120.27, 120.27, 121.46, 122.65, 123.83, 125.02, 126.21, 127.40, 128.59, 129.77, 130.96, 131.56, 132.15, 132.15, 133.37, 134.58, 135.80, 137.01, 138.23, 139.44, 140.66, 141.87, 143.09, 143.69, 144.30, 144.30, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (51, 0.73, 1.47, 2.20, 2.93, 3.67, 4.40, 5.13, 5.86, 6.60, 6.96, 7.33, 7.33, 8.10, 8.87, 9.63, 10.40, 11.17, 11.94, 12.71, 13.47, 14.24, 14.63, 15.01, 15.01, 15.83, 16.65, 17.47, 18.29, 19.11, 19.92, 20.74, 21.56, 22.38, 22.79, 23.20, 23.20, 24.07, 24.94, 25.81, 26.68, 27.55, 28.42, 29.29, 30.16, 31.03, 31.47, 31.90, 31.90, 32.82, 33.74, 34.66, 35.58, 36.50, 37.42, 38.34, 39.26, 40.18, 40.64, 41.10, 41.10, 42.07, 43.04, 44.02, 44.99, 45.96, 46.93, 47.90, 48.88, 49.85, 50.33, 50.82, 50.82, 51.84, 52.86, 53.88, 54.90, 55.92, 56.93, 57.95, 58.97, 59.99, 60.50, 61.01, 61.01, 62.08, 63.14, 64.21, 65.27, 66.34, 67.40, 68.47, 69.53, 70.60, 71.13, 71.66, 71.66, 72.77, 73.88, 74.98, 76.09, 77.20, 78.31, 79.42, 80.52, 81.63, 82.19, 82.74, 82.74, 83.89, 85.04, 86.18, 87.33, 88.48, 89.63, 90.78, 91.92, 93.07, 93.65, 94.22, 94.22, 95.40, 96.59, 97.77, 98.96, 100.14, 101.32, 102.51, 103.69, 104.88, 105.47, 106.06, 106.06, 107.28, 108.50, 109.72, 110.94, 112.16, 113.38, 114.60, 115.82, 117.04, 117.65, 118.26, 118.26, 119.51, 120.77, 122.02, 123.28, 124.53, 125.78, 127.04, 128.29, 129.55, 130.17, 130.80, 130.80, 132.09, 133.37, 134.66, 135.94, 137.23, 138.52, 139.80, 141.09, 142.37, 143.02, 143.66, 143.66, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (52, 0.80, 1.60, 2.40, 3.20, 4.00, 4.79, 5.59, 6.39, 7.19, 7.59, 7.99, 7.99, 8.83, 9.67, 10.51, 11.35, 12.19, 13.02, 13.86, 14.70, 15.54, 15.96, 16.38, 16.38, 17.28, 18.17, 19.07, 19.96, 20.86, 21.76, 22.65, 23.55, 24.44, 24.89, 25.34, 25.34, 26.29, 27.24, 28.19, 29.14, 30.10, 31.05, 32.00, 32.95, 33.90, 34.37, 34.85, 34.85, 35.86, 36.86, 37.87, 38.88, 39.89, 40.89, 41.90, 42.91, 43.91, 44.42, 44.92, 44.92, 45.98, 47.04, 48.10, 49.16, 50.22, 51.28, 52.34, 53.40, 54.46, 54.99, 55.52, 55.52, 56.63, 57.74, 58.85, 59.96, 61.07, 62.18, 63.29, 64.40, 65.51, 66.07, 66.62, 66.62, 67.78, 68.93, 70.09, 71.25, 72.41, 73.56, 74.72, 75.88, 77.03, 77.61, 78.19, 78.19, 79.39, 80.59, 81.79, 82.99, 84.20, 85.40, 86.60, 87.80, 89.00, 89.60, 90.20, 90.20, 91.44, 92.69, 93.93, 95.18, 96.42, 97.66, 98.91, 100.15, 101.40, 102.02, 102.64, 102.64, 103.92, 105.21, 106.49, 107.77, 109.06, 110.34, 111.62, 112.90, 114.19, 114.83, 115.47, 115.47, 116.79, 118.11, 119.43, 120.75, 122.08, 123.40, 124.72, 126.04, 127.36, 128.02, 128.68, 128.68, 130.04, 131.40, 132.76, 134.12, 135.48, 136.83, 138.19, 139.55, 140.91, 141.59, 142.27, 142.27, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (53, 0.87, 1.75, 2.62, 3.50, 4.37, 5.24, 6.12, 6.99, 7.87, 8.30, 8.74, 8.74, 9.66, 10.58, 11.50, 12.42, 13.34, 14.26, 15.18, 16.10, 17.02, 17.48, 17.94, 17.94, 18.92, 19.90, 20.88, 21.86, 22.85, 23.83, 24.81, 25.79, 26.77, 27.26, 27.75, 27.75, 28.79, 29.83, 30.87, 31.91, 32.95, 33.99, 35.03, 36.07, 37.11, 37.63, 38.15, 38.15, 39.25, 40.35, 41.45, 42.55, 43.65, 44.74, 45.84, 46.94, 48.04, 48.59, 49.14, 49.14, 50.29, 51.45, 52.60, 53.76, 54.91, 56.06, 57.22, 58.37, 59.53, 60.10, 60.68, 60.68, 61.89, 63.09, 64.30, 65.50, 66.71, 67.92, 69.12, 70.33, 71.53, 72.14, 72.74, 72.74, 74.00, 75.25, 76.51, 77.76, 79.02, 80.27, 81.53, 82.78, 84.04, 84.66, 85.29, 85.29, 86.59, 87.89, 89.20, 90.50, 91.80, 93.10, 94.40, 95.71, 97.01, 97.66, 98.31, 98.31, 99.66, 101.00, 102.35, 103.70, 105.05, 106.39, 107.74, 109.09, 110.43, 111.11, 111.78, 111.78, 113.17, 114.56, 115.95, 117.34, 118.74, 120.13, 121.52, 122.91, 124.30, 124.99, 125.69, 125.69, 127.12, 128.56, 129.99, 131.42, 132.86, 134.29, 135.72, 137.15, 138.59, 139.30, 140.02, 140.02, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (54, 0.96, 1.92, 2.88, 3.84, 4.80, 5.75, 6.71, 7.67, 8.63, 9.11, 9.59, 9.59, 10.60, 11.61, 12.61, 13.62, 14.63, 15.64, 16.65, 17.65, 18.66, 19.17, 19.67, 19.67, 20.74, 21.82, 22.89, 23.96, 25.04, 26.11, 27.18, 28.25, 29.33, 29.86, 30.40, 30.40, 31.54, 32.67, 33.81, 34.94, 36.08, 37.22, 38.35, 39.49, 40.62, 41.19, 41.76, 41.76, 42.96, 44.15, 45.35, 46.55, 47.75, 48.94, 50.14, 51.34, 52.53, 53.13, 53.73, 53.73, 54.98, 56.24, 57.49, 58.74, 60.00, 61.25, 62.50, 63.75, 65.01, 65.63, 66.26, 66.26, 67.57, 68.88, 70.19, 71.50, 72.81, 74.11, 75.42, 76.73, 78.04, 78.70, 79.35, 79.35, 80.71, 82.07, 83.43, 84.79, 86.16, 87.52, 88.88, 90.24, 91.60, 92.28, 92.96, 92.96, 94.37, 95.78, 97.19, 98.60, 100.02, 101.43, 102.84, 104.25, 105.66, 106.36, 107.07, 107.07, 108.53, 109.99, 111.45, 112.91, 114.38, 115.84, 117.30, 118.76, 120.22, 120.95, 121.68, 121.68, 123.19, 124.70, 126.20, 127.71, 129.22, 130.73, 132.24, 133.74, 135.25, 136.01, 136.76, 136.76, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (55, 1.05, 2.10, 3.15, 4.20, 5.26, 6.31, 7.36, 8.41, 9.46, 9.98, 10.51, 10.51, 11.61, 12.72, 13.82, 14.92, 16.03, 17.13, 18.23, 19.33, 20.44, 20.99, 21.54, 21.54, 22.71, 23.88, 25.05, 26.22, 27.40, 28.57, 29.74, 30.91, 32.08, 32.66, 33.25, 33.25, 34.49, 35.72, 36.96, 38.20, 39.44, 40.67, 41.91, 43.15, 44.38, 45.00, 45.62, 45.62, 46.92, 48.22, 49.52, 50.82, 52.12, 53.42, 54.72, 56.02, 57.32, 57.97, 58.62, 58.62, 59.98, 61.34, 62.70, 64.06, 65.42, 66.78, 68.14, 69.50, 70.86, 71.54, 72.22, 72.22, 73.64, 75.06, 76.48, 77.90, 79.32, 80.73, 82.15, 83.57, 84.99, 85.70, 86.41, 86.41, 87.89, 89.36, 90.84, 92.31, 93.79, 95.27, 96.74, 98.22, 99.69, 100.43, 101.17, 101.17, 102.70, 104.23, 105.76, 107.29, 108.83, 110.36, 111.89, 113.42, 114.95, 115.71, 116.48, 116.48, 118.07, 119.65, 121.24, 122.82, 124.41, 125.99, 127.58, 129.16, 130.75, 131.54, 132.33, 132.33, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (56, 1.15, 2.30, 3.45, 4.60, 5.75, 6.90, 8.05, 9.20, 10.35, 10.93, 11.50, 11.50, 12.70, 13.91, 15.11, 16.32, 17.52, 18.72, 19.93, 21.13, 22.34, 22.94, 23.54, 23.54, 24.82, 26.09, 27.37, 28.64, 29.92, 31.19, 32.47, 33.74, 35.02, 35.65, 36.29, 36.29, 37.63, 38.98, 40.32, 41.67, 43.01, 44.35, 45.70, 47.04, 48.39, 49.06, 49.73, 49.73, 51.14, 52.55, 53.96, 55.37, 56.79, 58.20, 59.61, 61.02, 62.43, 63.13, 63.84, 63.84, 65.32, 66.79, 68.27, 69.74, 71.22, 72.69, 74.17, 75.64, 77.12, 77.85, 78.59, 78.59, 80.13, 81.67, 83.21, 84.75, 86.29, 87.83, 89.37, 90.91, 92.45, 93.22, 93.99, 93.99, 95.59, 97.19, 98.80, 100.40, 102.00, 103.60, 105.20, 106.81, 108.41, 109.21, 110.01, 110.01, 111.67, 113.34, 115.00, 116.66, 118.33, 119.99, 121.65, 123.31, 124.98, 125.81, 126.64, 126.64, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (57, 1.25, 2.51, 3.76, 5.01, 6.27, 7.52, 8.77, 10.02, 11.28, 11.90, 12.53, 12.53, 13.84, 15.15, 16.46, 17.77, 19.09, 20.40, 21.71, 23.02, 24.33, 24.98, 25.64, 25.64, 27.03, 28.41, 29.80, 31.18, 32.57, 33.95, 35.34, 36.72, 38.11, 38.80, 39.49, 39.49, 40.95, 42.41, 43.87, 45.33, 46.79, 48.24, 49.70, 51.16, 52.62, 53.35, 54.08, 54.08, 55.61, 57.14, 58.67, 60.20, 61.74, 63.27, 64.80, 66.33, 67.86, 68.62, 69.39, 69.39, 70.99, 72.60, 74.20, 75.80, 77.41, 79.01, 80.61, 82.21, 83.82, 84.62, 85.42, 85.42, 87.09, 88.77, 90.44, 92.11, 93.79, 95.46, 97.13, 98.80, 100.48, 101.31, 102.15, 102.15, 103.89, 105.63, 107.37, 109.11, 110.86, 112.60, 114.34, 116.08, 117.82, 118.69, 119.56, 119.56, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (58, 1.36, 2.73, 4.09, 5.46, 6.82, 8.18, 9.55, 10.91, 12.28, 12.96, 13.64, 13.64, 15.06, 16.49, 17.91, 19.34, 20.76, 22.18, 23.61, 25.03, 26.46, 27.17, 27.88, 27.88, 29.39, 30.89, 32.40, 33.90, 35.41, 36.91, 38.42, 39.92, 41.43, 42.18, 42.93, 42.93, 44.52, 46.10, 47.69, 49.27, 50.86, 52.44, 54.03, 55.61, 57.20, 57.99, 58.78, 58.78, 60.44, 62.11, 63.77, 65.44, 67.10, 68.76, 70.43, 72.09, 73.76, 74.59, 75.42, 75.42, 77.16, 78.91, 80.65, 82.39, 84.14, 85.88, 87.62, 89.36, 91.11, 91.98, 92.85, 92.85, 94.67, 96.49, 98.31, 100.13, 101.96, 103.78, 105.60, 107.42, 109.24, 110.15, 111.06, 111.06, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (59, 1.48, 2.96, 4.45, 5.93, 7.41, 8.89, 10.37, 11.86, 13.34, 14.08, 14.82, 14.82, 16.37, 17.92, 19.46, 21.01, 22.56, 24.11, 25.66, 27.20, 28.75, 29.53, 30.30, 30.30, 31.94, 33.57, 35.21, 36.85, 38.49, 40.12, 41.76, 43.40, 45.03, 45.85, 46.67, 46.67, 48.40, 50.12, 51.85, 53.57, 55.30, 57.02, 58.75, 60.47, 62.20, 63.06, 63.92, 63.92, 65.73, 67.54, 69.36, 71.17, 72.98, 74.79, 76.60, 78.42, 80.23, 81.13, 82.04, 82.04, 83.94, 85.84, 87.74, 89.64, 91.54, 93.44, 95.34, 97.24, 99.14, 100.09, 101.04, 101.04, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (60, 1.61, 3.23, 4.84, 6.46, 8.07, 9.68, 11.30, 12.91, 14.53, 15.33, 16.14, 16.14, 17.83, 19.51, 21.20, 22.88, 24.57, 26.26, 27.94, 29.63, 31.31, 32.16, 33.00, 33.00, 34.78, 36.57, 38.35, 40.13, 41.92, 43.70, 45.48, 47.26, 49.05, 49.94, 50.83, 50.83, 52.71, 54.59, 56.48, 58.36, 60.24, 62.12, 64.00, 65.89, 67.77, 68.71, 69.65, 69.65, 71.63, 73.61, 75.58, 77.56, 79.54, 81.52, 83.50, 85.47, 87.45, 88.44, 89.43, 89.43, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (61, 1.76, 3.52, 5.28, 7.04, 8.80, 10.56, 12.32, 14.08, 15.84, 16.72, 17.60, 17.60, 19.44, 21.28, 23.12, 24.96, 26.81, 28.65, 30.49, 32.33, 34.17, 35.09, 36.01, 36.01, 37.96, 39.91, 41.86, 43.81, 45.76, 47.70, 49.65, 51.60, 53.55, 54.53, 55.50, 55.50, 57.56, 59.61, 61.67, 63.73, 65.79, 67.84, 69.90, 71.96, 74.01, 75.04, 76.07, 76.07, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (62, 1.93, 3.85, 5.78, 7.70, 9.63, 11.56, 13.48, 15.41, 17.33, 18.30, 19.26, 19.26, 21.28, 23.29, 25.31, 27.32, 29.34, 31.35, 33.37, 35.38, 37.40, 38.40, 39.41, 39.41, 41.54, 43.68, 45.81, 47.95, 50.08, 52.21, 54.35, 56.48, 58.62, 59.68, 60.75, 60.75, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (63, 2.11, 4.23, 6.34, 8.45, 10.57, 12.68, 14.79, 16.90, 19.02, 20.07, 21.13, 21.13, 23.34, 25.55, 27.76, 29.97, 32.19, 34.40, 36.61, 38.82, 41.03, 42.13, 43.24, 43.24, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `table_counts_copy1` VALUES (64, 2.32, 4.64, 6.97, 9.29, 11.61, 13.93, 16.25, 18.58, 20.90, 22.06, 23.22, 23.22, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (3, 'irfan luthfi', '11111111', 'privacyfans@gmail.com', NULL, '$2y$10$HBbEjHSfpbmlwvVIVb1FPeXLqIG7JtoqRxI4g8Ub5Xk8B6Oqsvd.W', NULL, NULL, '2023-12-29 03:00:29', '2023-12-29 03:24:42');
INSERT INTO `users` VALUES (4, 'faiz', '01121228', 'faiz8519@gmail.com', NULL, '$2y$10$axHmSDf6OoluIaXYIQeZMej9wJ5QDsl63gZBxzEdUKViMn1Wr0U42', NULL, NULL, '2023-12-29 03:03:17', '2023-12-29 03:03:17');
INSERT INTO `users` VALUES (5, 'farid', '11111111', 'farid8519@gmail.com', NULL, '$2y$10$axHmSDf6OoluIaXYIQeZMej9wJ5QDsl63gZBxzEdUKViMn1Wr0U42', NULL, NULL, '2023-12-29 03:03:17', '2023-12-29 03:03:17');

SET FOREIGN_KEY_CHECKS = 1;
