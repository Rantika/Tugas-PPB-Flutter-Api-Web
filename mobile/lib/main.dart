// ignore_for_file: prefer_const_constructors

import 'package:flutter/material.dart';
// ignore: unused_import
import 'package:hallo_app/screens/hallo_app.dart';
import 'package:hallo_app/screens/home_page.dart';
// ignore: unused_import
import 'package:hallo_app/screens/detail.dart';
// ignore: unused_import
import 'screens/hallo_app.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({
    Key? key,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Rollo Store',
      home: HomePage(),
    );
  }
}
