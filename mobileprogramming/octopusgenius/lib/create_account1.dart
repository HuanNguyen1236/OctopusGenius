import 'package:firebase_auth/firebase_auth.dart';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/create_account2.dart';
import 'package:octopusgenius/home.dart';

class create_account1 extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return create_account1state();
  }
}

class create_account1state extends State {
  TextEditingController txtEmail = TextEditingController();
  TextEditingController txtPass = TextEditingController();
  final _auth = FirebaseAuth.instance;
  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('images/account.png'),
          fit: BoxFit.cover,
        ),
      ),
      child: Scaffold(
        appBar: PreferredSize(
          child: Opacity(
            opacity: 0.5,
            child: AppBar(
              title: const Text(
                "Create account",
                style: TextStyle(
                  fontSize: 25,
                ),
              ),
              actions: <Widget>[],
              backgroundColor: Color.fromARGB(255, 40, 3, 105),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.only(
                  bottomRight: Radius.circular(40),
                ),
              ),
            ),
          ),
          preferredSize: Size.fromHeight(80),
        ),
        backgroundColor: Colors.transparent,
        body: Center(
          child: Stack(
            children: [
              SingleChildScrollView(
                child: Container(
                  padding: EdgeInsets.only(
                    top: MediaQuery.of(context).size.height * 0.1,
                  ),
                  child: Column(
                    children: [
                      Container(
                        width: 350,
                        child: Column(
                          children: [
                            TextField(
                              controller: txtEmail,
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Email',
                                prefixIcon: Icon(
                                  Icons.email,
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
                              obscureText: true,
                              controller: txtPass,
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Password',
                                prefixIcon: Icon(
                                  Icons.phone,
                                  color: Color.fromARGB(255, 40, 3, 150),
                                ),
                                border: OutlineInputBorder(
                                  borderRadius: BorderRadius.circular(10),
                                ),
                              ),
                            ),
                            SizedBox(
                              height: 5,
                            ),
                          ],
                        ),
                      ),
                      Padding(
                        padding: const EdgeInsets.only(top: 30),
                        child: Container(
                          width: 300,
                          height: 50,
                          child: MaterialButton(
                            color: Color.fromARGB(255, 255, 255, 255),
                            onPressed: () async {
                              try {
                                final newUser =
                                    _auth.createUserWithEmailAndPassword(
                                        email: txtEmail.text,
                                        password: txtPass.text);
                                if (newUser != null) {
                                  Navigator.pop(context, 'Đăng kí thành công!');
                                } else {
                                  final snackBar = SnackBar(
                                    content: Text('Tài khoản này không hợp lệ'),
                                  );
                                  ScaffoldMessenger.of(context)
                                      .showSnackBar(snackBar);
                                }
                              } catch (e) {
                                final snackBar = SnackBar(
                                  content: const Text('Có lỗi xảy ra!'),
                                );
                                ScaffoldMessenger.of(context)
                                    .showSnackBar(snackBar);
                              }
                              // Navigator.push(
                              //   context,
                              //   MaterialPageRoute(
                              //     builder: (context) => home(),
                              //   ),
                              // );
                            },
                            child: Text(
                              'Đăng kí',
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
                      ),
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
