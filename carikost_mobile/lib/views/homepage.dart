import 'package:flutter/material.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    double width = MediaQuery.of(context).size.width;

    return Scaffold(
      appBar: AppBar(
        automaticallyImplyLeading: false,
        title: Text(
          "CariKost Mahasiswa",
          style: TextStyle(color: Colors.white),
        ),
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
        selectedIndex: 0,
      ),
      body: Column(
        children: [
          Image.asset("assets/images/banner_1.webp"),

          Padding(
            padding: const EdgeInsets.symmetric(horizontal: 24),
            child: Column(
              children: [
                SizedBox(height: 18),
                Text(
                  "Mau cari kost dimana hari ini? 🥰",
                  style: TextStyle(fontSize: 18),
                ),
                SizedBox(height: 18),
                Text(
                  "Ini adalah aplikasi mencari kost. anda bisa mencari kost disini. Terdapat fitur mencari harga termurah, jangan tampilkan kost campur, Kategori dan masih banyak fitur menarik lainnya!",
                  textAlign: TextAlign.justify,
                ),
                SizedBox(height: 48),

                Container(
                  child: Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: [
                      Text("Kategori Fasilitas : ", textAlign: TextAlign.start),
                      SizedBox(height: 10),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        children: [
                          Column(
                            children: [
                              CircleAvatar(
                                backgroundColor: Colors.blueAccent,
                                child: Icon(
                                  Icons.wind_power,
                                  color: Colors.white,
                                ),
                              ),
                              SizedBox(height: 5),
                              Text("AC"),
                            ],
                          ),
                          SizedBox(width: 18),
                          Column(
                            children: [
                              CircleAvatar(
                                backgroundColor: Colors.blueAccent,
                                child: Icon(Icons.wifi, color: Colors.white),
                              ),
                              SizedBox(height: 5),
                              Text("WIFI"),
                            ],
                          ),
                          SizedBox(width: 18),
                          Column(
                            children: [
                              CircleAvatar(
                                backgroundColor: Colors.blueAccent,
                                child: Icon(
                                  Icons.local_parking,
                                  color: Colors.white,
                                ),
                              ),
                              SizedBox(height: 5),
                              Text("PARKIR"),
                            ],
                          ),
                          SizedBox(width: 18),
                          Column(
                            children: [
                              CircleAvatar(
                                backgroundColor: Colors.blueAccent,
                                child: Icon(Icons.bed, color: Colors.white),
                              ),
                              SizedBox(height: 5),
                              Text("KAMAR"),
                            ],
                          ),
                          SizedBox(width: 18),
                          Column(
                            children: [
                              CircleAvatar(
                                backgroundColor: Colors.blueAccent,
                                child: Icon(Icons.wash, color: Colors.white),
                              ),
                              SizedBox(height: 5),
                              Text("TOILET"),
                            ],
                          ),
                          SizedBox(width: 18),
                        ],
                      ),
                    ],
                  ),
                ),
                SizedBox(height: 18),
                ElevatedButton(
                  onPressed: () {
                    Navigator.pushNamed(context, '/explore');
                  },
                  style: ElevatedButton.styleFrom(
                    backgroundColor: Colors.blueAccent,
                    foregroundColor: Colors.white,
                    fixedSize: Size(width, 50),
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(8),
                    ),
                    padding: const EdgeInsets.symmetric(vertical: 13),
                  ),
                  child: const Text("Lihat semua kost"),
                ),
              ],
            ),
          ),
        ],
      ),
    );
  }
}
