import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:octopusgenius/forgot_password3.dart';

class forgot_password2 extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return forgot_password2state();
  }
}

class forgot_password2state extends State {
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
        backgroundColor: Colors.transparent,
        body: Center(
          child: Stack(
            children: [
              SingleChildScrollView(
                child: Container(
                  padding: EdgeInsets.only(
                    top: MediaQuery.of(context).size.height * 0.2,
                  ),
                  child: Column(
                    children: [
                      Padding(
                        padding: const EdgeInsets.only(bottom: 30, right: 170),
                        child: Text(
                          'Forgot password',
                          style: TextStyle(
                            fontSize: 30,
                            fontWeight: FontWeight.bold,
                            color: Color.fromARGB(255, 40, 3, 150),
                          ),
                        ),
                      ),
                      Container(
                        width: 350,
                        child: Column(
                          children: [
                            SizedBox(
                              height: 5,
                            ),
                            TextField(
                              obscureText: true,
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Password',
                                prefixIcon: Icon(
                                  Icons.key,
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
                            TextField(
                              obscureText: true,
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Confirmation Password',
                                prefixIcon: Icon(
                                  Icons.key_off,
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
                      Padding(
                        padding: const EdgeInsets.only(top: 30),
                        child: Container(
                          width: 300,
                          height: 50,
                          child: MaterialButton(
                            color: Color.fromARGB(255, 255, 255, 255),
                            onPressed: () {
                              Navigator.push(
                                context,
                                MaterialPageRoute(
                                    builder: (context) => forgot_password3()),
                              );
                            },
                            child: Text(
                              'Next',
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
