import 'package:flutter/material.dart';
import 'package:octopusgenius/login.dart';

void main() {
  runApp(
    MaterialApp(
      debugShowCheckedModeBanner: false,
      initialRoute: 'Login',
      routes: {
        'Login': (context) => Login(),
      },
    ),
  );
}
