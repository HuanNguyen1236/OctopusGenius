import 'dart:ui';

import 'package:firebase_auth/firebase_auth.dart';
import 'package:flutter/material.dart';
import 'package:flutter/src/widgets/container.dart';
import 'package:flutter/src/widgets/framework.dart';
import 'package:octopusgenius/create_account1.dart';
import 'package:octopusgenius/forgot_password1.dart';
import 'package:octopusgenius/home.dart';

class Login extends StatefulWidget {
  const Login({super.key});

  @override
  State<Login> createState() => LoginState();
}

class LoginState extends State<Login> {
  TextEditingController txtEmail = TextEditingController();
  TextEditingController txtPass = TextEditingController();
  final _auth = FirebaseAuth.instance;
  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('images/signin.png'),
          fit: BoxFit.cover,
        ),
      ),
      child: Scaffold(
        backgroundColor: Colors.transparent,
        body: Center(
          child: Stack(
            children: [
              SingleChildScrollView(
                child: Container(
                  padding: EdgeInsets.only(
                    top: MediaQuery.of(context).size.height * 0.52,
                  ),
                  child: Column(
                    children: [
                      IconButton(
                        onPressed: () {},
                        icon: Icon(Icons.login),
                      ),
                      Container(
                        width: 350,
                        child: Column(
                          children: [
                            TextField(
                              controller: txtEmail,
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Username',
                                prefixIcon: Icon(
                                  Icons.person,
                                  color: Color.fromARGB(255, 40, 3, 105),
                                ),
                                border: OutlineInputBorder(
                                  borderRadius: BorderRadius.circular(10),
                                ),
                              ),
                            ),
                            SizedBox(
                              height: 5,
                            ),
                            TextField(
                              controller: txtPass,
                              obscureText: true,
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Password',
                                prefixIcon: Icon(
                                  Icons.key_off_outlined,
                                  color: Color.fromARGB(255, 40, 3, 150),
                                ),
                                border: OutlineInputBorder(
                                  borderRadius: BorderRadius.circular(10),
                                ),
                              ),
                            ),
                          ],
                        ),
                      ),
                      Container(
                        padding: EdgeInsets.only(top: 10),
                        child: Column(
                          children: [
                            Container(
                              width: 300,
                              height: 60,
                              child: MaterialButton(
                                color: Color.fromARGB(255, 95, 44, 183),
                                onPressed: () async {
                                  try {
                                    final _user =
                                        _auth.signInWithEmailAndPassword(
                                            email: txtEmail.text,
                                            password: txtPass.text);
                                    _auth.authStateChanges().listen((event) {
                                      if (event != null) {
                                        txtEmail.clear();
                                        txtPass.clear();
                                        Navigator.push(
                                          context,
                                          MaterialPageRoute(
                                            builder: (context) => home(),
                                          ),
                                        );
                                      } else {
                                        final snackBar = SnackBar(
                                            content: Text(
                                                'Email hoặc mật khẩu không hợp đúng'));
                                        ScaffoldMessenger.of(context)
                                            .showSnackBar(snackBar);
                                      }
                                    });
                                  } catch (e) {
                                    final snackBar = SnackBar(
                                        content: Text('Lỗi kêt nối dữ liệu'));
                                    ScaffoldMessenger.of(context)
                                        .showSnackBar(snackBar);
                                  }
                                },
                                child: Text(
                                  'Đăng nhập',
                                  style: TextStyle(
                                    color: Color.fromARGB(255, 255, 255, 255),
                                    fontSize: 20,
                                  ),
                                ),
                                shape: RoundedRectangleBorder(
                                  borderRadius: BorderRadius.circular(
                                    30.0,
                                  ),
                                ),
                              ),
                            ),
                            SizedBox(
                              height: 10,
                            ),
                            Container(
                              width: 300,
                              height: 50,
                              child: MaterialButton(
                                color: Color.fromARGB(255, 255, 255, 255),
                                onPressed: () {
                                  Navigator.push(
                                    context,
                                    MaterialPageRoute(
                                      builder: (context) => create_account1(),
                                    ),
                                  ).then((value) {
                                    if (value != null) {
                                      final snackBar =
                                          SnackBar(content: Text(value));
                                      ScaffoldMessenger.of(context)
                                          .showSnackBar(snackBar);
                                    }
                                  });
                                },
                                child: Text(
                                  'Sign up',
                                  style: TextStyle(
                                    color: Color.fromARGB(255, 40, 3, 150),
                                    fontSize: 20,
                                  ),
                                ),
                                shape: RoundedRectangleBorder(
                                  borderRadius: BorderRadius.circular(
                                    30.0,
                                  ),
                                ),
                              ),
                            ),
                            Container(
                              width: 300,
                              child: MaterialButton(
                                onPressed: () {
                                  Navigator.push(
                                    context,
                                    MaterialPageRoute(
                                      builder: (context) => forgot_password1(),
                                    ),
                                  );
                                },
                                child: Text(
                                  'Forgot password',
                                  style: TextStyle(
                                      color: Color.fromARGB(255, 72, 51, 209)),
                                ),
                                shape: RoundedRectangleBorder(
                                  borderRadius: BorderRadius.circular(
                                    30.0,
                                  ),
                                ),
                              ),
                            ),
                          ],
                        ),
                      )
                    ],
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
