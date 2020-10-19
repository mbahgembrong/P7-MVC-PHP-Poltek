/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - weblanjut_20201019
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`weblanjut_20201019` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `weblanjut_20201019`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`kode_barang`,`nama_barang`,`harga_beli`,`harga_jual`) values 
('BE001','Beat POP-CW-FI',15563000,15826000);

/*Table structure for table `kecamatan` */

DROP TABLE IF EXISTS `kecamatan`;

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kecamatan` */

insert  into `kecamatan`(`id_kecamatan`,`nama_kecamatan`) values 
(1,'Mojoroto'),
(2,'Kota');

/*Table structure for table `kelurahan` */

DROP TABLE IF EXISTS `kelurahan`;

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_kelurahan` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_kelurahan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelurahan` */

insert  into `kelurahan`(`id_kelurahan`,`id_kecamatan`,`nama_kelurahan`) values 
(1,1,'Sukorame'),
(2,1,'Bandar Lor'),
(3,1,'Bandar kidul'),
(4,1,'Pojok'),
(5,2,'Ngronggo'),
(6,2,'Semampir'),
(7,2,'Balowerti'),
(8,2,'Kemasan');

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(5) NOT NULL,
  `nama_pegawai` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `kode_wilayah` varchar(3) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(5) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kota` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pegawai`),
  UNIQUE KEY `telepon` (`telepon`),
  KEY `kode_wilayah` (`kode_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id_pegawai`,`nama_pegawai`,`telepon`,`kode_wilayah`,`jabatan`,`jenis_kelamin`,`tgl_lahir`,`kota`) values 
('PE002','Jumanto','08576666666','K01','Kasir','','0000-00-00','');

/*Table structure for table `pegawai_baru` */

DROP TABLE IF EXISTS `pegawai_baru`;

CREATE TABLE `pegawai_baru` (
  `id_pegawai` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(5) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kode_wilayah` varchar(3) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `kota` varchar(10) NOT NULL,
  PRIMARY KEY (`id_pegawai`),
  UNIQUE KEY `telepon` (`telepon`),
  KEY `kode_wilayah` (`kode_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pegawai_baru` */

insert  into `pegawai_baru`(`id_pegawai`,`nama`,`telepon`,`jenis_kelamin`,`tgl_lahir`,`kode_wilayah`,`jabatan`,`kota`) values 
('PE001','Mujianto','0812234567890','L','1988-10-17','K01','Kepala Cab','');

/*Table structure for table `pelanggan` */

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) NOT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`),
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pelanggan` */

insert  into `pelanggan`(`id_pelanggan`,`nama`,`alamat`,`desa`,`kecamatan`,`kota`,`telepon`,`keterangan`) values 
('PL001','Ilham Wahiduddin','JL. Bendungan','Jabon','Banyakan','KEDIRI','08133512345',NULL);

/*Table structure for table `pelanggan_baru` */

DROP TABLE IF EXISTS `pelanggan_baru`;

CREATE TABLE `pelanggan_baru` (
  `id_pelanggan` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `telepon` varchar(15) NOT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`),
  UNIQUE KEY `telepon` (`telepon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelanggan_baru` */

insert  into `pelanggan_baru`(`id_pelanggan`,`nama`,`alamat`,`desa`,`kecamatan`,`kota`,`telepon`,`keterangan`) values 
('PL006','Mujahid','Jl Mayor Bismo','Semampir','Kota','Kota Kediri','085733894657',NULL);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_pelanggan` varchar(5) NOT NULL,
  `id_sales` varchar(5) NOT NULL,
  `id_kasir` varchar(5) NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `id_sales` (`id_sales`),
  KEY `id_kasir` (`id_kasir`),
  KEY `kode_barang` (`kode_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`tanggal`,`id_pelanggan`,`id_sales`,`id_kasir`,`kode_barang`,`jumlah`,`keterangan`) values 
(11,'2020-01-02','PL001','PE006','PE007','VA001',1,'KREDIT');

/*Table structure for table `transaksi_baru1` */

DROP TABLE IF EXISTS `transaksi_baru1`;

CREATE TABLE `transaksi_baru1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `id_pelanggan` varchar(5) NOT NULL,
  `id_sales` varchar(5) NOT NULL,
  `id_kasir` varchar(5) NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `id_sales` (`id_sales`),
  KEY `id_kasir` (`id_kasir`),
  KEY `kode_barang` (`kode_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi_baru1` */

insert  into `transaksi_baru1`(`id`,`tanggal`,`id_pelanggan`,`id_sales`,`id_kasir`,`kode_barang`,`jumlah`,`keterangan`) values 
(1,'0000-00-00','PL001','PE006','PE007','VA001',1,'KREDIT');

/*Table structure for table `transaksi_baru2` */

DROP TABLE IF EXISTS `transaksi_baru2`;

CREATE TABLE `transaksi_baru2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `id_pelanggan` varchar(5) NOT NULL,
  `id_sales` varchar(5) NOT NULL,
  `id_kasir` varchar(5) NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pelanggan` (`id_pelanggan`),
  KEY `id_sales` (`id_sales`),
  KEY `id_kasir` (`id_kasir`),
  KEY `kode_barang` (`kode_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `transaksi_baru2` */

insert  into `transaksi_baru2`(`id`,`tanggal`,`id_pelanggan`,`id_sales`,`id_kasir`,`kode_barang`,`jumlah`,`keterangan`) values 
(1,'2020-01-02 08:21:24','PL001','PE006','PE007','VA001',1,'KREDIT');

/*Table structure for table `wilayah` */

DROP TABLE IF EXISTS `wilayah`;

CREATE TABLE `wilayah` (
  `kode_wilayah` varchar(3) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `kota` varchar(10) NOT NULL,
  PRIMARY KEY (`kode_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `wilayah` */

insert  into `wilayah`(`kode_wilayah`,`nama`,`kota`) values 
('K01','Mojoroto','kotakediri'),
('K02','Pesantren','kab.kediri'),
('K03','Plosoklaten','kab.kediri'),
('K04','Ngadiluwih','kab.kediri'),
('K05','Kandat','kab.kediri'),
('K06','Pare','kab.kediri'),
('K07','Gurah','kab.kediri'),
('K08','Semen','kab.kediri'),
('K09','Puncu','kab.kediri'),
('K10','Wates','kab.kediri');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
