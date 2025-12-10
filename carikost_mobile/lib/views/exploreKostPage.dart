import 'package:flutter/material.dart';

class ExploreKostPage extends StatelessWidget {
  // const ExploreKostPage({super.key});

  final List<Map<String, dynamic>> kostList = [
    {
      "foto": "kost_1.jpg",
      "nama": "Kost Acer",
      "lokasi": "Sukapura",
      "harga": "Rp 1.5jt/bln",
      "tipe": "putri",
    },
    {
      "foto": "kost_2.jpg",
      "nama": "Kost Asus",
      "lokasi": "Leuinanggung",
      "harga": "Rp 1.1jt/bln",
      "tipe": "campur",
    },
    {
      "foto": "kost_3.webp",
      "nama": "Kost Samsung",
      "lokasi": "Batununggal",
      "harga": "Rp 1.9jt/bln",
      "tipe": "putra",
    },
    {
      "foto": "kost_4.jpg",
      "nama": "Kost Lenovo",
      "lokasi": "Niagara",
      "harga": "Rp 2.5jt/bln",
      "tipe": "putri",
    },
    {
      "foto": "kost_5.jpg",
      "nama": "Kost Dell",
      "lokasi": "Mandor",
      "harga": "Rp 3.1jt/bln",
      "tipe": "campur",
    },
    {
      "foto": "kost_6.jpg",
      "nama": "Kost Xiaomi",
      "lokasi": "PIK 2",
      "harga": "Rp 1.2jt/bln",
      "tipe": "putra",
    },
    {
      "foto": "kost_7.jpg",
      "nama": "Kost Huawei",
      "lokasi": "PIK 1",
      "harga": "Rp 3.4jt/bln",
      "tipe": "putri",
    },
    {
      "foto": "kost_8.jpg",
      "nama": "Kost Apple",
      "lokasi": "SCBD",
      "harga": "Rp 1.5jt/bln",
      "tipe": "campur",
    },
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Eksplore", style: TextStyle(color: Colors.white)),
        backgroundColor: Colors.blueAccent,
      ),
      body: ListView.builder(
        itemCount: kostList.length,
        itemBuilder: (context, index) {
          return Card(
            color: Colors.blueAccent,
            margin: const EdgeInsets.symmetric(horizontal: 16, vertical: 8),
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(12),
            ),
            child: Column(
              children: [
                SizedBox(height: 9),
                Image.asset(
                  "assets/images/${kostList[index]["foto"]}",
                  width: 370,
                  fit: BoxFit.fitWidth,
                ),
                ListTile(
                  contentPadding: const EdgeInsets.all(16),
                  title: Text(
                    kostList[index]["nama"],
                    style: const TextStyle(
                      fontWeight: FontWeight.bold,
                      color: Colors.white,
                    ),
                  ),
                  subtitle: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      Text(
                        'Lokasi: ${kostList[index]["lokasi"]}',
                        style: const TextStyle(color: Colors.white70),
                      ),
                      SizedBox(height: 3),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        children: [
                          Text(
                            'Tipe: ${kostList[index]["tipe"]}',
                            style: const TextStyle(color: Colors.white70),
                          ),
                          SizedBox(height: 3),
                          Text(
                            'Price: ${kostList[index]["harga"]}',
                            style: const TextStyle(color: Colors.white70),
                          ),
                          SizedBox(height: 3),
                        ],
                      ),
                    ],
                  ),
                ),
              ],
            ),
          );
        },
      ),
    );
  }
}
