import 'package:flutter/material.dart';
import 'package:octopusgenius/setting_privacy2.dart';

class setting_privacy1 extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return setting_privacy1state();
  }
}

class setting_privacy1state extends State {
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
                          'Setting privacy',
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
                            TextField(
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Email',
                                prefixIcon: Icon(
                                  Icons.email_outlined,
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
                              decoration: InputDecoration(
                                fillColor: Colors.white,
                                filled: true,
                                hintText: 'Username',
                                prefixIcon: Icon(
                                  Icons.person_outlined,
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
                                hintText: 'Password',
                                prefixIcon: Icon(
                                  Icons.key_outlined,
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
                                hintText: 'Confirmation password',
                                prefixIcon: Icon(
                                  Icons.key,
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
                                  builder: (context) => setting_privacy2(),
                                ),
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
