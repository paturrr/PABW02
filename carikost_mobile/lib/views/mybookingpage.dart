import 'package:flutter/material.dart';

class MyBookingPage extends StatelessWidget {
  MyBookingPage({super.key});

  final List<Map<String, dynamic>> myBookings = [
    {
      "foto": "kost_1.jpg",
      "nama": "Kost Acer",
      "lokasi": "Sukapura",
      "harga": "Rp 1.5jt/bln",
      "tipe": "putri",
      "tanggal": "12 November 2025",
      "status": "Menunggu konfirmasi",
    },
    {
      "foto": "kost_2.jpg",
      "nama": "Kost Asus",
      "lokasi": "Leuinanggung",
      "harga": "Rp 1.1jt/bln",
      "tipe": "campur",
      "tanggal": "15 Agustus 2025",
      "status": "Ditolak",
    },
    {
      "foto": "kost_3.webp",
      "nama": "Kost Samsung",
      "lokasi": "Batununggal",
      "harga": "Rp 1.9jt/bln",
      "tipe": "putra",
      "tanggal": "11 September 2025",
      "status": "Distetujui",
    },
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        automaticallyImplyLeading: false,
        title: Text("My Bookings", style: TextStyle(color: Colors.white)),
        backgroundColor: Colors.blueAccent,
      ),
      bottomNavigationBar: NavigationBar(
        onDestinationSelected: (int index) {
          if (index == 0) {
            Navigator.pushNamed(context, '/');
          } else if (index == 1) {
            Navigator.pushNamed(context, '/bookings');
          } else if (index == 2) {
            Navigator.pushNamed(context, '/profile');
          }
        },
        destinations: [
          NavigationDestination(icon: Icon(Icons.home), label: 'Home'),
          NavigationDestination(icon: Icon(Icons.shop), label: 'Booking'),
          NavigationDestination(icon: Icon(Icons.person), label: 'Profile'),
        ],
        selectedIndex: 1,
      ),
      body: ListView.builder(
        itemCount: myBookings.length,
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
                ListTile(
                  contentPadding: const EdgeInsets.all(16),
                  title: Text(
                    myBookings[index]["nama"],
                    style: const TextStyle(
                      fontWeight: FontWeight.bold,
                      color: Colors.white,
                    ),
                  ),
                  subtitle: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      Text(
                        'Tanggal Pengajuan: ${myBookings[index]["tanggal"]}',
                        style: const TextStyle(color: Colors.white70),
                      ),
                      SizedBox(height: 3),
                      Text(
                        'status booking: ${myBookings[index]["status"]}',
                        style: const TextStyle(color: Colors.white70),
                      ),
                      SizedBox(height: 3),
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
