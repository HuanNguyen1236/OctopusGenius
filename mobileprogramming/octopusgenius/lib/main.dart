import 'package:firebase_core/firebase_core.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/login.dart';

Future<void> main() async {
  WidgetsFlutterBinding.ensureInitialized();
  await Firebase.initializeApp();

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
