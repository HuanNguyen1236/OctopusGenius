import 'dart:math';

import 'package:flutter/material.dart';
import 'package:octopusgenius/home.dart';
import 'package:octopusgenius/login.dart';
import 'package:octopusgenius/profile1.dart';
import 'package:octopusgenius/setting_privacy1.dart';

class friend extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return friendstate();
  }
}

class friendstate extends State {
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
      child: DefaultTabController(
        length: 2,
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
                                          builder: (context) => profile1(),
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
                                Icons.history,
                                size: 30,
                                color: Colors.white,
                              ),
                              SizedBox(
                                width: 20,
                              ),
                              Text(
                                'Friend',
                                style: TextStyle(
                                    fontSize: 20,
                                    color: Colors.white,
                                    fontWeight: FontWeight.bold),
                              ),
                            ],
                          ),
                        ),
                        Container(
                          child: TabBar(
                              indicator: BoxDecoration(
                                color: Color.fromARGB(255, 201, 184, 232),
                              ),
                              tabs: [
                                Tab(
                                  child: Column(
                                    children: [
                                      Icon(
                                        Icons.type_specimen,
                                        color: Color.fromARGB(255, 40, 3, 105),
                                      ),
                                      Text(
                                        'Field',
                                        style: TextStyle(
                                          color:
                                              Color.fromARGB(255, 40, 3, 105),
                                        ),
                                      ),
                                    ],
                                  ),
                                ),
                                Tab(
                                  child: Container(
                                    child: Column(
                                      children: [
                                        Image(
                                          image: AssetImage(
                                            'icons/star.png',
                                          ),
                                          width: 40,
                                        ),
                                      ],
                                    ),
                                  ),
                                ),
                              ]),
                        ),
                        Expanded(
                          child: TabBarView(children: [
                            //Field---------------------------------------------------------------------
                            Center(
                              child: ListView(
                                children: [
                                  //Basic----------------------------------------------------------------------
                                  Container(
                                    height: 100,
                                    color: Color.fromARGB(255, 40, 3, 105),
                                    child: MaterialButton(
                                      onPressed: () {},
                                      child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.spaceBetween,
                                        children: [
                                          Row(
                                            mainAxisAlignment:
                                                MainAxisAlignment.center,
                                            children: [
                                              CircleAvatar(
                                                child: Icon(Icons.person),
                                                radius: 30,
                                              ),
                                              Text(
                                                'Username',
                                                style: TextStyle(
                                                  fontSize: 20,
                                                  color: Colors.white,
                                                  fontWeight: FontWeight.bold,
                                                ),
                                              ),
                                            ],
                                          ),
                                          Column(
                                            mainAxisAlignment:
                                                MainAxisAlignment.center,
                                            children: [
                                              Row(
                                                children: [
                                                  Image(
                                                    image: AssetImage(
                                                      'icons/star.png',
                                                    ),
                                                    width: 35,
                                                  ),
                                                  SizedBox(
                                                    width: 10,
                                                  ),
                                                  Text(
                                                    '100',
                                                    style: TextStyle(
                                                      fontSize: 20,
                                                      color: Colors.white,
                                                      fontWeight:
                                                          FontWeight.bold,
                                                    ),
                                                  ),
                                                ],
                                              ),
                                            ],
                                          ),
                                        ],
                                      ),
                                    ),
                                  ),
                                  SizedBox(
                                    height: 10,
                                  ),
                                  SizedBox(
                                    height: 50,
                                  )
                                ],
                              ),
                            ),
                            //star----------------------------------------------------------------------
                            Center(
                              child: ListView(
                                children: [
                                  //Basic----------------------------------------------------------------------
                                  Container(
                                    height: 100,
                                    color: Color.fromARGB(255, 40, 3, 105),
                                    child: MaterialButton(
                                      onPressed: () {},
                                      child: Row(
                                        mainAxisAlignment:
                                            MainAxisAlignment.spaceBetween,
                                        children: [
                                          Row(
                                            mainAxisAlignment:
                                                MainAxisAlignment.center,
                                            children: [
                                              CircleAvatar(
                                                child: Icon(Icons.person),
                                                radius: 30,
                                              ),
                                              Text(
                                                'Username',
                                                style: TextStyle(
                                                  fontSize: 20,
                                                  color: Colors.white,
                                                  fontWeight: FontWeight.bold,
                                                ),
                                              ),
                                            ],
                                          ),
                                          Column(
                                            mainAxisAlignment:
                                                MainAxisAlignment.center,
                                            children: [
                                              Row(
                                                children: [
                                                  Image(
                                                    image: AssetImage(
                                                      'icons/star.png',
                                                    ),
                                                    width: 35,
                                                  ),
                                                  SizedBox(
                                                    width: 10,
                                                  ),
                                                  Text(
                                                    '100',
                                                    style: TextStyle(
                                                      fontSize: 20,
                                                      color: Colors.white,
                                                      fontWeight:
                                                          FontWeight.bold,
                                                    ),
                                                  ),
                                                ],
                                              ),
                                            ],
                                          ),
                                        ],
                                      ),
                                    ),
                                  ),
                                  SizedBox(
                                    height: 10,
                                  ),
                                  SizedBox(
                                    height: 50,
                                  )
                                ],
                              ),
                            ),
                          ]),
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
          floatingActionButtonLocation:
              FloatingActionButtonLocation.centerDocked,
          bottomNavigationBar: BottomAppBar(
            shape: CircularNotchedRectangle(),
            child: Container(
              height: 70,
            ),
          ),
        ),
      ),
    );
  }
}
