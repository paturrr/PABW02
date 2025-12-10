import 'package:carikost_mobile/views/exploreKostPage.dart';
import 'package:carikost_mobile/views/homepage.dart';
import 'package:carikost_mobile/views/mybookingpage.dart';
import 'package:carikost_mobile/views/profile.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: "CariKost App",
      theme: ThemeData(
        colorScheme: ColorScheme.fromSeed(seedColor: Colors.blueAccent),
        useMaterial3: true,
      ),
      initialRoute: '/',
      routes: {
        '/': (context) => const HomePage(),
        '/explore': (context) => ExploreKostPage(),
        '/bookings': (context) => MyBookingPage(),
        '/profile': (context) => ProfilePage(),
      },
    );
  }
}
