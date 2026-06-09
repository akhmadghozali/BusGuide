import '../services/api_service.dart';

class WisataModel {
  final int idWisata;
  final String namaWisata;
  final String? deskripsi;
  final String? lokasi;
  final String? gambar;
  final int idHalte;

  WisataModel({
    required this.idWisata,
    required this.namaWisata,
    this.deskripsi,
    this.lokasi,
    this.gambar,
    required this.idHalte,
  });

  String? get gambarUrl {
    if (gambar == null || gambar!.isEmpty) return null;
    if (gambar!.startsWith('http')) return gambar;
    return '${ApiService.storageUrl}/$gambar';
  }

  factory WisataModel.fromJson(Map<String, dynamic> json) {
    return WisataModel(
      idWisata: json['id_wisata'] as int,
      namaWisata: json['nama_wisata'] ?? '',
      deskripsi: json['deskripsi'],
      lokasi: json['lokasi'],
      gambar: json['gambar'],
      idHalte: json['id_halte'] as int,
    );
  }
}
