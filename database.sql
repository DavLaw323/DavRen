CREATE DATABASE db_tugas_kuliah;
USE db_tugas_kuliah;

CREATE TABLE tugas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_tugas VARCHAR(255) NOT NULL,
    mata_kuliah VARCHAR(100) NOT NULL,
    deadline DATE NOT NULL,
    status ENUM('Belum Selesai', 'Selesai') DEFAULT 'Belum Selesai'
);