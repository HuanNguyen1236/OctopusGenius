import 'dart:math';

import 'package:flutter/material.dart';
import 'package:octopusgenius/history.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/login.dart';
import 'package:octopusgenius/profile1.dart';
import 'package:octopusgenius/setting_privacy1.dart';

class profile1 extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return profile1state();
  }
}

class profile1state extends State {
  List<String> contents = [
    'Edit profile',
    'History',
    'Setting privacy',
    'Sign out',
  ];

  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        image: DecorationImage(
          image: AssetImage('images/profile.png'),
          fit: BoxFit.cover,
        ),
      ),
      child: Scaffold(
        backgroundColor: Colors.transparent,
        body: Center(
          child: Stack(
            children: [
              Padding(
                padding: const EdgeInsets.only(top: 40),
                child: Container(
                  child: Column(
                    children: [
                      Column(
                        children: [
                          Row(
                            children: [
                              IconButton(
                                onPressed: () {
                                  Navigator.pop(context);
                                },
                                icon: Icon(
                                  Icons.arrow_back,
                                  color: Color.fromARGB(255, 199, 199, 199),
                                  size: 30,
                                ),
                              ),
                            ],
                          ),
                          Row(
                            children: [
                              Padding(
                                padding: const EdgeInsets.only(left: 20),
                                child: CircleAvatar(
                                  backgroundColor: Colors.grey,
                                  radius: 75,
                                ),
                              )
                            ],
                          )
                        ],
                      ),
                      Row(
                        mainAxisAlignment: MainAxisAlignment.spaceBetween,
                        children: [
                          Text(
                            'Username',
                            style: TextStyle(
                              color: Colors.red,
                              fontSize: 40,
                              fontWeight: FontWeight.bold,
                            ),
                          ),
                          PopupMenuButton(
                              color: Color.fromARGB(255, 40, 3, 105),
                              icon: Icon(Icons.menu),
                              iconSize: 50,
                              itemBuilder: (context) {
                                return contents
                                    .map(
                                      (e) => PopupMenuItem<String>(
                                        value: e,
                                        child: Text(
                                          e,
                                          style: TextStyle(
                                            color: Colors.white,
                                            fontSize: 25,
                                          ),
                                        ),
                                      ),
                                    )
                                    .toList();
                              },
                              onSelected: (value) {
                                switch (value) {
                                  case 'Edit profile':
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(
                                        builder: (context) => profile1(),
                                      ),
                                    );
                                    break;
                                  case 'History':
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(
                                        builder: (context) => history(),
                                      ),
                                    );
                                    break;
                                  case 'Setting privacy':
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(
                                        builder: (context) =>
                                            setting_privacy1(),
                                      ),
                                    );
                                    break;
                                  case 'Sign out':
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(
                                        builder: (context) => Login(),
                                      ),
                                    );
                                    break;
                                }
                              }),
                        ],
                      ),
                      Container(
                          color: Color.fromARGB(255, 40, 3, 105),
                          width: double.infinity,
                          height: 60,
                          child: Row(
                            children: [
                              SizedBox(
                                width: 20,
                              ),
                              Icon(
                                Icons.replay,
                                size: 30,
                                color: Colors.white,
                              ),
                              SizedBox(
                                width: 20,
                              ),
                              Text(
                                'Edit profile',
                                style: TextStyle(
                                    fontSize: 20,
                                    color: Colors.white,
                                    fontWeight: FontWeight.bold),
                              ),
                            ],
                          )),
                      SizedBox(
                        height: 20,
                      ),
                      Expanded(
                        child: ListView(
                          children: [
                            ClipRRect(
                              child: Container(
                                color: Color.fromARGB(255, 228, 214, 249),
                                height: 60,
                                width: double.infinity,
                                child: Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  children: [
                                    Icon(Icons.score),
                                    SizedBox(
                                      width: 20,
                                    ),
                                    Text('High Score')
                                  ],
                                ),
                              ),
                            ),
                            SizedBox(
                              height: 10,
                            ),
                            ClipRRect(
                              child: Container(
                                color: Color.fromARGB(255, 228, 214, 249),
                                height: 60,
                                width: double.infinity,
                                child: Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  children: [
                                    Icon(Icons.score),
                                    SizedBox(
                                      width: 20,
                                    ),
                                    Text('High Score')
                                  ],
                                ),
                              ),
                            ),
                            SizedBox(
                              height: 10,
                            ),
                            ClipRRect(
                              child: Container(
                                color: Color.fromARGB(255, 228, 214, 249),
                                height: 60,
                                width: double.infinity,
                                child: Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  children: [
                                    Icon(Icons.score),
                                    SizedBox(
                                      width: 20,
                                    ),
                                    Text('High Score')
                                  ],
                                ),
                              ),
                              borderRadius: BorderRadius.circular(0),
                            ),
                            SizedBox(
                              height: 10,
                            ),
                            ClipRRect(
                              child: Container(
                                color: Color.fromARGB(255, 228, 214, 249),
                                height: 60,
                                width: double.infinity,
                                child: Row(
                                  mainAxisAlignment: MainAxisAlignment.start,
                                  children: [
                                    Icon(Icons.score),
                                    SizedBox(
                                      width: 20,
                                    ),
                                    Text('High Score')
                                  ],
                                ),
                              ),
                            ),
                            SizedBox(
                              height: 20,
                            ),
                            ClipRRect(
                              child: Container(
                                height: 60,
                                color: Color.fromARGB(255, 108, 37, 222),
                                child: MaterialButton(
                                  onPressed: () {},
                                  child: Text(
                                    'Save',
                                    style: TextStyle(
                                      color: Colors.white,
                                      fontSize: 25,
                                    ),
                                  ),
                                ),
                              ),
                              borderRadius: BorderRadius.circular(50),
                            ),
                            SizedBox(
                              height: 50,
                            )
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
        floatingActionButton: Container(
          width: 70,
          child: SizedBox(
            height: 100,
            child: FloatingActionButton(
              child: Icon(
                Icons.home,
                size: 40,
              ),
              backgroundColor: Color.fromARGB(255, 40, 3, 105),
              onPressed: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => home(),
                  ),
                );
              },
            ),
          ),
        ),
        floatingActionButtonLocation: FloatingActionButtonLocation.centerDocked,
        bottomNavigationBar: BottomAppBar(
          shape: CircularNotchedRectangle(),
          child: Container(
            height: 70,
          ),
        ),
      ),
    );
  }
}
