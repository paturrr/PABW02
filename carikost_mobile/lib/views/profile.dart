import 'package:flutter/material.dart';

class ProfilePage extends StatelessWidget {
  List<Map<String, dynamic>> options = [
    {'icon': Icons.verified_user, 'title': 'Hanya tampilkan kost putri/putra'},
    {'icon': Icons.attach_money, 'title': 'Urutkan berdasarkan harga termurah'},
    {'icon': Icons.notifications, 'title': 'Notifikasi kamar kosong'},
  ];

  @override
  Widget build(BuildContext context) {
    double width = MediaQuery.of(context).size.width;

    return LayoutBuilder(
      builder: (context, constraints) {
        return Scaffold(
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
            selectedIndex: 2,
          ),
          body: Column(
            children: [
              Container(
                width: constraints.maxWidth,
                decoration: BoxDecoration(color: Colors.blueAccent),
                child: Column(
                  children: [
                    SizedBox(height: width * 0.1),
                    CircleAvatar(
                      radius: width * 0.15,
                      backgroundImage: AssetImage(
                        "assets/images/profile_picture.png",
                      ),
                    ),
                    SizedBox(height: width * 0.05),
                    Text(
                      "Ariq Ahmad Nayaka",
                      style: TextStyle(
                        fontSize: width * 0.06,
                        fontWeight: FontWeight.bold,
                        color: Colors.white,
                      ),
                    ),
                    SizedBox(height: width * 0.02),
                    Text(
                      "Sistem Infromasi Kota Cerdas",
                      style: TextStyle(
                        fontSize: width * 0.04,
                        color: Colors.white,
                      ),
                    ),
                    SizedBox(height: width * 0.1),
                  ],
                ),
              ),
              Container(
                width: constraints.maxWidth,
                child: Column(
                  children: [
                    ListTile(
                      leading: Icon(options[0]["icon"]),
                      title: Row(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        children: [
                          Text(options[0]["title"]),
                          Icon(Icons.toggle_off),
                        ],
                      ),
                    ),
                    ListTile(
                      leading: Icon(options[1]["icon"]),
                      title: Row(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        children: [
                          Text(options[1]["title"]),
                          Icon(Icons.toggle_off),
                        ],
                      ),
                    ),
                    ListTile(
                      leading: Icon(options[2]["icon"]),
                      title: Row(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        children: [
                          Text(options[2]["title"]),
                          Icon(Icons.toggle_off),
                        ],
                      ),
                    ),
                  ],
                ),
              ),
            ],
          ),
        );
      },
    );
  }
}
