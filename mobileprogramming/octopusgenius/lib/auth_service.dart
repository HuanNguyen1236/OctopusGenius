import 'dart:async';

import 'package:firebase_auth/firebase_auth.dart';
import 'package:firebase_core/firebase_core.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/login.dart';

class AuthService {
  handdleAuthState() {
    return StreamBuilder(
        stream: FirebaseAuth.instance.authStateChanges(),
        builder: (BuildContext context, snapshot) {
          if (snapshot.hasData) {
            return home();
          } else {
            return Login();
          }
        });
  }
}
